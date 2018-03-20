<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{asset('images/Logo LGR-1.svg')}}" width="200" height="50">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars fa-1x"></i></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('shop') ? 'active' : '' }}">
                <a class="nav-link navbar-blue" href="{{ url('/shop') }}">Shop</a>
            </li>
            <li class="nav-item {{ Request::is('lookbook') ? 'active' : '' }}">
                <a class="nav-link navbar-blue" href="{{ url("/lookbook") }}">Lookbook</a>
            </li>
            <li class="nav-item {{ Request::is('our-story') ? 'active' : '' }}">
                <a class="nav-link navbar-blue" href="{{ url("/our-story") }}">Our Story</a>
            </li>
            <li class="nav-item {{ Request::is('howtobuy') ? 'active' : '' }}">
                <a class="nav-link navbar-blue" href="{{ url("/howtobuy") }}">How to Buy</a>
            </li>
           {{--  <li class="nav-item">
                <a class="nav-link navbar-blue" href="#">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link navbar-blue" href="#">
                    <i class="fas fa-user fa-2x"></i>
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
