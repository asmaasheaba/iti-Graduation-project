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
                    <h3 class="d-inline">Edit User</h3>
                    <a href="{{route('admin.users.index',)}}" class="btn btn-danger btn-sm text-white float-right">
                        Back
                    </a>
                </div>
                <div class="card-body">
                 <form action="{{route('admin.users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">First Name</label>
                        <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control py-1" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Last Name</label>
                        <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control py-1" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="text" name="email" value="{{$user->email}}" class="form-control py-1" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone</label>
                        <input type="text" name="phone" value="{{$user->phone}}" class="form-control py-1" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contact Method</label>
                        <select type="text" name="contact_method" class="form-control py-1" id="exampleInputPassword1">
                            <option value="phone"@if($user->contact_method=='phone')selected @endif>phone</option>
                            <option value="email"@if($user->contact_method=='email')selected @endif>email</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">User Type</label>
                        <select type="text" name="type" class="form-control py-1" id="exampleInputPassword1">
                            <option value="0" @if($user->type==0)selected @endif>client</option>
                            <option value="1" @if($user->type==1)selected @endif>provider</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Brief</label>
                        <textarea type="text" name="brief" class="form-control py-1" id="exampleInputPassword1">{{$user->brief}}</textarea>
                    </div>
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

