@extends('layouts.app')
@section('content')
    <div class="container">
        <h4 class="m-3 contact-txt-color-1 fw-bold m-0 text-end">الرسائل</h4>
        <div class="d-flex flex-wrap flex-lg-nowrap gap-2">
            <div class="col-12 col-lg-5 ">
                <div class="card  rounded-0 rounded-top chat row align-items-center border-0 py-3 px-3">
                    <div class="d-flex my-2">
                        <div class=" img-container50">
                            <img id="avatar" style="width: 50px" src="{{ asset('images/user.png') }}"
                                class="avatar-circlye fill col-2" alt="Avatar" />
                        </div>
                        <div class="d-flex flex-column justify-content-between w-100 me-3 status">
                            <h6 class="col contact-txt-color-2 fw-bold text-end p-0">إلهام موسي</h6>
                            <div class="d-flex align-items-center">
                                <span class="status-badge"></span>
                                <span class="status-label">نشط الآن</span>
                            </div>
                        </div>
                    </div>
                    <div class="search w-100 position-relative my-2">
                        <input type="search" name="search" class="p-10 w-100" placeholder="ابحث عن محادثة" />
                    </div>
                </div>
                @foreach (range(4, 1) as $count)
                    <div class="card border-0 p-2 w-100 m-0 my-1">
                        <div class="d-flex  align-items-end justify-content-end flex-wrap flex-lg-nowrap">
                            <div class="d-flex w-100">
                                <div class=" img-container50 d-flex align-items-center justify-content-center">
                                    <img id="avatar" style="width: 50px" src="{{ asset('images/user.png') }}"
                                        class="avatar-circlye fill " alt="Avatar" />
                                </div>
                                <div class="w-100 px-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h6 class="contact-txt-color-2 fw-bold text-end">أحمد محمد</h6>
                                        <h6 class="text-black-50 fs-small">منذ<span>3
                                                دقايق</span>
                                    </div>
                                    </h6>
                                    <div class=" d-flex  align-items-center justify-content-between w-100">
                                        <h6 class="text-end m-0 my-1 short-desc">هذا النص هو مثال لنص يمكن أن يستبدل في
                                            نفس
                                            المساحة،
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 col-lg-7">
                <div class="card messages-card border-0 p-3 border-0 rounded-0 rounded-top">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="col-12 col-md-4 img-container75 d-flex align-items-center justify-content-start">
                            <img id="avatar" style="width: 75px" src="{{ asset('images/user.png') }}"
                                class="avatar-circlye fill " alt="Avatar" />
                            <h6 class="me-3 contact-txt-color-1 fw-bold m-0">محمد عبدالعظيم</h6>
                        </div>
                    </div>
                </div>
                <div class="card border-0 p-3 rounded-0 rounded-bottom">
                    <div class="card border-0 w-100 m-0 ">
                        <div class="card-body p-0 py-2 chat-history">
                            <ul id="myulForChat">
                                @foreach (range(4, 1) as $count)
                                    <li class="d-flex justify-content-start align-items-center">
                                        <img src="/images/naguib_dog.jpg" style="max-height: 44px; border-radius: 50%">
                                        <span class="otherchat-text text-wrap text-end ">حمودي بسلسهليستخبايسخبياسخ يىبيسى
                                            خس يشسيسش سشيش يثضصب مخن صىمقص لصعخى صمفعخهعبيسى سيعباب
                                            سينعبيسبيس
                                        </span>
                                    </li>
                                    <li class="d-flex justify-content-end align-items-center">
                                        <span class="mychat-text text-light text-wrap text-end">حمودي بسلسهليستخبايسخبياسخ
                                            يىبيس لقصلق ثصلتع لاصخعصثقل لاعخثعللار 7 رصغبقصقل ى خسهعبيسى سيعباب
                                            سينعبيسبيس
                                        </span>
                                        <img src="/images/naguib_dog.jpg" style="max-height: 44px; border-radius: 50%">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex align-items-center justify-content-start gap-2">
                        <div class=" img-container30 d-flex align-items-center justify-content-center">
                            <img id="avatar" style="width: 30px" src="{{ asset('images/user.png') }}"
                                class="avatar-circlye fill col-2" alt="Avatar" />
                        </div>
                        <div class="col position-relative">
                            <input class="w-100 comment-input" placeholder="اكتب تعليقك هنا">
                            <i class="fa-solid fa-camera"></i>
                        </div>
                        <button class="px-4 py-1 btn edit-btn-1"> <i
                                class="fa-solid fa-paper-plane fa-flip-horizontal"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
