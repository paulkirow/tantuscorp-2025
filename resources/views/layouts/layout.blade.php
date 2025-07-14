@extends('layouts.base')

@section('body')
    @include('components.header')

    <section class="page-header page-header-modern bg-color-grey page-header-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div @class($titleCol ?? '')>
                    <div class="row">
                        <div class="col-md-8 align-self-center p-static order-2 order-md-1">
                            <h1 class="text-dark text-uppercase">
                                @php($numBeforeBold = $numBeforeBold ?? 1)
                                @if (isset($title))
                                    @if (count(explode(' ', $title)) <= $numBeforeBold)
                                        {{ $title }}
                                    @else
                                        {{ implode(' ', array_slice(explode(' ', $title), 0, $numBeforeBold)) }}
                                        <strong>{{ implode(' ', array_slice(explode(' ', $title), $numBeforeBold)) }}</strong>
                                    @endif
                                @else
                                    Tantus <strong>Corporation</strong>
                                @endif
                            </h1>
                        </div>
                        <div class="col-md-4 d-flex align-items-center order-1 order-md-2">
                            @if (isset($breadcrumbs))
                                <nav aria-label="breadcrumb" class="w-100">
                                    <ol class="breadcrumb justify-content-md-end mb-0">
                                        @foreach($breadcrumbs as $crumb)
                                            <li
                                                @class(['active' => $loop->last, 'breadcrumb-item'])
                                                @if(!$loop->last)
                                                    aria-current="page"
                                                @endif
                                            >
                                                @if(!$loop->last)
                                                    <a href="{{ $crumb['url'] }}">{{ $crumb['title'] }}</a>
                                                @else
                                                    {{ $crumb['title'] }}
                                                @endif
                                            </li>
                                        @endforeach
                                    </ol>
                                </nav>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <main class="container">
        @yield('content')
    </main>

    @include('components.footer')
@endsection
