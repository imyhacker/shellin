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
                    <!-- Example Colored Cards for Dadataboard Demo-->
                    @include('layouts/a/demo')
                    <!-- Example DataTable for Dadataboard Demo-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                
                                <div class="mt-1 col-md-12">
                                  <a href="{{route('asu',$data->id)}}">
                                    <button type="submit" class="btn btn-block btn-success">Buy</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">


                            <div class="col-sm-12 mt-2">
                                <ul class="list-unstyled">
                                    @php
                                    if($data->domain == ".gov"){
                                    $domain = "badge-success";
                                }elseif($data->domain == ".go.id"){
                                $domain = "badge-danger";
                            }elseif($data->domain == ".com"){
                            $domain = "badge-warning";
                        }else{
                        $domain = "badge-info";
                    }


                    $count = strlen($data->url) - 1;
                    $output = substr_replace($data->url, str_repeat('*', $count), 3, $count);

                    @endphp
                    <li><!-- melia --> Data Shell Information
                        <ul>
                          <li>Name shell : {{$data->nama}}</li>
                          <li>Price : @currency($data->harga) | @money($data->dollar)</li>
                          <li>Domain : <span class="badge {{$domain}}">{{$data->domain}}</span></li>
                          <li>Continent  : {{$data-> continent }}</li>
                          <li>Country : {{$data->country}}</li>
                          <li>City : {{$data->city}}</li>
                          <li>ISP : {{$data->isp}}</li>
                          <li>Link : {{$output}}</li>
                      </ul>
                  </li>

              </ul>
          </div>


      </div>
  </div>
</div>
</main>
@include('layouts/a/asset')