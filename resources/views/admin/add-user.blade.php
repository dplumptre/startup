
@extends('layouts.app')

@section('title', 'Admin')




@section('content')
<div class="container">

<div class="row">



        <div class="col-md-4">
            @include('layouts.partials.side_menu')
        </div>

        <div class="col-md-7" >

        <div class="card">
        <div class="card-header">Add user</div>
        <div class="card-body">
        
        @include('layouts.partials.errors')
        <form method="post" action="{{route('admin.store.user')}}" >
                  {{ csrf_field() }}

                    <div style="padding: 20px;">
                      
                      <div class="row">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Email*</label>
                            <input type="text" value="" class="form-control" name="email" >
                          </div>
                        </div>
                      </div>


                      <div class="row">
                        <div class="form-group">
                          <div class="col-md-12">
                            <label>Name*</label>
                            <input type="text" value="" class="form-control" name="name" >
                          </div>
                        </div>
                      </div>
                      
    

             
                      <div class="row">
                        <div class="col-md-12">
                          <input type="submit" value="Add User" class="btn btn-primary btn-sm pull-right">
                        </div>
                      </div>
                    </div>

                   
                  </form>
        
        
        
        </div> 
        <div class="card-footer">Footer</div>
      </div>


        </div>




        </div> 
</div> 
<!-- Container End -->



@endsection


