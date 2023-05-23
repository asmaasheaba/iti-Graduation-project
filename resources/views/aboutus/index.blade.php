@extends('layouts.app')

@section('content')
{{-- {{dd($aboutData)}} --}}
    <div class="container text-end p-4">
        <div class="d-flex flex-column mx-auto card col col-lg-6 mx-auto">
            <h3 class="col-12 my-3 px-4 fw-bold ">من نحن </h3>
            <p class="col-12 px-4 lh-lg">
                {{$aboutData->about}}
            </p>
            <h4 class="text-center call  my-2"> تواصل معنا</h4>
            <div class="row text-center my-3">
                <div class="col-12 col-md-6"> <i class="fa-solid fa-phone mx-2"></i>  {{$aboutData->number}} </div>
                <div class="col-12 col-md-6 copy-number"><i class="fa-solid fa-copy  mx-3"></i> نسخ </div>
            </div>
            <div class="text-center mb-4 mt-2 social-icon">
                <a href=" {{$aboutData->face}}"> <img src="{{asset('images/face.png')}}" width="40px" height="40px" class="mx-2"></a>
                <a href=" {{$aboutData->insta}}"> <img src="{{asset('images/insta.jpg')}}" width="40px" height="40px" class="mx-2"></a>
                <a href=" {{$aboutData->youtuob}}"> <img src="{{asset('images/youtyoub.png')}}" width="40px" height="40px" class="mx-2"></a>
                <a href=" {{$aboutData->snap}}"> <img src="{{asset('images/snap.png')}}" width="40px" height="40px" class="mx-2"></a>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
@endsection
