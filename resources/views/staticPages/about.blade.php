@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection

@section('content')
{{-- {{dd($aboutData)}} --}}
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">About Us</h3>
                </div>
                <div class="card-body">
                 <form action="{{Route('about.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">about us</label>
                        <textarea  name="about" class="form-control" id="exampleInputPassword1" rows="5">
                            {{$aboutData->about}}
                        </textarea>
                    </div>
                    @if($errors->has('about'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('about')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Number</label>
                        <input type="number" name="number" class="form-control" id="exampleInputPassword1" value="{{$aboutData->number}}">
                    </div>
                    @if($errors->has('number'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('number')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Facebook Link</label>
                        <input type="text" name="face" class="form-control" id="exampleInputPassword1" value="{{$aboutData->face}}">
                    </div>
                    @if($errors->has('face'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('face')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Snapchat Link</label>
                        <input type="text" name="snap" class="form-control" id="exampleInputPassword1" value="{{$aboutData->snap}}">
                    </div>
                    @if($errors->has('snap'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('snap')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">youtuob Link</label>
                        <input type="text" name="youtuob" class="form-control" id="exampleInputPassword1" value="{{$aboutData->youtuob}}">
                    </div>
                    @if($errors->has('youtuob'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('youtuob')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Instegram Link</label>
                        <input type="text" name="insta" class="form-control" id="exampleInputPassword1" value="{{$aboutData->insta}}">
                    </div>
                    @if($errors->has('insta'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('insta')}}</li>
                     </ul>
                    </div>
                    @endif
                    
                    
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
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

