#!/usr/bin/env bash
set -euo pipefail

# Scan Blade files for external URLs and test for 404 using curl.
# Requires: grep, awk, sed, curl

ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
VIEWS_DIR="$ROOT_DIR/resources/views"

if [[ ! -d "$VIEWS_DIR" ]]; then
  echo "Views directory not found: $VIEWS_DIR" >&2
  exit 1
fi

mapfile -t files < <(find "$VIEWS_DIR" -type f -name '*.blade.php' | sort)

echo "Starting external URL check (bash)..."
printf "Blade files found: %d\n" "${#files[@]}"

failures=()
url_count=0

# Regex to match http/https URLs
url_regex='https?://[A-Za-z0-9._~:/\-?#\[\]@!$&'"'"'()*+,;=%]+'

for f in "${files[@]}"; do
  # Extract URLs per file
  mapfile -t urls < <(grep -Eo "$url_regex" "$f" | sort -u)
  echo "Scanning $f: ${#urls[@]} URL(s) found"
  if [[ ${#urls[@]} -eq 0 ]]; then
    continue
  fi
  echo
  echo "File: $f"
  for u in "${urls[@]}"; do
    # Skip localhost/dev domains
    host=$(printf '%s\n' "$u" | sed -E 's#https?://([^/]+).*#\1#')
    if [[ "$host" == "localhost" || "$host" == *.local || "$host" == *.test ]]; then
      continue
    fi

    ((url_count++))
    # Try HEAD first
    status=$(curl -s -o /dev/null -w '%{http_code}' -I -L --max-redirs 5 --connect-timeout 5 --retry 1 --retry-delay 0 --retry-max-time 10 "$u" || true)
    if [[ "$status" == "000" || "$status" == "405" || "$status" == "403" ]]; then
      # Fallback to GET
      status=$(curl -s -o /dev/null -w '%{http_code}' -L --max-redirs 5 --connect-timeout 5 --retry 1 --retry-delay 0 --retry-max-time 10 "$u" || true)
    fi
    if [[ "$status" == "404" || "$status" == "000" ]]; then
      echo "  [FAIL] $status -> $u"
      failures+=("$status $u (in $f)")
    else
      echo "  [OK]   $status -> $u"
    fi
    sleep 0.1
  done
done

echo
echo "Summary:"
printf "  Files scanned: %d\n" "${#files[@]}"
printf "  URLs checked:  %d\n" "$url_count"
printf "  Failures:      %d\n" "${#failures[@]}"
for line in "${failures[@]}"; do
  echo "    - $line"
done

if [[ ${#failures[@]} -gt 0 ]]; then
  exit 2
fi
exit 0

