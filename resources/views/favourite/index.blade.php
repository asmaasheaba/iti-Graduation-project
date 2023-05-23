@extends('layouts.app')
@section('content')
{{-- {{dd($favorits)}} --}}
{{-- {{dd($orders)}} --}}
{{-- {{dd($count)}} --}}

    <div class=" p-4">
        <div class="container col-12 col-md-10 col-xl-8">
            <h4 class="m-3 contact-txt-color-1 fw-bold m-0 text-end">المفضلة</h4>
            <div class="mt-3  p-2 mx-auto">
                @foreach ($orders as $order)

                    <div class="card bg-white border-0 p-3 w-100 m-0 mb-3">
                        <div class="d-flex  align-items-center ">
                            <div class="d-none d-sm-block ms-4">
                                <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp"
                                    class="rounded-pill" style="width: 80px; height: 80px; object-fit:cover "
                                    alt="Avatar" />
                            </div>
                            <div class="w-100">
                                <div class="d-flex  align-items-start justify-content-between w-100">
                                    <h6 class="contact-txt-color-2 fw-bold">{{$order->title}}</h6>
                                    <div>
                                        <a href="{{route('favourite.delete',$order->id)}}">
                                            <i class="fa-solid fa-heart favourite-added"></i>
                                        </a>
                                        
                                    
                                    </div>
                                </div>
                                <h6 class="text-end m-0 my-2 text-black-50 ">{{$order->country->name}} ،{{$order->city->name}}</h6>
                                <h6 class="text-end m-0 my-2 short-desc ">
                                    {{$order->description}}
                                </h6>
                                <div class="d-flex  align-items-center justify-content-between w-100 flex-wrap ">
                                    <div class="col-6 col-md-4 ">
                                        <h6 class="col contact-txt-color-2 fw-bold text-end p-0">السعر المتوقع:
                                            <span class="d-block d-sm-inline m-0">الف {{$order->min_price}} - الف
                                              {{$order->max_price}}  </span>
                                        </h6>
                                    </div>
                                    <div class="col-6 col-md-4 ">
                                        <h6 class="col contact-txt-color-2 fw-bold text-center "> الكمية:
                                            <span>9</span>
                                            <span> سيارات </span>
                                        </h6>
                                    </div>
                                    <div class="col-12 col-md-4 ">
                                        <h6 class="col text-center text-md-start m-0 my-2 me-4 text-black-50">تم
                                            النشر
                                            بتوقيت <span class="d-block d-sm-inline">{{$order->created_at}}</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        addEventListener("load", function() {});
    </script>
@endsection
