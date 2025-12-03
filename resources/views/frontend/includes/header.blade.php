 <!--Topbar-->
<div class="header-main">
    <div class="top-bar p-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-sm-4 col-7">
                    <div class="top-bar-left d-flex">
                        <div class="clearfix">
                            <ul class="socials d-lg-none">
                                <li><a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="social-icon text-dark" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <div class="header-search-logo d-none d-lg-block ">
                                <a href="/" class="d-flex logo-height logo-svg header-logo">
                                    <img src="{{asset('uaebizz-logo.png')}}" class="header-brand-img desktop-logo" alt="Bizdire logo">
                                    <img src="{{asset('uaebizz-logo.png')}}" class="header-brand-img desktop-dark" alt="Bizdire logo">
                                </a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <ul class="contact border-start">
                                <li class="me-5 d-lg-none">
                                    <a href="javascript:void(0)" class="callnumber text-dark"><span><i class="fa fa-phone me-1"></i>: +425 345 8765</span></a>
                                </li>
                                <li class="select-country me-5">
                                    <select class="form-control select2-flag-search" data-placeholder="Select Country">
                                        <!-- (all country options remain unchanged - no .html links here) -->
                                        <option value="UM">United States of America</option>
                                        <option value="AF">Afghanistan</option>
                                        <!-- ... rest of countries ... -->
                                        <option value="ZW">Zimbabwe</option>
                                    </select>
                                </li>
                                <li class="dropdown me-5">
                                    <a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown"><span> Language <i class="fa fa-caret-down text-muted"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <a href="javascript:void(0)" class="dropdown-item"> English </a>
                                        <a class="dropdown-item" href="javascript:void(0)"> Arabic </a>
                                        <a class="dropdown-item" href="javascript:void(0)"> German </a>
                                        <a href="javascript:void(0)" class="dropdown-item"> Greek </a>
                                        <a href="javascript:void(0)" class="dropdown-item"> Spanish </a>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown"><span>Currency <i class="fa fa-caret-down text-muted"></i></span></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <a href="javascript:void(0)" class="dropdown-item"> USD </a>
                                        <a class="dropdown-item" href="javascript:void(0)"> EUR </a>
                                        <a class="dropdown-item" href="javascript:void(0)"> INR </a>
                                        <a href="javascript:void(0)" class="dropdown-item"> GBP </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-sm-8 col-5">
                    <div class="top-bar-right">
                        <ul class="custom ">
                            <li><a href="#" class="text-dark"><i class="fa fa-user me-1"></i> <span>Register</span></a></li>
                            <li><a href="#" class="text-dark"><i class="fa fa-sign-in me-1"></i> <span>Login</span></a></li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown"><i class="fa fa-home me-1"></i><span> My Dashboard</span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <a href="#" class="dropdown-item"><i class="dropdown-icon icon icon-user"></i> My Profile </a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icon icon-speech"></i> Inbox </a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icon icon-bell"></i> Notifications </a>
                                    <a href="#" class="dropdown-item"><i class="dropdown-icon icon icon-settings"></i> Account Settings </a>
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon icon icon-power"></i> Log out </a>
                                </div>
                            </li>
                            <li><a href="#" class="text-dark"><i class="fa fa-heart me-1"></i> <span>My favorities</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="sticky">
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo"><a href="/" class="d-flex logo-height mobile-logo logo-svg">
                    <img src="{{asset('assets/frontend/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="Bizdire logo">
                    <img src="{{asset('assets/frontend/images/brand/logo1.png')}}" class="header-brand-img desktop-dark" alt="Bizdire logo">
                </span>
                <a href="#" class="callusbtn"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- /Mobile Header -->

    <div class="horizontal-main bg-dark-transparent clearfix">
        <div class=" header-style horizontal-mainwrapper container clearfix">
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
                <ul class="horizontalMenu-list">
                    <li><a href="/">Home <span class="fa fa-caret-down m-0"></span></a></li>
                    <li><a href="#">About Us </a></li>
                    <li><a href="javascript:void(0)">Widgets <span class="fa fa-caret-down m-0"></span></a>
                        <ul class="sub-menu">
                            <li><a href="#">Card Widgets</a></li>
                            <li><a href="#">Carousel Widgets</a></li>
                            <li><a href="#">Vertical Scroll Widgets</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Pages <span class="fa fa-caret-down m-0"></span></a>
                        <div class="horizontal-megamenu clearfix">
                            <div class="container">
                                <div class="megamenu-content">
                                    <div class="row">
                                        <ul class="col link-list">
                                            <li class="title">Listing pages</li>
                                            <li><a href="#">Business List</a></li>
                                            <li><a href="#">Business List 02</a></li>
                                            <li><a href="#">Business List 03</a></li>
                                            <li><a href="#">Business List Right</a></li>
                                            <li><a href="#">Business Map list</a></li>
                                            <li><a href="#">Business Map list 02</a></li>
                                            <li><a href="#">Business Map style 03</a></li>
                                            <li class="title mb-0 mt-3">Add Post</li>
                                            <li><a href="#">Edit-list</a></li>
                                            <li><a href="#">Edit-list 02</a></li>
                                            <li><a href="#">Ad List</a></li>
                                            <li><a href="#">Ad List2</a></li>
                                        </ul>
                                        <ul class="col link-list">
                                            <li class="title">Categories & My Dashboard</li>
                                            <li><a href="#">Categories</a></li>
                                            <li><a href="#">Categories 02</a></li>
                                            <li><a href="#">My Dashboard</a></li>
                                            <li><a href="#">Listings</a></li>
                                            <li><a href="#">Listings 02</a></li>
                                            <li><a href="#">Favorite Listings</a></li>
                                            <li><a href="#">Favorite Listings 02</a></li>
                                            <li><a href="#">Manged Listings</a></li>
                                            <li><a href="#">Manged Listings 02</a></li>
                                            <li><a href="#">Payments</a></li>
                                            <li><a href="#">Orders</a></li>
                                            <li><a href="#">Settings</a></li>
                                            <li><a href="#">Tips</a></li>
                                        </ul>
                                        <ul class="col link-list">
                                            <li class="title">User Pages</li>
                                            <li><a href="#">User Profile</a></li>
                                            <li><a href="#">Personal Profile</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Typography</a></li>
                                            <li><a href="#">Invoice</a></li>
                                            <li><a href="#">Under Constructions</a></li>
                                            <li><a href="#">404</a></li>
                                            <li><a href="#">Register</a></li>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">Login 02</a></li>
                                            <li><a href="#">Forgot Password</a></li>
                                            <li><a href="#">Lock Screen</a></li>
                                            <li><a href="#">Faq</a></li>
                                        </ul>
                                        <ul class="col link-list">
                                            <li class="title">Headers Styles</li>
                                            <li><a href="#">Header Style 01</a></li>
                                            <li><a href="#">Header Style 02</a></li>
                                            <li><a href="#">Header Style 03</a></li>
                                            <li><a href="#">Header Style 04</a></li>
                                            <li><a href="#">Header Style 05</a></li>
                                            <li><a href="#">Header Style 06</a></li>
                                            <li><a href="#">Header Style 07</a></li>
                                            <li><a href="#">Header Style 08</a></li>
                                            <li><a href="#">Header Style 09</a></li>
                                            <li><a href="#">Header Style 10</a></li>
                                        </ul>
                                        <ul class="col link-list">
                                            <li class="title">Footers Styles</li>
                                            <li><a href="#">Footer Style 01</a></li>
                                            <li><a href="#">Footer Style 02</a></li>
                                            <li><a href="#">Footer Style 03</a></li>
                                            <li><a href="#">Footer Style 04</a></li>
                                            <li><a href="#">Footer Style 05</a></li>
                                            <li><a href="#">Footer Style 06</a></li>
                                            <li><a href="#">Footer Style 07</a></li>
                                            <li><a href="#">Footer Style 08</a></li>
                                            <li><a href="#">Footer Style 09</a></li>
                                            <li><a href="#">Footer Style 10</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="javascript:void(0)">Blog <span class="fa fa-caret-down m-0"></span></a>
                        <ul class="sub-menu">
                            <li><a href="javascript:void(0)">Blog Grid <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Blog Grid Left</a></li>
                                    <li><a href="#">Blog Grid Right</a></li>
                                    <li><a href="#">Blog Grid Center</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Blog List <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Blog List Left</a></li>
                                    <li><a href="#">Blog List Right</a></li>
                                    <li><a href="#">Blog List Center</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Blog Details <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Blog Details Left</a></li>
                                    <li><a href="#">Blog Details Right</a></li>
                                    <li><a href="#">Blog Details Center</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)">Switcher Pages <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Switcher Page</a></li>
                                    <li><a href="#">Switcher-1 Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Categories <span class="fa fa-caret-down m-0"></span></a>
                        <ul class="sub-menu">
                            <li><a href="#">Educational</a></li>
                            <li><a href="#">Meditation</a></li>
                            <li><a href="#">RealEstate</a></li>
                            <li><a href="#">Restaurant</a></li>
                            <li><a href="#">Backery</a></li>
                            <li><a href="#">Beauty & Spa</a></li>
                            <li><a href="#">Automobiles</a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Contact Us <span class="wsarrow"></span></a></li>
                    <li class="d-lg-none mt-5 pb-5 mt-lg-0">
                        <span><a class="btn btn-orange" href="#">Add Listing</a></span>
                    </li>
                </ul>
                <ul class="mb-0">
                    <li class="mt-2 d-none d-lg-flex">
                        <span><a class="btn btn-secondary ad-post" href="#"><i class="fa fa-plus text-white"></i> Add Listing</a></span>
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
        <div class="body-progress-container">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" id="myBar"></div>
        </div>
    </div>
</div>
