@extends('layouts.layout', [
    'title' => 'Cooling Towers: 22-1350 TR',
    'numBeforeBold' => 2,
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Towers', 'url' => url('/tower')],
    ],
])

@section('content')

    <h2 class="text-primary text-center mb-4">Cooling Towers: 22–1350 TR</h2>
    <p>
        Fiberglass cooling towers are an ideal alternative to metal cooling towers. Water cooling towers are manufactured with corrosion-resistant materials.
        The FC Series cooling towers and FT Series cooling towers are lightweight, require low maintenance, and have an extended life.
    </p>

    <div>
        <div class="d-flex">
            <img src="/tower/tower.13.jpg" alt="FT Series Cooling Tower" class="me-3" width="88" height="87">
            <div>
                <h5 class="text-primary mb-1">FT Series – 22 to 120 tons</h5>
                <p class="mb-1">
                    These lightweight fiberglass cooling towers are designed for long life and low maintenance at a competitive price.
                    FT Series cooling towers are of a counter flow design, carefully engineered with the optimum combination of heat transfer media,
                    uniform air flow and even water distribution.
                </p>
                <a href="http://www.thermalcare.com/cooling_towers/ft-series-cooling-towers.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="d-flex">
            <img src="/tower/templa13.jpg" alt="FC Series Cooling Tower" class="me-3" width="109" height="92">
            <div>
                <h5 class="text-primary mb-1">FC Series – 100 to 240 tons</h5>
                <p class="mb-1">
                    The FC Series cooling towers are designed for outdoor use in industrial manufacturing locations and come with the industry’s best warranty.
                </p>
                <a href="http://www.thermalcare.com/cooling_towers/fc-series-cooling-towers.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="d-flex">
            <div class="me-3 d-flex flex-column align-items-center">
                <img src="/tower/tower.28.gif" alt="BAC 1500 Series Cooling Tower" class="mb-2" width="172" height="95">
                <img src="/tower/tower.14.jpg" alt="BAC 3000 Series Cooling Tower" width="174" height="95">
            </div>
            <div>
                <h5 class="text-primary mb-1">BAC 1500 Series Cooling Tower – 128 to 428 tons</h5>
                <h5 class="text-primary mb-1">BAC 3000 Series Cooling Tower – 220 to 1350 tons</h5>
                <p class="mb-1">
                    BAC Cooling Towers minimize the operating, installation, and maintenance costs associated with both new and replacement cooling tower projects.
                    The Series 1500 delivers independently verified, fully rated thermal performance over a wide range of flow and temperature requirements.
                    Standard design features minimize the costs associated with enclosures, support requirements, electrical service, piping, and rigging.
                </p>
                <a href="http://www.baltimoreaircoil.com/english/products/ct/index.html" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>
    </div>

@endsection
