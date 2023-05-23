@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    <div style="max-width: 800px" class="container mt-4">
        <div class="row card p-3">
            <div class="card-title mt-3">
                <h3 class="w-100 fw-bold">إنشاء طلب</h3>
                <p class="m-0">قم بمليء تفاصيل طلبك ليتمكن الآخرين من رؤية منتجك</p>
                <span class="w-100 d-inline-block rounded-pill" style="background:#ECECEC">
                    <div class="w-50 rounded-pill" id="progress-bar" style="height: 8px;background:#25178f"></div>
                </span>
            </div>

            <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row" data-step>
                    <h5 class="w-100 fw-bold mt-2 pe-0">تفاصيل الطلب</h5>
                    <h6 class="w-100 fw-bold mt-2 mb-3 pe-0">صورة الطلب</h6>
                    <div class="img-dash mb-4 d-flex align-items-center px-2">
                        <input class="form-control" type="file" style="display:none" id="formFile">
                        <img src="{{ asset('images/img-placeholder.png') }}" class="rounded-4 img-profile"
                            style="width: 80px; height: 80px; object-fit:cover " alt="Avatar" />
                        <div class="add-btn-imgorder">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <span class="me-4">ارفق صورة منتجك، لاتزيد عن 5 ميجا</span>
                    </div>
                    <div class="col-12 mb-3 p-0">
                        <label class="mb-3 fw-bold">اسم الطلب</label>
                        <input type="text" name="firstName"
                            class="form-control input-style-1 @error('firstName') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold"> القسم الرئيسي</label>
                        <select type="text" name="lastName"
                            class="form-select custom-select input-style-1 @error('lastName') is-invalid @enderror">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 ps-0">
                        <label class="mb-3 fw-bold"> القسم الفرعي</label>
                        <select type="text" name="lastName"
                            class="form-select custom-select input-style-1 @error('lastName') is-invalid @enderror">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3 p-0">
                        <label class="fw-bold">خدمات اضافية</label>
                        <select type="text" name="extra"
                            class="form-select custom-select input-style-1 @error('extra') is-invalid @enderror">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        @error('extra')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3 input-box p-0">
                        <label class="mb-3 fw-bold">وصف الطلب</label>
                        <textarea name="order" id="order" class="form-control input-style-1" placeholder="description" rows="3">
                                </textarea>
                    </div>
                    <div class="col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold">بداية السعر المتوقع</label>
                        <select type="number" name="lastName"
                            class="form-select custom-select input-style-1 @error('lastName') is-invalid @enderror">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3  ps-0">
                        <label class="mb-3 fw-bold">نهاية السعر المتوقع</label>
                        <select type="number" name="lastName"
                            class="form-select custom-select input-style-1 @error('lastName') is-invalid @enderror">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mx-lg-auto my-3 col-lg-6 text-center">
                        <button type="button" class="btn edit-btn-1 w-100" id="order-next-step">
                            التالي
                        </button>
                    </div>
                </div>
                <div class="row" data-step>
                    <h6 class="w-100 fw-bold mt-2 mb-3 pe-0">التواصل</h6>
                    <div class="head form-group col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold">المدينة</label>
                        <div class="search_select_box position-relative p-0">
                            <select data-live-search="true" name="" id="" class="w-100 ">
                                {{-- @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" class="text-end">
                                        {{ $country->name }}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="head form-group col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold">الدولة</label>
                        <div class="search_select_box position-relative p-0">
                            <select data-live-search="true" name="" id="" class="w-100">
                                {{-- @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" class="text-end">
                                        {{ $country->name }}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold">رقم الجوال</label>
                        <input type="text" name="lastName"
                            class="form-control input-style-1 @error('lastName') is-invalid @enderror" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3 p-0">
                        <label class="fw-bold">طريقه التواصل</label>
                        <br>
                        <div role="group" aria-label="Basic checkbox toggle button group">
                            <div class="d-flex align-items-center m-1">
                                <input type="radio" name="contact_method" id="phoneNum" class="ms-2">
                                <label for="phoneNum">رقم الجوال</label>
                            </div>
                            <div class="d-flex align-items-center m-1">
                                <input type="radio" name="contact_method" id="contact" class="ms-2">
                                <label for="contact">رسائل الموقع الإلكتروني</label>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->

                    <div class="col-12 mx-lg-auto col-lg-6 text-center">
                        <button type="submit" class="btn edit-btn-2 w-100" data-bs-toggle="modal"
                            data-bs-target="#sendOrder">
                            ارسال الطلب
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="sendOrder" tabindex="-1" aria-labelledby="sendOrderLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="contact-txt-color-1 fw-bold text-center my-4"> تم إعادة إنشاء منتجك بنجاح !
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
    <script>
        let nextStepBtn = document.querySelector('#order-next-step');
        let allSteps = document.querySelectorAll('div[data-step]');
        allSteps[0].classList.add('active');

        let progressBar = document.querySelector('#progress-bar');
        nextStepBtn.onclick = function() {
            allSteps[0].classList.remove('active');
            allSteps[1].classList.add('active');
            progressBar.classList.remove('w-50')
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#country-dd').on('change', function() {
                var idCountry = this.value;
                $("#city-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-cities') }}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#city-dd').html('<option value="" disabled>اختر المدينة</option>');
                        $.each(result.cities, function(key, value) {
                            $("#city-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

        });
    </script>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script>
        $('.search_select_box select').selectpicker();
    </script>
@endsection
