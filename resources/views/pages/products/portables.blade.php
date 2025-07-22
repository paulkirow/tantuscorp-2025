@extends('layouts.layout', [
    'title' => 'Portable Chillers',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Portables', 'url' => url('/portables')],
    ],
])

@section('content')
    <div class="row g-4">
        <div class="col-12 pb-4">
            <div class="text-center">
                <img src="{{ asset('portables/s416254555551580702_p1482_i4_w500.jpeg') }}" alt="Portable Chillers" class="img-fluid float-end ms-5 mb-3"
                     style="max-width: 300px;">
            </div>
            <p>Industrial portable chillers are self-contained units that combine the refrigeration circuit, process pump, reservoir, and electrical controls into a compact, mobile package. These systems are ideal for point-of-use applications where flexibility, efficiency, and precise temperature control are essential.</p>
            <p>With models ranging from 1 to 40 tons, the latest Accuchiller series from Thermal Care features advanced PLC controls, space-saving designs, and high-performance components. Whether air-cooled, water-cooled, or remote condenser-based, each unit is engineered for reliable performance in demanding industrial environments.</p>
            <p>Designed for versatility across a range of industries—from plastics and metalworking to food processing and chemicals—these chillers support continuous operation in both indoor and outdoor settings. Their modularity and plug-and-play configuration make them easy to integrate into existing systems with minimal disruption.</p>
        </div>

        <!-- EQ Series -->
        <div class="col-md-4 text-center">
            <a href="https://www.thermalcare.com/portable-packaged-chillers/1-to-3-ton-portable-chillers" target="_blank">
                <img src="{{ asset('portables/EQA05.webp') }}" class="img-fluid mb-2" alt="EQ Series">
            </a>
            <h5 class="text-primary">Accuchiller EQ Series</h5>
            <p class="mb-1"><small>1 to 3 tons</small></p>
            <p class="small">Compact design with air-cooled, water-cooled, and remote condenser models. Features a PLC controller for precise temperature regulation and built-in diagnostics.</p>
            <a href="https://www.thermalcare.com/portable-packaged-chillers/1-to-3-ton-portable-chillers" target="_blank"
               class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- NQ Series -->
        <div class="col-md-4 text-center">
            <a href="https://www.thermalcare.com/portable-packaged-chillers/4-to-40-ton-portable-chillers" target="_blank">
                <img src="{{ asset('portables/NQA10 resized.webp') }}" class="img-fluid mb-2" alt="NQ Series">
            </a>
            <h5 class="text-primary">Accuchiller NQ Series</h5>
            <p class="mb-1"><small>4 to 40 tons</small></p>
            <p class="small">High-performance chillers with scroll compressors, microchannel condensers, low-noise fans, and stainless steel brazed plate evaporators. Equipped with color touchscreen PLC controls.</p>
            <a href="https://www.thermalcare.com/portable-packaged-chillers/4-to-40-ton-portable-chillers" target="_blank"
               class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- NQV Series -->
        <div class="col-md-4 text-center">
            <a href="https://www.thermalcare.com/portable-packaged-chillers/variable-speed-chillers" target="_blank">
                <img src="{{ asset('portables/NQA15-30.webp') }}" class="img-fluid mb-2" alt="NQV Series">
            </a>
            <h5 class="text-primary">Accuchiller NQV Series</h5>
            <p class="mb-1"><small>5 to 30 tons</small></p>
            <p class="small">Variable speed scroll compressors for energy-efficient performance. Smart PLC controller adapts to changing heat loads, optimizing power usage and eliminating the need for hot gas bypass.</p>
            <a href="https://www.thermalcare.com/portable-packaged-chillers/variable-speed-chillers" target="_blank"
               class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>
    </div>
@endsection
