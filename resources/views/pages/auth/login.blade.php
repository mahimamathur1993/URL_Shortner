<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | {{ env('APP_NAME') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/landing_assets/img/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="login_assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="login_assets/css/main.css">
    <!--===============================================================================================-->
    <!-- Css -->
    <link href="login_assets/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
    <link href="login_assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="login_assets/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">

</head>

<body>

    <section class="bg-home d-flex align-items-center position-relative" style="background: url('login_assets/images/1.jpg') center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card form-signin border-0 p-4 rounded shadow">
                            
                        
                            <h5 class="card-title">Please sign in</h5>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <p><strong>Opps Something went wrong</strong></p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                                @csrf
                            
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="login" placeholder="Type your email/user id">
                                <label for="floatingInput">Email/ User Id/ Mobile No.</label>
                                @error('login')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Type your password">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        
                            <div class="d-flex justify-content-between">
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                    </div>
                                </div>
                                <p class="forgot-pass mb-0"><a href="/forgot-password" class="text-dark fw-semibold">Forgot password ?</a></p>
                            </div>
                            <button class="btn btn-primary w-100" type="submit">Sign in</button>
                           <!--end col-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_assets/vendor/bootstrap/js/popper.js"></script>
    <script src="login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="login_assets/js/bootstrap.bundle.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_assets/js/main.js"></script>

</body>

</html>
