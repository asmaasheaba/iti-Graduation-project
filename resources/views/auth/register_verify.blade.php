@extends('layouts.auth-layout')
@section('content')
    <div class="container d-none d-lg-block ">
        <img src="{{ asset('images/teamwork-bro.png') }}" width="600px" height="600px" class="team-work">
    </div>
    <section class=" py-5 forms ">
        <div class="container">
            <h2 class="text-center mb-4 text-white fw-bold">مرحبـًا بك في أطلبس </h2>
            <div class="row d-flex justify-content-end   ">
                <div class="col-lg-4 col-md-8 card shadow mb-5">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                        class="bg-white px-1 px-md-3 py-3 form-body ">
                        @csrf
                        <h5 class="contact-txt-color-1 fw-bold mt-4">تأكيد الحساب الشخصي</h5>
                        <h6 class="fw-bold">الصورة الشخصية</h6>
                        <div class="img-dash">
                            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-4 img-profile"
                                style="width: 70px; height: 70px; object-fit:cover " alt="Avatar" />
                            <span class="fw-bold me-3">تغيير الصورة الشخصية</span>
                            <input class="form-control " type="file" style="display:none" id="formFile">
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold"> الاسم الأول</label>
                                <input type="text" name="firstName"
                                    class="form-control @error('firstName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-lg-6 mb-3 ">
                                <label class="mb-3 fw-bold"> الاسم الأخير</label>
                                <input type="text" name="lastName"
                                    class="form-control  @error('lastName') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12 mb-3">
                                <label class="mb-3 fw-bold">البريد الالكتروني</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="mb-3 fw-bold"> رقم الجوال</label>
                                <input type="number" name="phone" placeholder="يبدأ الرقم ب 05 وبتبعه 8 ارقام"
                                    class="form-control" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12 mb-3 input-box">
                                <label class="mb-3 fw-bold">كلمة المرور </label>
                                <input type="password" name="password" id="password"
                                    class="form-control password id_password @error('password') is-invalid @enderror"
                                    required autocomplete="new-password">
                                <span class="contact-text-1 fw-bold"><a href="">تغيير</a></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3 input-box">
                                <label class="mb-3 fw-bold"> نبذة عن المستخدم </label>
                                <div class="form-floating">
                                    <textarea name="userDetails" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                </div>
                            </div>
                            <label class="mb-3 fw-bold"> نوع المستخدم</label>

                            <div class="d-flex">
                                <div class="col-md-6">
                                    <input type="radio" name="type" value="0" class="form-check-input"
                                        id="info_type0">
                                    <label for="info_type0">مزود خدمة
                                    </label>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <input type="radio" name="type" value="1" class="me-3  form-check-input"
                                        id="info_type1">
                                    <label for="info_type1">طالب خدمة</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn w-100 py-2 text-white text-center log  my-4">تأكيد</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
