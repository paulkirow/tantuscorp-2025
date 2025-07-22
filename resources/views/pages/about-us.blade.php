@extends('layouts.layout', [
    'title' => 'About Us',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => url('/')],
        ['title' => 'About Us', 'url' => url('/about-us')],
    ],
])

@section('content')
    <div class="row">
        <div class="col-12 col-lg-8">
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
            <ul class="list-unstyled">
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

            <p class="mt-4">
                <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us to Get Started</a>
            </p>
        </div>
        <div class="col-12 col-lg-4">
            <img src="{{ asset('logo-old.svg') }}" alt="Logo Old" class="w-100 img-fluid rounded pb-5" style="max-width: 300px;">
            <img src="{{ asset('logo.svg') }}" alt="Logo" class="w-100 img-fluid rounded pt-4" style="max-width: 300px;">
        </div>
    </div>
@endsection
