@extends('layouts.layout', [
    'title' => 'Pump and Reservoir Systems',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Pumps & Reservoirs', 'url' => url('/pumps_and_reservoirs')],
    ],
])

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="text-center">
                <img src="pumps/pumps_12.jpg" alt="Pump and Reservoir Systems" class="img-fluid float-end ms-3 mb-3" style="max-width: 400px;">
            </div>

            <h2 class="text-primary">Pump and Reservoir Systems: 500–6000gal Designs</h2>

            <p>The most complete line of pre-engineered systems for cooling tower and central chiller applications providing the highest quality design and construction features available. Standard, full-sized pump trim, extended pump suctions legs, inside and outside welded seams and solid steel decking under pumps are just some of the value-added features incorporated into every system. Our selection of reservoirs, pumps, controls and alarms, plus complete engineering support from system design to plant layout drawings, assure you of the correct system for your application.</p>

            <h4 class="mt-4">Features</h4>
            <ul>
                <li>Available in fibreglass, polyethylene, stainless steel, or steel.</li>
                <li>All pumps are mounted on a solid deck for added rigidity, serviceability, and safety.</li>
                <li>Steel reservoir seams are double welded, inside and out, for the ultimate protection against leaks and corrosion.</li>
                <li>Steel reservoir interiors are coated with marine duty coal tar epoxy to prevent corrosion.</li>
                <li>Grooved pipe system reduces flexible couplings and pipe stress.</li>
                <li>High efficiency centrifugal pumps optimize flow and reduce electrical costs.</li>
                <li>Full-size pump suction legs prevent vortexing and cavitation.</li>
                <li>Liquid filled pressure gauges allow accurate flow adjustment.</li>
                <li>Factory-mounted thermometer for quick temperature checks.</li>
                <li>PVC elbow at overflow increases tank capacity.</li>
                <li>Discharge check valve prevents flowback and water hammer.</li>
                <li>Proper piping trim maximizes flow and minimizes pressure drop.</li>
                <li>Pre-wired control panel simplifies field installation.</li>
                <li>NEMA 4 lights and switches for long-term reliability.</li>
                <li>Automatic water make-up assembly maintains constant water level.</li>
                <li>Drain connection allows easy draining of the reservoir.</li>
            </ul>

            <h4 class="mt-4">Options</h4>
            <ul>
                <li>Single or dual standby pumps</li>
                <li>Full 3/4" insulation</li>
                <li>Premium efficiency motors</li>
                <li>Unbreakable sight glass with safety rods</li>
                <li>Tank cover</li>
                <li>T-strainers for debris removal</li>
                <li>Factory-installed alarms with panel indicators</li>
                <li>Sonalert horn and silencer switch</li>
                <li>NEMA 12 or NEMA 4 enclosures</li>
                <li>Fused disconnects</li>
                <li>Programmable logic controller (PLC)</li>
                <li>Reservoir support legs</li>
                <li>OSHA approved ladder, rail, and toe board</li>
                <li>Automatic pressure-operated water bypass valve</li>
                <li>CUL Certification</li>
            </ul>
        </div>
    </div>
@endsection
