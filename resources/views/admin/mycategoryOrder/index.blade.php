@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection

@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success mt-5">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Category List</h3>
                    <a href="{{Route('categoryOrder.create')}}" class="btn btn-primary btn-sm text-white float-right">
                        Add Category
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($myCategoryOrders as $myCategoryOrder)
                          <tr>
                            <td>{{$myCategoryOrder->id}}</td>

                            <td><img src="{{asset("$myCategoryOrder->image")}}" alt="slider"
                                 style="width:70px; height:70px;border-radius: 50% 50%;"></td>
                                 <td>{{$myCategoryOrder->name}}</td>
                            <td>
                                <a href="{{Route('categoryOrder.edit',$myCategoryOrder->id)}}" class="btn btn-warning">Edit</a>

                            </td>
                            <td>
                                <form action="{{route('categoryOrder.destroy',$myCategoryOrder->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                 <input type="submit" value="Delete" class="btn btn-danger"
                                 onclick="return confirm('Are you sure you want to delete this slider')">
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
    <script></script>
@endsection

