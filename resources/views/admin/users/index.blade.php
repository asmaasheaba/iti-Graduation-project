@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection

@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert bg-success text-white mt-5">{{session()->get('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Users</h3>
                    {{-- <a href="{{Route('additionalService.create')}}" class="btn btn-primary btn-sm text-white float-right">
                        Add Service
                    </a> --}}
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>type</th>
                                <th>Email</th>
                                <th>Phone</th>
                                {{-- <th>Brief</th> --}}
                                <th>image</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($users as $user)
                         <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->type==0?'client':
                            'provider'}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td><img src="{{$user->image}}"></td>
                            <td>
                                <a href="{{Route('admin.users.edit',$user->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('admin.users.delete',$user->id)}}" method="post">
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

