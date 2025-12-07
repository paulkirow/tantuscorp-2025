<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>@yield('title', 'Tantus Corporation')</title>

<link rel="canonical" href="@yield('canonical', url()->current())" />
<meta name="description" content="@yield('meta_description', 'Industrial chilling systems, central chillers, portable chillers, pumping stations, reservoirs, towers, and temperature control units by Tantus Corporation.')" />

<meta property="og:type" content="website" />
<meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title')) ?: 'Tantus Corporation')" />
<meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description')) ?: 'Industrial chilling systems and cooling solutions by Tantus Corporation.')" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="@yield('og_image', asset('thermalcare.jpg'))" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('og_title')) ?: (trim($__env->yieldContent('title')) ?: 'Tantus Corporation'))" />
<meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('og_description')) ?: (trim($__env->yieldContent('meta_description')) ?: 'Industrial chilling systems and cooling solutions by Tantus Corporation.'))" />
<meta name="twitter:image" content="@yield('twitter_image', trim($__env->yieldContent('og_image')) ?: asset('thermalcare.jpg'))" />

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@vite(['resources/js/app.js', 'resources/css/theme.css', 'resources/css/theme-elements.css'])
@vite('resources/js/theme.init.js')
@stack('head-includes')

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet" />

<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Tantus Corp" />
<link rel="manifest" href="/site.webmanifest" />
