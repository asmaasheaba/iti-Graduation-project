@extends('layouts.app')

@section('content')
    <div class="row text-center ">
        @foreach ($all as $cat)
            <div class="col-sm-12 col-md-6 col-lg-3 text-center my-5">
                <a href="{{route('services.index')}}?cat={{$cat->id}}"><img src="https://picsum.photos/200/200" alt="category_icon"></a>
                <h3>{{$cat->name}}</h3>
            </div>
        @endforeach
    </div>
@endsection