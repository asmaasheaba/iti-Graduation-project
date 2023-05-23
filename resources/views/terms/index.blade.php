@extends('layouts.app')

@section('content')
{{-- {{dd($termData)}} --}}
    <div class="container text-end p-4">
        <div class="d-flex flex-column mx-auto card col col-lg-6 p-2 mx-auto">
            <h3 class="col-12 my-3 px-4 fw-bold"> الشروط و الاحكام</h3>
            <p class="col-12 px-3 lh-lg">
                {{$termData->termsAndConditions}}
            </p>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
@endsection
