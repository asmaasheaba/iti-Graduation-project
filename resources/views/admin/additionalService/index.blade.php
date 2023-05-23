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
                    <h3 class="d-inline">Additional Services List</h3>
                    <a href="{{Route('additionalService.create')}}" class="btn btn-primary btn-sm text-white float-right">
                        Add Service
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Service Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($additional_services as $additional_service)
                         <tr>
                            <td>{{$additional_service->id}}</td>
                            <td>{{$additional_service->name}}</td>
                            <td>
                                <a href="{{Route('additionalService.edit',$additional_service->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('additionalService.destroy',$additional_service->id)}}" method="post">
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
    <script></script>
@endsection

