@extends('layouts.app')
@section('content')
    {{-- {{dd($user)}} --}}
    {{-- {{dd($order->id)}} --}}
{{-- {{dd($city)}} --}}
    <div class="container py-4">
        @if (session('message'))
            <div class="alert alert-success mt-5">{{ session('message') }}</div>
        @endif
        <div class="d-flex flex-wrap flex-lg-nowrap gap-2">
            <div class="col-12 col-lg-7">
                <div class="card  border-0 p-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="col-12 col-md-4 img-container75 d-flex align-items-center justify-content-start">
                            <img id="avatar" style="width: 75px" src="{{ asset('images/logo.png') }}"
                                class="avatar-circlye fill " alt="Avatar" />
                            <h6 class="me-3 contact-txt-color-1 fw-bold m-0">{{ $user->first_name }} {{ $user->last_name }}
                            </h6>
                        </div>
                        <div
                            class="d-flex col-6 col-md-4 align-items-center justify-content-center justify-content-md-between">
                            <div class=" d-flex align-items-center justify-content-center mn-12">
                                <i class="fa-solid fa-location-dot icon-24"></i>
                                <h6 class="fw-bold me-3 m-0 ">{{ $country->name }} , {{ $city->name }} </h6>
                            </div>
                        </div>
                        <div
                            class=" d-flex col-6 col-md-1 align-items-center justify-content-md-end justify-content-center ">
                            <!-- Button trigger modal -->
                            <button type="button" class="py-2 px-2 px-md-5 btn edit-btn-1" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">تواصل</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content px-3">
                                        <div class="modal-body">
                                            <h4 class="contact-txt-color-1 fw-bold text-center my-3">حدد طريقة التواصل</h4>
                                            <div class="form-check form-check-reverse">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label d-flex justify-content-between"
                                                    for="exampleRadios1">
                                                    <div> <i class="fa-solid fa-phone mx-2 contact-txt-color-1"></i>
                                                        {{ $user->phone }}
                                                    </div>
                                                    <div class="copy-number"><i
                                                            class="fa-solid fa-copy contact-txt-color-1 mx-3"></i> نسخ
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-reverse my-3">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios2" value="option2" checked>
                                                <label class="form-check-label d-flex justify-content-between"
                                                    for="exampleRadios2">
                                                    <div> <i class="fa-solid fa-envelope contact-txt-color-2 mx-2"></i>
                                                        إرسال عبر رسائل الموقع </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card  border-0 p-3 mt-2">
                    <div class="d-flex  align-items-center justify-content-between w-100 flex-wrap ">
                        <div class="col-6">
                            <p class="col contact-txt-color-2 fw-bold text-end p-0">{{ $order->title }}</p>
                        </div>
                        <div class="col-6">
                            <h6 class="col contact-txt-color-2 fw-bold text-end "> الكمية:
                                <span>9</span>
                                <span> سيارات </span>
                            </h6>
                        </div>
                    </div>
                    <h6 class="text-end m-0 my-2 lh-lg">{{ $order->description }}</h6>
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
                                    <img src="{{ asset('images/images.jpg') }}" height="400px"
                                        class="d-block w-100 rounded-3" alt="...">
                                    <div class="expected-price">
                                        <p class="text-start m-0">السعر المتوقع </p>
                                        <p class=" m-0">{{ $order->min_price }} : {{ $order->max_price }}</p>
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
                        <div class="col-12 row">
                            <p class="col-12 col-md-5 m-0">القسم : <span>{{ $category->name }}</span>
                            </p>
                            <p class=" col-12 col-md-5 text-end m-0 lh-lg"> القسم الفرعي :
                                <span>{{ $orders_sub->name }}</span>
                            </p>
                            {{-- <h6 class=" m-0 my-2 lh-lg  text-white p-2"
                                style="
                                color:white;
                                background-image: var(--bg-image-gradient);
                                text-align:center;
                                border-radius: 12px;

                            ">
                                حاله الطلب : {{ ucfirst($order->status) }}</h6>
                            <div class="flex justify-content-between ">
                                @if ($order->status == 'active')
                                    <a class="btn btn-danger" href="{{ route('orders.cancel', $order->id) }}">Cancel</a>
                                    <a class="btn btn-primary" href="{{ route('orders.reorder', $order->id) }}">Reorder</a>
                                    <a
                                        class="btn btn-success"href="{{ route('orders.completed', $order->id) }}">Completed</a>
                                @else
                                    <a class="btn btn-success"
                                        href="{{ route('orders.reorder', $order->id) }}">Reorder</a>
                                @endif
                            </div> --}}

                        </div>
                    </div>
                    {{-- <p class="m-0 mb-1">الخدمة الإضافية: <span>موديل 2023</span> --}}
                </div>
                <div class="card border-0 py-3 px-3 rounded-0 rounded-bottom">
                    <h6 class="col contact-txt-color-2 fw-bold text-end p-0">التعليقات</h6>
                    @foreach ($comments as $comment)
                        <div class="card border-0 m-0 my-3">
                            <div class="d-flex  align-items-end justify-content-between flex-wrap flex-lg-nowrap">
                                <div class="d-flex w-100">
                                    <div class=" img-container50 d-flex align-items-center justify-content-center">
                                        <img id="avatar" style="width: 50px" src="{{ asset('images/user.png') }}"
                                            class="avatar-circlye fill " alt="Avatar" />
                                    </div>
                                    <div class="w-100 px-3">
                                        {{-- {{ $comment->first_name }} {{ $comment->last_name }} --}}
                                        {{-- @foreach ($comment_users as $comment_user)
                                        <h6 class="contact-txt-color-2 fw-bold text-end">{{$comment_user->first_name}}</h6>
                                        @endforeach --}}
                                        <div class=" d-flex flex-column  align-items-start justify-content-between w-100">
                                            <h6 class="contact-txt-color-2 fw-bold text-end"> {{ $comment->first_name }}
                                                {{ $comment->last_name }}</h6>
                                            <h6 class="text-end m-0 my-1">
                                                {{ $comment->comment }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="w-100 text-start m-0 my-2 text-black-50">تم النشر في
                                {{ date('d-m-Y', strtotime($comment->created_at)) }}
                            </h6>
                        </div>
                    @endforeach
                    <br>

                    <div class="d-flex align-items-center justify-content-start gap-2">
                        <form class="row" method="post" action="{{ route('comment.store', $order->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-1 img-container30 d-flex align-items-center justify-content-center">
                                <img id="avatar" style="width: 30px" src="{{ asset('images/user.png') }}"
                                    class="avatar-circlye fill col-2" alt="Avatar" />
                            </div>
                            <div class="col-8 position-relative">
                                <input class="w-100 comment-input" placeholder="اكتب تعليقك هنا" name="comment">
                                <i class="fa-solid fa-camera "></i>
                            </div>
                            <input value='{{$order->id}}' hidden name="order_id">
                            <button type="submit" class="col-3 col-md-3 py-1 btn edit-btn-1"> ارسال</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('script')
    <script>
        document.querySelector('body').classList.add('orderBg3');
    </script>
@endsection
