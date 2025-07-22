@extends('layouts.layout', [
    'title' => 'Cooling Towers: 32-1200 TR',
    'numBeforeBold' => 2,
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Towers', 'url' => url('/tower')],
    ],
])

@section('content')
    <p class="pb-5">
        Industrial cooling towers offer a highly efficient, cost-effective solution for process heat removal—especially where water-cooled systems are in use. Tantus supplies fiberglass and hybrid cooling towers engineered for long life, low maintenance, and high thermal performance. Ideal for applications where inlet water temperatures of 85°F or higher are required, these systems support chiller efficiency and reliable year-round operation.
    </p>

    <div>
        <div class="d-flex pb-3">
            <img src="/tower/FT-CPQ.webp" alt="FT Series Cooling Tower" class="me-3" style="max-height:400px">
            <div>
                <h5 class="text-primary mb-1">FT Series – 38 to 120 tons</h5>
                <p class="mb-1">
                    Lightweight and corrosion-resistant, FT Series fiberglass cooling towers are engineered for optimal performance and energy efficiency.
                    Featuring a counterflow design and precision-balanced airflow and water distribution, they maximize heat transfer while keeping power usage low.
                </p>
                <a href="https://www.thermalcare.com/ft-cooling-towers/" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="d-flex pb-3">
            <img src="/tower/FC700-CPQ.webp" alt="FC Series Cooling Tower" class="me-3" style="max-height:400px">
            <div>
                <h5 class="text-primary mb-1">FC Series – 100 to 240 tons</h5>
                <p class="mb-1">
                    Built for rugged industrial environments, the FC Series offers superior durability with a 10-year shell warranty and 5-year motor warranty.
                    These towers are pre-assembled for quick installation and provide consistent performance in outdoor process cooling applications.
                </p>
                <a href="https://www.thermalcare.com/fc-cooling-towers/" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

        <div class="d-flex pb-3">
            <img src="/tower/hfcg-adiabatic.webp" alt="HFCG Adiabatic Fluid Cooler" class="me-3" style="max-height:400px">
            <div>
                <h5 class="text-primary mb-1">HFCG Adiabatic Fluid Coolers – 50 to 1200 tons</h5>
                <p class="mb-1">
                    HFCG Adiabatic Fluid Coolers offer a high-efficiency, closed-loop cooling solution that uses ambient air and a unique adiabatic design
                    to achieve low leaving water temperatures year-round—comparable to traditional evaporative towers. Ideal for reducing energy use,
                    minimizing water consumption, and cutting operating costs.
                </p>
                <a href="https://www.thermalcare.com/adiabatic-fluid-coolers" target="_blank" class="text-primary text-decoration-none">
                    Brochures &amp; More Information &gt;
                </a>
            </div>
        </div>

    </div>

@endsection
