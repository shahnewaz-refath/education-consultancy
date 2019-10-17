<?php
    require_once('../database.php');
    require_once('checklogin.php');
    $getdata = "SELECT * FROM feedback";
    $res = mysqli_query($database->connection,$getdata);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/Logo.png"/>

    <!-- Title Page-->
    <title>Control Feedback</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="dashboard.php">
                            <img src="images/Logo.png" alt="OHES Admin" style="height: 5em;width: 5em;" /><span>OHES Admin</span>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="employee.php">
                                <i class="fas fa-chart-bar"></i>Add Employee</a>
                        </li>
                        <li>
                            <a href="images.php">
                                <i class="fas fa-table"></i>Add Images</a>
                        </li>
                        <li>
                            <a href="controlfeedback.php">
                                <i class="far fa-check-square"></i>Feedback</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="dashboard.php">
                    <img src="images/Logo.png" alt="OHES Admin" style="height: 5em;width: 5em;" /><span>OHES Admin</span>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="employee.php">
                                <i class="fas fa-chart-bar"></i>Add Employee</a>
                        </li>
                        <li>
                            <a href="images.php">
                                <i class="fas fa-table"></i>Add Images</a>
                        </li>
                        <li>
                            <a href="controlfeedback.php">
                                <i class="far fa-check-square"></i>Feedback</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button" style="margin-left: auto;">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/Logo.png" alt="Ohesadmin" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $user_check;?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/Logo.png" alt="Ohesadmin" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $user_check;?></a>
                                                    </h5>
                                                    <span class="email">info@ohesbd.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class = "col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Card with switch</strong>
                                        <button style="float: right;" class="btn btn-primary"><a href="../feedback.html" style="color:#fff;">Give Feedback</a></button>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="moreacaption" class="px-1  form-control-label">Give feedback link(Copy and Send this link to someone to give feedback)</label>
                                            <textarea id="moreacaption" name = "moreacaption" class="form-control" rows="5">https://www.ohesbd.com/feedback.html
                                            </textarea>
                                        </div>

                                        <div class="table-responsive">
                                            <h3>Feedback List</h3>
                                            <table class="table">
                                                <thead>
                                                    <th>Name</th>
                                                    <th>Feedback</th>
                                                    <th>Picture</th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        while($row = mysqli_fetch_array($res)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['message'];?></td>
                                                        <td><img style = "height: 1.5em;width: 1.5em;" src="../images/feedback/<?php echo $row['picture'];?>"><?php echo $row['picture'];?></td>
                                                        <td class="table-data-feature"><button class="item" data-placement="top" title="delete feedback" data-original-title="Delete" onclick = "feeddelete(<?php echo $row['id_pk'];?>)">
                                                        <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>
                                        <small class="block">
                                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to OHES| Developed By <i class="fas fa-heart"></i> by <a href="#" target="_blank">Refath</a>
                                        </small>
                                        <br> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script type="text/javascript">
        function feeddelete(i){
            if(confirm('Are you sure to Delete?')){
                $.ajax({
                    url:"delfeed.php",  
                    method:"POST",
                    data:{x:i},
                    success:function(data){
                        alert(data);
                        location.reload(true);
                    }
                });
            }else{

            }
        }
    </script>

</body>

</html>
<!-- end document-->
