@extends('layouts.app')

@section('content')
<div class="comics">
    <div class="container">
        <h2 class="my-4">Tutti i prodotti</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
            @foreach ($comics as $comic)
            <div class="col">
                <div class="card border-0">
                    <img class="img-fluid card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h4 class="card-title">
                            {{ $comic['series'] }}
                        </h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection