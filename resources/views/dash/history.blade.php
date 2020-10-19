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
          </div>
          
          <!-- Example Colored Cards for Dashboard Demo-->
          @include('layouts/a/demo')
          <!-- Example DataTable for Dashboard Demo-->
          <div class="card mb-4">

            <div class="card-header">

              History Buyer - @.{{Auth::user()->name}}
              
            </div>
            <div class="card-body">
              <div class="datatable">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Shell</th>
                      <th>Payment</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Shell</th>
                      <th>Payment</th>
                      <th>Total</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php 
                    $no = 1; 
                    @endphp
                    @foreach($data as $history)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$history->namashell}}</td>
                      <td>{{$history->payment}}</td>
                      <td>{{$history->total}}</td>

                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>


            </div>
          </div>
        </div>
      </main>
      @include('layouts/a/asset')