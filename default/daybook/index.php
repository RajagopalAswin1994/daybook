<?php include '../includes/header.php' ?>

<body class="">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.php" class="logo">
                <span>
                    <img src="../assets/images/favicon.ico" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Personal</li>
                <li><a href="index.php"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span><span class="menu-arrow"></span></a></li>
                <!-- <li><a href="daybook.php"> <i data-feather="minus-square" class="align-self-center menu-icon"></i><span>Expenses</span><span class="menu-arrow"></span></a></li>
                <li><a href="income.php"> <i data-feather="plus-square" class="align-self-center menu-icon"></i><span>Income</span><span class="menu-arrow"></span></a></li> -->
                <hr class="hr-dashed hr-menu">
                <li class="menu-label mt-0"> <a href="">Reactler</a> </li>
                <li class="menu-label mt-0"> <a href="">Hayagriva's</a> </li>
            </ul>
        </div>
    </div>
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-end mb-0">
                    <li class="dropdown hide-phone">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="search" class="topbar-icon"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                            <!-- Top Search Bar -->
                            <div class="app-search-topbar">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="from-control top-search mb-0" placeholder="Type text...">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i data-feather="bell" class="align-self-center topbar-icon"></i>
                            <span class="badge bg-danger rounded-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                            <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge bg-primary rounded-pill">2</span>
                            </h6>
                            <div class="notification-menu" data-simplebar>
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="shopping-cart" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="../assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="users" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <img src="../assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-end text-muted ps-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary">
                                            <i data-feather="check-circle" class="align-self-center icon-xs"></i>
                                        </div>
                                        <div class="media-body align-self-center ms-2 text-truncate">
                                            <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="ms-1 nav-user-name hidden-sm">Nick</span>
                            <img src="../assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual me-1"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>
                    <li class="creat-btn">
                        <div class="nav-link">
                            <button type="button" class="btn btn-sm btn-soft-info btn-sm" data-bs-toggle="modal" data-bs-target="#newrecord">
                                <i class="fas fa-minus me-2"></i> New Record
                            </button>
                            <button type="button" class="btn btn-sm btn-soft-danger btn-sm" data-bs-toggle="modal" data-bs-target="#addestimate">
                                <i class="fas fa-minus me-2"></i> Add Estimate
                            </button>
                            <button type="button" class="btn btn-sm btn-soft-success btn-sm" data-bs-toggle="modal" data-bs-target="#addincome">
                                <i class="fas fa-plus me-2"></i> Add Income
                            </button>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="modal fade bd-example-modal-xl" id="newrecord" tabindex="-1" role="dialog" aria-labelledby="addrecordexpenses" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title m-0" id="addrecordexpenses">Add Expenses</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!--end modal-header-->
                    <div class="modal-body form-material">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img src="../assets/images/widgets/newrecord.png" alt="" class="img-fluid">
                            </div>
                            <!--end col-->
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Fill the details</h4>

                                    </div>
                                    <!--end card-header-->
                                    <div class="card-body">
                                        <div class="general-label">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 row">
                                                            <label for="example-date-input" class="col-sm-3 form-label align-self-center mb-lg-0 text-end">Date</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="example-text-input" class="col-sm-3 form-label align-self-center mb-lg-0 text-end">Particular</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-3 form-label align-self-center mb-lg-0 text-end">Category</label>
                                                            <div class="col-sm-9">
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Open this select menu</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3 row">
                                                            <label for="example-number-input" class="col-sm-3 form-label align-self-center mb-lg-0 text-end">Amount</label>
                                                            <div class="col-sm-9">
                                                                <input class="form-control" type="number" value="42" id="example-number-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                            <label for="floatingTextarea2">Comments / Description</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h4 class="card-title">Attachments</h4>
                                                                    <!-- <p class="text-muted mb-0">Your so fresh input file — Default version</p> -->
                                                                </div>
                                                                <!--end card-header-->
                                                                <div class="card-body">
                                                                    <input type="file" id="input-file-now" class="dropify" />
                                                                </div>
                                                                <!--end card-body-->
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!--end row-->
                                                <div class="row">
                                                    <div class="col-sm-12 mt-1 text-end">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        <button type="button" class="btn btn-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                </div>
                                <!--end card-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div>
                    <!--end modal-body-->
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-dismiss="modal">Close</button> -->
                    </div>
                    <!--end modal-footer-->
                </div>
                <!--end modal-content-->
            </div>
            <!--end modal-dialog-->
        </div>
        <!--end modal-->

         

         

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Analytics</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Personal</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Day-Book</h4>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Date</th>
                                            <th>Particular</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Attachments</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td><a href=""><i class="fas mdi-attachment"></a></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Estimates</h4>
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>SNo.</th>
                                            <th>Date</th>
                                            <th>Particular</th>
                                            <th>Amount</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Attachments</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td><a href=""><i class="fas mdi-attachment"></a></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div><!-- container -->

            <footer class="footer text-center text-sm-start">
                &copy; <script>
                    document.write(new Date().getFullYear())
                </script> Personal <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/metismenu.min.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/feather.min.js"></script>
    <script src="../assets/js/simplebar.min.js"></script>
    <script src="../assets/js/moment.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../../plugins/dropify/js/dropify.min.js"></script>

    <script src="../../plugins/apex-charts/apexcharts.min.js"></script>
    <script src="../../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="../assets/pages/jquery.analytics_dashboard.init.js"></script>

    <!-- Required datatable js -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <!-- Buttons examples -->
    <script src="../../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables/buttons.bootstrap5.min.js"></script>
    <script src="../../plugins/datatables/jszip.min.js"></script>
    <script src="../../plugins/datatables/pdfmake.min.js"></script>
    <script src="../../plugins/datatables/vfs_fonts.js"></script>
    <script src="../../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables/buttons.print.min.js"></script>
    <script src="../../plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="../assets/pages/jquery.datatable.init.js"></script>

    <script src="../../plugins/select2/select2.min.js"></script>
    <script src="../../plugins/huebee/huebee.pkgd.min.js"></script>
    <script src="../../plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
    <script src="../../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="../../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <script src="../assets/pages/jquery.forms-advanced.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>

</body>

</html>