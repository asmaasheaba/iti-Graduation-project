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
                    <h3 class="d-inline">Add countries</h3>
                    <a href="{{ route("countries.create") }}" class="btn btn-primary btn-sm text-white float-right">Add country</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>country</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($countries as $country)
                         <tr>
                            <td>{{$country->name}}</td>
                            <td>
                                <a href="{{ route('countries.edit', [$country->id]) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('countries.destroy', [$country->id]) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete"
                                    onclick="return confirm('Are you sure you want to delete this Country')">
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

