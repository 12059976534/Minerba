
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>E - Minerba</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body >
      
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="">
                                    <div class="text-center">
                                        <a href="#" class="">
                                            <img src="{{ asset('assets/images/web.png')}}" alt="" width="50%" class="auth-logo logo-dark mx-auto">
                                            <img src="{{ asset('assets/images/web.png')}}" alt="" width="50%" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                    <p class="mb-5 text-center">Sign up to continue to E-Minerba.</p>
                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="name">{{ __('Name') }}</label>
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="username">Email</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="eaxample@example.com" required autocomplete="email" autofocus>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="userpassword">{{ __('Password') }}</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="userpassword">{{ __('Confirm Password') }}</label>
                                                    <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                                </div>

                                       
                                                <div class="d-grid mt-4">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit"> {{ __('Register') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-5 text-center">
                                    <p class="text-primary-50">Don't have an account ? <a href="{{ route('login')}}" class="fw-medium text-primary"> Login </a> </p>
                                  
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
