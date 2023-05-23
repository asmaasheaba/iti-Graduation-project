@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="card" style="border-radius:20px;border:none">
            <img class="rounded-top-4" style="width:100%;height:400px;object-fit:cover; " src="{{ asset("$blog->image")}}"
                alt="Responsive image">
            <div class="card-body ">
                <div class="text-black-50 text-start"><span>{{$blog->created_at->format('d/m/Y')}}</span><span> فى</span></div>
                <p class="fw-bold contact-txt-color-2">{{$blog->name}}</p>
                <p class=" lh-lg"> {{$blog->description}}
                </p>
            </div>
        </div>


    </div>
    </div>
@endsection
