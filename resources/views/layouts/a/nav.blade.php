
<!-- Modal -->
<div class="modal fade" id="Buy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <P>
        <ul>
            <li>
                Click the button on the left (Dashboard-> Buy Shell) Or click Ready Shell Backdoor on the yellow page.
                <br>
                If Shell Ready, there will be a number where the shell is ready to buy.
            </li>
            <li><font color="red">Transactions are only done on gmail</font></li>
        </ul>
    </P>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="Pay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <P>
        <ul>
            <li>
                payment methods can be made by OVO, DANA, PAYPAL.

                For how to send the shell immediately, you have to pay first, then the admin will provide the shell link you ordered.
            </li>
            <li><font color="red">Transactions are only done on gmail</font></li>
        </ul>
    </P>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>

    <ul class="navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown no-caret mr-3 d-none d-md-inline">
            <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="d-none d-md-inline font-weight-500">Documentation</div>
                <i class="fas fa-chevron-right dropdown-arrow"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0 mr-sm-n15 mr-lg-0 o-hidden animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                <a class="dropdown-item py-3" type="button" target="_blank" data-toggle="modal" data-target="#Buy">
                    <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="dollar-sign"></i></div>
                    <div>
                        <div class="small text-gray-500">Buy</div>
                        How To Buy
                    </div>
                </a>



                <div class="dropdown-divider m-0"></div>
                <a class="dropdown-item py-3" type="button"  target="_blank" data-toggle="modal" data-target="#Pay">
                    <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="box"></i></div>
                    <div>
                        <div class="small text-gray-500">Payment</div>
                        How To Pay
                    </div>
                </a>

            </div>
        </li>
        
        <li class="nav-item dropdown no-caret mr-2 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="{{asset('dashstyle/17004.png')}}"/></a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="{{asset('dashstyle/17004.png')}}" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name">{{Auth::user()->name}}</div>
                        <div class="dropdown-user-details-email">{{Auth::user()->email}}</div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/home/{{Auth::user()->id}}/account">
                    <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
                    Account
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a>
    </div>
</li>
</ul>
</nav>