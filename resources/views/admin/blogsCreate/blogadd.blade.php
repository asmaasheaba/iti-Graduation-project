@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blogsCreate.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        </div>
        @if ($errors->has('image'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ $errors->first('image') }}</li>
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
@section('dash-script')
    <script></script>
@endsection
