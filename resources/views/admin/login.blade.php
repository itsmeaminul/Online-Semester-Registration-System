<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Pannel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admins/node_modules/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admins/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admins/node_modules/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admins/css/admin_style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admins/images/favicon.html')}}" />
  </head>
  <body class="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <img src="images/csebrur_admin.png">
            <div class="card-header text-center font-weight-bold h3">Admin Login</div>
            <div class="card-body">
              <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                  <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row justify-content-center">
                  <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      Remember Me
                    </div>
                  </div>
                </div>
                <div class="form-group row mb-0 justify-content-center">
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                    Login
                    </button>
                    @if (Route::has('admin.password.request'))
                      <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                    @endif
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admins/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admins/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admins/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admins/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{asset('admins/js/off-canvas.js')}}"></script>
    <script src="{{asset('admins/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admins/js/misc.js')}}"></script>
    <script src="{{asset('admins/js/settings.js')}}"></script>
    <!-- endinject -->
  </body>
</html>