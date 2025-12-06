#!/usr/bin/env bash
set -euo pipefail

# Inputs and outputs
SRC="public/thermal-care-popup.blurred.flipped.60fps.web.mp4"
OUT_FWD="public/thermal-care-popup.eased.forward.mp4"
OUT_REV="public/thermal-care-popup.eased.reverse.mp4"
OUT_FINAL="public/thermal-care-popup.eased.forward-reverse.loop.mp4"

# Speed params
MIN=0.7      # minimum speed at edges (ease in/out)
TARGET=0.7   # target slow speed during middle
WINDOW=2.0    # seconds for easing windows at start and end

# Verify source exists
if [ ! -f "$SRC" ]; then
  echo "Source not found: $SRC" >&2
  exit 1
fi

# Get duration (seconds)
DUR=$(ffprobe -v error -select_streams v:0 -show_entries stream=duration -of default=noprint_wrappers=1:nokey=1 "$SRC" | awk '{printf "%.6f", $0}')
if [ -z "$DUR" ]; then
  echo "Could not determine video duration for $SRC" >&2
  exit 1
fi

echo "Duration: $DUR s"

# Precompute delta (TARGET - MIN)
DELTA=$(awk -v t="$TARGET" -v m="$MIN" 'BEGIN{printf "%.6f", (t-m)}')

# 1) Forward with easing using inline filter_complex and escaped commas
# Expression uses lt() / gt() to avoid raw < and >, commas escaped with \,
# and PTS*TB for time in seconds inside setpts.
FWD_EXPR="PTS/(if(lt(PTS*TB\\,$WINDOW)\\,$MIN+$DELTA*(PTS*TB/$WINDOW)\\,if(gt(PTS*TB\\,$DUR-$WINDOW)\\,$MIN+$DELTA*(($DUR-PTS*TB)/$WINDOW)\\,$TARGET)))"

echo "Generating forward-eased clip -> $OUT_FWD"
ffmpeg -y -i "$SRC" -an \
  -filter_complex "[0:v]setpts=$FWD_EXPR[vf]" \
  -map "[vf]" -c:v libx264 -preset slow -crf 22 -movflags +faststart "$OUT_FWD"

# 2) Reverse the forward result at 60 fps for smoothness
if [ ! -f "$OUT_FWD" ]; then
  echo "Forward output missing: $OUT_FWD" >&2
  exit 1
fi

echo "Reversing forward clip -> $OUT_REV"
ffmpeg -y -i "$OUT_FWD" -an -vf "reverse,fps=60,format=yuv420p" -c:v libx264 -preset slow -crf 22 -movflags +faststart "$OUT_REV"

# 3) Concatenate forward + reverse into final loop
if [ ! -f "$OUT_REV" ]; then
  echo "Reverse output missing: $OUT_REV" >&2
  exit 1
fi

echo "Concatenating forward + reverse -> $OUT_FINAL"
ffmpeg -y -i "$OUT_FWD" -i "$OUT_REV" -filter_complex "[0:v][1:v]concat=n=2:v=1[outv]" -map "[outv]" -c:v libx264 -preset slow -crf 22 -movflags +faststart "$OUT_FINAL"

echo "Done. Final loop: $OUT_FINAL"
