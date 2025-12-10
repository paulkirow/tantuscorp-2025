@extends('layouts.layout', [
'title' => 'Contact',
'breadcrumbs' => [
    ['title' => 'Home', 'url' => url('/')],
    ['title' => 'Contact', 'url' => url('/contact')],
],
])

@section('title', 'Contact Tantus Corporation | Industrial Cooling Experts')
@section('meta_description', 'Get in touch with Tantus Corporation for industrial chilling systems, energy audits, system evaluations, and tailored cooling solutions.')

@push('head-includes')
@php
    $orgSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Tantus Corporation',
        'url' => 'https://www.tantuscorp.com/',
        'logo' => asset('tantuscorp.svg'),
        'telephone' => '+1-647-258-9657',
        'contactPoint' => [[
            '@type' => 'ContactPoint',
            'telephone' => '+1-866-308-7418',
            'contactType' => 'customer service',
            'areaServed' => 'CA',
            'availableLanguage' => ['English'],
        ]],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div>
                <h2 class="h5 mb-3">About Tantus Corporation</h2>
                <p>
                    Tantus Corporation is committed to using our experience and expertise to find the best solution tailored to your needs—drawing from a wide variety of products in the cooling industry.
                </p>

                <p>
                    Our principal, John Kirow, brings over 45 years of experience in cooling systems, air conditioning, and manufacturing. That depth of knowledge helps us understand your operations and recommend the right cooling product for your application.
                </p>

                <p>
                    Our approach focuses on proven, efficient solutions specifically matched to your industrial processes.
                </p>

                <h5 class="mt-4">Our Services Include:</h5>
                <ul class="list-unstyled mb-4">
                    <li>• System and Load Evaluation</li>
                    <li>• Energy Audits</li>
                    <li>• Water Flow Analysis</li>
                    <li>• A Broad Range of Cooling Products</li>
                    <li>• Equipment Layout</li>
                    <li>• Installation</li>
                    <li>• Preventative Maintenance</li>
                    <li>• Refurbishing Existing Equipment</li>
                    <li>• Rental</li>
                    <li>• Consignment of Unneeded Cooling Equipment</li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card shadow-sm mb-5">
                <div class="card-body">
                    <h2 class="h5 mb-3">Contact</h2>
                    <p class="mb-2"><strong>Tantus Corporation</strong></p>
                    <p class="mb-2"><span class="text-muted">Phone:</span> <a href="tel:+16472589657">(647) 258-9657</a></p>
                    <p class="mb-2"><span class="text-muted">Toll Free:</span> <a href="tel:+18663087418">(866) 308-7418</a></p>
                    <p class="mb-2"><span class="text-muted">Fax:</span> (647) 258-9658</p>
                    <p class="mb-2"><span class="text-muted">Email:</span> <a href="mailto:sales@tantuscorp.com">sales@tantuscorp.com</a></p>
                    <p class="mb-0"><span class="text-muted">Website:</span> <a href="https://www.tantuscorp.com" target="_blank" rel="noopener">www.tantuscorp.com</a></p>
                </div>
            </div>

            <div class="text-center">
                <img src="{{ asset('tantuscorp.svg') }}" alt="Logo" class="img-fluid rounded" style="max-width: 300px;">
                <img src="{{ asset('logo-old.svg') }}" alt="Logo Old" class="img-fluid rounded mt-4" style="max-width: 300px;">

            </div>
        </div>
    </div>
@endsection
