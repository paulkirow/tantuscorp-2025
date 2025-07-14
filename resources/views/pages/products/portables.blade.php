@extends('layouts.layout', [
    'title' => 'Portable Chillers',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Portables', 'url' => url('/portables')],
    ],
])

@section('content')
    <div class="row g-4">
        <div class="col-12 pb-3">
            <div class="text-center">
                {{-- TODO: Bigger image--}}
                <img src="portables/portab4.jpg" alt="Portable Chillers" class="img-fluid float-end ms-3 mb-3"
                     style="max-width: 400px;">
            </div>
            <p>No other manufacturer can offer you a larger selection of portable chillers than Thermal Care.
                Whether you need an air-cooled portable chiller, water-cooled portable chiller, or remote condenser
                portable chiller model, chances are there is an economical Accuchiller that meets your exact
                requirements – without costly upgrades or options.</p>
            <p>Thermal Care’s portable chillers are engineered for efficiency and reliability in demanding environments.
                From compact models ideal for tight spaces to heavy-duty units with advanced diagnostics, there’s a
                solution for virtually any cooling need. Explore the different series below to find the perfect match for your application.</p>

        </div>

        <!-- EQ Series -->
        {{-- TODO: Updated products --}}
        <div class="col-md-4 text-center">
            <a href="http://www.thermalcare.com/portable_chillers/accuchiller-eq-series.htm" target="_blank">
                <img src="portables/portab5.jpg" class="img-fluid mb-2" alt="EQ Series">
            </a>
            <h5 class="text-primary">Accuchiller EQ Series</h5>
            <p class="mb-1"><small>1 to 3 tons</small></p>
            <p class="small">Nonferrous construction, compact footprint, microprocessor-controlled temperature and
                diagnostics.</p>
            <a href="http://www.thermalcare.com/portable_chillers/accuchiller-eq-series.htm" target="_blank"
               class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- SQ Series -->
        <div class="col-md-4 text-center">
            <a href="http://www.thermalcare.com/portable_chillers/accuchiller-sq-series.htm" target="_blank">
                <img src="portables/portab6.jpg" class="img-fluid mb-2" alt="SQ Series">
            </a>
            <h5 class="text-primary">Accuchiller SQ Series</h5>
            <p class="mb-1"><small>5 to 14 tons</small></p>
            <p class="small">Scroll compressor, NEMA 12 panel, nonferrous system, lockable exterior panels with
                safety switches.</p>
            <a href="http://www.thermalcare.com/portable_chillers/accuchiller-sq-series.htm" target="_blank"
               class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>

        <!-- LQ Series -->
        <div class="col-md-4 text-center">
            <a href="http://www.thermalcare.com/portable_chillers/accuchiller-lq-series.htm" target="_blank">
                <img src="portables/portab7.jpg" class="img-fluid mb-2" alt="LQ Series">
            </a>
            <h5 class="text-primary">Accuchiller LQ Series</h5>
            <p class="mb-1"><small>15 to 60 tons</small></p>
            <p class="small">Efficient scroll compressors, nonferrous water system, encapsulated safety
                switches.</p>
            <a href="http://www.thermalcare.com/portable_chillers/accuchiller-lq-series.htm" target="_blank"
               class="btn btn-link p-0">Brochures & More Information &gt;</a>
        </div>
    </div>
@endsection
