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
          @if($pesan = Session::get('gagal'))
          <script type="text/javascript">
            swal({
              title: "Aww It's Wrong",
              text: "{{$pesan}}",
              icon: "warning",
              button: "Ok!",
            });
          </script>
          @endif
          @if($pesan = Session::get('kosong'))
          <script type="text/javascript">
            swal({
              title: "Aww It's Wrong",
              text: "{{$pesan}}",
              icon: "warning",
              button: "Ok!",
            });
          </script>
          @endif
          @if($pesan = Session::get('berhasilupload'))
          <script type="text/javascript">
            swal({
              title: "Yaayy !",
              text: "{{$pesan}}",
              icon: "success",
              button: "Ok!",
            });
          </script>
          @endif
          
          <!-- Example Colored Cards for Dashboard Demo-->
          @include('layouts/a/demo')
          <!-- Example DataTable for Dashboard Demo-->
          <div class="card mb-4">
            <form method="POST" action="{{route('yukcekshell')}}">
              @csrf
              <div class="card-header">
               <div class="row">
                <div class="col-md-11 mt-2">
                  Cek Shell
                </div>   
                <div class="col-md-1">
                  <input type="submit" class="btn btn-success" value="Yes" >
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlInput1">Url Shell</label>
                <input type="text" class="form-control" placeholder="Url Shell" name="url" >
              </div>

            </form>

          </div>
        </div>
      </div>
    </main>
    @include('layouts/a/asset')