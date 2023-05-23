@extends('layouts.app')
@section('content')
    <div class="orderBg1 p-4 ">
        <div class="container">
        @if(session('message'))
        <h5 style="max-width:500px" class="mx-auto alert alert-success mb-2">{{session('message')}}</h5>
        @endif
        <div style="max-width:500px" class="container card text-end p-4 pb-5" id="editProfile">
            <form action="{{Route('profile.change_password')}}" method="post">
                @csrf
                <p class="fs-3 fw-bold contact-txt-color-1">تغيير كلمةالمرور</p>
                <div class=" row g-3">
                    <div class="col-10">
                        <label for="currentPassword" class="form-label ">كلمة المرور الحالية</label>
                        <input type="password" name="current_password" class="@error('current_password') is-invalid @enderror form-control bg-white shadow-none" id="currentPassword">
                    </div>
              @error('current_password')
              <span style="color:rgb(221, 10, 10);">
                <strong>{{ $message }}</strong>
            </span>
              @enderror
                    <div class="col-10">
                        <label for="newPasswd" class="form-label">كلمة المرور الجديدة</label>
                        <input type="password" name="password" class="@error('password') is-invalid @enderror form-control bg-white shadow-none" id="newPasswd">
                    </div>

                    @error('password')
                    <span style="color:rgb(221, 10, 10);">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror
                    <div class="col-10 mb-5">
                        <label for="confirmNewPasswd" class="form-label">تأكيد كلمة المرور الجديدة</label>
                        <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control bg-white shadow-none" id="confirmNewPasswd">
                    </div>

                    @error('password_confirmation')
                    <span style="color:rgb(221, 10, 10);">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="text-center my-5">
                        <button class=" btn edit-profile-btn w-75 text-light " type="submit">
                            تغيير
                        </button>
                    </div>
            </form>
        </div>
        </div>
    </div>
@endsection
