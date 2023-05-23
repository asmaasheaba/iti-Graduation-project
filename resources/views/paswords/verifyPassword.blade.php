<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="{{asset('css/registrationStyle.css')}}">
    <title>Atlob</title>

</head>

<body class="body-forms">

    <section class="login py-5 forms">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-7 col-md-4 empty"></div>
                <div class="col-lg-5 col-md-8 form-cont mt-5">
                    <form method="POST" action=" " class="mt-5 bg-white p-5 login-form form-body">
                        @csrf                        
                        <h3 class="modal-title w-100 fw-bold mb-3">كود التفعيل</h3>
                        <p class="mb-5" style="direction: rtl">يرجى إدخال كود التفعيل التي تم إرساله على البريد الالكتروني لتتمكن من استيعاد كلمه المرور</p>
                        <div class="modal-body ">
                            

                            <div class="mb-3 input-box">
                                <label class="mb-3 fw-bold" for="password">{{ __('إدخال كود التفعيل') }}</label>
                                <div class="d-flex justify-content-between" style="height:50px;">
                                <input type="text" id="text" name="code1" style="width:10%;" class="form-control" maxlength="1">
                                <input type="text" id="text" name="code2" style="width:10%;" class="form-control" maxlength="1">
                                <input type="text" id="text" name="code3" style="width:10%;" class="form-control" maxlength="1">
                                <input type="text" id="text" name="code4" style="width:10%;" class="form-control" maxlength="1">
                                <input type="text" id="text" name="code5" style="width:10%;" class="form-control" maxlength="1">
                                <input type="text" id="text" name="code6" style="width:10%;" class="form-control" maxlength="1">
                            </div>
                            </div>

                            
                        </div>

                        <div class="mb-2" style="direction:ltr;">
                            <label class="form-check-label" for="remember">
                                <a href="#" class="fw-bold forget-password">إعاده إرسال الكود</a>
                            </label>
                        </div>

                        <div class="text-center log m-auto mb-3 mt-5">
                            <button type="submit" class="btn py-2 text-light">{{ __('تأكيد') }}</button>
                        </div>

                        <p class="text-center text-secondary mt-5">
                            <a href="{{ route('password.email') }}" class="fw-bold">تغيير البريد الالكتروني</a>
                        </p>

                    </form>
                </div>
            </div>

        </div>


    </section>
    <div class="container">
        <img src="{{asset ('images/teamwork-bro.png')}}" width="600px" height="600px" class="team-work">
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    


</body>

</html>