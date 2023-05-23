@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="cat-order" class="card w-100 my-3 d-flex flex-row py-3 border-0">
            @foreach ($categories as $categroy)
                <div class="row cat-item mx-2">
                    <div style="cursor: pointer;" onclick="catFilter({{ $categroy->id }})">
                        <img src="{{ asset('images/img-placeholder.png') }}"
                            style="width: 50px; height: 50px; object-fit:cover " alt="Avatar" />
                        <h6 class="contact-txt-color-1 fw-bold fs-small">{{ $categroy->name }}</h6>
                    </div>
                </div>
            @endforeach
        </div>

        @if (session('message'))
            <div class="alert alert-success mt-5">{{ session('message') }}</div>
        @endif

        <div class="d-flex flex-wrap flex-lg-nowrap ">
            {{-- filtter card --}}
            <div class="col-12 col-lg-3 card rounded-4 border-0" style="max-height: 672px">
                <div class="filter-head">
                    <i class="fa-solid fa-filter mx-2 fs-small"></i>
                    الفلترة
                </div>
                <div class="card border-0 rounded-0 rounded-bottom bg-dark ">
                    {{-- القسم الرئيسي --}}
                    <div class="accordion accordion-flush bg-white " id="accordionFlushExample">
                        <div class="accordion-item bg-white ">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed border-bottom bg-white fw-bold fs-small w-100"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                    aria-expanded="false" aria-controls="flush-collapse1">
                                    القسم الرئيسي
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse w-100"
                                aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample1">
                                <div class="accordion-body p-0 px-3 bg-white">
                                    @foreach ($categories as $categroy)
                                        <div class="form-check form-check-reverse my-2"style="cursor: pointer;"
                                            onclick="catFilter({{ $categroy->id }})">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault{{ $categroy->id }}"
                                                onclick="getSubCat({{ $categroy->id }})">
                                            <label class="form-check-label fw-bold fs-small"
                                                for="flexRadioDefault{{ $categroy->id }}">
                                                {{ $categroy->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- القسم الفرعي --}}
                    <div class="accordion accordion-flush bg-white " id="accordionFlushExample">
                        <div class="accordion-item bg-white ">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed border-bottom bg-white fw-bold fs-small w-100"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2"
                                    aria-expanded="false" aria-controls="flush-collapse2">
                                    القسم الفرعي
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse w-100"
                                aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body sub_cat p-0 px-3 bg-white">
                                    <div class="form-check form-check-reverse my-2">
                                        <input class="form-check-input" disabled type="radio" dis name="flexRadioDefault"
                                            id="flexRadioDefault 1">
                                        <label class="form-check-label fs-small" for="flexRadioDefault 1">
                                            لا توجد أقسام فرعية
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- خدمات إضافية --}}
                    <div class="accordion accordion-flush bg-white " id="accordionFlushExample">
                        <div class="accordion-item bg-white ">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed border-bottom bg-white fw-bold fs-small w-100"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3"
                                    aria-expanded="false" aria-controls="flush-collapse3">
                                    خدمات إضافية
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse w-100"
                                aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample3">
                                <div class="accordion-body p-0 px-3 bg-white">
                                    @foreach ($serv as $service)
                                        <div class="form-check form-check-reverse my-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault{{ $service->name }}">
                                            <label class="form-check-label fw-bold fs-small"
                                                for="flexRadioDefault{{ $service->name }}">
                                                {{ $service->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- orders card --}}
            <div class="col-12 col-lg-9 pe-0 pe-lg-3">
                <div class="d-flex justify-content-between mt-3 mt-lg-0 mb-2">
                    <div class="dropdown-center w-100">
                        <button class="custom-toggle-dwn btn border-0 rounded-0 rounded-top card bg-white fw-bold w-100"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex justify-content-between fs-small w-100">
                                <span>التصنيف</span>
                                <span><i class="fa-solid fa-angle-down"></i></span>
                            </div>
                        </button>
                        <ul class="dropdown-menu border-0 rounded-0 rounded-bottom w-100 text-end">
                            <li class="dropdown-item fs-small" style="cursor: pointer;" onclick="sortDesc()">الأحدث</li>
                            <li class="dropdown-item fs-small" style="cursor: pointer;" onclick="sortAsc()">الأقدم
                            </li>
                        </ul>
                    </div>

                    <div class="search_select position-relative p-0 choseCity w-100 mx-3">
                        <select class="form-control shadow-none border-0 fw-bold fs-small" name="city" id="cities">
                            <option value="" disabled selected>اختر المدينه </option>
                        </select>
                    </div>
                    <div class="search_select_box position-relative p-0 w-100">
                        <select data-live-search="true" name="country" id="country-id"
                            class="w-100 form-control select shadow-none border-0 fs-small fw-bold">
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
                {{-- {{ dd($orders) }} --}}
                <div class="order_body">
                    @foreach ($allOrders as $order)
                        <div class="card bg-white border-0 p-3 w-100 m-0 mb-3">
                            <div class="d-flex  align-items-center ">
                                <div class="d-none d-sm-block ms-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp"
                                        class="rounded-pill" style="width: 80px; height: 80px; object-fit:cover "
                                        alt="Avatar" />
                                </div>
                                <div class="w-100">
                                    <div class="d-flex  align-items-center justify-content-between w-100">
                                        <h6 class="contact-txt-color-2 fw-bold m-0">
                                            <a href="{{ route('orders.details', $order->id) }}">{{ $order->title }}</a>
                                        </h6>
                                        <div>
                                            <form data-action="" method="POST" enctype="multipart/form-data"
                                                id="add-fav">
                                                @csrf
                                                <button type="submit" class="btn p-0">
                                                    <i class="fa-solid fa-heart favourite-added"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <h6 class="text-end m-0 my-b text-black-50">الدولة :
                                        {{ $order->country ?? 'غير محدد' }} |
                                        المدينة: {{ $order->city ?? 'غير محدد' }}</h6>
                                    <h6 class="text-end m-0 my-2 short-desc">
                                        {{ $order->description }}
                                    </h6>
                                    <div class="d-flex  align-items-center justify-content-between w-100 flex-wrap ">
                                        <div class="col-12col-md-6 ">
                                            <h6 class="col contact-txt-color-2 fw-bold text-end p-0">السعر
                                                المتوقع:
                                                <span class="m-0">{{ $order->min_price . ' ألف' }} -
                                                    {{ $order->max_price . ' ألف' }}</span>
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-6 ">
                                            <h6 class="col text-start m-0 my-2 me-4 text-black-50">تم
                                                النشر
                                                بتوقيت <span>
                                                    {{ date('d-m-Y', strtotime($order->created_at)) }}</span>
                                            </h6>
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
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.querySelector('body').classList.add('orderBg3');
        // get cities
        $(document).ready(function() {
            $('#country-id').on('change', function() {
                var id = this.value;
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
        // get sub categories
        function getSubCat(id) {
            fetch(` {{ url('api/fetch-subcat/${id}') }}`).then((response) => response.json()).then(function(data) {
                $('.sub_cat').html(` `);
                console.log(data);

                $.each(data.sub_cat, function(key, value) {
                    $(".sub_cat").append(`
                <div class="form-check form-check-reverse my-2" onclick="subFilter(${value.id})">
                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                            id="flexRadioDefault ${value.id}">
                        <label class="form-check-label fw-bold fs-small" for="flexRadioDefault ${value.id}">
                            ${value.name}
                        </label>
                </div>`);
                });
            });
        }

        function OrderCard(title, city, country, description, min_price, max_price, date) {
            return `<div class="card bg-white border-0 p-3 w-100 m-0 mb-3">
                            <div class="d-flex  align-items-center ">
                                <div class="d-none d-sm-block ms-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp"
                                        class="rounded-pill" style="width: 80px; height: 80px; object-fit:cover "
                                        alt="Avatar" />
                                </div>
                                <div class="w-100">
                                    <div class="d-flex  align-items-center justify-content-between w-100">
                                        <h6 class="contact-txt-color-2 fw-bold">${title}</h6>
                                        <div>
                                            <form data-action="" method="POST" enctype="multipart/form-data"
                                                id="add-fav">
                                                @csrf
                                                <button type="submit" class="btn p-0">
                                                    <i class="fa-solid fa-heart favourite-added"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                    <h6 class="text-end m-0 mb-2 text-black-50 ">الدولة :
                                        ${country} |
                                        المدينة: ${city}</h6>
                                    <h6 class="text-end m-0 my-2 short-desc ">
                                        ${description}
                                    </h6>
                                    <div class="d-flex  align-items-center justify-content-between w-100 flex-wrap ">
                                        <div class="col-12col-md-6 ">
                                            <h6 class="col contact-txt-color-2 fw-bold text-end p-0">السعر المتوقع:
                                                <span class="m-0"> ${min_price}   ألف  -
                                                    ${max_price}   ألف </span>
                                            </h6>
                                        </div>
                                        <div class="col-12 col-md-6 ">
                                            <h6 class="col text-start m-0 my-2 me-4 text-black-50">تم
                                                النشر
                                                بتوقيت <span>${date}</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
        }
        // sort asc
        function sortAsc() {
            fetch(` {{ url('api/sort-asc') }}`).then((response) => response.json()).then(function(sort) {
                $('.order_body').html(` `);
                $.each(sort, function(key, value) {
                    const createdAt = value.created_at;
                    const date = new Date(createdAt);
                    const formattedDate =
                        `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;

                    $(".order_body").append(OrderCard(value.title, value.city, value.country, value
                        .description, value.min_price, value.max_price, formattedDate));
                });
                // console.log(sort);
            });
        }
        // sort desc
        function sortDesc() {
            fetch(` {{ url('api/sort-desc') }}`).then((response) => response.json()).then(function(sort) {
                $('.order_body').html(` `);
                $.each(sort, function(key, value) {
                    const createdAt = value.created_at;
                    const date = new Date(createdAt);
                    const formattedDate =
                        `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;

                    $(".order_body").append(OrderCard(value.title, value.city, value.country, value
                        .description, value.min_price, value.max_price, formattedDate));
                });
                // console.log(sort);
            });
        }
        // orders by category
        function catFilter(id) {
            fetch(` {{ url('api/category/${id}') }}`).then((response) => response.json()).then(function(data) {
                // console.log(data);

                $('.order_body').html(` `);
                $.each(data, function(key, value) {
                    const createdAt = value.created_at;
                    // console.log(createdAt);
                    const date = new Date(createdAt);
                    const formattedDate =
                        `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;

                    $(".order_body").append(OrderCard(value.title, value.city, value.country, value
                        .description, value.min_price, value.max_price, formattedDate));
                });
                // console.log(data);
            });
        }
        // orders by sub
        function subFilter(id) {
            fetch(` {{ url('api/subcat/${id}') }}`).then((response) => response.json()).then(function(data) {
                console.log(data);
                $('.order_body').html(` `);
                $.each(data, function(key, value) {
                    // console.log(data);
                    const createdAt = value.created_at;
                    const date = new Date(createdAt);
                    const formattedDate =
                        `${date.getFullYear()}/${date.getMonth() + 1}/${date.getDate()}`;

                    $(".order_body").append(OrderCard(value.title, value.city, value.country, value
                        .description, value.min_price, value.max_price, formattedDate));
                });
                // console.log(data);
            });
        }
    </script>

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('js/orders.js') }}"></script>
@endsection
