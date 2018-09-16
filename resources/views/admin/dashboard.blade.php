
@extends('layouts.app')

@section('title', 'Dashboard page')




@section('content')
<div class="container">

    	@include('layouts.partials.errors')


<div class="row acct-intro m-t-5">
        <div class="col-lg-12" style="padding-left:25px;">
          <p> <strong>Welcome, {{Auth::user()->name}}</strong> 
            <span class="color-red"><?php echo date("D M m Y m:s"); ; ?> </span> </p>
        </div>
      </div>


        <div class="col-md-3">
            @include('layouts.side_menu')
        </div>

        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading"> </div>

                <p>HELLOO  </p>

                <div style="padding: 20px;">
                 
              </div>

            </div>
        </div>





</div> 
<!-- Container End -->



@endsection


