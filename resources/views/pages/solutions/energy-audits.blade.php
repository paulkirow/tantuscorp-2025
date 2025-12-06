@extends('layouts.layout', [
    'title' => 'Cooling System Energy Audits',
    'numBeforeBold' => 2,
    'titleCol' => 'col-md-10',
])

@section('title', 'Industrial Energy Audits | Tantus Corporation')
@section('meta_description', 'Comprehensive energy audits for industrial cooling systems to improve efficiency, reduce costs, and optimize performance.')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('/energy-audits/energy19.jpg') }}" alt="Cooling Audit" class="img-fluid mb-3">
                </div>
                <div class="col-md-8">
                    <p><strong>Is your production cooling system costing you too much?</strong></p>
                    <p><strong>Are you running at peak efficiency?</strong></p>

                    <p>As much as 50% of all energy required for a process to run results in heat energy that is
                        dissipated in a cooling system.</p>

                    <p>Mechanical cooling requires up to 50% of the energy it is trying to remove to operate. Ambient
                        cooling requires up to 10% of the energy it is trying to remove to operate.</p>

                    <p>A process that uses 1000 kW of power will require 250 kW to operate a mechanical cooling system
                        or 50 kW to operate a cooling system using ambient cooling.</p>
                </div>
            </div>

            <h2 class="text-primary mt-4">An Energy Audit can:</h2>
            <ul>
                <li>Determine if you require mechanical or ambient cooling for your application.</li>
                <li>Determine if you are utilizing your cooling system efficiently.</li>
                <li>Determine if your pumping system is being used efficiently.</li>
            </ul>

            <p class="mt-4">
                Below are downloadable Heat Load Analysis Heat Input Worksheets.
                Please complete the following data input forms to enable us to assist in your audit.
            </p>

            <div class="row text-center my-4">
                <div class="col-md-6">
                    <h5>Injection Moulding</h5>
                    <p>
                        <a href="{{ asset('/files/InjectionMoldingHeatLoadAnalysis.xls') }}" target="_blank"
                           class="d-block text-primary">Excel Format</a>
                        <a href="{{ asset('/files/InjectionMoldingHeatLoadAnalysis.pdf') }}" target="_blank"
                           class="d-block text-primary">Adobe Format</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <h5>Blow Moulding</h5>
                    <p>
                        <a href="{{ asset('/files/Blow Molding Heat Load Analysis.xls') }}" target="_blank"
                           class="d-block text-primary">Excel Format</a>
                        <a href="{{ asset('/files/Blow Molding Heat Load Analysis.pdf') }}" target="_blank"
                           class="d-block text-primary">Adobe Format</a>
                    </p>
                </div>
            </div>

            <p class="text-center">
                <a href="{{ url('/contact') }}" class="btn btn-primary">Contact us for a free audit</a>
            </p>
        </div>
    </div>
@endsection
