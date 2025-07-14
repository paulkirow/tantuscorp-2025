@extends('layouts.layout', [
    'title' => 'Troubleshooting',
    'titleCol' => 'col-md-10',
])

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <p>To troubleshoot your system, it's best to divide and isolate the potential source of the problem. Review
                the
                items below by system type:</p>

            <ul>
                <li><a href="#chilled-water">Chilled Water</a>
                    <ul>
                        <li><a href="#chiller-shutdown">Chiller is shutting down</a></li>
                        <li><a href="#chiller-not-maintaining">Chiller is not maintaining set point temperature</a></li>
                    </ul>
                </li>
                <li><a href="#cooling-tower">Cooling Tower</a>
                    <ul>
                        <li><a href="#tower-warm">Water temperature too warm</a></li>
                        <li><a href="#tower-cold">Cooling Tower water temperature too cold</a></li>
                        <li><a href="#tower-water-condition">Is Cooling Tower Water in poor condition?</a></li>
                    </ul>
                </li>
                <li><a href="#closed-loop">Closed-Loop Cooling Systems</a>
                    <ul>
                        <li><a href="#loop-intermittent">Having intermittent cooling problems at process</a></li>
                        <li><a href="#loop-pressure">System Pressure too high</a></li>
                    </ul>
                </li>
                <li><a href="#heat-exchangers">Heat Exchangers</a></li>
                <li><a href="#process-pipe">Process Pipe Systems</a>
                    <ul>
                        <li><a href="#pipe-flow">Not enough flow to a process</a></li>
                        <li><a href="#pipe-pressure">Not enough pressure to a process</a></li>
                        <li><a href="#pipe-hammer">Water hammer is causing pipe to leak</a></li>
                    </ul>
                </li>

            </ul>

            <hr>

            <h2 id="chilled-water">Chilled Water</h2>
            <h3 id="chiller-shutdown">Chiller is shutting down</h3>
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

            <h3 id="chiller-not-maintaining">Chiller is not maintaining set point temperature</h3>
            <ul>
                <li>Cooling load too high (do heat load analysis)</li>
                <li>Incondensables in circuit (call refrigeration mechanic)</li>
                <li>Old or plugged evaporator (call refrigeration mechanic)</li>
            </ul>

            <hr>

            <h2 id="cooling-tower">Cooling Tower</h2>
            <h3 id="tower-warm">Water temperature too warm</h3>
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

            <h3 id="tower-cold">Water temperature too cold</h3>
            <ul>
                <li>Fan not cycling off (check thermostat settings)</li>
                <li>Small load + cold temps: check pump off/bypass settings</li>
            </ul>

            <h3 id="tower-water-condition">Water condition issues</h3>
            <ul>
                <li>Water treatment system checks (probes, valves, timers, etc.)</li>
                <li>Hard make-up water may need softener</li>
                <li>Filtration system recommendations</li>
            </ul>

            <hr>

            <h2 id="closed-loop">Closed-Loop Cooling Systems</h2>
            <h3 id="loop-intermittent">Intermittent cooling problems</h3>
            <ul>
                <li>Air in system – ensure vents and/or air separators installed</li>
            </ul>

            <h3 id="loop-pressure">System pressure too high</h3>
            <ul>
                <li>Check expansion tank pressure</li>
                <li>Check pressure reducing valve on make-up line</li>
            </ul>

            <hr>

            <h2 id="heat-exchangers">Heat Exchangers</h2>
            <ul>
                <li>Common issue: fouling or trapped air</li>
                <li>Use gauges to monitor effectiveness</li>
                <li>Changing load/flow affects performance</li>
            </ul>

            <hr>

            <h2 id="process-pipe">Process Pipe Systems</h2>
            <h3 id="pipe-flow">Not enough flow</h3>
            <ul>
                <li>Undersized or plugged pipe</li>
                <li>Closed valve</li>
                <li>Undersized pump</li>
                <li>Other branches robbing flow</li>
            </ul>

            <h3 id="pipe-pressure">Not enough pressure</h3>
            <ul>
                <li>Undersized or plugged pipe</li>
                <li>Closed valve</li>
                <li>Undersized pump</li>
                <li>Other branches robbing pressure</li>
            </ul>

            <h3 id="pipe-hammer">Water hammer causing leaks</h3>
            <ul>
                <li>Support pipes to prevent swaying</li>
                <li>Use slow/modulating valves</li>
                <li>Install soft starters</li>
                <li>Install water hammer arrestors</li>
                <li>Use pressure reducing valve before makeup valve</li>
            </ul>
        </div>
    </div>
@endsection

