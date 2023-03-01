@extends('layout')

@section('content')


<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix" style="padding: 17px 38px;">
                <h4 class="page-title pull-left">Update Manager</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    <li><span>Update Manager</span></li>
                </ul>
            </div>
        </div>
    
    </div>
</div>

<div class="main-content-inner">
    <div class="row">
       
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{url('/managers/update/'.$manager->id)}}">

                                @csrf

                                <div class="form-group">
                                    <label for="firstname">FirstName</label>
                                    <input type="text" name="firstname" class="form-control" value="{{$manager->firstname}}" id="firstname" aria-describedby="firstname" placeholder="Enter FirstName">
                                  
                                </div>
                                <div class="form-group">
                                    <label for="lastname">LastName</label>
                                    <input type="text" name="lastname" class="form-control" value="{{$manager->lastname}}" id="lastname" aria-describedby="lastname" placeholder="Enter LastName">
                                  
                                </div>

                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="number" name="age" class="form-control" value="{{$manager->age}}" id="age" aria-describedby="age" placeholder="Enter Age">
                                  
                                </div>

                                <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>

@endsection