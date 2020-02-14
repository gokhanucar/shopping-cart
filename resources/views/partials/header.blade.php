 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <button 
                type="button" 
                class="navbar-toggler collapsed" 
                data-toggle="collapse" 
                data-target="#bs-example-navbar-collapse-1" 
                aria-expanded="false">
              <span class="navbar-toggler-icon"></span>
            </button> 
            <a class="navbar-brand" href="{{ route('product.index') }}">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
            <a href="{{ route('product.shoppingCart') }}">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
              </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user" aria-hidden="true"></i>
                User Management<span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                @if(Auth::check())
                  <li><a href="{{ route('user.profile') }}">User Profile</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="{{ route('user.logout') }}">Logout</a></li>
                @else
                  <li><a href="{{ route('user.signup') }}">Signup</a></li>
                  <li><a href="{{ route('user.signin') }}">Signin</a></li>
                @endif
              </div>
            </li>
          </ul>
        </div>
    </div>
</nav>

<!--
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">User Account</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
-->