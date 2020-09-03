<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pet App</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href="{{url('public/global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ url('public/css/app.css') }}" rel="stylesheet">
    <link href="{{url('public/css//bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('public/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{ url('public/js/app.js') }}"></script>
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <!-- <script src="{{url('public/global_assets/js/main/jquery.min.js') }}"></script> -->
    <!-- <script src="{{url('public/global_assets/js/main/bootstrap.bundle.min.js') }}"></script> -->
    <!-- <script src="{{url('public/global_assets/js/plugins/loaders/blockui.min.js') }}"></script> -->
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{url('public/global_assets/js/plugins/media/fancybox.min.js')}}"></script>
    <script src="{{url('public/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

    <script src="{{url('public/js/limitless_app.js')}}"></script>
    <script src="{{url('public/global_assets/js/demo_pages/ecommerce_product_list.js')}}"></script>
    <!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-block">
                <img src="{{url('public/global_assets/images/logo_light.png')}}" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-component-toggle" type="button">
                <i class="icon-unfold"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-component-toggle d-none d-md-block">
                        <i class="icon-drag-right"></i>
                    </a>
                </li>

            </ul> -->

            <span class="navbar-text ml-md-3 mr-md-auto">
                <!-- <span class="badge bg-success">Online</span> -->
            </span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="#" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle')}}" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">James Alexander</span>
                                                <span class="text-muted float-right font-size-sm">04:58</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle')}}" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Margo Baker</span>
                                                <span class="text-muted float-right font-size-sm">12:16</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">That was something he was unable to do because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Jeremy Victorino</span>
                                                <span class="text-muted float-right font-size-sm">22:48</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Beatrix Diaz</span>
                                                <span class="text-muted float-right font-size-sm">Tue</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle')}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="#">
                                                <span class="font-weight-semibold">Richard Vango</span>
                                                <span class="text-muted float-right font-size-sm">Mon</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                    </div>
                                </li>`
                            </ul>
                        </div>

                        <div class="dropdown-content-footer justify-content-center p-0">
                            <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="rounded-circle')}}" alt="">
                        <span>Victoria</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                        <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4>
                            <!-- <i class="icon-arrow-left52 mr-2"></i>  -->
                            <span class="font-weight-semibold">Welcome to</span> - PetApp</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                </div>

            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Inner container -->
                <div class="d-flex align-items-start flex-column flex-md-row">

                    <!-- Left content -->
                    <div class="w-100 overflow-auto order-2 order-md-1">

                        <!-- Grid -->
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default">Fathom Backpack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's Accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$49.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Mystery Air Long Sleeve T Shirt</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's Fashion</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$25.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Women’s Prospect Backpack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Women's Accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$63.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Overlook Short Sleeve T Shirt</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's Fashion</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$57.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Infinite Ride Liner</a>
                                            </h6>

                                            <a href="#" class="text-muted">Winter sports</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$89.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Custom Snowboard</a>
                                            </h6>

                                            <a href="#" class="text-muted">Winter sports</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$35.99</h3>


                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Kids' Day Hiker 20L Backpack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$143.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Lunch Sack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$93.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Cambridge Jacket</a>
                                            </h6>

                                            <a href="#" class="text-muted">Winter jackets</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$36.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Covert Jacket</a>
                                            </h6>

                                            <a href="#" class="text-muted">Winter jackets</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$25.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Day Hiker Pinnacle 31L Backpack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$47.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Kids' Gromlet Backpack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$85.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Tinder Backpack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$47.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Almighty Snowboard Boot</a>
                                            </h6>

                                            <a href="#" class="text-muted">Winter sports</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$76.99</h3>
                                        
                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Fathom Backpack</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's Accessories</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$59.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-img-actions">
                                            <a href="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" data-popup="lightbox">
                                                <img src="{{url('public/global_assets/images/placeholders/placeholder.jpg')}}" class="card-img" width="96" alt="">
                                                <span class="card-img-actions-overlay card-img">
                                                    <i class="icon-plus3 icon-2x"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-0">
                                                <a href="#" class="text-default mb-0">Mystery Air Long Sleeve T Shirt</a>
                                            </h6>

                                            <a href="#" class="text-muted">Men's Fashion</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">$25.99</h3>

                                        <button type="button" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /grid -->


                        <!-- Pagination -->
                        <div class="d-flex justify-content-center pt-3 mb-3">
                            <ul class="pagination">
                                <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
                            </ul>
                        </div>
                        <!-- /pagination -->

                    </div>
                    <!-- /left content -->


                    <!-- Right sidebar component -->
                    <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

                        <!-- Sidebar content -->
                        <div class="sidebar-content">

                            <!-- Categories -->
                            <div class="card">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="search" class="form-control" placeholder="Search">
                                            <div class="form-control-feedback">
                                                <i class="icon-search4 font-size-base text-muted"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-body border-0 p-0">
                                    <ul class="nav nav-sidebar mb-2">
                                        <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                                            <a href="#" class="nav-link">Street wear</a>
                                            <ul class="nav nav-group-sub">
                                                <li class="nav-item"><a href="#" class="nav-link">Hoodies</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Jackets</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link active">Pants</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Shirts</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Sweaters</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Tank tops</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Underwear</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">Snow wear</a>
                                            <ul class="nav nav-group-sub">
                                                <li class="nav-item"><a href="#" class="nav-link">Fleece jackets</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Gloves</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Ski jackets</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Ski pants</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Snowboard jackets</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Snowboard pants</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Technical underwear</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">Shoes</a>
                                            <ul class="nav nav-group-sub">
                                                <li class="nav-item"><a href="#" class="nav-link">Laces</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Sandals</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Skate shoes</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Slip ons</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Sneakers</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Winter shoes</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">Accessories</a>
                                            <ul class="nav nav-group-sub">
                                                <li class="nav-item"><a href="#" class="nav-link">Beanies</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Belts</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Caps</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Sunglasses</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Headphones</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Video cameras</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Wallets</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Watches</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /categories -->


                            <!-- Filters -->
                            <div class="card">
                                <div class="card-header bg-transparent header-elements-inline">
                                    <span class="text-uppercase font-size-sm font-weight-semibold">Filter products</span>
                                    <div class="header-elements">
                                        <div class="list-icons">
                                            <a class="list-icons-item" data-action="collapse"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="search" class="form-control" placeholder="Search brand">
                                                <div class="form-control-feedback">
                                                    <i class="icon-search4 font-size-base text-muted"></i>
                                                </div>
                                            </div>

                                            <div class="overflow-auto" style="max-height: 192px;">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        686
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        A.Lab
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Adidas
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        ALIS
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Analog
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Burton
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Atomic
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Armada
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        O'Neill
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Baja
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Baker
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Blue Parks
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Billabong
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Bonfire
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-input-styled" data-fouc>
                                                        Brixton
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="font-size-xs text-uppercase text-muted mb-3">Items for</div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Men
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Women
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Kids
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Unisex
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group mb-2">
                                            <div class="font-size-xs text-uppercase text-muted mb-3">Size</div>

                                            <div class="row row-labels">
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXS</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XS</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">S</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-warning text-warning-800 d-flex justify-content-center p-2 mb-2">M</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">L</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XL</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXL</a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXXL</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="font-size-xs text-uppercase text-muted mb-3">Fit</div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Slim fit
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Skinny fit
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Regular fit
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Loose fit
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Long cut
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="font-size-xs text-uppercase text-muted mb-3">Color</div>

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-primary rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Blue</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-warning rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Orange</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-teal rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Teal</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-pink rounded color-selector-active">
                                                            <div class="py-1"></div>
                                                            <i class="icon-checkmark3"></i>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Pink</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-grey-800 rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Black</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-purple rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Purple</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-success rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Green</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-danger rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Red</div>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mb-2">
                                                        <a href="#" class="d-block p-2 bg-info rounded">
                                                            <div class="py-1"></div>
                                                        </a>
                                                        <div class="font-size-sm text-center text-muted mt-1">Cyan</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="font-size-xs text-uppercase text-muted mb-3">Features</div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Crew neck
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Chest pocket
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Raglan sleeves
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Polo neck
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    V-neck
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    High collar
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Hood
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Button strip
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Wide neck
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Kangaroo pocket
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="font-size-xs text-uppercase text-muted mb-3">Material features</div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Canvas
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Lined
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Merino
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Quick drying
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Stretch
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Water repellent
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-input-styled" data-fouc>
                                                    Windproof
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn bg-blue btn-block">Filter</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /filters -->

                        </div>
                        <!-- /sidebar content -->

                    </div>
                    <!-- /right sidebar component -->

                </div>
                <!-- /inner container -->

            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>