@extends('layouts.layout', [
    'title' => 'Tantus Corporation',
])

@section('content')
    <section>
        <h3>Industrial Chillers You Can Trust</h3>
        <p>
            TANTUS Corporation delivers state-of-the-art industrial chillers with unmatched performance and durability.
            Designed to keep your systems cool under the harshest conditions.
        </p>
        <a href="#" class="btn btn-primary">Learn More</a>
    </section>

    <section class="section row text-center">
        <div class="col-md-4">
            <div class="feature-icon">❄️</div>
            <h4>Efficient Cooling</h4>
            <p>High-performance chillers designed for energy efficiency and low maintenance.</p>
        </div>
        <div class="col-md-4">
            <div class="feature-icon">⚙️</div>
            <h4>Durable Build</h4>
            <p>Rugged construction using premium materials to withstand industrial environments.</p>
        </div>
        <div class="col-md-4">
            <div class="feature-icon">🔧</div>
            <h4>Easy Service</h4>
            <p>Simple maintenance protocols and responsive customer support.</p>
        </div>
    </section>
@endsection
