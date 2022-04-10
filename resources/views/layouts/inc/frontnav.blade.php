<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-0">
    <div class="container-fluid">
      <ul class="navbar-nav mr-auto">

      <a class="navbar-brand" href="#">E-commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse"  id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item  ml-auto  margin-nav">
            <a class="nav-link active ml-auto" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item  ml-auto  margin-nav">
            <a class="nav-link active ml-auto" aria-current="page" href="{{ route('cart-display-items') }}">Cart</a>
          </li>
          <li class="nav-item  ml-auto">
            <a class="nav-link ml-auto" href="{{ url('category') }}">categories</a>
          </li>

                       @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                              <a class="dropdown-item" href=""
                              onclick="">
                               {{ __('Profile') }}
                              </a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                  @endguest


          {{-- <li class="nav-item  ml-auto">
            <a class="nav-link" href="{{ route('cart-display-items') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              cart
            </a> --}}
            {{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul> --}}
          {{-- </li> --}}
          {{-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
      </ul>
    </div>
  </nav>
