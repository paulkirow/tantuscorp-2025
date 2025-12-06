@extends('layouts.layout', [
    'title' => 'Sytem Troubleshooting',
    'titleCol' => 'col-md-10',
])

@section('title', 'Troubleshooting Industrial Cooling Systems | Tantus Corporation')
@section('meta_description', 'Guidance for diagnosing and resolving issues in industrial chillers, pumps, reservoirs, cooling towers, and temperature control units.')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <p class="lead">
                To trouble shoot you system it is best to divide and isolate to potential source of the problem. Review the items below which are listed by system type.

            </p>
            <hr class="solid my-5">

            <h2 class="h4">Chilled Water</h2>
            <div class="accordion pb-4" id="accordionChilledWater">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingChiller1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChiller1">
                            Chiller is shutting down
                        </button>
                    </h3>
                    <div id="collapseChiller1" class="accordion-collapse collapse" data-bs-parent="#accordionChilledWater">
                        <div class="accordion-body">
                            <ul>
                                <li>High refrigerant head pressure
                                    <ul>
                                        <li>Too much refrigerant</li>
                                        <li>Old condenser</li>
                                        <li>High operating chilled water temp</li>
                                        <li>Cooling load too high</li>
                                    </ul>
                                </li>
                                <li>Low refrigerant pressure
                                    <ul>
                                        <li>Not enough refrigerant</li>
                                        <li>Faulty head pressure controls</li>
                                    </ul>
                                </li>
                                <li>Low flow
                                    <ul>
                                        <li>Not enough water flow</li>
                                        <li>Faulty flow switch</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingChiller2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChiller2">
                            Chiller not maintaining set point temperature
                        </button>
                    </h3>
                    <div id="collapseChiller2" class="accordion-collapse collapse" data-bs-parent="#accordionChilledWater">
                        <div class="accordion-body">
                            <ul>
                                <li>Cooling load too high (do heat load analysis)</li>
                                <li>Incondensables in circuit (call refrigeration mechanic)</li>
                                <li>Old or plugged evaporator (call refrigeration mechanic)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h4">Cooling Tower</h2>
            <div class="accordion pb-4" id="accordionCoolingTower">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTower1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTower1">
                            Cooling tower water temperature too warm
                        </button>
                    </h3>
                    <div id="collapseTower1" class="accordion-collapse collapse" data-bs-parent="#accordionCoolingTower">
                        <div class="accordion-body">
                            <ul>
                                <li>Fan not operating
                                    <ul>
                                        <li>Motor issues, broken belts, shaft, blades</li>
                                        <li>Thermostat set too high or broken</li>
                                        <li>Blown fuses or overloads</li>
                                    </ul>
                                </li>
                                <li>Not enough water flow
                                    <ul>
                                        <li>Check pump valves and operation</li>
                                        <li>Check for clogged nozzles or wet deck</li>
                                    </ul>
                                </li>
                                <li>Too much water flow
                                    <ul>
                                        <li>Check tower balancing valve</li>
                                        <li>Discharge valve may be too open</li>
                                    </ul>
                                </li>
                                <li>Tower fill in poor condition</li>
                                <li>Cooling load too large (do load analysis)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTower2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTower2">
                            Cooling tower water temperature too cold
                        </button>
                    </h3>
                    <div id="collapseTower2" class="accordion-collapse collapse" data-bs-parent="#accordionCoolingTower">
                        <div class="accordion-body">
                            <ul>
                                <li>Fan not cycling off (check thermostat settings)</li>
                                <li>Small load + cold temps: check pump off/bypass settings</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTower3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTower3">
                            Cooling tower water condition issues
                        </button>
                    </h3>
                    <div id="collapseTower3" class="accordion-collapse collapse" data-bs-parent="#accordionCoolingTower">
                        <div class="accordion-body">
                            <ul>
                                <li>Check water treatment system (probes, valves, timers)</li>
                                <li>Hard make-up water may need softener</li>
                                <li>Consider filtration system</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h4">Closed-Loop Cooling Systems</h2>
            <div class="accordion pb-4" id="accordionClosedLoop">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingClosed1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseClosed1">
                            Intermittent cooling problems in closed-loop systems
                        </button>
                    </h3>
                    <div id="collapseClosed1" class="accordion-collapse collapse" data-bs-parent="#accordionClosedLoop">
                        <div class="accordion-body">
                            <ul><li>Air in system – ensure vents or air separators are installed</li></ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingClosed2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseClosed2">
                            System pressure too high in closed-loop systems
                        </button>
                    </h3>
                    <div id="collapseClosed2" class="accordion-collapse collapse" data-bs-parent="#accordionClosedLoop">
                        <div class="accordion-body">
                            <ul>
                                <li>Check expansion tank pressure</li>
                                <li>Check pressure reducing valve on make-up line</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h4">Heat Exchangers</h2>
            <div class="accordion pb-4" id="accordionHeatExchangers">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingHX1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHX1">
                            Heat exchanger performance issues
                        </button>
                    </h3>
                    <div id="collapseHX1" class="accordion-collapse collapse" data-bs-parent="#accordionHeatExchangers">
                        <div class="accordion-body">
                            <ul>
                                <li>Common problems: fouling or trapped air</li>
                                <li>Use gauges to monitor temperature differential</li>
                                <li>Changes in load or flow affect performance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h4">Process Pipe Systems</h2>
            <div class="accordion pb-4" id="accordionPipeSystems">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingPipe1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePipe1">
                            Not enough flow to a process
                        </button>
                    </h3>
                    <div id="collapsePipe1" class="accordion-collapse collapse" data-bs-parent="#accordionPipeSystems">
                        <div class="accordion-body">
                            <ul>
                                <li>Undersized or plugged pipe</li>
                                <li>Closed valve</li>
                                <li>Undersized pump</li>
                                <li>Other branches robbing flow</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingPipe2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePipe2">
                            Not enough pressure to a process
                        </button>
                    </h3>
                    <div id="collapsePipe2" class="accordion-collapse collapse" data-bs-parent="#accordionPipeSystems">
                        <div class="accordion-body">
                            <ul>
                                <li>Undersized or plugged pipe</li>
                                <li>Closed valve</li>
                                <li>Undersized pump</li>
                                <li>Other branches robbing pressure</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingPipe3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePipe3">
                            Water hammer causing pipe leaks
                        </button>
                    </h3>
                    <div id="collapsePipe3" class="accordion-collapse collapse" data-bs-parent="#accordionPipeSystems">
                        <div class="accordion-body">
                            <ul>
                                <li>Support pipes to reduce movement</li>
                                <li>Use slow or modulating valves</li>
                                <li>Install soft starters on pumps</li>
                                <li>Install water hammer arrestors</li>
                                <li>Use pressure reducing valve before makeup valve</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
