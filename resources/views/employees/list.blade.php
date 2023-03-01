@extends('layout')

@section('content')


<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix" style="padding: 17px 38px;">
                <h4 class="page-title pull-left">List Of Employees</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    <li><span>List Of Employees</span></li>
                </ul>
            </div>
        </div>
    
    </div>
</div>


<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">

        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table table-hover text-center">
                                <thead class="text-uppercase">
                                   
                                    <tr>
                                        <th scope="col">FirstName</th>
                                        <th scope="col">LastName</th>
                                        <th scope="col">Seniority</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)

                                        <tr>
                                            <td>{{$employee->firstname}}</td>
                                            <td>{{$employee->lastname}}</td>
                                            <td>{{$employee->seniority}}</td>
                                            <td><a href={{url('/employees/edit/'.$employee->id)}} style="color: #000000"><i class="ti-pencil"></i></a></td>
                                        </tr>
                                        
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection