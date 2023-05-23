@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection
{{-- {{dd($bankData)}} --}}

@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Bank Account</h3>
                </div>
                <div class="card-body">
                 <form action="{{Route('bank.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">about us</label>
                        <textarea  name="about" class="form-control" id="exampleInputPassword1" rows="5">
                            {{$bankData->about}}
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
                        <label for="exampleInputPassword1" class="form-label">Account Number</label>
                        <input type="number" name="number" class="form-control" id="exampleInputPassword1" value="{{$bankData->number}}">
                    </div>
                    @if($errors->has('number'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('number')}}</li>
                     </ul>
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Bank Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="{{$bankData->name}}">
                    </div>
                    @if($errors->has('name'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('name')}}</li>
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

