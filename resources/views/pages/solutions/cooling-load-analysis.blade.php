@extends('layouts.layout', [
    'title' => 'Cooling Load Analysis',
    'numBeforeBold' => 2,
    'titleCol' => 'col-md-10',
])

@section('title', 'Cooling Load Analysis | Tantus Corporation')
@section('meta_description', 'Professional cooling load analysis to size industrial chilling systems accurately and optimize energy efficiency and performance.')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <p>
                Having a cooling load analysis done at your facility is very important. It can provide information that
                can help
                you:
            </p>

            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>Ensure constant manufacturing parameters</li>
                        <li>Improve productivity</li>
                        <li>Reduce maintenance costs</li>
                        <li>Reduce energy costs</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Improve dependability</li>
                        <li>Plan future expansion</li>
                        <li>Trouble-shoot problems</li>
                    </ul>
                </div>
            </div>

            <p>
                Detailing each manufacturing piece of equipment with the parameters of heat load, cooling temperature
                required,
                cooling water flow, cooling water pressure required, and the location of the equipment in the plant will
                help
                you
                plan an efficient, controlled environment to maximize your cooling and your profits.
            </p>

            <p>
                Although every manufacturing facility is different, there are also similarities in some equipment where
                principles
                of cooling analysis can be applied. For example, most facilities require air compressors. If your air
                compressor
                is
                water-cooled, an easy rule to determine cooling load is 2 Tons (12,000 Btu/h) per 10 HP of air
                compressors.
            </p>

            <p>
                Some applications are air-cooled or have water jackets. Some applications have constant load or a batch
                load
                where
                the load varies with time.
            </p>

            <p>
                Some applications require very cool water while others can operate with warm cooling water. Some
                applications
                have
                low flow and high temperature ranges, while others demand a very high flow and small temperature range.
            </p>

            <p>
                Understanding your plant cooling needs will provide a better understanding of your facility and how it
                runs.
            </p>

            <p>
                Included are downloadable Heat Load Analysis Heat Input Worksheets. Please complete the following data
                input
                forms
                to enable us to assist in your audit.
            </p>

            <div class="row text-center mt-5">
                <div class="col-md-6">
                    <h5>Injection Moulding</h5>
                    <p>
                        <a href="{{ asset('/InjectionMoldingHeatLoadAnalysis.xls') }}" class="text-primary" target="_blank">
                            Excel Format
                        </a>
                    </p>
                    <p>
                        <a href="{{ asset('/InjectionMoldingHeatLoadAnalysis.pdf') }}" class="text-primary" target="_blank">
                            Adobe Format
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <h5>Blow Moulding</h5>
                    <p>
                        <a href="/" class="text-primary" target="_blank">
                            Excel Format
                        </a>
                    </p>
                    <p>
                        <a href="/" class="text-primary" target="_blank">
                            Adobe Format
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
