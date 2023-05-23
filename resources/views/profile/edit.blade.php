@extends('layouts.app')
@section('content')
    <div class="orderBg2 p-4">
                @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                <div class="alert alert-warning alert-danger fade show" role="alert">{{$error}} <button type="button" class="close"
                        data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button></div>
                @endforeach
            </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
        <div style="max-width: 800px" class="container card text-end p-4" id="editProfile">
            <div class="p-1">
            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <p class="fs-3 fw-bold contact-txt-color-1">تعديل البيانات الشخصية</p>
                <p class="fw-bold">الصورة الشخصية</p>
                <div class="img-dash">
                    <img src="{{asset("$user->image")}}" class="rounded-4 img-profile"
                        style="width: 80px; height: 80px; object-fit:cover " alt="Avatar" />
                    <span class="fw-bold me-5">تغيير الصورة الشخصية</span>
                    <input class="form-control" name="image" type="file" style="display:none" id="formFile">

                </div>
                <div class="mt-4 row g-3">
                    <div class="col-md-6">
                        <label for="fname" class="form-label">اسم المستخدم الأول</label>
                        <input type="text" name="first_name" value="{{Auth::user()->first_name}}" class="form-control bg-white shadow-none" id="fname">
                    </div>
                    <div class="col-md-6">
                        <label for="lname" class="form-label">اسم المستخدم الثاني</label>
                        <input type="text" value="{{Auth::user()->last_name}}"  name="last_name" class="form-control bg-white shadow-none" id="lname">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">البريد الالكتروني</label>
                        <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control bg-white shadow-none" id="email">
                    </div>
                    <div class="col-12">
                        <label for="number" class="form-label">رقم الجوال</label>
                        <input type="number" value="{{Auth::user()->phone}}"  name="phone" class="form-control bg-white shadow-none" id="number">
                    </div>
                    <div class="col-12">
                        <label for="bio" class="form-label">نبذة عن المستخدم</label>
                        <textarea name="brief" value="{{Auth::user()->brief}}" style="color:black" class="form-control bg-white shadow-none" id="bio" rows="3"></textarea>
                    </div>
                    <label class="form-label">طريقة التواصل</label>
                    <div class="d-flex d-flex">
                        <div class="form-check form-check-reverse ms-5">
                            <input name="contact_method"   class="form-check-input" type="radio"  id="inlineRadio1"
                                value="phone" @checked(Auth::user()->contact_method == 'phone')>
                            <label class="form-check-label" for="inlineRadio1">رقم الجوال</label>
                        </div>
                        <div class="form-check form-check-reverse  me-5">
                            <input name="contact_method"  class="form-check-input" type="radio"  id="inlineRadio2"
                                value="chat" @checked(Auth::user()->contact_method == 'chat')>
                            <label class="form-check-label" for="inlineRadio2">رسائل الموقع الالكتروني</label>
                        </div>
                    </div>
                    <label for="password" class="form-label mb-0">كلمة المرور</label>
                    <div class="d-flex align-items-center justify-content-start">

                        <div class="col-md-6 ">
                            <input name="password" type="password" class="form-control bg-white shadow-none" id="password">
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('profile.change_password') }}">
                                <h6 class="me-3 contact-txt-color-1 fw-bold m-0">تغيير كلمة المرور</h6>
                            </a>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <button class=" btn edit-profile-btn w-100 text-light " type="submit">
                            حفظ
                        </button>
                    </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        addEventListener("load", function() {
            // start of profile page image picker
            let imgSelector = document.querySelector(".img-dash");
            let imgInputFile = document.querySelector("#formFile");
            let avatar = document.querySelector(".img-profile");
            imgSelector.addEventListener("click", function() {
                imgInputFile.click();
            });
            document
                .querySelector('input[type="file"]')
                .addEventListener("change", function() {
                    if (this.files && this.files[0]) {
                        avatar.src = URL.createObjectURL(this.files[0]); // set src to file url
                    }
                }); // end of profile page image picker
        }); //load
    </script>
@endsection
