@extends('layouts.layout', [
'title' => 'Contact',
'breadcrumbs' => [
    ['title' => 'Home', 'url' => url('/')],
    ['title' => 'Contact', 'url' => url('/contact')],
],
])

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div>
                <p class="mb-2 ms-3"><strong>Tantus Corporation</strong></p>
                <p class="mb-2 ms-3">Tel: (647) 258-9657</p>
                <p class="mb-2 ms-3">Toll Free: (866) 308-7418</p>
                <p class="mb-2 ms-3">Fax: (647) 258-9658</p>
                <p class="mb-2 ms-3">
                    Email:
                    <a href="mailto:sales@tantuscorp.com">sales@tantuscorp.com</a>
                </p>
                <p class="mb-0 ms-3">Website: www.tantuscorp.com</p>
            </div>
        </div>
    </div>
@endsection
