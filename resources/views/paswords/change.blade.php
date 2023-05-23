@extends('layouts.app')
@section('content')
<body class="change">
    <div class="myform">
        <div class="container row text-end py-4 px-3" id="theform">
            <div class="col-12 col-md-4 bg-white py-3 mx-auto" style="border-radius:10px;margin-top:1rem">
                <form class="row g-3 needs-validation" action="" method="post" novalidate>
                    <h4 class="col-12 pt-5 px-4 fw-bold " style="direction: rtl;color:#3a4c94;">تغيير كلمة المرور </h4>
                    <div class="col-12 mb-3 input-box ">
                        <p class="mb-3 px-4 fw-bold" style="direction: rtl;color:#3a4c94"> كلمه المرور الحالية</p>
                        <input type="password"   id="new-password" class="form-control password id_password  mx-auto " name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="col-12 mb-3 input-box ">
                        <p class="mb-3 px-4 fw-bold" style="direction: rtl;color:#3a4c94;">  كلمة المرور الجديدة</p>
                        <input type="password"  id="password-confirmation" class="form-control password id_password  mx-auto " name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="col-12 mb-3 input-box mb-5">
                        <p class="mb-3 px-4 fw-bold" style="direction: rtl;color:#3a4c94;">  تأكيد كلمةالمرورالجديدة</p>
                        <input type="password"  id="password-confirmation" class="form-control password id_password  mx-auto " name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="col-12 text-center log m-auto mb-3 mt-4">
                        <button type="submit" class="btn py-2 text-light" id="my-button" >تغيير</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

@endsection
