

<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login |  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Online Banking, Deposits, Transfers, Savings and Loans" name="description" />
        <meta content="Millwallbank" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">


        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{asset('assets/libs/owl.carousel/assets/owl.carousel.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">

    </head>

    <body class="auth-body-bg">
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
                                    <div class="p-4 mt-auto text-white-50">
                                        <h1 class="text-white display-3 fw-semibold mb-3 hero-title">Banking Made Easy</h1>
                                        <div class="col-md-6">
                                            <p class="font-size-14 text-dark">
                                                Online Banking Tailored to your every need.
                                                manage your account opening Online - No personal visit required Privacy 100% guaranteed
                                             </p>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5">

                                        <a class="navbar-logo text-white d-block auth-logo" href="/" style="font-size:20px; font-weight:500">
                                            <span class="auth-logo-light">TURKIYE <span style="color:#556EE6">SEDAF</span> FINANS</span>
                                        </a>

                                        <a class="navbar-logo text-dark d-block auth-logo" href="/" style="font-size:20px; font-weight:500">
                                            <span class="auth-logo-dark">TURKIYE <span style="color:#556EE6">SEDAF</span> FINANS</span>
                                        </a>
                                    </div>
                                    <div class="my-auto">

                                        <div>
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue to Turkiye Sedaf Finans.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        Remember me
                                                    </label>
                                                </div>

                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                                </div>


                                            </form>

                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Turkiye Sedaf Finans</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/owl.carousel/owl.carousel.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

        <script>
            $(document).ready(function(){
                $('#auth-review-carousel').owlCarousel({
                    items: 1,
                    loop: false,
                    margin: 16,
                    nav: false,
                    dots: true,
                });
            });
        </script>

    </body>
</html>
