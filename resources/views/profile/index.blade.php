@extends('layouts.app')
@section('content')
    <div class=" p-4 ">
        <div class="container card p-4 col-12 col-md-8 col-lg-6 ">
            <div class="position-relative d-flex flex-wrap justify-content-between align-items-center">
                <div class="py-2 btn edit-btn"><a href="{{ route('profile.edit',$user->id) }}" class="">
                        <span class="d-none d-md-block text-light">تعديل البيانات</span>
                        <i class="fa-solid fa-user-pen d-block d-md-none text-light"></i>
                    </a></div>
                <div class="col-12 col-md-6 img-container d-flex align-items-center justify-content-start">
                    <img id="avatar" src="{{asset("$user->image")}}" class="avatar-circlye fill " style="width: 100px; hight:100px;"
                        alt="Avatar" />
                    <h6 class="me-3 contact-txt-color-1 fw-bold m-0">{{$user->first_name}}</h6>
                </div>
                <div
                    class="d-flex col-12 col-md-6  align-items-center justify-content-center justify-content-md-between mt-4 mt-md-0">
                    <div class=" d-flex align-items-center justify-content-center mn-12">
                        <i class="fa-solid fa-location-dot icon-24"></i>
                        <h6 class="fw-bold me-3 m-0 ">مكة المكرمة ، حي شرق</h6>
                    </div>
                </div>
            </div>
            <br>
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <div class="d-flexjustify-content-start col-6 col-md-4">
                    <div>
                        <p class="my-2 fw-bold m-0">البريد الإلكتروني</p>
                        <p class="contact-txt-color-2 m-0">{{$user->email}}</p>
                    </div>
                </div>
                <div class="d-flex  justify-content-md-center justify-content-end col-6 col-md-4">
                    <div>
                        <p class="my-2 fw-bold m-0">رقم الجوال</p>
                        <p class="contact-txt-color-2 m-0">{{$user->phone}}</p>
                    </div>
                </div>
                <div class="d-flex  justify-content-md-end justify-content-center  col-12 col-md-4">
                    <div>
                        <p class="my-2 fw-bold m-0">طريقة التواصل</p>
                        <p class="contact-txt-color-2 m-0">{{$user->contact_method}}</p>
                    </div>
                </div>
            </div>
            <div class=" mt-4">
                <h6 class="my-2  fw-bold m-0">نبذة عن المستخدم</h6>
                <p class="text-end lh-lg text-wrap">{{$user->brief}}</p>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
@endsection
