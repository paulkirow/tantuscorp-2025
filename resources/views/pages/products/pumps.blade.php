@extends('layouts.layout', [
    'title' => 'Pump and Reservoir Systems',
    'breadcrumbs' => [
        ['title' => 'Products', 'url' => url('/products')],
        ['title' => 'Pumps & Reservoirs', 'url' => url('/pumps-and-reservoirs')],
    ],
])

@section('title', 'Pumping Stations & Reservoirs | Tantus Corporation')
@section('meta_description', 'Custom pumping stations and reservoirs in steel, stainless, or fiberglass with multiple pump configurations for integrated cooling systems.')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="text-center">
                <img src="{{ asset('/pumps/PUMP_RESERVOIR_C.webp') }}" alt="Pump and Reservoir Systems" class="img-fluid float-end ms-3 mb-3" style="max-width: 400px;">
            </div>

            <p>These pre-engineered systems are built for cooling tower and central chiller applications, delivering robust performance and long-term durability. With a wide range of tank sizes and pump configurations, each unit is designed for optimal flow, minimal pressure drop, and energy efficiency. From solid deck-mounted pumps to corrosion-resistant coatings, every detail reflects a commitment to quality and reliability. Systems are available in fiberglass, polyethylene, stainless steel, or steel, and come with complete engineering support from layout to installation.</p>

            <h4 class="mt-4">Standard Features</h4>
            <ul>
                <li>Available in fiberglass, polyethylene, stainless steel, or carbon steel tanks</li>
                <li>Solid steel pump deck ensures structural rigidity and service safety</li>
                <li>Double-welded seams (interior/exterior) for superior leak protection</li>
                <li>Marine-grade epoxy coating inside steel reservoirs for corrosion resistance</li>
                <li>Grooved pipe system minimizes stress and simplifies maintenance</li>
                <li>Premium-efficiency centrifugal pumps for optimized performance and reduced energy use</li>
                <li>Full-sized angled suction legs to prevent vortexing and cavitation</li>
                <li>Liquid-filled discharge gauges with isolation cocks for precise flow control</li>
                <li>Factory-mounted thermometers for quick temperature readings</li>
                <li>Overflow elbow increases usable reservoir capacity</li>
                <li>Discharge check valve eliminates water hammer and flowback</li>
                <li>Optimized piping trim for consistent flow and minimal pressure drop</li>
                <li>Prewired control panels reduce installation time and cost</li>
                <li>NEMA 4 rated lights and switches for weather resistance and longevity</li>
                <li>Automatic water makeup valve maintains proper tank levels</li>
                <li>Drain connection for convenient reservoir emptying</li>
            </ul>

            <h4 class="mt-4">Available Options</h4>
            <ul>
                <li>Single or dual standby pumps with complete trim and isolation valves</li>
                <li>3/4" full insulation for outdoor use</li>
                <li>Premium-efficiency motors and VFDs</li>
                <li>Unbreakable sight glass with shutoff valves and safety rods</li>
                <li>Tank cover and optional tank divider</li>
                <li>Mounted heat exchangers, strainers, or bag filters</li>
                <li>Factory-installed alarms with panel indicators</li>
                <li>Sonalert horn with silencer switch</li>
                <li>NEMA 12 or 4 enclosures</li>
                <li>Rotary or fused disconnects</li>
                <li>Programmable logic controller (PLC)</li>
                <li>Second pump deck and tank support legs</li>
                <li>Wave baffle for turbulence reduction</li>
                <li>OSHA-compliant ladder, rail, and toe board</li>
                <li>Automatic pressure-actuated water bypass valves</li>
                <li>CUL Certification available</li>
            </ul>
        </div>
    </div>
@endsection
