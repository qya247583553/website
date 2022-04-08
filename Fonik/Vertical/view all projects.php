<?php
session_start();
$hostName = "localhost";
$userName = "root";
$password = "";
// Create connection
$conn = mysqli_connect($hostName, $userName, $password);
mysqli_set_charset($conn,"utf8");
mysqli_select_db($conn,"desi_spice");

$sql="select * from desi_spice.sup_projects ";
$result=mysqli_query($conn,$sql) ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Fonik - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Summernote css -->
    <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />

    <!-- Basic Css files -->
    <link href="http://cdn.bootstrapmb.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <style>

        body {
            background: whitesmoke;
        }
        #Main {
            width: 600px;
            text-align: center;
            margin: 0 auto;
            height: auto;
        }
        table {
            width: 600px;
            border-collapse: collapse;
            text-align: left;
            margin: 10px 5px 5px 10px;
            cursor: default;
            border: 1px solid #ccc;
            margin-top:20px;
            box-shadow: 0px 0px 10px rgba(0,255,255,0.75);
            border: 1px solid rgba(127,255,255,0.75);
            -webkit-box-shadow: 0px 0px 8px rgba(0,255,255,0.75);
            -moz-box-shadow: 0px 0px 8px rgba(0,255,255,0.75);
            box-shadow: 0px 0px 8px rgba(0,255,255,0.75);
        }
        .tbTitle>th {
            font-weight: 300;
            text-align: center;
            padding: 10px 0 10px 0;
            font: 15px "微软雅黑", Arial, Helvetica, sans-serif;
            /*background-color: rgba(0,93,93,0.8);*/
            background-color: #f05b4f;
            color: black;
            text-shadow: 0px 0px 20px rgba(127,255,255,1);
        }
        th, td {
            border: 1px solid rgba(127,255,255,0.55);

        }
        .tbContext:hover {
            background-color: rgba(0,99,99,0.9) !important;
        }
        td,td>a {
            font: 13px "微软雅黑", Arial, Helvetica, sans-serif;
            text-align: center;
            padding: 6px 0 6px 0;
            color: rgba(127,255,255,0.75);
            text-shadow: 0px 0px 20px rgba(0,255,255,0.75);
        }
        .tbContext:nth-child(2n 1) {
            background-color: rgba(0,127,127,0.1);
        }

    </style>

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="">
                <!--<a href="index.html" class="logo text-center">Fonik</a>-->
                <a href="index.html" class="logo"><img src="assets/images/logo.png" height="20" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">
            <div id="sidebar-menu">
                <ul>

                    <li class="menu-title">Main</li>

                    <li>
                        <a href="index.html" class="waves-effect"><i class="dripicons-device-desktop"></i><span> Dashboard </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-suitcase"></i><span> User Interface <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-images.html">Images</a></li>
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                            <li><a href="ui-lightbox.html">Lightbox</a></li>
                            <li><a href="ui-navs.html">Navs</a></li>
                            <li><a href="ui-pagination.html">Pagination</a></li>
                            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                            <li><a href="ui-badge.html">Badge</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-video.html">Video</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-mail"></i> <span> Email <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Email Read</a></li>
                            <li><a href="email-compose.html">Email Compose</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" class="waves-effect"><i class="dripicons-calendar"></i><span> Calendar </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-blog"></i><span> Forms <span class="badge badge-pill badge-success float-right">9</span> </span></a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-editors.html">Form Editors</a></li>
                            <li><a href="form-uploads.html">Form File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-xeditable.html">Form Xeditable</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-box"></i><span> Icons <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li><a href="icons-material.html">Material Design</a></li>
                            <li><a href="icons-ion.html">Ion Icons</a></li>
                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                            <li><a href="icons-themify.html">Themify Icons</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-line"></i> <span> Charts  <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="charts-morris.html">Morris Chart</a></li>
                            <li><a href="charts-chartist.html">Chartist Chart</a></li>
                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="charts-flot.html">Flot Chart</a></li>
                            <li><a href="charts-c3.html">C3 Chart</a></li>
                            <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-list"></i><span> Tables <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                        </ul>
                    </li>



                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-map"></i><span> Maps <span class="badge badge-pill badge-danger float-right">2</span> </span></a>
                        <ul class="list-unstyled">
                            <li><a href="maps-google.html"> Google Map</a></li>
                            <li><a href="maps-vector.html"> Vector Map</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Extras</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-heart"></i><span> Advanced UI <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li><a href="advanced-animation.html">Animation</a></li>
                            <li><a href="advanced-highlight.html">Highlight</a></li>
                            <li><a href="advanced-rating.html">Rating</a></li>
                            <li><a href="advanced-nestable.html">Nestable</a></li>
                            <li><a href="advanced-alertify.html">Alertify</a></li>
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                            <li><a href="advanced-sessiontimeout.html">Session Timeout</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> Pages <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li><a href="pages-timeline.html">Timeline</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-directory.html">Directory</a></li>
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-recoverpw.html">Recover Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                            <li><a href="pages-blank.html">Blank Page</a></li>
                            <li><a href="pages-404.html">Error 404</a></li>
                            <li><a href="pages-500.html">Error 500</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->


    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">
                    <!-- Search input -->
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search" />
                            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <ul class="list-inline float-right mb-0">
                        <!-- Search -->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                <i class="mdi mdi-magnify noti-icon"></i>
                            </a>
                        </li>
                        <!-- Fullscreen -->
                        <li class="list-inline-item dropdown notification-list hidden-xs-down">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-fullscreen noti-icon"></i>
                            </a>
                        </li>
                        <!-- notification-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="ion-ios7-bell noti-icon"></i>
                                <span class="badge badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Notification (3)</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>

                            </div>
                        </li>
                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                            </div>
                        </li>
                    </ul>

                    <!-- Page title -->
                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="ion-navicon"></i>
                            </button>
                        </li>
                        <li class="hide-phone list-inline-item app-search">
                            <h3 class="page-title">View ALL PROJECTS</h3>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ==================
                 PAGE CONTENT START
                 ================== -->

            <div class="page-content-wrapper">

                <div class="container-fluid">

                    <div class="row">

                        <!---->
                        <!--                                    <div id="Demo" style="height: 90px; max-height: 989px;">-->
                        <div id="Main" style="overflow: auto">
                            <table style="background-color: slategrey;margin-top: 50px">
                                <tbody><tr class="tbTitle">
                                    <th>ID</th>
                                    <th>SupID</th>
                                    <th>ProjectName</th>
                                    <th>ProjectInfo</th>
                                    <th>action1</th>
                                    <th>action2</th>

                                </tr>
                                <?php
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <tr class="tbContext">
                                        <td><?php echo $row["ID"]?></td>
                                        <td><?php echo $row["sup_id"]?></td>
                                        <td><?php echo $row["project_name"]?></td>
                                        <td><?php echo $row["project_info"]?></td>
                                        <form action="修改.php" method="post">
                                            <td><button type="button" class="btn btn-info" value="<?php echo $row["ID"]?>" name="update" >Update</button></td>
                                            <td><button type="button" class="btn btn-info">Delete</button></td>
                                        </form>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody></table>
                        </div>
                    </div><!-- container -->
                </div> <!-- Page content Wrapper -->
            </div> <!-- content -->

            <footer class="footer">
                © 2018 Fonik - Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://www.php.cn/xiazai/code/">Themesbrand</a>.
            </footer>
        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="http://cdn.bootstrapmb.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!--Summernote js-->
    <script src="assets/plugins/summernote/summernote.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                 // set focus to editable area after initializing summernote
            });
        });
    </script>

</body>
</html>
