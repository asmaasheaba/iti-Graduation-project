@extends('layouts.app')

@section('content')
    {{-- {{dd($all)}} --}}
    <div class="row">
        <div class="col-lg-3 bg-warning">
            Filters Section
        </div>
        <div class="col-lg-9 col-xs-12 text-center">
            @foreach ($all as $service)
                <div class="col-12 bg-success">
                    <a href="#"><img src="https://picsum.photos/200/200" alt="category_icon"></a>
                    <h3>{{$service->title}}</h3>
                </div>
        @endforeach
        </div>
    </div>
@endsection