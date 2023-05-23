@extends('layouts.app')
@section('content')
    <div class="bg-white  p-4 ">
        <div class="container ">
            <h4 class="m-3 contact-txt-color-1 fw-bold m-0 text-end">طلباتي</h4>
            <div class="row card rounded-3 myorder-bg-color border-0 ">
                <div class="rounded-3 p-0">
                    <div class="d-flex  myorder-header">
                        <h2 class="col myorder-header-txt header-active">طلبات نشطة</h2>
                        <h2 class="col myorder-header-txt">طلبات منتهية</h2>
                    </div>
                </div>
                <div class="mt-3 myorder-card  p-2 mx-auto">
                    {{-- start of active orders --}}
                    <div id="active-orders" class="d-block">
                        @foreach (range(4, 1) as $count)
                            <div class="card border-0 p-3 w-100 m-0 mb-3">
                                <div class="d-flex  align-items-center ">
                                    <div class="d-none d-sm-block ms-4">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/05{{ $count }}.webp"
                                            class="rounded-pill" style="width: 80px; height: 80px; object-fit:cover "
                                            alt="Avatar" />
                                    </div>
                                    <div class="w-100">
                                        <div class="d-flex  align-items-start justify-content-between w-100">
                                            <h6 class="contact-txt-color-2 fw-bold">سيارة ديجيتال</h6>
                                            <div>
                                                <a href="{{ route('orders.active') }}">
                                                    <h6 class="me-3 contact-txt-color-1 fw-bold m-0">إلغاء الطلب</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <h6 class="text-end m-0 my-2 text-black-50 ">مكة المكرمة ، حي شرق</h6>
                                        <h6 class="text-end m-0 my-2 short-desc ">هذا النص هو مثال لنص يمكن أن يستبدل في نفس
                                            المساحة،
                                            لقد تم
                                            توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من
                                            النصوص
                                            الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد
                                            أكبر من
                                            الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو</h6>
                                        <div class=" d-flex  align-items-center justify-content-between w-100">
                                            <h6 class="contact-txt-color-2 fw-bold text-end">السعر المتوقع: <span
                                                    class="d-block d-sm-inline m-0">الف 100 - الف
                                                    120</span>
                                            </h6>
                                            <h6 class="text-end m-0 my-2 me-4 text-black-50">تم النشر بتوقيت <span
                                                    class="d-block d-sm-inline">10 مارس
                                                    2022</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{-- start of finished orders --}}
                    <div id="finished-orders" class="d-none">
                        @foreach (range(4, 1) as $count)
                            <div class="card border-0 p-3 w-100 m-0 mb-3">
                                <div class="d-flex  align-items-center ">
                                    <div class="d-none d-sm-block ms-4">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/04{{ $count }}.webp"
                                            class="rounded-pill" style="width: 80px; height: 80px; object-fit:cover "
                                            alt="Avatar" />
                                    </div>
                                    <div class="w-100">
                                        <div class="d-flex  align-items-start justify-content-between w-100">
                                            <h6 class="contact-txt-color-2 fw-bold">سيارة ديجيتال</h6>
                                            <div>
                                                <a href="{{ route('orders.finished') }}">
                                                    <h6 class="me-3 contact-txt-color-1 fw-bold m-0">إعادة الطلب</h6>
                                                </a>
                                            </div>
                                        </div>
                                        <h6 class="text-end m-0 my-2 text-black-50 ">مكة المكرمة ، حي شرق</h6>
                                        <h6 class="text-end m-0 my-2 short-desc ">هذا النص هو مثال لنص يمكن أن يستبدل في نفس
                                            المساحة،
                                            لقد تم
                                            توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من
                                            النصوص
                                            الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد
                                            أكبر من
                                            الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو</h6>
                                        <div class="d-flex  align-items-center justify-content-between w-100 flex-wrap ">
                                            <div class="col-6 col-md-4 ">
                                                <h6 class="col contact-txt-color-2 fw-bold text-end p-0">السعر المتوقع:
                                                    <span class="d-block d-sm-inline m-0">الف 100 - الف
                                                        120</span>
                                                </h6>
                                            </div>
                                            <div class="col-6 col-md-4 ">
                                                <h6 class="col contact-txt-color-2 fw-bold text-center "> النوع:
                                                    <span>أفراد</span>
                                                </h6>
                                            </div>
                                            <div class="col-12 col-md-4 ">
                                                <h6 class="col text-center text-md-start m-0 my-2 me-4 text-black-50">تم
                                                    النشر
                                                    بتوقيت <span class="d-block d-sm-inline">10 مارس
                                                        2022</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        addEventListener("load", function() {
            let orderStauts = document.querySelectorAll(".myorder-header-txt");
            let actvOrders = document.querySelector("#active-orders");
            let doneOrders = document.querySelector("#finished-orders");
            orderStauts[0].addEventListener('click', function() {
                this.classList.add('header-active');
                orderStauts[1].classList.remove('header-active');
                actvOrders.classList.add('d-block');
                actvOrders.classList.remove('d-none');
                doneOrders.classList.add('d-none');
                doneOrders.classList.remove('d-block');
            });
            orderStauts[1].addEventListener('click', function() {
                this.classList.add('header-active');
                orderStauts[0].classList.remove('header-active');
                actvOrders.classList.add('d-none');
                actvOrders.classList.remove('d-block');
                doneOrders.classList.add('d-block');
                doneOrders.classList.remove('d-none');
            });
        });
    </script>
@endsection
