@extends('layouts.app')

@section('content')
<div class="comics">
    <div class="container">
        <span class="title">
            <h1 class="text-uppercase text-white bg-primary ">current series</h1>
        </span>
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
            <div class="main_button d-flex justify-center">
                <input class="btn btn-primary text-center text-white rounded-0 shadow">
            </div>
        </div>
    </div>
</div>
@endsection