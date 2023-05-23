@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="d-flex flex-wrap flex-lg-nowrap gap-2">
            <div class="col-12 col-lg-7">
                <div class="card  border-0 p-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="col-12 col-md-4 img-container75 d-flex align-items-center justify-content-start">
                            <img id="avatar" style="width: 75px" src="{{ asset('images/user.png') }}"
                                class="avatar-circlye fill " alt="Avatar" />
                            <h6 class="me-3 contact-txt-color-1 fw-bold m-0">محمد عبدالعظيم</h6>
                        </div>
                        <div
                            class="d-flex col-6 col-md-4 align-items-center justify-content-center justify-content-md-between">
                            <div class=" d-flex align-items-center justify-content-center mn-12">
                                <i class="fa-solid fa-location-dot icon-24"></i>
                                <h6 class="fw-bold me-3 m-0 ">مكة المكرمة ، حي شرق</h6>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="py-2 px-2 px-md-4 btn edit-btn-1" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            إنهاء الطلب
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h4 class="contact-txt-color-1 fw-bold text-center my-4"> تم إنهاء منتجك بنجاح
                                            !
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card  border-0 p-3 mt-2">
                    <div class="d-flex  align-items-center justify-content-between w-100 flex-wrap ">
                        <div class="col-6">
                            <h6 class="col contact-txt-color-2 fw-bold text-end p-0">سيارة ديجتال </h6>
                        </div>
                        <div class="col-6">
                            <h6 class="col contact-txt-color-2 fw-bold text-end "> الكمية:
                                <span>9</span>
                                <span> سيارات </span>
                            </h6>
                        </div>
                    </div>
                    <h6 class="text-end m-0 my-2 lh-lg">هذا النص هو مثال لنص يمكن أن يستبدل في نفس
                        المساحة،
                        لقد تم
                        توليد هذا النص من مولد النص العربى
                    </h6>
                    <div id="carouselExampleCaptions" class="carousel slide rounded-3" data-bs-ride="carousel">
                        <div class="carousel-indicators rounded-3">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner rounded-3">
                            @foreach (range(3, 1) as $count)
                                <div class="carousel-item active post" data-bs-interval="2000 position-relative">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/05{{ $count }}.webp"
                                        class="d-block w-100 rounded-3" alt="...">
                                    <div class="expected-price">
                                        <p class="text-start m-0">السعر المتوقع </p>
                                        <p class=" m-0">الف 100 - الف
                                            120</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-12 col-lg-5 ">
                <div class="card border-0 py-3 px-3 mb-1 rounded-0 rounded-top">
                    <h6 class="col contact-txt-color-2 fw-bold text-end p-0">التفاصيل</h6>
                    <div class="d-flex  align-items-center justify-content-between w-100 mb-2">
                        <div class="col-6">
                            <p class="col m-0">القسم الرئيسي: <span>سيارة</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="col m-0">القسم الفرعي: <span>بيضاء اللون</span>
                            </p>
                        </div>
                    </div>
                    <p class="m-0 mb-1">الخدمة الإضافية: <span>موديل 2023</span>
                </div>
                <div class="card border-0 py-3 px-3 rounded-0 rounded-bottom">
                    <h6 class="col contact-txt-color-2 fw-bold text-end p-0">التعليقات</h6>
                    @foreach (range(4, 1) as $count)
                        <div class="card border-0 w-100 m-0 my-3">
                            <div class="d-flex  align-items-end justify-content-end flex-wrap flex-lg-nowrap">
                                <div class="d-flex">
                                    <div class=" img-container50 d-flex align-items-center justify-content-center">
                                        <img id="avatar" style="width: 50px" src="{{ asset('images/user.png') }}"
                                            class="avatar-circlye fill " alt="Avatar" />
                                    </div>
                                    <div class="w-100 px-3">
                                        <h6 class="contact-txt-color-2 fw-bold text-end">أحمد محمد</h6>
                                        <div class=" d-flex  align-items-center justify-content-between w-100">
                                            <h6 class="text-end m-0 my-1">هذا النص هو مثال لنص يمكن أن يستبدل في نفس
                                                المساحة،
                                        </div>
                                    </div>
                                </div>

                                <h6 class="text-end m-0 my-2 text-black-50">تم النشر بتوقيت <span
                                        class="d-block d-sm-inline">10 مارس
                                        2022</span></h6>
                            </div>
                        </div>
                    @endforeach
                    <br>
                    <div class="d-flex align-items-center justify-content-start gap-2">
                        <div class=" img-container30 d-flex align-items-center justify-content-center">
                            <img id="avatar" style="width: 30px" src="{{ asset('images/user.png') }}"
                                class="avatar-circlye fill col-2" alt="Avatar" />
                        </div>
                        <div class="col position-relative">
                            <input class="w-100 comment-input" placeholder="اكتب تعليقك هنا">
                            <i class="fa-solid fa-camera "></i>
                        </div>
                        <button class="col-3 col-md-2 py-1 btn edit-btn-1"> ارسال</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
