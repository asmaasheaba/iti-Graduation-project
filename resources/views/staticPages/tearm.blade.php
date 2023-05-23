@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('dash-css')
@endsection
{{-- {{dd($termData)}} --}}
@section('content')
    <div class="container">
       <div class="row">
        <div class="col-md-12">
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="d-inline">Terms And Conditions</h3>
                </div>
                <div class="card-body">
                 <form action="{{Route('terms.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Terms And Conditions</label>
                        <textarea name="termsAndConditions" class="form-control text-area" id="exampleInputPassword1" rows="9">
                            {{$termData->termsAndConditions}}
                        </textarea> 
                    </div>
                    @if($errors->has('about'))
                    <div class="alert alert-danger">
                     <ul>
                      <li>{{$errors->first('about')}}</li>
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

