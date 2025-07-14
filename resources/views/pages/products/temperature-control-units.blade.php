@extends('layouts.layout', [
    'title' => 'Temperature Control Units',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'TCU', 'url' => url('/temperature_control_units')],
    ],
])

@section('content')

    <p>
        For dependable and accurate water temperature control choose Thermal Care. Each water temperature control unit is designed and built to meet or exceed
        the performance standards demanded by today’s manufacturing environment. Available in water, hot oil, or positive / negative pressure.
    </p>

    <div class="row g-4">
        <div class="col-md-6 d-flex">
            <img src="/tcu/temper15.jpg" alt="Aquatherm RA Series" class="me-3" width="98" height="101">
            <div>
                <h5 class="text-primary mb-1">Aquatherm RA Series Water Temperature Control – Water</h5>
                <p class="mb-1">
                    Units are made with the best available components such as premium quality solenoid valves, high flow pumps with leak-resistant
                    silicon carbide seals and rugged incoloy heaters for years of maintenance free operation.
                </p>
                <a href="http://www.thermalcare.com/temperature_controllers/aquatherm-ra-series.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <img src="/tcu/temper16.jpg" alt="CRA Series" class="me-3" width="115" height="113">
            <div>
                <h5 class="text-primary mb-1">CRA Series Water Temperature Control – CD &amp; DVD</h5>
                <p class="mb-1">
                    Replicators can now get precise temperature control for multiple zones of any optical disc mold from a durable, single-point temperature control unit.
                    The CRA Series unit can control any type of mold zone including moveable, stationary, sprue and punch cut.
                </p>
                <a href="http://www.thermalcare.com/temperature_controllers/cra-series.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <img src="/tcu/temper17.jpg" alt="Oiltherm RO Series" class="me-3" width="100" height="102">
            <div>
                <h5 class="text-primary mb-1">Oiltherm RO Series Water Temperature Control – Hot Oil</h5>
                <p class="mb-1">
                    The Oiltherm is designed to work with a wide range of high temperature applications in the 125°F to 575°F range.
                    The Oiltherm assures high velocity oil flow across heater elements for optimum heat transfer and fluid life.
                </p>
                <a href="http://www.thermalcare.com/temperature_controllers/oiltherm-ro-series.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <img src="/tcu/temper18.jpg" alt="Vactherm RV Series" class="me-3" width="97" height="105">
            <div>
                <h5 class="text-primary mb-1">Vactherm RV Series Water Temperature Control – Positive/Negative Pressure</h5>
                <p class="mb-1">
                    The unique design of the Vactherm allows the vacuum level to be adjusted to the exact amount necessary to stop the leakage,
                    without drawing air into the water circuit.
                </p>
                <a href="http://www.thermalcare.com/temperature_controllers/vactherm-rv-series.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>
    </div>

@endsection
