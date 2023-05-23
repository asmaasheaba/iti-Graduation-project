@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="my-2 mx-3">
                <h1 class="fw-bold">المدونة</h1>
            </div>
            @foreach ($blogs as $oneblog)
            <div class="col-12 col-md-6 col-lg-4">

                <div class="card mx-3 mb-5" style="border-radius:15px;border:none">
                    <a class="navbar-brand" href="{{ route('blogs.show', [$oneblog->id]) }}">
                        <img class="rounded-top-4" style="width:100%; height:327px;" src="{{ asset("$oneblog->image")}}" alt="">
                        <div class="card-body">
                            <p class="text-dark" style="direction:ltr;">   فى <span>{{$oneblog->created_at->format('d/m/Y')}}</span></p>
                            <p style=" color:blue;" class="fw-bold"> {{ $oneblog->name }}</p>

                            <p class="text-dark text-wrap fw-bold" style="direction: rtl; "> {{ $oneblog->description }}</p>

                        </div>
                    </a>
                </div>
            </div>
            @endforeach
          

        </div>
    </div>
@endsection
