@include('layouts/a/head')
<body class="nav-fixed">
    @include('layouts/a/nav')
    <div id="layoutSidenav">
        @include('layouts/a/side')
        <div id="layoutSidenav_content">
            <main>
                @include('layouts/a/header_home')
                <!-- Main page content-->
                <div class="container mt-n10">
                    <div class="row">
                        @include('layouts/a/wall')

                        @if($ses = Session::get('account'))
                        <script type="text/javascript">
                            swal({
                              title: "Success !",
                              text: "{{$ses}}",
                              icon: "success",
                              button: "Ok!",
                          });
                      </script>

                      @endif
                  </div>
                  <!-- Example Colored Cards for Dashboard Demo-->
                  @include('layouts/a/demo')
                  <!-- Example DataTable for Dashboard Demo-->
                  <div class="card mb-4">
                    <div class="card-header">
                        @can('isAdmin')
                        User Data
                        @elsecan('isUser')
                        Welcome Back
                        @endcan
                    </div>
                    <div class="card-body">
                        @can('isAdmin')
                        <div class="datatable">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Verify Mail</th>
                                        <th>Status</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Verify Mail</th>
                                        <th>Status</th>
                                        <th>Act</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($user as $users)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->email}}</td>
                                        <td>
                                            @if($users->email_verified_at == NULL) Not Verify @else Verify @endif
                                        </td>

                                        <td>
                                            @if($users->status == 0) Inactive @else Active @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('status',['id'=> $users->id]) }}" class="btn btn-success">@if($users->status == 1) Inactive @else Active @endif</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        @elsecan('isUser')
                        Hi {{Auth::user()->name}},  welcome to shellin. Shellin is a website for buying backdoor shells.
                        @endcan
                    </div>
                </div>
            </div>
        </main>
        @include('layouts/a/asset')