<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | {{ env('APP_NAME') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/landing_assets/img/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/login_assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="/login_assets/css/main.css">
    <!--===============================================================================================-->
    <!-- Css -->
    <link href="/login_assets/css/bootstrap.min.css" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css">
    <link href="/login_assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="/login_assets/css/style.min.css" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css">
    
</head>

<body>

    <section class="bg-home d-flex align-items-center position-relative" style="background: url('/login_assets/images/1.jpg') center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card form-signin border-0 p-4 rounded shadow">
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
                    <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                        <div class="text-center mb-4">
                            <a href="/" class="text-primary h4 text-uppercase"><img src="/landing_assets/img/logo/logo.png" onerror="this.style.display='none'" alt="AdminLTE Logo"
                                class="w-100" style="opacity: .8"></a>
                        </div>  @csrf
                        @if (session('status'))
                            <div>{{ session('status') }}</div>
                        @endif
                        
                    <span class="login100-form-title p-b-49">
                        Reset password
                    </span>
                        <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="email" placeholder="Type your email/user id" value="{{ $email }}">
                        <label for="floatingInput">Email
                       </label>
                    </div>

                    {{-- <div class="wrap-input100 validate-input m-b-23">
                        <span class="label-input100">Email</span>
                        <input class="input100"type="email" name="email" value="{{ $email }}"
                            placeholder="Type your email">
                        <span class="focus-input100" data-symbol="&#x2709;"></span>
                    </div> --}}

                    {{-- <div class="wrap-input100 validate-input">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <span class="label-input100">Confirm Password</span>
                        <input class="input100" type="password" name="password_confirmation">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div> --}}

                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Enter password" >
                        <label for="floatingInput">Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-floating mb-2">
                        <input class="form-control" id="floatingInput" type="password" name="password_confirmation" placeholder="Enter password confirmation" >
                        <label for="floatingInput">Confirm Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary w-100" type="submit"> Reset Password</button>

                    {{-- <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Reset Password
                            </button>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_assets/vendor/bootstrap/js/popper.js"></script>
    <script src="login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="login_assets/js/main.js"></script>

</body>

</html>
