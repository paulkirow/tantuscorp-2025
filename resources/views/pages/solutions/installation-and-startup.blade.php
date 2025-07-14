@extends('layouts.layout', [
    'title' => 'Installation and Start Up',
    'numBeforeBold' => 2,
    'titleCol' => 'col-md-8',
])

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>
                Just as important as selecting the right equipment for your application, providing the correct
                installation will ensure your cooling equipment does the job and will operate maintenance free.
            </p>
            <p>
                Installations can be broken out into several sections.
            </p>

            <ol>
                <li><strong>Mechanical Room and Plant Layout</strong>
                    <p>Good planning will ensure your installation will go as planned and will keep costs down and on
                        budget. It will also reduce issues relating to maintenance access and future growth.</p>
                    <p>You will need the equipment dimensions, shipping and operating weight, moving and support
                        requirements, maintenance access points, electrical requirements (MCA, Voltage, Connection
                        Points and necessary disconnects), city water and sanitary sewer requirements, and pipe
                        connection sizes and locations.</p>
                </li>
                <li><strong>Setting the cooling equipment in the desired location.</strong>
                    <p>Depending on the size of the equipment and the location of where it is to be placed, you may need
                        properly sized lifts, cranes and other equipment to move it into location.</p>
                    <p>You should plan your route to ensure there are no obstructions or obstacles in moving your
                        cooling equipment. Also ensure limiting factors in the size of the cooling equipment, like
                        doorways, loading docks, ceiling heights and the method of shipping to your facility (width and
                        height).</p>
                </li>
                <li><strong>Locate the facility services and ensure they are adequate for the cooling equipment
                        needs.</strong>
                    <p>Find out what your power needs are and locate them in the plant relative to the cooling equipment
                        location. Also locate both city water line size and location and make sure it is also adequate.
                        Any draining, bleed-off of process cooling water must go into a sanitary sewer. Plan your route
                        and your needs for sanitary sewer.</p>
                </li>
                <li><strong>Mezzanines and Support Structures</strong>
                    <p>Any equipment that needs to be located on a mezzanine or support structure requires a proper
                        engineered analysis of the load on the support members. Placing a Cooling Tower on the roof will
                        require an analysis of the roof structure to determine if it can support the weight.</p>
                    <p>Any support structure must be designed for operating weight, start-up torques and wind and snow
                        loads.</p>
                </li>
                <li><strong>Pipe Installations</strong>
                    <p>The most important aspect on pipe installation is to ensure that the pipe is large enough to
                        minimize pressure losses through the system and provide the proper flow to all processes.</p>
                    <p>A common guideline is to use the lesser of either a maximum velocity of 10 fps or a pressure loss
                        of 10 ft per 100 feet of pipe. In longer pipe runs, you may want to adopt a lower guideline. For
                        gravity return pipe, a slope of 1” per 10 feet is recommended and a velocity less than 4
                        fps.</p>
                    <p>Plan your route to avoid obstructions like cranes and support columns. Ensure that the pipe is
                        not obstructing forklift routes or in danger of being hit.</p>
                    <p>Calculate the weight of the pipe filled with water and make sure your roof/columns can support
                        the weight (see structural engineer).</p>
                    <p>Common pipe materials used are sch40 steel, sch80 PVC, copper, and stainless steel.</p>
                    <p>The limiting factor on using sch80 PVC is the water temperature. If your water temperature can
                        climb to 110ºF or warmer, the pipe becomes soft and can start to sag creating weak points at the
                        joints. Sch80 PVC has the advantage of being low cost and not rusting. However, making any
                        repairs or changes will require at least 8 hours for the glue to set. It is recommended that
                        isolation valves be placed on sections that can be isolated for repairs or changes without
                        affecting the flow to the rest of the plant. If you are using plastic valves, these valves must
                        be periodically used or they can stick eliminating their usefulness when needed. Steel ball
                        valves or butterfly valves are an ideal replacement for plastic valves.</p>
                    <p>Sch 40 Steel can be susceptible to rust. The cooling water must have rust inhibitors and stay
                        filled with water to reduce the impact of corrosion.</p>
                    <p>Copper pipe in small sizes (½” to 1 ¼”) is an ideal replacement for small plastic pipe. PVC pipe
                        in these sizes are not rigid enough and require additional support. Also if the process has a
                        high return water temperature (like air compressors), you would want to avoid using plastic pipe
                        for the return drops.</p>
                    <p>Thin wall stainless steel pipe can also be an alternative if you do not want to use steel pipe or
                        require something more durable than PVC pipe. Thin wall stainless steel is only nominally more
                        expensive than steel piping and can handle more corrosive water.</p>
                </li>
                <li><strong>Refrigeration Piping</strong>
                    <p>Some cooling equipment requires field refrigeration piping between components. Most common is the
                        refrigeration piping required between the outdoor condenser and the chiller.</p>
                    <p>Refrigeration piping, like water piping, must be sized to ensure minimal losses while keeping
                        velocity high enough to ensure refrigeration oil flow. (See proper refrigeration pipe sizing
                        charts.) Only proper refrigeration copper pipe must be used. Once completed, a vacuum is applied
                        to evacuate any contaminants and to ensure no leaks. Traps are also a consideration in proper
                        refrigeration piping. A qualified refrigeration mechanic is recommended for refrigeration
                        piping.</p>
                </li>
                <li><strong>Other Considerations</strong>
                    <p>Check the quality of the power being supplied. You may want to include phase protection.</p>
                    <p>Depending on the pipe installation, water hammer may be an issue. Slow actuating valves, soft
                        starters or a water hammer arrestor are all solutions.</p>
                    <p>Check the quality of your make-up water. If your make-up water is too hard, you may want to
                        install a water softener. Check with your local water experts.</p>
                </li>
            </ol>

            <h3>
                Start-up of Cooling Equipment
            </h3>
            <p>
                Whenever possible, the use of a factory approved start-up technician is recommended. Before start-up,
                make sure you have a copy of the Installation, Operation and Start-up Manual. Review that the
                installation is completed before start-up and a cooling load is recommended to allow the equipment
                controls to be adjusted for the applications. If available, a copy of the factory test sheet is also
                recommended.
            </p>
            <p>
                Some things that are part of the start-up:
            </p>
            <ul>
                <li>Power on. For chillers, power is required for at least 8 hours before start-up.</li>
                <li>Rotation. For pumps and fans, power connected incorrectly will cause the pump or fan to turn
                    backwards.
                </li>
                <li>Amp Draw. By measuring the amp draw, you can determine if a motor may be faulty or the wiring is
                    faulty.
                </li>
                <li>Control wiring. Make sure that all sensors are wired back to the controller and that the sensors are
                    properly installed.
                </li>
                <li>Pressures and flows. Too much or not enough flow and pressure through a chiller evaporator, a
                    chiller water-cooled condenser, a dry fluid cooler, or a Cooling Tower can cause the unit not to
                    operate properly.
                </li>
                <li>Refrigeration Pressures. Reviewing the refrigeration and oil pressures and comparing them to the
                    factory test sheet will ensure the equipment is operating properly.
                </li>
                <li>Controllers timers and set points. These must be tuned for the system and should ideally be done
                    when the process is running. A second visit may be recommended.
                </li>
                <li>Training. Authorized plant personnel and a local contractor should be part of the training. Training
                    should include start-up, servicing, maintenance and upkeep.
                </li>
            </ul>

            <h3>
                Spare Parts
            </h3>
            <p>
                Get a list of recommended spare parts based on the maintenance upkeep. Also, get a list of how long it
                would take to get the major components in case of a major failure. This way, you can plan your
                alternatives.
            </p>

            <div style="text-align: center; margin: 20px 0;">
                <img src="installation/instal3.gif" width="356" height="367" alt="Mechanical Room Layout Example"
                     style="max-width: 100%; height: auto;">
                <p style="font-weight: bold; margin-top: 8px;">
                    Example of a Mechanical Room Layout
                </p>
            </div>
        </div>
    </div>
@endsection
