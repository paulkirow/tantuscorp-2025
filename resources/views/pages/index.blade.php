<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @section('title', 'Industrial Chilling Systems | Tantus Corporation')
    @section('meta_description', 'Industrial chilling systems, central and portable chillers, pumping stations, reservoirs, cooling towers, and temperature control units tailored to your facility.')
    @section('og_image', asset('thermalcare.jpg'))
    @include('layouts.head')

    @push('head-includes')
        @php
            $orgSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => 'Tantus Corporation',
                'url' => 'https://www.tantuscorp.com/',
                'logo' => asset('logo.svg'),
                'telephone' => '+1-647-258-9657',
            ];
        @endphp
        <script type="application/ld+json">
            {!! json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
        </script>
    @endpush
    <!-- Vendor CSS -->
    @vite('resources/css/vendor/simple-line-icons.css')
    {{--    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">--}}
    {{--    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">--}}
    {{--    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">--}}

    <!-- Theme CSS -->
    {{--    <link rel="stylesheet" href="css/theme.css">--}}
    {{--    <link rel="stylesheet" href="css/theme-elements.css">--}}
    {{--    <link rel="stylesheet" href="css/theme-blog.css">--}}
    {{--    <link rel="stylesheet" href="css/theme-shop.css">--}}

    <!-- Demo CSS -->
    @vite('resources/css/demo-construction.css')

    <!-- Skin CSS -->
    @vite('resources/css/skin-construction.css')
    <style>
        /* Background video utility styles */
        .bg-video-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            /* Fallback background image if video cannot play */
            background-image: url('construction/slides/slide-1.jpg');
            background-size: cover;
            background-position: center;
        }
        .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .bg-video-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.35); /* subtle dark overlay for readability */
            pointer-events: none;
        }
    </style>
</head>
<body data-plugin-scroll-spy data-plugin-options="{'target': '#sidebar'}">

<div class="body">
    <header
        id="header"
        class="header-transparent header-semi-transparent header-semi-transparent-light"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 1, 'stickySetTop': '1'}"
    >
        <div class="header-body border-0">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo custom-header-logo">
                                <img class="logo" alt="Tantus Corporation" height="42"
                                     src="{{ asset('logo-light.svg') }}">
                                <a href="/">
                                    <img class="logo-sticky" alt="Tantus Corporation" height="42"
                                         src="{{ asset('logo.svg') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links order-3 order-lg-1">
                                <div
                                    class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1"
                                >
                                    <nav id="primaryNav" class="collapse px-3-5">
                                        <ul class="nav nav-pills" id="mainNav">
                                            @include('components.header-links')
                                        </ul>
                                    </nav>
                                </div>
                                <button type="button" class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target="#primaryNav" aria-controls="primaryNav" aria-label="Toggle navigation">
                                    <!-- Inline SVG hamburger icon (no external icon font required) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <rect x="3" y="6" width="18" height="2" rx="1"></rect>
                                        <rect x="3" y="11" width="18" height="2" rx="1"></rect>
                                        <rect x="3" y="16" width="18" height="2" rx="1"></rect>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">

        <div
            class="nav-style-diamond nav-with-transparency nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0"
            style="height: 700px;"
        >
            <div class="position-relative h-100">
                <!-- Background video with image fallback -->
                <div class="bg-video-wrapper">
                    <video
                        id="heroBgVideo"
                        class="bg-video"
                        autoplay
                        muted
                        playsinline
                        preload="auto"
                        loop
                        poster="{{ asset('construction/slides/slide-1.jpg') }}"
                    >
                        <source src="{{ asset('index.loop.mp4') }}" type="video/mp4">
                        <!-- If the browser can't play the video source, it will show the poster and the wrapper's background image -->
                    </video>
                    <div class="bg-video-overlay"></div>
                </div>
                <div class="container position-relative z-index-1 h-100">
                    <div class="row align-items-center h-100 pt-5">
                        <div class="col-xl-8 position-relative mx-auto mt-5 pt-5">
                            <h1 class="position-relative text-color-light font-weight-bold custom-big-text-style-1 text-start text-lg-end pt-4 mt-5">
                                <span
                                    class="position-absolute bottom-100 left-0 transform3dy-p50 w-100 pt-4 ms-0"
                                >
                                    <span
                                        class="d-inline-flex custom-outline-text-style-1 text-2 text-center"
                                        aria-hidden="true"
                                    >
                                        INDUSTRIAL
                                    </span>
                                </span>
                                INDUSTRIAL<br>
                                CHILLING
                                <span class="position-absolute top-100 left-0 transform3dy-n50 w-100 pt-4 ms-0">
                                    <span
                                        class="d-inline-flex custom-outline-text-style-1 text-2 text-center"
                                        aria-hidden="true"
                                    >
                                        CHILLING
                                    </span>
                                </span>
                            </h1>
                        </div>
                    </div>
                    <p class="position-absolute bottom-15 right-0 text-color-light font-weight-bold text-5-5 line-height-3 text-end pb-0 pb-lg-5 mb-0 d-none d-sm-block">
                        <span class="d-block line-height-1 position-relative z-index-1 pb-5 ps-lg-3 mb-5-5 appear-animation animated fadeInLeftShorterPlus appear-animation-visible">
                            Cooling System Solutions
                        </span>
                        <span class="custom-svg-position-1">
                            <svg
                                class="svg-fill-color-primary" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve"
                                preserveAspectRatio="none">
                                <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79"></polyline>
                            </svg>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="container py-5 my-3" style="z-index: 1;">
            <div class="row justify-content-between align-items-center flex-lg-nowrap gy-3">
                <div class="col-lg-4">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5">
                        Who We Are
                    </h2>
                    <p class="text-4 font-weight-light mb-0">
                        Tantus Corporation are the experts in providing cost-effective cooling solutions.
                        We design and supply cooling systems specific to your needs.
                    </p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg width="145" height="147" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 145.42 147.12"
                         xml:space="preserve" stroke-miter-limit="10" stroke-dasharray="7">
                        <line stroke="currentColor" stroke-dasharray="8" stroke-width="1" x1="14.75" y1="132.9"
                              x2="133.81" y2="12.05"/>
                    </svg>
                </div>
                <div class="col-lg-6">
                    <p class="font-weight-medium text-3-5">
                        Whether you are setting up a new facility, expanding or retro-fitting an existing facility,
                        every application has its own unique requirement.
                        We can help you find the right solution based on your needs.
                    </p>
                    <a
                        href="/about"
                        class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none align-items-center"
                    >
                        View More >
                    </a>
                </div>
            </div>
        </div>

        <section class="section position-relative overflow-hidden border-0 m-0">
            <div class="container pt-5-5 pb-5 mb-3">
                <div class="row mb-5-5">
                    <div class="col">
                        <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5">
                            Products
                        </h2>
                        <p class="text-4 font-weight-light">
                            Engineered for performance. Built to last.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="d-flex">
                            <img class="flex-0-0-auto" width="60" height="60"
                                 src="construction/icons/snowflake.svg" alt=""/>
                            <div class="ps-4">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Central Chilling Systems
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    Custom-designed central chillers that deliver reliable, scalable cooling for
                                    demanding industrial environments.
                                </p>
                                <a href="/chillers"
                                   class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none align-items-center">
                                    View More >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="d-flex">
                            <img class="flex-0-0-auto" width="60" height="60"
                                 src="construction/icons/pushcart.svg" alt=""/>
                            <div class="ps-4">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Portable Chillers
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    Air- and water-cooled portable chillers built for flexibility, efficiency, and ease
                                    of integration.
                                </p>
                                <a href="/portables"
                                   class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none align-items-center">
                                    View More >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="d-flex">
                            <img class="flex-0-0-auto svg-stroke-color-dark" width="70" height="70"
                                 src="construction/icons/faucet.svg" alt=""/>
                            <div class="ps-3">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Pumping Stations & Reservoirs
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    Compact, efficient fluid handling systems tailored to your facility’s cooling
                                    requirements.
                                </p>
                                <a href="/pumps-and-reservoirs"
                                   class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none align-items-center">
                                    View More >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="d-flex">
                            <img class="flex-0-0-auto" width="60" height="60"
                                 src="construction/icons/tower.svg" alt=""/>
                            <div class="ps-4">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Heat Exchangers & Cooling Towers
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    High-performance heat exchange and tower solutions for process temperature control
                                    and energy savings.
                                </p>
                                <a href="/tower"
                                   class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none align-items-center">
                                    View More >
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="position-absolute transform3dy-n50 right-0 pe-5 me-4">
            <div>
                <div class="custom-square-1 bg-primary mb-1"></div>
            </div>
        </div>
        <div class="position-absolute transform3dy-n50 right-15 pe-5 me-5">
            <div>
                <div class="custom-square-1 bg-dark pe-5 me-5 mt-4 mb-5"></div>
            </div>
        </div>
        <div class="position-relative pb-5 d-sm-none d-xl-block">
            <div class="position-absolute transform3dy-n50 left-0">
                <div>
                    <div class="custom-square-1 bg-primary mt-0 mb-5"></div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
</div>

<!-- Vendor -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Theme Base, Components and Settings -->
<script src="theme.js"></script>

<!-- Theme Initialization Files -->
<script src="theme.init.js"></script>

<script>
    // Slow, seamless looping for the hero background video
    (function() {
        const video = document.getElementById('heroBgVideo');
        if (!video) { return; }

        function startSlowLoop() {
            // Very slow playback; adjust to taste
            video.playbackRate = 1;
            video.muted = true; // ensure autoplay works
            try { video.play(); } catch (e) {}
        }

        if (video.readyState >= 2) {
            startSlowLoop();
        } else {
            video.addEventListener('loadeddata', startSlowLoop, { once: true });
        }

        // Keep it looping; if loop attribute fails on some browsers, ensure restart
        video.addEventListener('ended', function() {
            try { video.currentTime = 0; video.play(); } catch (e) {}
        });

        // Pause when page hidden to save CPU
        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                try { video.pause(); } catch (e) {}
            } else {
                startSlowLoop();
            }
        });
    })();
</script>
</body>
</html>
