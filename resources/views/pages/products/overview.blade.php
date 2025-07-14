@extends('layouts.layout', [
    'title' => 'Product Overview',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => url('/')],
        ['title' => 'Products', 'url' => url('/products')],
    ],
])

@section('content')
    <div class="row g-4">
        <div class="col-12 pb-3">
            <p>There is a full complement of products suited for the smallest to the largest projects—ranging from simple self-contained units to large central systems.</p>
        </div>

        {{-- Portable Chillers --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/portables') }}" title="Portable Chillers">
                    <img src="{{ asset('products/prod_pc_sq.jpg') }}" alt="Portable Chillers" class="img-fluid" width="74" height="61">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/portables') }}" class="text-decoration-none text-primary">Portable Chillers</a>
                    <small class="text-muted ms-2">1 – 40 TR</small>
                </h5>
                <p class="mb-1 small">Portable chillers are self-contained air-cooled units as well as water-cooled and remote air-cooled.</p>
                <a href="http://www.thermalcare.com/temperature_controllers/aquatherm-ra-series.htm" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Central Chillers --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/chillers') }}" title="Central Chillers">
                    <img src="{{ asset('products/prod_cc_tsw.gif') }}" alt="Central Chillers" class="img-fluid" width="138" height="84">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/chillers') }}" class="text-decoration-none text-primary">Central Chillers</a>
                    <small class="text-muted ms-2">20 – 490 TR</small>
                </h5>
                <p class="mb-1 small">Scroll, screw, and Turbocore compressors. Available as remote air-cooled or water-cooled, and also as packaged units.</p>
                <a href="http://www.thermalcare.com/temperature_controllers/cra-series.htm" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Pump/Reservoir Systems --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/pumps_and_reservoirs') }}" title="Pump and Reservoir Systems">
                    <img src="{{ asset('products/PumpReservoir.jpg') }}" alt="Pump and Reservoir Systems" class="img-fluid" width="110" height="90">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/pumps_and_reservoirs') }}" class="text-decoration-none text-primary">Pump/Reservoir Systems</a>
                    <small class="text-muted ms-2">500 – 6000 Gallons</small>
                </h5>
                <p class="mb-1 small">Available in mild steel, stainless steel, and fiberglass with many pump configurations.</p>
                <a href="http://www.thermalcare.com/temperature_controllers/oiltherm-ro-series.htm" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Cooling Towers --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/tower') }}" title="Cooling Towers">
                    <img src="{{ asset('products/templa13.jpg') }}" alt="Cooling Towers" class="img-fluid" width="109" height="92">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/tower') }}" class="text-decoration-none text-primary">Cooling Towers</a>
                    <small class="text-muted ms-2">22 – 1350 TR</small>
                </h5>
                <p class="mb-1 small">Fiberglass towers with reservoirs and TEFC motors. BOC single and multi-cell options available up to 1350 TR.</p>
                <a href="http://www.thermalcare.com/temperature_controllers/vactherm-rv-series.htm" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Temperature Control Units --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/temperature_control_units') }}" title="Temperature Control Units">
                    <img src="{{ asset('products/templa14.jpg') }}" alt="Temperature Control Units" class="img-fluid" width="89" height="92">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/temperature_control_units') }}" class="text-decoration-none text-primary">Temperature Control Units</a>
                </h5>
                <p class="mb-1 small">Consistent and dependable performance. Available in water, hot oil, or positive/negative pressure configurations.</p>
                <a href="http://www.thermalcare.com/temperature_controllers/vactherm-rv-series.htm" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>

        {{-- Accessories --}}
        <div class="col-md-6 d-flex">
            <div class="me-3">
                <a href="{{ url('/accessories') }}" title="Accessories">
                    <img src="{{ asset('products/produc3.gif') }}" alt="Accessories" class="img-fluid" width="124" height="81">
                </a>
            </div>
            <div>
                <h5>
                    <a href="{{ url('/accessories') }}" class="text-decoration-none text-primary">Accessories</a>
                </h5>
                <p class="mb-1 small">Water treatment, filtration, blown film coolers, heat exchangers, and more to complement your system.</p>
                <a href="http://www.thermalcare.com/temperature_controllers/vactherm-rv-series.htm" target="_blank" class="btn btn-link p-0 small">Brochures & More Information &gt;</a>
            </div>
        </div>
    </div>
@endsection
