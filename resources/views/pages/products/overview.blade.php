@extends('layouts.layout', [
    'title' => 'Product Overview',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => url('/')],
        ['title' => 'Products', 'url' => url('/products')],
    ],
])

@section('title', 'Industrial Cooling Products | Tantus Corporation')
@section('meta_description', 'Explore industrial cooling products: central chillers, portable chillers, pumping stations, reservoirs, cooling towers, and temperature control units.')

@section('content')
    <div class="row gx-4 gy-5">
        <div class="col-12 pb-3">
            <p>
                Tantus offers a full complement of industrial cooling products,
                engineered to support everything from compact, standalone installations
                to expansive, high-capacity systems.
            </p>
            <p>
                All equipment is customizable to meet the specific performance,
                efficiency, and footprint requirements of your project.
            </p>
        </div>

        {{-- Portable Chillers --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/portables') }}" title="Portable Chillers">
                    <img src="{{ asset('/products/NQA04-05-CPQ.webp') }}" alt="Portable Chillers" class="img-fluid" style="max-width: 80px">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/portables') }}" class="text-decoration-none text-primary">Portable Chillers</a>
                    <small class="text-muted ms-2">1 – 40 TR</small>
                </h5>
                <p class="mb-1 small">Self-contained systems with integrated refrigeration, pumps, and reservoirs—available in air-cooled, water-cooled, or remote condenser designs.</p>
                <a href="https://www.thermalcare.com/portable-chillers/" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Central Chillers --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/chillers') }}" title="Central Chillers">
                    <img src="{{ asset('/products/TC-Dual Circuit-CPQ.webp') }}" alt="Central Chillers" class="img-fluid" style="max-width: 80px">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/chillers') }}" class="text-decoration-none text-primary">Central Chillers</a>
                    <small class="text-muted ms-2">20 – 490 TR</small>
                </h5>
                <p class="mb-1 small">High-capacity cooling solutions with scroll, screw, or oil-free Turbocor compressors. Modular and energy-efficient, ideal for multi-process facilities.</p>
                <a href="https://www.thermalcare.com/central-chillers/" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Pump/Reservoir Systems --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/pumps-and-reservoirs') }}" title="Pump and Reservoir Systems">
                    <img src="{{ asset('/products/PT-CPQ.webp') }}" alt="Pump and Reservoir Systems" class="img-fluid" style="max-width: 80px">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/pumps-and-reservoirs') }}" class="text-decoration-none text-primary">Pump/Reservoir Systems</a>
                    <small class="text-muted ms-2">500 – 6000 Gallons</small>
                </h5>
                <p class="mb-1 small">Custom-built systems in steel, stainless, or fiberglass. Multiple pump configurations available for seamless integration with chillers and towers.</p>
                <a href="https://www.thermalcare.com/pumping-systems/" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Cooling Towers --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/tower') }}" title="Cooling Towers">
                    <img src="{{ asset('/products/FC700-CPQ.webp') }}" alt="Cooling Towers" class="img-fluid" style="max-width: 80px">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/tower') }}" class="text-decoration-none text-primary">Cooling Towers</a>
                    <small class="text-muted ms-2">38 – 1200 TR</small>
                </h5>
                <p class="mb-1 small">Evaporative cooling towers constructed from durable fiberglass. Designed with high-efficiency fill, TEFC motors, and multi-cell configurations.</p>
                <a href="https://www.thermalcare.com/cooling-towers/" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Temperature Control Units --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/temperature-control-units') }}" title="Temperature Control Units">
                    <img src="{{ asset('/products/RQT_Premium-Right-CPQ.webp') }}" alt="Temperature Control Units" class="img-fluid" style="max-width: 80px">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/temperature-control-units') }}" class="text-decoration-none text-primary">Temperature Control Units</a>
                </h5>
                <p class="mb-1 small">Maintain precise temperature with options for water, hot oil, and pressurized systems. Configurable with various pumps, heaters, and valves.</p>
                <a href="https://www.thermalcare.com/temperature-controllers/" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Accessories --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/accessories') }}" title="Accessories">
                    <img src="{{ asset('/products/Water Treatment Group.webp') }}" alt="Accessories" class="img-fluid" style="max-width: 80px">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/accessories') }}" class="text-decoration-none text-primary">Accessories</a>
                </h5>
                <p class="mb-1 small">Enhance system performance with water treatment systems, filtration units, heat exchangers, and more—tailored to your process needs.</p>
                <a href="https://www.thermalcare.com/additional-products/" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>
    </div>
@endsection
