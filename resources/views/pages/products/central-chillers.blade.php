@extends('layouts.layout', [
    'title' => 'Central Chillers',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Central Chillers', 'url' => url('/chillers')],
    ],
])

@section('content')
    <div class="row g-4">
        <div class="col-12 pb-3">
            <div class="text-center mb-4">
                <p>Depend on Thermal Care for efficient and reliable central chilling systems – no matter what the need or application. With several different designs to choose from, you can get exactly the capacity you need with all the features you want.</p>
            </div>
        </div>

        <!-- TS Series -->
        <div class="col-md-6 text-center">
            <a href="http://www.thermalcare.com/central_chillers/ts-series-central-chillers.htm" target="_blank">
                <img src="chillers/chille8.jpg" class="img-fluid mb-2" alt="TS Series Central Chillers">
            </a>
            <h5 class="text-primary">TS Series Central Chillers</h5>
            <p class="mb-1"><small>20 to 100 tons</small></p>
            <p class="small">Energy-efficient, trouble-free scroll compressors, available with two, four, or six compressors.</p>
            <a href="http://www.thermalcare.com/central_chillers/ts-series-central-chillers.htm" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- TX Series -->
        <div class="col-md-6 text-center">
            <a href="http://www.thermalcare.com/central_chillers/tx-series-central-chillers.htm" target="_blank">
                <img src="chillers/chille9.jpg" class="img-fluid mb-2" alt="TX Series Central Chillers">
            </a>
            <h5 class="text-primary">TX Series Central Chillers</h5>
            <p class="mb-1"><small>40 to 440 tons</small></p>
            <p class="small">Uses advanced Trane twin rotary screw compressors for high reliability, energy efficiency, and reduced noise.</p>
            <a href="http://www.thermalcare.com/central_chillers/tx-series-central-chillers.htm" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- TC Series -->
        <div class="col-md-6 text-center">
            <a href="http://www.thermalcare.com/central_chillers/tc-series-central-chillers.htm" target="_blank">
                <img src="chillers/chille10.jpg" class="img-fluid mb-2" alt="TC Series Central Chillers">
            </a>
            <h5 class="text-primary">TC Series Central Chillers</h5>
            <p class="mb-1"><small>60 to 180 tons</small></p>
            <p class="small">Most reliable, energy-efficient, and quietest industrial chillers with advanced oil-free compressors.</p>
            <a href="http://www.thermalcare.com/central_chillers/tc-series-central-chillers.htm" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- PA Series -->
        <div class="col-md-6 text-center">
            <a href="http://www.thermalcare.com/central_chillers/outdoor-central-chillers.htm" target="_blank">
                <img src="chillers/chille11.jpg" class="img-fluid mb-2" alt="PA Series Outdoor Central Chillers">
            </a>
            <h5 class="text-primary">PA Series Outdoor Central Chillers</h5>
            <p class="mb-1"><small>10 to 490 tons</small></p>
            <p class="small">Air-cooled scroll or rotary screw compressors. Outdoor-ready, easy to install, operate, and maintain.</p>
            <a href="http://www.thermalcare.com/central_chillers/outdoor-central-chillers.htm" target="_blank" class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>
    </div>
@endsection
