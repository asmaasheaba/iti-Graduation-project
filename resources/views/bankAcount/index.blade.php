@extends('layouts.app')

@section('content')
{{-- {{dd($bankData)}} --}}
    <div class="container text-end p-4">
        <div class="d-flex flex-column mx-auto card col col-lg-6 mx-auto p-2">
            <h3 class="col-12 my-3 px-3 fw-bold"> الحساب البنكى </h3>
            <p class="col-12 px-3 lh-lg">
                {{$bankData->about}}
            </p>
            <h4 class="text-center call fw-bold  my-4"> 
                {{$bankData->name}}
            </h4>
            <div class="d-flex justify-content-center">
                <p class="fw-bold">رقم IBAN</p>
                <span class="mx-3 contact-txt-color-2 fw-bold" style="direction: ltr"> {{$bankData->number}}</span>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
@endsection
