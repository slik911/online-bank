<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Turkiye Sedaf Finans</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Online Banking, Deposits, Transfers, Savings and Loans" name="description" />
        <meta content="TurkiyeSedafFinans" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('assets/libs/owl.carousel/assets/owl.carousel.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/libs/owl.carousel/assets/owl.theme.default.min.css')}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-bs-spy="scroll" data-bs-target="#topnav-menu" data-bs-offset="60">
        @include('sweetalert::alert')
        <nav class="navbar navbar-expand-lg navigation fixed-top sticky">
            <div class="container">

                <a class="navbar-logo text-white" href="/" style="font-size:20px; font-weight:500">
                    <span class="logo logo-light">TURKIYE <span style="color:#556EE6">SEDAF</span> FINANS</span>
                </a>

                <a class="navbar-logo text-dark " href="/" style="font-size:20px; font-weight:500">
                    <span class="logo logo-dark">TURKIYE <span style="color:#556EE6">SEDAF</span> FINANS</span>
                </a>

                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav ms-auto" id="topnav-menu" >
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact_us">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#faqs">Faqs</a>
                        </li>


                    </ul>

                    <div class="my-2 ms-lg-2">
                        <a href="{{route('login')}}" class="btn btn-outline-success w-xs">My Account</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- hero section start -->
        <section class="section hero-section bg-ico-hero" id="home">
            <div class="bg-overlay bg-primary"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="text-white-50">
                            <h1 class="text-white fw-semibold mb-3 hero-title">Banking Made Easy</h1>
                            <p class="font-size-14">
                               Online Banking Tailored to your every need.
                               manage your account opening Online - No personal visit required Privacy 100% guaranteed
                            </p>

                            <div class="button-items mt-4">
                                <a href="#contact_us" class="btn btn-success">Contact Us Now</a>
                                {{-- <a href="javascript: void(0);" class="btn btn-light">How it work</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-sm-10 ms-lg-auto">
                        <img src="{{asset('assets/images/banking.png')}}" class="img-fluid">
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- hero section end -->

        <!-- currency price section start -->
        <section class="section bg-white p-0">
            <div class="container">
                <div class="currency-price">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-warning bg-soft text-warning font-size-18">
                                                    <i class="bx bx-shield-quarter"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            {{-- <p class="text-muted"></p> --}}
                                            <h5>SECURED TRANSFER</h5>
                                            <p class="text-muted mb-0">Easy and seamless transfer of fund with our user friendly Online Portal </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                    <i class="bx bx-money"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            {{-- <p class="text-muted">QUICK LOANS</p> --}}
                                            <h5>QUICK LOANS</h5>
                                            <p class="text-muted  mb-0">Contact us now to request for a loan to <br>grow your business ideas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-info bg-soft text-info font-size-18">
                                                    <i class="bx bx-credit-card"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            {{-- <p class="text-muted"></p> --}}
                                            <h5>CARDS</h5>
                                            <p class="text-muted  mb-0">Apply for card suitable for any kind transaction you may need</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end container -->
        </section>
        <!-- currency price section end -->

        <!-- about section start -->
        <section class="section pt-4 bg-white" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <div class="small-title">About us</div>
                            <h4>Who We Are?</h4>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">

                        <div class="text-muted">
                            <h4>Turkiye <span style="color:#556EE6">Sedaf</span> Finans</h4>
                            <p>We offer you a secure bank account. We have been successfully involved in the business of arranging Offshore bank accounts and credit cards for years. We open many accounts every year and are intimately acquainted with the banking system all over the world.
                            </p>
                            <p>
                                As Turkiye Sedaf Finans grows, it is maintaining its identity as a strong, full-service Offshore banking. We offer a range of checking and savings products for both consumer and business customers. Other popular products include competitive mortgages, home equity lines of credit and consumer and business loans. The Trust and Wealth Management division rounds out the financial offerings available for individuals, families and businesses.</p>
                            {{-- <p class="mb-4">It would be necessary to have uniform pronunciation.</p> --}}
{{--
                            <div class="button-items">
                                <a href="javascript: void(0);" class="btn btn-success">Read More</a>
                                <a href="javascript: void(0);" class="btn btn-outline-primary">How It work</a>
                            </div> --}}

                            <div class="row mt-4">
                                <div class="col-lg-4 col-6">
                                    <div class="mt-4">
                                        <h4>$ 6.2 M</h4>
                                        <p>Invest amount</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="mt-4">
                                        <h4>16245</h4>
                                        <p>Users</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 ms-auto">
                        <div class=" mt-lg-0">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card border">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <i class="bx bxl-internet-explorer h2 text-success"></i>
                                            </div>
                                            <h5>Online Banking</h5>
                                            <p class="text-muted mb-0">Built For smooth and easy transactions</p>

                                        </div>
                                        {{-- <div class="card-footer bg-transparent border-top text-center">
                                            <a href="javascript: void(0);" class="text-primary">Learn more</a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border mt-lg-5">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <i class="bx bx-money h2 text-success"></i>
                                            </div>
                                            <h5>LOANS</h5>
                                            <p class="text-muted mb-0">Easy access to quick loans</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <hr class="my-5">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme clients-carousel" id="clients-carousel" dir="ltr">
                            <div class="item">
                                <div class="client-images">
                                    <img src="assets/images/clients/1.png" alt="client-img" class="mx-auto img-fluid d-block">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-images">
                                    <img src="assets/images/clients/2.png" alt="client-img" class="mx-auto img-fluid d-block">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-images">
                                    <img src="assets/images/clients/3.png" alt="client-img" class="mx-auto img-fluid d-block">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-images">
                                    <img src="assets/images/clients/4.png" alt="client-img" class="mx-auto img-fluid d-block">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-images">
                                    <img src="assets/images/clients/5.png" alt="client-img" class="mx-auto img-fluid d-block">
                                </div>
                            </div>
                            <div class="item">
                                <div class="client-images">
                                    <img src="assets/images/clients/6.png" alt="client-img" class="mx-auto img-fluid d-block">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- about section end -->

        <!-- Features start -->
        <section class="section" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <div class="small-title">Services</div>
                            <h4>Key features of the product</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center pt-4">
                    <div class="col-md-6 col-sm-8">
                        <div>
                            <img src="assets/images/crypto/features-img/img-1.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <div class="mt-4 mt-md-auto">
                            <div class="d-flex align-items-center mb-2">
                                <div class="features-number fw-semibold display-4 me-3">01</div>
                                <h4 class="mb-0">Lending</h4>
                            </div>
                            <p class="text-muted">We grant you quick access to loans to enable you actualize your respective visions and goals. Some of the loans we offer are;</p>
                            <div class="text-muted mt-4">
                                <p class="mb-2"><i class="mdi mdi-circle-medium text-success me-1"></i>Personal Loans</p>
                                <p><i class="mdi mdi-circle-medium text-success me-1"></i>Business Loans</p>
                                <p><i class="mdi mdi-circle-medium text-success me-1"></i>Student Loans</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row align-items-center mt-5 pt-md-5">
                    <div class="col-md-5">
                        <div class="mt-4 mt-md-0">
                            <div class="d-flex align-items-center mb-2">
                                <div class="features-number fw-semibold display-4 me-3">02</div>
                                <h4 class="mb-0">Internet Banking</h4>
                            </div>
                            <p class="text-muted">We at Mogace Bcl Provide you with user friendly only platform for swift transactions and other services.</p>
                            <div class="text-muted mt-4">
                                <p class="mb-2"><i class="mdi mdi-circle-medium text-success me-1"></i>Seamless Transfer</p>
                                <p><i class="mdi mdi-circle-medium text-success me-1"></i>Virtual Cards</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6  col-sm-8 ms-md-auto">
                        <div class="mt-4 me-md-0">
                            <img src="assets/images/crypto/features-img/img-2.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Features end -->


        <!-- Blog start -->
        <section class="section bg-white" id="contact_us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <div class="small-title">Contact</div>
                            <h4>Reach out to us</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">

                            <div class="card-body"  style="background-color: #f8f8fb">
                                <h3 class="">Contact Details</h3>
                                <p class="card-title">Address</p>
                                <p class="text-muted">Ibrahim Aga Sok No 8 Ustbostanci Istanbul
                                    NA, Ustbostanci, 28393
                                    Turkey</p>

                                <p class="card-title">Email</p>
                                <p class="text-muted">support@turkiyesedeffinans.com</p>

                            </div>
                        </div>
                       </div>
                       <div class="col-md-7">
                           {{-- <h5>Get in touch</h5> --}}
                           <form method="post" action="{{route('email.send')}}">
                               @csrf
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="formrow-firstname-input" name="name" required>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-email-input" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" required id="formrow-email-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="formrow-password-input" class="form-label">Subject</label>
                                        <input type="text" class="form-control" name="subject" required id="formrow-password-input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label for="message">Message</label>
                                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                      </div>
                                </div>

                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                       </div>
                </div>

                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Blog end -->

        <!-- Faqs start -->
        <section class="section" id="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <div class="small-title">FAQs</div>
                            <h4>Frequently asked questions</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="vertical-nav">
                            <div class="row">
                                <div class="col-lg-2 col-sm-4">
                                    <div class="nav flex-column nav-pills" role="tablist">
                                        <a class="nav-link active" id="v-pills-gen-ques-tab" data-bs-toggle="pill" href="#v-pills-gen-ques" role="tab">
                                            <i class= "bx bx-help-circle nav-icon d-block mb-2"></i>
                                            <p class="fw-bold mb-0">General Questions</p>
                                        </a>

                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel">
                                                    <h4 class="card-title mb-4">General Questions</h4>

                                                    <div>
                                                        <div id="gen-ques-accordion" class="accordion custom-accordion">
                                                            <div class="mb-3">
                                                                <a href="#general-collapseOne" class="accordion-list" data-bs-toggle="collapse"
                                                                                                aria-expanded="true"
                                                                                                aria-controls="general-collapseOne">

                                                                    <div>Do you open accounts for non residents  ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>

                                                                </a>

                                                                <div id="general-collapseOne" class="collapse show" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">Yes we do: We have clients that are non-residents. We have clients from more than 100 countries.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <a href="#general-collapseTwo" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                                aria-expanded="false"
                                                                                aria-controls="general-collapseTwo">
                                                                    <div>Can I close my account whenever I wish ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="general-collapseTwo" class="collapse" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">Yes! There are no restrictions when it comes to closing an account. You are free to close your account if you wish. The procedure is immediate and cost-free. Of course, if your money is invested, it generally takes a day or two to liquidate positions, but even so, no one will prevent you from withdrawing your funds or charge you a financial penalty.</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <a href="#general-collapseThree" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                                aria-expanded="false"
                                                                                aria-controls="general-collapseThree">
                                                                    <div>I am not 18 yet. Can I open an account ?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="general-collapseThree" class="collapse" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">No! You need to be 18 years old to open the account. We understand that you may be under 18 and already have an independent financial life, but unfortunately by law Bluewall national bank cannot open accounts for non-residents under 18. The only solution we can offer is to begin the procedure shortly before you turn 18 and open the account on your birthday..</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <a href="#general-collapseFour" class="accordion-list collapsed" data-bs-toggle="collapse"
                                                                                aria-expanded="false"
                                                                                aria-controls="general-collapseFour">
                                                                    <div>How much do you charge to open an account? Is this a one-time charge? When do I pay it?</div>
                                                                    <i class="mdi mdi-minus accor-plus-icon"></i>
                                                                </a>
                                                                <div id="general-collapseFour" class="collapse" data-bs-parent="#gen-ques-accordion">
                                                                    <div class="card-body">
                                                                        <p class="mb-0">We charge an account opening fee for account opening services. The fee is payable when you choose the account and is fully refundable if the bank rejects your application. It is not refundable if YOU cancel your application.You find the prices to order our opening service for each account in the 'Application Form' area or when reading each account description. Prices are listed in USD/EUR/POUND but can be paid in any currency.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end vertical nav -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- Faqs end -->


        <!-- Footer start -->
        <footer class="landing-footer">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Company</h5>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#features">Services</a></li>
                                <li><a href="#contact_us">Contact Us</a></li>
                                <li><a href="#faqs">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Resources</h5>
                            <ul class="list-unstyled footer-list-menu">
                                <li><a href="/">Privacy Policy</a></li>
                                <li><a href="/">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Links</h5>
                            <ul class="list-unstyled footer-list-menu">
                                {{-- <li><a href="javascript: void(0);">Tokens</a></li>
                                <li><a href="javascript: void(0);">Roadmap</a></li> --}}
                                <li><a href="#faqs">FAQs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-4 mb-lg-0">
                            <h5 class="mb-3 footer-list-title">Latest News</h5>
                            <div class="blog-post">
                                <a href="javascript: void(0);" class="post">
                                    <div class="badge badge-soft-success font-size-11 mb-3">Market Structure</div>
                                    <h5 class="post-title">Capitalists Strikes Again</h5>
                                    <p class="mb-0"><i class="bx bx-calendar me-1"></i> 04 Sept, 2021</p>
                                </a>
                                <a href="javascript: void(0);" class="post">
                                    <div class="badge badge-soft-success font-size-11 mb-3">Finance</div>
                                    <h5 class="post-title">Market Inflation </h5>
                                    <p class="mb-0"><i class="bx bx-calendar me-1"></i> 12 Sept, 2021</p>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <hr class="footer-border my-5">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <a class="navbar-logo text-white" href="/" style="font-size:15px; font-weight:500">
                                TURKIYE SEDAF FINANS
                            </a>
                        </div>

                        <p class="mb-2"><script>document.write(new Date().getFullYear())</script> © Turkiye Sedaf Finans</p>

                    </div>

                </div>
            </div>
            <!-- end container -->
        </footer>
        <!-- Footer end -->

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('assets/libs/jquery.easing/jquery.easing.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('assets/libs/jquery-countdown/jquery.countdown.min.js')}}"></script>

        <!-- owl.carousel js -->
        <script src="{{asset('assets/libs/owl.carousel/owl.carousel.min.js')}}"></script>

        <!-- ICO landing init -->
        <script src="{{asset('assets/js/pages/ico-landing.init.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
