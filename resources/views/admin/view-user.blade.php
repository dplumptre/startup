
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
        <div class="card-header">View user</div>
        <div class="card-body">
        
        @include('layouts.partials.errors')
       
            
        
    
        <table id="example" class="display table " cellspacing="0" width="100%" >
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>


                        <tbody>
                            
                            @foreach($data as $key => $d)
                            <tr>
                                <td class="text-center">{{$key + 1 }}</td>
                                <td class="text-center">{{ $d->name }}</td>
                                <td class="text-center">{{ $d->email}}</td>
                                <td class="text-center"></td>

                            </tr>


                            @endforeach


                        </tbody>
                    </table>    
        
        </div> 
        <div class="card-footer">Footer</div>
      </div>


        </div>




        </div> 
</div> 
<!-- Container End -->



@endsection


