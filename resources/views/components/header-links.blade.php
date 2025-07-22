@include('components.nav-item', ['item' => [
                            'title' => 'Home',
                            'url' => url('/'),
                        ]])

@include('components.nav-item', ['item' => [
    'title' => 'About Us',
    'url' => url('/about'),
]])

@include('components.nav-item', ['item' => [
    'title' => 'Products',
    'dropdown' => [
        ['title' => 'Product Overview', 'url' => url('/products')],
        ['title' => 'Portables', 'url' => url('/portables')],
        ['title' => 'Central Chillers', 'url' => url('/chillers')],
        ['title' => 'Pumps & Reservoirs', 'url' => url('/pumps_and_reservoirs')],
        ['title' => 'Towers', 'url' => url('/tower')],
        ['title' => 'Temperature Control Units', 'url' => url('/temperature-control-units')],
        ['title' => 'Accessories', 'url' => url('/accessories')],
    ],
]])

@include('components.nav-item', ['item' => [
    'title' => 'Solutions',
    'dropdown' => [
        ['title' => 'Cooling Load Analysis', 'url' => url('/cooling-load-analysis')],
        ['title' => 'Trouble Shooting', 'url' => url('/trouble_shooting')],
        ['title' => 'Energy Audits', 'url' => url('/energy-audits')],
        ['title' => 'Free Cooling', 'url' => url('/free_cooling')],
        ['title' => 'Installation & Start Up', 'url' => url('/installation_and_startup')],
    ],
]])

@include('components.nav-item', ['item' => [
    'title' => 'Contact',
    'url' => url('/contact'),
]])
