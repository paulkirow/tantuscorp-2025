<div class="header-column justify-content-end">
    <div class="header-row">
        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-dark header-nav-bottom-line-effect-1 order-2 order-lg-1">
            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                <nav class="collapse">
                    <ul class="nav nav-pills" id="mainNav">
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
                                ['title' => 'Temperature Control Units', 'url' => url('/temperature_control_units')],
                                ['title' => 'Accessories', 'url' => url('/accessories')],
                            ],
                        ]])

                        @include('components.nav-item', ['item' => [
                            'title' => 'Solutions',
                            'dropdown' => [
                                ['title' => 'Cooling Load Analysis', 'url' => url('/cooling_load_analysis')],
                                ['title' => 'Trouble Shooting', 'url' => url('/trouble_shooting')],
                                ['title' => 'Energy Audits', 'url' => url('/energy_audits')],
                                ['title' => 'Free Cooling', 'url' => url('/free_cooling')],
                                ['title' => 'Installation & Start Up', 'url' => url('/installation_and_startup')],
                            ],
                        ]])

                        @include('components.nav-item', ['item' => [
                            'title' => 'Contact',
                            'url' => url('/contact'),
                        ]])
                    </ul>

                </nav>
            </div>
        </div>
    </div>
</div>
