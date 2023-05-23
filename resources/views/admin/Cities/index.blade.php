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
                    <h3 class="d-inline">Add cities</h3>
                    <a href="{{ route("cities.create") }}" class="btn btn-primary btn-sm text-white float-right">Add City</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>City</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($cities as $city)
                         <tr>
                            <td>{{$city->country->name}}</td>
                            <td>{{$city->name}}</td>
                            <td>
                                <a href="{{ route('cities.edit', [ $city->id]) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('cities.destroy', [ $city->id]) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete"
                                    onclick="return confirm('Are you sure you want to delete this City')">
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

