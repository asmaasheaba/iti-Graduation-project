@extends('admin.layout.main')
@section('title', 'Dashboard')

@section('dash-css')
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dropdown-center button:active {
            background-color: white !important;
        }

        .chat .search-cat input {
            border-radius: 0;
            border: 1px solid #eee;
            outline-style: none;
            background-color: white;
            padding: 6px;
            padding-left: 45px;
        }

        .chat .search input::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            opacity: 1;
            font-weight: 600;
            font-size: 14px;
            /* Firefox */
        }

        .filter-head {
            padding: 8px;
            background-color: blue;
            border-top-right-radius: 12px;
            border-top-left-radius: 12px;
            text-align: center;
            color: white;
        }

        .accordion-button::after {
            position: absolute;
            left: 15px;
        }
    </style>
@endsection
@section('content')
    <div class="container" dir="rtl">
        {{-- Orders card --}}
        <div class="row" dir="ltr">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success mt-5">{{ session('message') }}</div>
                @endif
                <div class="card mt-2">
                    <div class="card-header">
                        <h3 class="d-inline">Orders</h3>
                    </div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    {{-- <th>Second branch</th> --}}
                                    {{-- <th>Extra</th> --}}
                                    <th>Description</th>
                                    <th>Min Price</th>
                                    <th>Max Price</th>
                                    <th>User</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td class="align-middle"><img
                                                src="{{ $order->image }}random=1{{ $order->id }}" alt=""
                                                srcset="" width="40px" height="40px">
                                        </td>
                                        <td>{{ $order->title }}</td>
                                        <td>{{ $order->category->name}}</td>
                                        <td>{{ $order->description }}</td>
                                        <td>{{ $order->min_price }}</td>
                                        <td>{{ $order->max_price }}</td>
                                        <td>{{ $order->user->first_name . ' ' . $order->user->last_name }}</td>
                                        <td>{{ $order->country }}</td>
                                        <td>{{ $order->city }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                            <form action="{{route('admin.orders.delete',$order->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                             <input type="submit" value="Delete" class="btn btn-danger"
                                             onclick="return confirm('Are you sure you want to delete this service')">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
@endsection

@section('dash-script')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
@endsection
