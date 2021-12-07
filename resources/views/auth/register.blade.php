
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
        <script src='https://www.google.com/recaptcha/api.js'></script>

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
                                                <!-- <div class="mb-4">
                                                    <label class="form-label" for="name">{{ __('Name') }}</label>
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
                                                </div> -->
                                                <label class="form-label" for="inputGroupSelect03">Salutation</label>
                                                <div class="input-group mb-3">
                                                        <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                                            <option selected>{{ __('Name') }}</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="fullname">Fullname</label>
                                                    <input type="text" class="form-control @error('fullname') is-invalid @enderror"  name="fullname" value="{{ old('fullname') }}" placeholder="Enter Your FullName" required autocomplete="email" autofocus>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="fullname">Telephone</label>
                                                    <input type="text" class="form-control @error('telphone') is-invalid @enderror"  name="telphone" value="{{ old('telphone') }}" placeholder="Enter Your Telphone" required autocomplete="telphone" autofocus>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="form-label" for="username">Email</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{ old('email') }}" placeholder="eaxample@example.com" required autocomplete="email" autofocus>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="username">Company Name</label>
                                                    <input type="text" class="form-control @error('company_name') is-invalid @enderror"  name="company_name" value="{{ old('company_name') }}" placeholder="PT.Name..." required autocomplete="company_name" autofocus>
                                                </div>
                                                <label class="form-label" for="inputGroupSelect03">Type of User</label>
                                                <div class="input-group mb-3">
                                                        <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                                            <option selected>{{ __('Name') }}</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="Company Addres">Company Addres</label>
                                                    <textarea name="" id="Company Addres" class="form-control"></textarea>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="userpassword">{{ __('Password') }}</label>
                                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label" for="userpassword">{{ __('Confirm Password') }}</label>
                                                    <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                                                </div>

                                                <div class="g-recaptcha" data-sitekey="6Ldbdg0TAAAAAI7KAf72Q6uagbWzWecTeBWmrCpJ"></div>

                                       
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
