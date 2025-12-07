@extends('layouts.layout', [
    'title' => 'Free Cooling',
    'titleCol' => 'col-md-8',
])

@section('title', 'Free Cooling Solutions | Tantus Corporation')
@section('meta_description', 'Reduce energy costs with free cooling: adiabatic fluid coolers and ambient air systems for industrial process cooling.')
@section('og_image', asset('free-cooling/free_c20.jpg'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div class="d-flex mb-3 flex-column flex-md-row">
                    <img src="{{ asset('/free-cooling/free_c20.jpg') }}" alt="Free Cooling" class="ms-md-0 me-md-3 mx-auto mb-3" style="width: 227px; height: 143px; border: 1px solid #000;">
                    <div>
                        <h5 class="fw-bold">What is Free Cooling?</h5>
                        <p class="mb-2">
                            Free cooling can be defined as using ambient cooling where mechanical cooling is being used. Ambient cooling (Evaporative Cooling Towers, Evaporative Fluid Coolers, Dry Fluid Coolers) can be used to replace mechanical cooling (Chillers) giving you “Free” cooling because you are using the outdoor ambient air to provide low cost cooling.
                        </p>
                    </div>
                </div>

                <h5 class="fw-bold">Can Free Cooling reduce my operating costs?</h5>
                <p>
                    Ambient cooling can use as little as 10% of the energy required to operate mechanical cooling. The key is identifying the operating temperature of the process and the coolant temperature required to maintain the process.
                </p>

                <h5>What is the payback?</h5>
                <p>
                    There are many factors that determine the payback in applying a “Free Cooling” system. The costs can vary with each application based on the period free cooling can be applied, the local energy costs, and the cost to adapt the current system to free cooling.
                </p>

                <h5 class="fw-bold mt-4">What is the limitation?</h5>
                <p>
                    The limitation for free cooling is based on the required cooling water temperature required and the geographical location of the facility. The lower the cooling water temperature required, the smaller the period of time available to take advantage of ambient cooling.
                </p>

                <p class="mt-4 fw-bold">
                    The following are some indicators of what your increased capacity based on these factors
                </p>

                <div class="text-center my-3">
                    <img src="{{ asset('/free-cooling/free_c21.jpg') }}" alt="Cooling capacity chart" width="414" height="288" class="img-fluid">
                    <p class="mt-3">
                        This chart demonstrates that as the temperature approach increases (the difference between leaving water temperature and ambient wet bulb temperature), the potential cooling capacity increases. For example, a Cooling Tower that has a temperature approach of 27ºF (58ºF wet bulb) would have double the cooling capacity of the same cooling tower at 7ºF approach (78ºF wet bulb). That is why, given the same cooling water temperature, the cooling tower becomes more efficient in cooler weather.
                    </p>
                </div>

                <hr>

                <div class="text-center my-3">
                    <img src="{{ asset('/free-cooling/free_c22.jpg') }}" alt="Cooling tower efficiency chart" width="410" height="279" class="img-fluid">
                    <p class="mt-3">
                        This chart demonstrates that as you increase the Cooling Tower water temperature range, the cooling tower becomes more efficient. Other benefits in increased range is lower water flow, which would decrease the pump HP required resulting in more energy savings.
                    </p>
                </div>

                <hr>

                <div class="text-center my-3">
                    <img src="{{ asset('/free-cooling/free_c23.jpg') }}" alt="Pump curve" width="421" height="299" class="img-fluid">
                    <p class="mt-3">
                        This pump curve is important when determining free cooling opportunity. If the approach is maintained the same (leaving water temperature vs wet bulb temperature), the Cooling Tower efficiency reduces as you reduce your leaving water temperature when the outdoor wet bulb temperature decreases. For example, operating your Cooling Tower at 60ºF leaving water temperature when the ambient wet bulb temperature is 53ºF, will result in having your Cooling Tower provide only 2/3 of the cooling capacity at 85ºF leaving water temperature at 78ºF wet bulb. You would have to add 50% more cooling capacity to your Cooling Tower in order to provide the same cooling at the lower temperature.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
