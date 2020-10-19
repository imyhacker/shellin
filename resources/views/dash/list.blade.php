@include('layouts/a/head')
<body class="nav-fixed">
    @include('layouts/a/nav')
    <div id="layoutSidenav">
        @include('layouts/a/side')
        <div id="layoutSidenav_content">
            <main>

                @if($ses = Session::get('gaboleh'))
                <script type="text/javascript">
                    swal({
                      title: "Aww It's Wrong",
                      text: "{{$ses}}",
                      icon: "warning",
                      button: "Ok!",
                  });
              </script>

              @endif

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
                        List Shell Backdoor
                    </div>
                    <div class="card-body">
                        @foreach($shell as $sh)
                        @php 

                        if($sh->sold == 0){
                        $data = "availble";
                    }elseif($sh->sold == 1){
                    $data = "Sold out";

                }


                if($sh->domain == ".gov"){
                $domain = "badge-success";
            }elseif($sh->domain == ".go.id"){
            $domain = "badge-danger";
        }elseif($sh->domain == ".com"){
        $domain = "badge-warning";
    }else{
    $domain = "badge-info";
}

@endphp


<div class="card mt-3 shadow-none">
    <a class="btn @if($sh->sold == 1) disabled @endif" href="list/{{$sh->id}}/lebih" style="color: black; text-align: left;" >
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-9">
                    <h5 class="card-title text-uppercase">{{$sh->nama}}</h5>
                    <small class="text-muted"> Status : @if($sh->sold == 0) <span class="badge badge-success">Available</span> @else <span class="badge badge-danger">Sold Out</span> @endif</small>
                </div>
                <div class="col-md-3">
                    <h5 class="d-flex justify-content-right">{{$sh->created_at}}</h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p class="text-monospace">
                        Domain : <span class="badge {{$domain}}">{{$sh->domain}}</span><br>
                        @currency($sh->harga) <br> @money($sh->dollar) <br>
                    </div>
                </p>
                <hr>

                <div class="col-md-6 mb-2">
                    <p class="text-monospace">
                        Country : {{$sh->country}}<br>
                        Code : {{$sh->continentCode}}<br>
                        City : {{$sh->city}}
                    </p>
                </div>
            </div>

        </div>
    </a>
</div>
@endforeach
</div>
</div>
{!! $shell->links() !!}
</div>
</main>
@include('layouts/a/asset')