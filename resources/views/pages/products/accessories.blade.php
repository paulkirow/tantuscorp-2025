@extends('layouts.layout', [
    'title' => 'Industrial Filtration Accessories',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Accessories', 'url' => url('/accessories')],
    ],
])

@section('content')
    <p>
        Thermal Care offers equipment and accessories for every facet of your process cooling needs.
        Our customers can count on Thermal Care to supply the knowledge and equipment they need to solve specific problems and help them take advantage of energy savings.
    </p>

    <div class="row g-4">
        <div class="col-md-6 d-flex">
            <img src="/accessories/watertreatment_sm.gif" alt="Water Treatment Systems" class="me-3" width="100" height="85">
            <div>
                <h5 class="text-primary">Water Treatment Systems</h5>
                <p class="mb-1">
                    Simple solutions for curbing the naturally occurring problems in cooling system water.
                    Engineered to provide control of scale, suspended solids and microbiological growth in cooling tower water.
                </p>
                <a href="http://www.thermalcare.com/accessories/water-treatment-systems.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <img src="/accessories/filtration2_sm.gif" alt="Filtration Equipment" class="me-3" width="100" height="85">
            <div>
                <h5 class="text-primary">Filtration Equipment</h5>
                <p class="mb-1">
                    Our filtration equipment includes SF Series screen filters, BF Series bag filters, PS Series sand media filters and TD Series turbo disc filters.
                </p>
                <a href="http://www.thermalcare.com/accessories/filtration-equipment.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <img src="/accessories/blown-film-cooler_sm.gif" alt="Blown Film Coolers" class="me-3" width="100" height="85">
            <div>
                <h5 class="text-primary">Blown Film Coolers</h5>
                <p class="mb-1">
                    Available from 200 to 5000 CFM, these units provide uniform cooling for blown film applications.
                    Includes insulated leaving-air chamber, permanent air filter, drip condensate solenoid valve and four temperature gauges.
                </p>
                <a href="http://www.thermalcare.com/accessories/blown-film-coolers.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <img src="/accessories/heat-exchanger_sm.gif" alt="Heat Exchangers" class="me-3" width="100" height="85">
            <div>
                <h5 class="text-primary">Heat Exchangers</h5>
                <p class="mb-1">
                    Thermal Care plate and frame heat exchangers can be incorporated into a cooling tower system to isolate contaminated tower water from clean process water while still providing the low cost benefits of a cooling tower system.
                </p>
                <a href="http://www.thermalcare.com/accessories/heat-exchangers.htm" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>
    </div>
@endsection
