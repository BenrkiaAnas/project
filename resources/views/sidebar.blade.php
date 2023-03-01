<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    
                    <li class="active">
                        <a href="{{url('/dashboard')}}" ><i class="ti-dashboard"></i><span>Dashboard</span></a>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0)" aria-expanded="false"><i class="ti-id-badge"></i><span>Manager
                                
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{url('/managers')}}">List Managers</a></li>
                            <li><a href="{{url('/managers/create')}}">Create Manager</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span>Employee
                                
                            </span></a>
                        <ul class="collapse">
                            <li><a href="{{url('/employees')}}">List Employees</a></li>
                            <li><a href="{{url('/employees/create')}}">Create Employee</a></li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="{{url('/allocations')}}" ><i class="ti-list"></i><span>Allocation</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>