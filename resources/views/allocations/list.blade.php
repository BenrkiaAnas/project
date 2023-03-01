@extends('layout')

@section('content')


<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix" style="padding: 17px 38px;">
                <h4 class="page-title pull-left">Allocations</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    <li><span>Allocations</span></li>
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
                                        <th scope="col">Employee</th>
                                        <th scope="col">Manager</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allocations as $allocation)

                                        <tr>
                                            <td>{{$allocation->employee_firstname.' '.$allocation->employee_lastname}}</td>
                                            <td>{{$allocation->manager_firstname.' '.$allocation->manager_lastname}}</td>

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