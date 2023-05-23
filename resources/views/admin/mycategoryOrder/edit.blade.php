@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection

@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Edit Category</h3>
                    <a href="{{route('categoryOrder.index',)}}" class="btn btn-danger btn-sm text-white float-right">
                        Back
                    </a>
                </div>
                <div class="card-body">
                 <form action="{{Route('categoryOrder.update',$categoryOrder->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control py-1" id="exampleInputPassword1">
                        <img src="{{asset("$categoryOrder->image")}}" alt="slider"
                         style="width:70px; height:70px;border-radius: 50% 50%;">
                    </div>
                    @if($errors->has('image'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('image')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Category Name</label>
                        <input type="text" name="name" value="{{$categoryOrder->name}}" class="form-control" id="exampleInputPassword1">
                    </div>
                    @if($errors->has('name'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('name')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                 </form>
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

