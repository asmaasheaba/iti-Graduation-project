{{-- @extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection
@section('content')
    <a class="btn btn-info" href="{{ route("blogsCreate.create") }}">Add Blog</a>
    <div class="container">
        <table class="table">
            <tr>
                <th> ID</th>
                <th> Title</th>
                <th> created at</th>
                <th> Image </th>
                <th> Actions</th>

            </tr>
            @foreach ($blogs as $oneblog)
                <tr>
                    <td> {{ $oneblog->id }} </td>
                    <td> {{ $oneblog->name }} </td>
                    <td> {{ $oneblog->created_at->format('d/m/Y') }} </td>

                    <td><img src="{{asset("$oneblog->image")}}" alt="blog"
                        style="width:70px; height:70px;border-radius: 50% 50%;"></td>
                   <td>
                    <td> <a class="btn btn-primary" href="{{ route("blogsCreate.show",[$oneblog->id]) }}"> View</a>
                        <a class="btn btn-info" href="{{ route('blogsCreate.edit', [$oneblog->id]) }}"> Edite</a>
                            <td>
                                <form action="{{ route('blogsCreate.destroy', [$oneblog->id]) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete"
                                    onclick="return confirm('Are you sure you want to delete this blog')">
                                </form>
                            </td>
                        <a>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{-- {{ $blogs->links() }} --}}
{{-- @endsection  --}}
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
                    <h3 class="d-inline">Add blogs</h3>
                    <a href="{{ route("blogsCreate.create") }}" class="btn btn-primary btn-sm text-white float-right">Add blog</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Edite</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($blogs as $oneblog)
                         <tr>
                            <td>{{$oneblog->name}}</td>
                            <td><img src="{{asset("$oneblog->image")}}" alt="blog" style="width:70px; height:70px;border-radius: 50% 50%;">
                            </td>
                            <td>
                                <a href="{{ route('blogsCreate.edit', [$oneblog->id]) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route("blogsCreate.show",[$oneblog->id]) }}"> View</a>
                            </td>
                            <td>
                                <form action="{{ route('blogsCreate.destroy', [$oneblog->id]) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="Delete"
                                    onclick="return confirm('Are you sure you want to delete this blog')">
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

