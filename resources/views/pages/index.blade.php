<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.head')
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
                                    <nav class="collapse px-3-5">
                                        <ul class="nav nav-pills" id="mainNav">
                                            @include('components.header-links')
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
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
                <div
                    class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0"
                    style="background-image: url(construction/slides/slide-1.jpg); background-size: cover; background-position: center;"
                >
                </div>
                <div class="container position-relative z-index-1 h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg-9 col-xl-8 position-relative mx-auto mt-5 pt-5">
                            <h1 class="position-relative text-color-light font-weight-bold custom-big-text-style-1 text-start text-lg-end pt-4 mt-5">
                                <span
                                    class="position-absolute bottom-100 left-0 transform3dy-p50 w-100 pt-4 ms-0"
                                >
                                    <span
                                        class="d-inline-flex custom-outline-text-style-1 text-2 text-center"
                                    >
                                        BUILDING
                                    </span>
                                </span>
                                BUILDING<br>
                                DREAMS
                                <span class="position-absolute top-100 left-0 transform3dy-n50 w-100 pt-4 ms-0">
                                    <span
                                        class="d-inline-flex custom-outline-text-style-1 text-2 text-center"
                                    >
                                        DREAMS
                                    </span>
                                </span>
                            </h1>
                        </div>
                    </div>
                    <div class="position-absolute left-100pct bottom-0 transform3dx-n50 w-75 ms-5">
                        <img src="{{ asset('/construction/slides/slide-1-engineer.png') }}"
                             class="img-fluid mw-100 w-auto" alt="Engineer Image"/>
                    </div>
                    <p
                        class="position-absolute bottom-15 right-0 text-color-light font-weight-bold text-5-5 line-height-3 text-end pb-0 pb-lg-5 mb-0 d-none d-sm-block"
                    >
                        <span
                            class="d-block position-relative z-index-1 pb-5 ps-lg-3 mb-5-5"
                        >
                            Cooling System Solutions
                        </span>
                        <span class="custom-svg-position-1">
                            <svg class="svg-fill-color-primary mt-1"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 859.45 88.44" xml:space="preserve"
                                 preserveAspectRatio="none">
                                <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
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
                        <line stroke="currentColor" stroke-dasharray="8" stroke-width="1" x1="14.75" y1="132.9" x2="133.81" y2="12.05"/>
                    </svg>
                </div>
                <div class="col-lg-6">
                    <p class="font-weight-medium text-3-5">
                        Whether you are setting up a new facility, expanding or retro-fitting an existing facility, every application has its own unique requirement.
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
                                 src="construction/icons/snowflake.svg" alt="" />
                            <div class="ps-4">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Central Chilling Systems
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    Custom-designed central chillers that deliver reliable, scalable cooling for demanding industrial environments.
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
                                 src="construction/icons/pushcart.svg" alt="" />
                            <div class="ps-4">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Portable Chillers
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    Air- and water-cooled portable chillers built for flexibility, efficiency, and ease of integration.
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
                                 src="construction/icons/faucet.svg" alt="" />
                            <div class="ps-3">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Pumping Stations & Reservoirs
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    Compact, efficient fluid handling systems tailored to your facility’s cooling requirements.
                                </p>
                                <a href="/pumps_and_reservoirs"
                                   class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none align-items-center">
                                    View More >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">
                        <div class="d-flex">
                            <img class="flex-0-0-auto" width="60" height="60"
                                 src="construction/icons/tower.svg" alt="" />
                            <div class="ps-4">
                                <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">
                                    Heat Exchangers & Cooling Towers
                                </h3>
                                <p class="font-weight-light text-3-5 mb-3-5">
                                    High-performance heat exchange and tower solutions for process temperature control and energy savings.
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
<script src="vendor/plugins.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="theme.js"></script>

<!-- Theme Initialization Files -->
<script src="theme.init.js"></script>
</body>
</html>
