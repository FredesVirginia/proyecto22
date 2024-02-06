
{{-- NO USAR! NO FUNCIONA! --}}{{--
<header class="site-header site-header--menu-right bg-navbar position-fixed py-7 py-xs-0 site-header--absolute">
    <div class="container-fluid-fluid px-10">
    <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
        <!-- Brand Logo-->
        <div class="brand-logo">
        <a href="./index.html">
            <!-- light version logo (logo must be black)-->
            <img src="{{asset('imgs/logo.png')}}" alt="" class="light-version-logo default-logo" style="max-height:30px;">
            {{-- <!-- Dark version logo (logo must be White)-->
            <img src="image/logo-main-white.png" alt="" class="dark-version-logo"> --}}
        </a>
        </div>
        <div class="collapse navbar-collapse" id="mobile-menu">
        <div class="navbar-nav-wrapper">
            <ul class="navbar-nav main-menu">

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                        <i class="icon icon-small-down"></i>
                    </a>
                    <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="drop-menu-item">
                        <a href="home-1.html">
                        Homepage 01
                        </a>
                    </li>
                    <li class="drop-menu-item">
                        <a href="home-2.html">
                        Homepage 02
                        </a>
                    </li>
                    <li class="drop-menu-item">
                        <a href="home-3.html">
                        Homepage 03
                        </a>
                    </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2" href="#features" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        <i class="icon icon-small-down"></i>
                    </a>
                    <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li class="drop-menu-item dropdown">
                        <a class="dropdown-toggle gr-toggle-arrow" id="navbarDropdown242" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Job Pages
                            <i class="icon icon-small-down"></i>
                        </a>
                        <ul class="gr-menu-dropdown dropdown-menu dropdown-left" aria-labelledby="navbarDropdown242">
                            <li class="drop-menu-item">
                                <a href="./search-grid.html">
                                Job Grid
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
            </li>
            </ul>
        </div>
        <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="true" aria-label="Toggle navigation">
            <i class="gr-cross-icon"></i>
        </button>
        </div>

        <div class="header-btn-devider ml-auto ml-lg-5 pl-2 d-none d-xs-flex align-items-center">

            <div>
                <div class="dropdown show-gr-dropdown py-5">
                <a class="proile media ml-7 flex-y-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="circle-40">
                    <img src="{{asset('imgs/nophoto.jpg')}}" alt="" height="35" width="35" style="border-radius: 50%">
                    </div>
                    <i class="fas fa-chevron-down color-navbar-text ml-6"></i>
                </a>
                <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="dashboard-settings.html">Settings </a>
                    <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="candidate-profile-main.html">Edit Profile</a>
                    <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="#">Log Out</a>
                </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Hamburger-->
        <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <i class="icon icon-simple-remove icon-close"></i> -->
        <span class="hamburger hamburger--squeeze js-hamburger">
        <span class="hamburger-box">
        <span class="hamburger-inner"></span>
        </span>
        </span>
        </button>
        <!--/.Mobile Menu Hamburger Ends-->
    </nav>
    </div>
</header>
