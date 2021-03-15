<!-- Navbar -->
<div class="white scrolling-navbar sticky-top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="{{url('/')}}" target="_blank">
        <img src="{{url('assets/img/brands/logo.png')}}" width="120px">
      </a>




      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="{{url('/')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>



        <!-- Right -->

          <li class="nav-item">
            <a href="{{url('cart')}}" class="nav-link waves-effect">

              <i class="fas fa-shopping-cart"></i>
                        <span class="clearfix">
                Cart
                <span class="basket-item-count">
                    <span class="badge badge-pill red"> 0 </span>
                </span>
            </span>
            </a>
          </li>
          @guest
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#LoginModal" href="#"> {{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </ul>

      </div>

    </div>
  </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 py-2 bg-dark" style="margin-top:60px;">
      @php
      $group = App\Models\Models\Groups::where('status','!=','2')->get();
      @endphp

      @foreach($group as $navitem)
        <a href="{{url('collection/'.$navitem->url)}}" class="px-4 text-white ">{{$navitem->name}}</a>
      @endforeach


    </div>

  </div>

  </div>
</div>


<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
<div class="row">
  <div class="col-md-12">

            <div class="form-group">
                <label for="email" >{{ __('E-Mail Address') }}</label>


                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
            </div>
  <div class="col-md-12">
            <div class="form-group">
                <label for="password" >{{ __('Password') }}</label>


                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
            </div>
  <div class="col-md-12">
            <div class="form-group ">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

            </div>
            </div>
  <div class="col-md-12">
            <div class="form-group mb-0">

                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

            </div>
            </div>



              </div>
        </form>
      </div>
      <div class="modal-footer">
        <p>Not a member? Register here.</p>
        <a class="btn btn-link" href="{{url('/register')}}">Register</a>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
