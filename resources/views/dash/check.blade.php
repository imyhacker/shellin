<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Checkout - {{$data->nama}}</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <meta name="theme-color" content="#8640b8">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.5/examples/checkout/form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container">
    <div class="py-5 text-center">
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">1</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{$data->nama}}</h6>
              <span class="text-muted">{{$data->country}}</span>
            </div>
            <span class="text-muted">@money($data->dollar) <br>@currency($data->harga)</span>

          </li>

          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong>@money($data->dollar) <br> @currency($data->harga)</strong>
          </li>
          <div class="mt-2">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- kecil -->
            <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-9726151689834170"
            data-ad-slot="9125665533"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
            <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
           </script>
         </div>
       </ul>

     </div>
     <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" method="post" action="{{route('bayar',$data->id)}}">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Your Name</label>
            <input type="text" class="form-control" id="firstName" name="nama" value="{{Auth::user()->name}}" required readonly>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

        </div>

        <div class="mb-3">
          <label for="username">Name Shell</label>
          <div class="input-group">

            <input type="text" class="form-control" name="namashell" value="{{$data->nama}}" readonly required>

          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly>

        </div>


        <div class="mb-3">
          <label for="total">Total</label>
          <input type="text" class="form-control" id="total" name="total" value="@currency($data->harga) | @money($data->dollar)" readonly>

        </div>
        <hr>



        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0"><h4 class="mb-3">Payment</h4></legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="gridRadios1" value="OVO" required>
                <label class="form-check-label" for="gridRadios1">
                  OVO
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="gridRadios2" value="DANA" required>
                <label class="form-check-label" for="gridRadios2">
                  DANA
                </label>
              </div>
              <div class="form-check disabled">
               <input class="form-check-input" type="radio" name="payment" id="gridRadios2" value="BTC" required>  
               <label class="form-check-label" for="gridRadios3">
                BTC
              </label>
            </div>
          </div>
        </div>
      </fieldset>

      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
    </form>
  </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<script src="form-validation.js"></script></body>
</html>
