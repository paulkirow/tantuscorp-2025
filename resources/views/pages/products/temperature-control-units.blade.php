@extends('layouts.layout', [
    'title' => 'Temperature Control Units',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'TCU', 'url' => url('/temperature-control-units')],
    ],
])

@section('title', 'Industrial Temperature Control Units (TCUs) | Tantus Corporation')
@section('meta_description', 'Water and hot oil temperature control units with precise PLC controls, pumps, and heaters for reliable industrial process temperature management.')

@section('content')
    <p>
        Thermal Care temperature control units are engineered for precision, reliability, and versatility. Whether you need water, hot oil, or
        positive/negative pressure control, each unit is built to deliver consistent performance across demanding industrial applications.
    </p>

    <div class="row g-4">
        <div class="col-lg-6 d-flex flex-column flex-md-row">
            <img src="{{ asset('/tcu/RQT_Premium-Right-CPQ.webp') }}" alt="RQT Series Temperature Control Units" class="me-md-3 mb-3 object-fit-contain" style="max-height: 160px;">
            <div>
                <h5 class="text-primary mb-1">RQT Series Water Temperature Control Units</h5>
                <p class="mb-1">
                    Compact and user-friendly, RQT units feature high flow pumps with leak-resistant silicon carbide seals and rugged Incoloy
                    heaters. Each unit is equipped with a large operator interface for enhanced control and diagnostics, ensuring dependable
                    operation for mold temperature management.
                </p>
                <a href="http://www.thermalcare.com/aquatherm-rqt-temperature-controller/" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-lg-6 d-flex flex-column flex-md-row">
            <img src="{{ asset('/tcu/ROH 12-24 KW-Right-web.webp') }}" alt="ROH Series Hot Oil Units" class="me-md-3 mb-3 object-fit-contain" style="max-height: 160px;">
            <div>
                <h5 class="text-primary mb-1">ROH Series Hot Oil Temperature Control Units</h5>
                <p class="mb-1">
                    Designed for high-temperature applications up to 575°F (302°C), the ROH Series ensures optimal heat transfer with high
                    velocity oil flow and preheating for reduced viscosity. PLC controls offer programmable start/stop, alarms, and setpoint
                    security.
                </p>
                <a href="http://www.thermalcare.com/roh-series-hot-oil-temperature-control-units/" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-lg-6 d-flex flex-column flex-md-row">
            <img src="{{ asset('/tcu/RVU right-w.webp') }}" alt="RVU Series Pressure Control Units" class="me-md-3 mb-3 object-fit-contain" style="max-height: 160px;">
            <div>
                <h5 class="text-primary mb-1">RVU Series Positive/Negative Pressure Units</h5>
                <p class="mb-1">
                    The RVU Series prevents downtime by maintaining control even with mold or circuit leaks. Its adjustable vacuum system
                    eliminates air intake while optimizing temperature stability at low flow rates—ideal for sensitive processes.
                </p>
                <a href="http://www.thermalcare.com/rvu-series-positive/negative-pressure-temperature-control-units" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-lg-6 d-flex flex-column flex-md-row">
            <img src="{{ asset('/tcu/RMC-std-w.webp') }}" alt="RMC Series Compact Water Units" class="me-md-3 mb-3 object-fit-contain" style="max-height: 160px;">
            <div>
                <h5 class="text-primary mb-1">RMC Series Water Temperature Control Units</h5>
                <p class="mb-1">
                    The compact RMC Series offers full performance in a smaller footprint. Like its larger counterpart, it includes premium
                    components and a user-friendly interface, making it ideal for space-limited molding environments.
                </p>
                <a href="https://www.thermalcare.com/rmc-series-water-temperature-control-units" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>
    </div>

@endsection
