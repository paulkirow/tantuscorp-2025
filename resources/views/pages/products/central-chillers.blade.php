@extends('layouts.layout', [
    'title' => 'Central Chillers',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Central Chillers', 'url' => url('/chillers')],
    ],
])

@section('title', 'Central Chilling Systems | Tantus Corporation')
@section('meta_description', 'High-capacity central chillers with scroll, screw, and oil-free Turbocor compressors for scalable industrial process cooling.')
@section('og_image', asset('chillers/TC_Dual_Circuit.webp'))

@section('content')
    <div class="row g-4">
        <div class="col-12 pb-3">
            <div class="text-center mb-4">
                <p>Tantus Corporation partners with Thermal Care to deliver advanced central chilling systems designed for demanding industrial applications. Engineered for efficiency, modularity, and long-term reliability, these systems support a wide range of process cooling needs.</p>
            </div>
        </div>

        <!-- TC Series -->
        <div class="col-md-6 text-center">
            <a href="https://www.thermalcare.com/tc-centrifugal-compressor-chiller/" target="_blank">
                <img src="{{ asset('/chillers/TC_Dual_Circuit.webp') }}" class="img-fluid mb-2" alt="TC Series Dual Circuit" style="max-height: 180px">
            </a>
            <h5 class="text-primary">TC Series Central Chillers</h5>
            <p class="mb-1"><small>60 to 800 tons</small></p>
            <p class="small">High-efficiency chillers using oil-free centrifugal compressors, ideal for large-capacity needs and reduced energy consumption.</p>
            <a href="https://www.thermalcare.com/tc-centrifugal-compressor-chiller/" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- TSE Series -->
        <div class="col-md-6 text-center">
            <a href="https://www.thermalcare.com/tse-scroll-compressor-chiller/" target="_blank">
                <img src="{{ asset('/chillers/TSE with tank-CPQ.webp') }}" class="img-fluid mb-2" alt="TSE Series Central Chillers" style="max-height: 180px">
            </a>
            <h5 class="text-primary">TSE Series Central Chillers</h5>
            <p class="mb-1"><small>10 to 240 tons</small></p>
            <p class="small">Scroll compressor systems with compact design and reliable performance. Available with or without integral reservoir tanks.</p>
            <a href="https://www.thermalcare.com/tse-scroll-compressor-chiller/" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- MX Series -->
        <div class="col-md-6 text-center">
            <a href="https://www.thermalcare.com/mx-rotary-screw-compressor/" target="_blank">
                <img src="{{ asset('/chillers/MX_CPQ.webp') }}" class="img-fluid mb-2" alt="MX Series Central Chillers" style="max-height: 180px">
            </a>
            <h5 class="text-primary">MX Series Central Chillers</h5>
            <p class="mb-1"><small>50 to 500 tons</small></p>
            <p class="small">Designed for flexibility and growth with multiple scroll or screw compressors. Modular for future capacity expansion.</p>
            <a href=https://www.thermalcare.com/mx-rotary-screw-compressor/" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- TCF Series -->
        <div class="col-md-6 text-center">
            <a href="https://www.thermalcare.com/tcf-centrifugal-compressor/" target="_blank">
                <img src="{{ asset('/chillers/TCFW350_11.webp') }}" class="img-fluid mb-2" alt="TCF Series Central Chillers" style="max-height: 180px">
            </a>
            <h5 class="text-primary">TCF Series Central Chillers</h5>
            <p class="mb-1"><small>50 & 100 tons</small></p>
            <p class="small">Compact, pre-engineered centrifugal chiller packages offering oil-free reliability and advanced PLC control.</p>
            <a href="https://www.thermalcare.com/tcf-centrifugal-compressor/" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>
    </div>
@endsection
