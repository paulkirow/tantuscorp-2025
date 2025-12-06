@extends('layouts.layout', [
    'title' => 'Industrial Filtration Accessories',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Accessories', 'url' => url('/accessories')],
    ],
])

@section('title', 'Industrial Cooling Accessories | Tantus Corporation')
@section('meta_description', 'Enhance performance with water treatment systems, filtration units, heat exchangers, and other accessories for industrial cooling.')

@section('content')
    <p>
        Tantus Corporation provides a comprehensive range of system accessories to enhance the performance, efficiency, and longevity of industrial cooling systems.
        Each accessory is tailored to integrate seamlessly with your process requirements—maximizing reliability and energy savings.
    </p>
    <div class="row g-4">
        <div class="col-md-4 text-center">
            <a href="https://www.thermalcare.com/water-treatment-systems/" target="_blank">
                <img src="{{ asset('/accessories/Water Treatment.webp') }}" class="img-fluid mb-2" alt="Water Treatment Systems" style="max-height: 180px">
            </a>
            <h5 class="text-primary">Water Treatment Systems</h5>
            <p class="small">Essential for cooling towers, these systems help prevent scale, suspended solids, and microbiological growth. The TWC Series delivers all necessary treatment features in a compact, easy-to-operate panel with multilingual display options.</p>
            <a href="https://www.thermalcare.com/water-treatment-systems/" target="_blank" class="btn btn-link p-0">Brochures &amp; More Information &gt;</a>
        </div>

        <div class="col-md-4 text-center">
            <a href="https://www.thermalcare.com/filtration-equipment/" target="_blank">
                <img src="{{ asset('/accessories/Water Treatment Group.webp') }}" class="img-fluid mb-2" alt="Filtration Equipment" style="max-height: 180px">
            </a>
            <h5 class="text-primary">Filtration Equipment</h5>
            <p class="small">Protect system components from physical debris with a wide range of filtration options—ranging from cartridge and bag filters to high-capacity stainless steel strainer/filters. All options are designed for reliable protection and minimal flow disruption.</p>
            <a href="https://www.thermalcare.com/filtration-equipment/" target="_blank" class="btn btn-link p-0">Brochures &amp; More Information &gt;</a>
        </div>

        <div class="col-md-4 text-center">
            <a href="https://www.thermalcare.com/heat-exchangers/" target="_blank">
                <img src="{{ asset('/accessories/PTS_4500.webp') }}" class="img-fluid mb-2" alt="Heat Exchangers" style="max-height: 180px">
            </a>
            <h5 class="text-primary">Heat Exchangers</h5>
            <p class="small">Plate and frame heat exchangers enhance system efficiency, safety, and serviceability. Ideal for reducing long-term operating costs and improving thermal performance in conjunction with chillers, cooling towers, or dry coolers.</p>
            <a href="https://www.thermalcare.com/heat-exchangers/" target="_blank" class="btn btn-link p-0">Brochures &amp; More Information &gt;</a>
        </div>
    </div>
@endsection
