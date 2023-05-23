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
                    <h3 class="d-inline">Edit country</h3>
                    <a href="{{route('countries.index')}}" class="btn btn-danger btn-sm text-white float-right">
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route("countries.update", [ $country->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Country Name</label>
                        <input type="text" name="name" value="{{$country->name}}" class="form-control py-1" id="exampleInputPassword1">
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

