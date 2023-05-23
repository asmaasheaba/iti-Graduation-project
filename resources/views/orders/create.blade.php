@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endsection
@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div style="max-width: 800px" class="container mt-4">
        <div class="row card p-3">
            <div class="card-title mt-3">
                <h3 class="w-100 fw-bold">إنشاء طلب</h3>
                <p class="m-0">قم بمليء تفاصيل طلبك ليتمكن الآخرين من رؤية منتجك</p>
                <span class="w-100 d-inline-block rounded-pill" style="background:#ECECEC">
                    <div class="w-50 rounded-pill" id="progress-bar" style="height: 8px;background:#25178f"></div>
                </span>
            </div>

            <form id="order-form" method="post" action="{{ route('orders.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row" data-step>
                    <h5 class="w-100 fw-bold mt-2 pe-0">تفاصيل الطلب</h5>
                    <h6 class="w-100 fw-bold mt-2 mb-3 pe-0">صورة الطلب</h6>
                    <div class="img-dash mb-4 d-flex align-items-center px-2">
                        <input class="form-control" type="file" style="display:none" name="image" id="formFile">
                        <img src="{{ asset('images/img-placeholder.png') }}" class="rounded-4 img-profile"
                            style="width: 80px; height: 80px; object-fit:cover " alt="Avatar" />
                        <div class="add-btn-imgorder">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <span class="me-4">ارفق صورة منتجك، لاتزيد عن 5 ميجا</span>
                    </div>
                    <div class="col-12 mb-3 p-0">
                        <label class="mb-3 fw-bold">اسم الطلب</label>
                        <input type="text" id="title" name="title"
                            class="form-control input-style-1 @error('title') is-invalid @enderror" required>
                            <span class="d-none bg-danger err-msg" id="title-err"><span>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold"> القسم</label>
                        <select type="text" name="category_id"
                            class="form-select custom-select input-style-1 @error('category_id') is-invalid @enderror">
                            @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3 input-box p-0">
                        <label class="mb-3 fw-bold">وصف الطلب</label>
                        <textarea name="description" id="order" class="form-control input-style-1" placeholder="description" rows="4"></textarea>
                    </div>
                    <div class="col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold">بداية السعر المتوقع</label>
                        <input type="number" name="min_price" id="min_price"><br>
                        <span class="d-none bg-danger err-msg" id="min-price-err"><span>
                        @error('min_price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold">نهاية السعر المتوقع</label>
                        <input type="number" name="max_price" id="max_price">
                        @error('max_price')
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
                        <label class="mb-3 fw-bold">الدولة</label>
                        <div class="search_select_box position-relative p-0">
                            <select data-live-search="true" name="country" id="country-id"
                                class="w-100 form-control select">
                                <option value="" disabled selected>اختر الدولة</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->name }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="d-none bg-danger err-msg" id="country-err"><span>
                        </div>
                    </div>


                    <div class="head form-group col-12 col-lg-6 mb-3 pe-0">
                        <label class="mb-3 fw-bold">المدينة</label>
                        <div class="search_select position-relative p-0 choseCity">
                            <select class="form-control" name="city" id="cities">
                                <option value="">اختر المدينه من هنا</option>
                            </select>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <div class="col-12 mx-lg-auto col-lg-6 text-center">
                        <button type="submit" class="btn edit-btn-2 w-100" id="submit-order"
                        {{-- data-bs-toggle="modal" --}}
                            {{-- data-bs-target="#sendOrder" --}}
                            >
                            ارسال الطلب
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    {{-- <div class="modal fade" id="sendOrder" tabindex="-1" aria-labelledby="sendOrderLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h4 class="contact-txt-color-1 fw-bold text-center my-4"> تم إنشاء منتجك بنجاح ! </h4>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <script>
        document.querySelector('body').classList.add('orderBg1');
    </script>
    <script>
        let nextStepBtn = document.querySelector('#order-next-step');
        let allSteps = document.querySelectorAll('div[data-step]');
        allSteps[0].classList.add('active');

        let progressBar = document.querySelector('#progress-bar');
        nextStepBtn.onclick = function() {
            if(!validateStep1()){
                return
            }
            allSteps[0].classList.remove('active');
            allSteps[1].classList.add('active');
            progressBar.classList.remove('w-50')
        }
        let submitOrderBtn = document.querySelector('#submit-order');

        submitOrderBtn.onclick = function(e){
            e.preventDefault();
            if(!validateStep2()){
                return
            }

            $('#order-form').submit();

        }

        function validateStep1(){
            $('.err-msg').addClass('d-none');
            if(!$('#title').val()){
                $('#title-err').removeClass('d-none');
                $('#title-err').text('لابد من كتابة اسم الطلب');
                return false;
            }
            if(!$('#min_price').val()){
                $('#min-price-err').removeClass('d-none');
                $('#min-price-err').text('لابد من كتابة اقل سعر');
                return false;
            }
            return true;
        }
        function validateStep2(){
            $('.err-msg').addClass('d-none');
            if(!$('#country-id').val()){
                $('#country-err').removeClass('d-none');
                $('#country-err').text('لابد من اختيار اسم الدولة');
                return false;
            }
            return true;
        }

    </script>
    <script>
        $(document).ready(function() {
            $('#country-id').on('change', function() {
                var id = this.value;
                // $("#cities").html('');
                // $('.search_select').selectpicker('refresh');
                $.ajax({
                    url: "{{ url('api/fetch-cities') }}",
                    type: "POST",
                    data: {
                        country_id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',

                    success: function(result) {
                        $('#cities').html(
                            '<option value="" disabled selected>اختر المدينة</option>');
                        $.each(result.cities, function(key, value) {
                            $("#cities").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        // $('.search_select select').selectpicker();
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
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    {{-- <script>
        $('.search_select_box .select').selectpicker();
    </script> --}}
@endsection
