<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register | {{ env('APP_NAME') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/landing_assets/img/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('login_assets/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login_assets/css/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
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
            <div class=" card form-register border-0 p-4 rounded shadow">
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
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="col-12 text-center mb-4">
                    <a href="/" class="text-primary h4 text-uppercase"><img src="/landing_assets/img/logo/logo.png" onerror="this.style.display='none'" alt="AdminLTE Logo"
                        class="w-100" style="opacity: .8"></a>
                    <h5 class="card-title">Register your account</h5></div>
                   
                    <div class="col-md-6   col-sm-12  float-left form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="sponsor_id" placeholder="Enter Sponsor ID"                        value="{{ request()->sponsor_id ?? old('sponsor_id') }}">
                        <label for="floatingInput">Sponsor Id</label>
                    </div>
                    <div class="col-md-6  col-sm-12  float-left form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" type="text" name="sponsor_name" readonly  placeholder="Enter Sponsor name"/>
                        <label for="floatingInput">Sponsor Name</label>
                        
                    </div>

                    <div class="col-md-6  col-sm-12  float-left form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="name" value="{{ old('name') }}" placeholder="Enter name">
                        <label for="floatingInput">Name</label>
                        @error('login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6  col-sm-12   float-left form-floating mb-2">
                        <select name="position_type" class="form-select" required>
                            {{-- <option value="">-- Select Position --</option> --}}
                            <option value="left" {{ old('position_type') == 'left' ? 'selected' : '' }}>Left</option>
                            <option value="right" {{ old('position_type') == 'right' ? 'selected' : '' }}>Right</option>
                        </select>
                        <label for="floatingInput">Select Option</label>
                        @error('position_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class=" col-md-6   col-sm-12  float-left form-floating mb-2">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                        <label for="floatingInput">Email Address</label>
                        @error('login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6 col-sm-12  float-left form-floating mb-2">
                        <input type="text" class="form-control" id="floatingInput" name="mobile" value="{{ old('mobile') }}"
                        maxlength="10" placeholder="Enter Name">
                        <label for="floatingInput">Mobile</label>
                        @error('login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6   col-sm-12  float-left form-floating mb-2">
                        <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Enter password" >
                        <label for="floatingInput">Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6  col-sm-12  float-left form-floating mb-2">
                        <input class="form-control" id="floatingInput" type="password" name="password_confirmation" placeholder="Enter password confirmation" >
                        <label for="floatingInput">Confirm Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                    </div> --}}
                   
                    <button class="btn btn-primary w-100" type="submit">Register</button>

                  
                    
                <div class="col-12 text-center mt-3">
                    <span class="mb-0 mt-3"><span class="text-dark me-2">Already have an account ?</span> <a href="/login" class="text-dark fw-semibold"><span class="font-pop">Sign in</span></a></span>
                </div><!--end col-->
            </div>
                </form>
                
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('login_assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('login_assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script>
        let sponsor_id = '{{ request()->sponsor_id }}';
        $('[name="sponsor_id"]').on('change', function() {
            sponsorId = $(this).val();
            if (sponsorId) {
                $.ajax({
                    url: '/get-active-sponsor-name',
                    type: 'GET',
                    data: {
                        sponsor_id: sponsorId
                    },
                    success: function(response) {
                        if (response.success) {
                            $('[name="sponsor_name"]').val(response.sponsor_name);
                        } else {
                            $('[name="sponsor_name"]').val('');
                            $('#sponsor_id').val(''); // Clear the value of #refral
                            alert('Sponsor not found or is not activated');
                        }
                    },
                    error: function() {
                        $('[name="sponsor_name"]').val('');
                        $('#sponsor_id').val(
                            ''); // Clear the value of #refral in case of error
                        alert('Error occurred while fetching sponsor details');
                    }
                });
            } else {
                $('[name="sponsor_name"]').val('');
                $('#refral').val(''); // Clear the value of #refral if sponsor_id is empty
            }
        });

        setTimeout(() => {
            $('[name="sponsor_id"]').trigger('change');
        }, 1000);
    </script>

</body>

</html>