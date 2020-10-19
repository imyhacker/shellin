<div class="row">
    <div class="col-xxl-3 col-lg-4">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-3">
                        <div class="text-white-75 small">Registered Users</div>
                        <div class="text-lg font-weight-bold">{{$count_user}}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="user"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('lihatuser')}}">View Data</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-4">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-3">
                        <div class="text-white-75 small">Ready Shell Backdoor</div>
                        <div class="text-lg font-weight-bold">{{$count_shell}}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('lihatshell')}}">View Report</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-lg-4">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-3">
                        <div class="text-white-75 small">Sold Out Shell</div>
                        <div class="text-lg font-weight-bold">{{$count_shell_sold}}</div>
                    </div>
                    <i class="feather-xl text-white-50" data-feather="check-square"></i>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link disabled">NO ACTION</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

</div>
<!-- Example Charts for Dashboard Demo-->
