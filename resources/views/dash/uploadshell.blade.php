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

          @if($pesan = Session::get('UploadShell'))
          <script type="text/javascript">
            swal({
              title: "Well Done!",
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
            <form method="POST" action="{{route('postshell')}}">
              @csrf
              <div class="card-header">
               <div class="row">
                <div class="col-md-11 mt-2">
                  Upload Shell
                </div>   
                <div class="col-md-1">
                  <input type="submit" class="btn btn-success" value="Yes">
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="exampleFormControlInput1">Nama Shell</label>
                <input type="text" class="form-control" placeholder="Nama Shell" name="nama">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Harga</label>
                <input type="number" class="form-control" name="harga" placeholder="Harga Shell">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect2">Domain</label>
                <select class="form-control" id="exampleFormControlSelect2" name="domain">
                  <option value=".com">.com</option>
                  <option value=".id">.id</option>
                  <option value=".xyz">.xyz</option>
                  <option value=".co.id">.co.id</option>
                  <option value=".net">.net</option>
                  <option value=".org">.org</option>
                  <option value=".go.id">.go.id</option>
                  <option value=".gov">.gov</option>
                  <option value=".web.id">.web.id</option>
                  <option value=".sch.id">.sch.id</option>
                  <option value=".online">.online</option>
                  <option value=".or.id">.or.id</option>
                  <option value=".info">.info</option>
                  <option value=".in">.in</option>
                  <option value=".asia">.asia</option>
                  <option value=".ac.id">.ac.id</option>
                  <option value=".biz.id">.biz.id</option>
                  <option value=".my.id">.my.id</option>
                  <option value=".ponpes.id">.ponpes.id</option>
                  <option value=".ws">.ws</option>
                  <option value=".biz">.biz</option>
                  <option value=".academy">.academy</option>
                  <option value=".glass">.glass</option>
                  <option value=".website">.website</option>
                  <option value=".me">.me</option>
                  <option value=".name">.name</option>
                  <option value=".club">.club</option>
                  <option value=".ninja">.ninja</option>
                  <option value=".reviews">.reviews</option>
                  <option value=".dance">.dance</option>
                  <option value=".futbol">.futbol</option>
                  <option value=".wiki">.wiki</option>
                  <option value=".pink">.pink</option>
                  <option value=".red">.red</option>
                  <option value=".blue">.blue</option>
                  <option value=".kim">.kim</option>
                  <option value=".press">.press</option>
                  <option value=".top">.top</option>
                  <option value=".center">.center</option>
                  <option value=".toys">.toys</option>
                  <option value=".co">.co</option>
                  <option value=".link">.link</option>
                  <option value=".win">.win</option>
                  <option value=".management">.management</option>
                  <option value=".watch">.watch</option>
                  <option value=".technology">.technology</option>
                  <option value=".bike">.bike</option>
                  <option value=".clothing">.clothing</option>
                  <option value=".guru">.guru</option>
                  <option value=".holdings">.holdings</option>
                  <option value=".plumbing">.plumbing</option>
                  <option value=".singles">.singles</option>
                  <option value=".ventures">.ventures</option>
                  <option value=".camera">.camera</option>
                  <option value=".estate">.estate</option>
                  <option value=".equipment">.equipment</option>
                  <option value=".gallery">.gallery</option>
                  <option value=".kitchen">.kitchen</option>
                  <option value=".directory">.directory</option>
                  <option value=".contractors">.contractors</option>
                  <option value=".tips">.tips</option>
                  <option value=".enterprises">.enterprises</option>
                  <option value=".diamonds">.diamonds</option>
                  <option value=".photography">.photography</option>
                  <option value=".graphics">.graphics</option>
                  <option value=".lighting">.lighting</option>
                  <option value=".land">.land</option>
                  <option value=".today">.today</option>
                  <option value=".cloud">.cloud</option>
                  <option value=".trade">.trade</option>
                  <option value=".company">.company</option>
                  <option value=".shiksha">.shiksha</option>
                  <option value=".space">.space</option>
                  <option value=".site">.site</option>
                  <option value=".tech">.tech</option>
                  <option value=".store">.store</option>
                  <option value=".work">.work</option>
                  <option value=".expert">.expert</option>
                  <option value=".media">.media</option>
                  <option value=".mobi">.mobi</option>
                  <option value=".computer">.computer</option>
                  <option value=".voyage">.voyage</option>
                  <option value=".construction">.construction</option>
                  <option value=".careers">.careers</option>
                  <option value=".shoes">.shoes</option>
                  <option value=".photos">.photos</option>
                  <option value=".domains">.domains</option>
                  <option value=".email">.email</option>
                  <option value=".systems">.systems</option>
                  <option value=".recipes">.recipes</option>
                  <option value=".menu">.menu</option>
                  <option value=".builders">.builders</option>
                  <option value=".cab">.cab</option>
                  <option value=".limo">.limo</option>
                  <option value=".solutions">.solutions</option>
                  <option value=".support">.support</option>
                  <option value=".training">.training</option>
                  <option value=".camp">.camp</option>
                  <option value=".education">.education</option>
                  <option value=".repair">.repair</option>
                  <option value=".institute">.institute</option>
                  <option value=".coffee">.coffee</option>
                  <option value=".florist">.florist</option>
                  <option value=".house">.house</option>
                  <option value=".solar">.solar</option>
                  <option value=".international">.international</option>
                  <option value=".marketing">.marketing</option>
                  <option value=".holiday">.holiday</option>
                  <option value=".codes">.codes</option>
                  <option value=".viajes">.viajes</option>
                  <option value=".farm">.farm</option>
                  <option value=".uno">.uno</option>
                  <option value=".buzz">.buzz</option>
                  <option value=".agency">.agency</option>
                  <option value=".bargains">.bargains</option>
                  <option value=".boutique">.boutique</option>
                  <option value=".cheap">.cheap</option>
                  <option value=".zone">.zone</option>
                  <option value=".cool">.cool</option>
                  <option value=".works">.works</option>
                  <option value=".foundation">.foundation</option>
                  <option value=".exposed">.exposed</option>
                  <option value=".cruises">.cruises</option>
                  <option value=".flights">.flights</option>
                  <option value=".rentals">.rentals</option>
                  <option value=".vacations">.vacations</option>
                  <option value=".villas">.villas</option>
                  <option value=".tienda">.tienda</option>
                  <option value=".condos">.condos</option>
                  <option value=".properties">.properties</option>
                  <option value=".maison">.maison</option>
                  <option value=".dating">.dating</option>
                  <option value=".events">.events</option>
                  <option value=".partners">.partners</option>
                  <option value=".productions">.productions</option>
                  <option value=".bid">.bid</option>
                  <option value=".webcam">.webcam</option>
                  <option value=".rest">.rest</option>
                  <option value=".moda">.moda</option>
                  <option value=".supplies">.supplies</option>
                  <option value=".supply">.supply</option>
                  <option value=".fish">.fish</option>
                  <option value=".report">.report</option>
                  <option value=".vision">.vision</option>
                  <option value=".opr">.opr</option>
                  <option value=".services">.services</option>
                  <option value=".capital">.capital</option>
                  <option value=".engineering">.engineering</option>
                  <option value=".exchange">.exchange</option>
                  <option value=".gripe">.gripe</option>
                  <option value=".associates">.associates</option>
                  <option value=".lease">.lease</option>
                  <option value=".reisen">.reisen</option>
                  <option value=".university">.university</option>
                  <option value=".town">.town</option>
                  <option value=".cash">.cash</option>
                  <option value=".fund">.fund</option>
                  <option value=".investments">.investments</option>
                  <option value=".consulting">.consulting</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Url</label>
                <input type="text" class="form-control" name="url" placeholder="Url Shell">
              </div>
              <hr>
              <b>Website Information</b>
<br><br>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">IP</label>
                <input type="text" class="form-control" name="query" value="{{$web['query']}}" readonly>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Continent</label>
                <input type="text" class="form-control" name="continent" value="{{$web['continent']}}" readonly>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">CODE</label>
                <input type="text" class="form-control" name="continentCode" value="{{$web['continentCode']}}" readonly>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Country</label>
                <input type="text" class="form-control" name="country" value="{{$web['country']}}" readonly>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Country Code</label>
                <input type="text" class="form-control" name="countryCode" value="{{$web['countryCode']}}" readonly>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">City</label>
                <input type="text" class="form-control" name="city" value="{{$web['city']}}" readonly>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Timezone</label>
                <input type="text" class="form-control" name="timezone" value="{{$web['timezone']}}" readonly>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">ISP</label>
                <input type="text" class="form-control" name="isp" value="{{$web['isp']}}" readonly>
              </div>

              

            </form>

          </div>
        </div>
      </div>
    </main>
    @include('layouts/a/asset')