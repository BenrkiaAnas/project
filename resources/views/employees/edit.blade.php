@extends('layout')

@section('content')


<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix" style="padding: 17px 38px;">
                <h4 class="page-title pull-left">Update Employee</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    <li><span>Update Employee</span></li>
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
                            <form method="POST" action="{{url('/employees/update/'.$employee->id)}}">

                                @csrf

                                <div class="form-group">
                                    <label for="firstname">FirstName</label>
                                    <input type="text" name="firstname" class="form-control" value="{{$employee->firstname}}" id="firstname" aria-describedby="firstname" placeholder="Enter FirstName">
                                  
                                </div>
                                <div class="form-group">
                                    <label for="lastname">LastName</label>
                                    <input type="text" name="lastname" class="form-control" value="{{$employee->lastname}}" id="lastname" aria-describedby="lastname" placeholder="Enter LastName">
                                  
                                </div>

                                <div class="form-group">
                                    <label for="seniority">Seniority</label>
                                    <input type="text" name="seniority" class="form-control" value="{{$employee->seniority}}" id="seniority" aria-describedby="seniority" placeholder="Enter Seniority">
                                  
                                </div>
                                <div class="form-group">
                                    <label for="manager">Manager</label>
                                    <select class="form-control" name="manager" id="manager" aria-describedby="manager">
                                        @foreach($managers as $manager)
                                            <option {{$manager->id == $employee->manager_id ? 'selected' : ''}} value="{{$manager->id}}">{{$manager->firstname.' '.$manager->lastname}}</option>
                                        
                                        @endforeach
                                    </select>
                                  
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