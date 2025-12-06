@include('components.nav-item', ['item' => [
                            'title' => 'Home',
                            'url' => url('/'),
                        ]])

@include('components.nav-item', ['item' => [
    'title' => 'Products',
    'dropdown' => [
        ['title' => 'Product Overview', 'url' => url('/products')],
        ['title' => 'Portables', 'url' => url('/portables')],
        ['title' => 'Central Chillers', 'url' => url('/chillers')],
        ['title' => 'Pumps & Reservoirs', 'url' => url('/pumps-and-reservoirs')],
        ['title' => 'Towers', 'url' => url('/tower')],
        ['title' => 'Temperature Control Units', 'url' => url('/temperature-control-units')],
        ['title' => 'Accessories', 'url' => url('/accessories')],
    ],
]])

@include('components.nav-item', ['item' => [
    'title' => 'Solutions',
    'dropdown' => [
        ['title' => 'Cooling Load Analysis', 'url' => url('/cooling-load-analysis')],
        ['title' => 'Trouble Shooting', 'url' => url('/troubleshooting')],
        ['title' => 'Energy Audits', 'url' => url('/energy-audits')],
        ['title' => 'Free Cooling', 'url' => url('/free-cooling')],
        ['title' => 'Installation & Start Up', 'url' => url('/installation-and-startup')],
    ],
]])

@include('components.nav-item', ['item' => [
    'title' => 'Contact',
    'url' => url('/contact'),
]])
