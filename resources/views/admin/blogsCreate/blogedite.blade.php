@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection
@section('content')
    @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <form action="{{ route('blogsCreate.update', [$blog->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" name="image" class="form-control py-1" id="exampleInputPassword1">
            <img src="{{asset("$blog->image")}}" alt="blog" style="width:70px; height:70px;border-radius: 50% 50%;">
        </div>
        @if($errors->has('image'))
        <div class="alert alert-danger">
         <ul>
          <li>{{$errors->first('image')}}</li>
         </ul>
        </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" value="{{ $blog->name }}" name="name" id="exampleInputEmail1">

        </div>
        @if ($errors->has('name'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $errors->first('name') }}</li>
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <input class="form-control" name="description" id="exampleFormControlTextarea1" value="{{ $blog->description }}" rows="3">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
