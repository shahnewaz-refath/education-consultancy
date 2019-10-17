<?php
    require_once('../database.php');
    require_once('checklogin.php');
    $getdata = "SELECT * FROM employee";
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
    <title>Employee</title>

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
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Employees</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                                        <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#addemployee">
                                            <i class="zmdi zmdi-plus"></i>Add New Employee
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <!-- <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th> -->
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Email</th>
                                                <th>Number</th>
                                                <th>Picture</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                while($row = mysqli_fetch_array($res)){
                                            ?>
                                            <tr class="tr-shadow editrow" id = "<?php echo $row['id_pk'];?>">
                                                <td class = "editname"><?php echo $row["name"]; ?></td>
                                                <td class = "editdesig"><?php echo $row["designation"]; ?></td>
                                                <td class = "editemail"><?php echo $row["email"]; ?></td>
                                                <td class = "editnumber"><?php echo $row["contactnumber"]; ?></td>
                                                <td class = "editimg"><img style = "height: 2em;width: 2em;" src="images/employee/<?php echo $row['picture'];?>"><?php echo $row['picture'];?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" onclick="employeeedit(<?php echo $row['id_pk'];?>)">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button> -->
                                                        <button class="item editemp" 
                                                        data-toggle="modal" 
                                                        data-target="#editemployee" data-placement="top" 
                                                        title="edit" data-original-title="Edit"><i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-placement="top" title="delete" data-original-title="Delete" onclick = "empdelete(<?php echo $row['id_pk'];?>)">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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

            <!-- modal medium -->
                        <div class="modal fade" id="addemployee" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Add employee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Employee</strong> Form
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="" method="post" class="" id = "employeeform" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="fname" class="pr-1  form-control-label">Name</label>
                                                        <input type="text" id="fname" name = "fname" placeholder="Name" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="designation" class="px-1  form-control-label">Designation</label>
                                                        <input type="text" id="designation" name = "designation" placeholder="designation" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="px-1  form-control-label">Email</label>
                                                        <input type="email" id="email" name = "email" placeholder="Mail" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cnumber" class="px-1  form-control-label">Contact Number</label>
                                                        <input type="tel" id="cnumber" name="cnumber" placeholder="Contact number" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="picture" class="px-1  form-control-label">Picture</label>
                                                        <input type="file" id="epic" name = "epic" required="required" class="form-control">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" id = "employeeaddbtn" name="employeeaddbtn" value="Save">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div> -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end modal medium -->

                        <!-- modal medium -->
                        <div class="modal fade" id="editemployee" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Add employee</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Employee</strong> Form
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="" method="post" class="" id = "editemployeeform" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="efname" class="pr-1  form-control-label">Name</label>
                                                        <input type="text" id="efname" name = "efname" placeholder="Name" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="edesignation" class="px-1  form-control-label">Designation</label>
                                                        <input type="text" id="edesignation" name = "edesignation" placeholder="designation" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eemail" class="px-1  form-control-label">Email</label>
                                                        <input type="email" id="eemail" name = "eemail" placeholder="Mail" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ecnumber" class="px-1  form-control-label">Contact Number</label>
                                                        <input type="tel" id="ecnumber" name="ecnumber" placeholder="Contact number" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eepic" class="px-1  form-control-label">Picture</label>
                                                        <input type="file" id="eepic" name = "eepic" class="form-control" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label for="eepic" class="px-1  form-control-label">Picture</label> -->
                                                        <input type="hidden" id="pid" name = "pid" class="form-control">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" id = "eemployeeaddbtn" name="eemployeeaddbtn" value="Update">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div> -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end modal medium -->

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
        $('#employeeform').on("submit", function(event){
            event.preventDefault();
            var formData = new FormData(this);
            //alert('ok');
            $.ajax({
                url:"employeeinsert.php",  
                method:"POST",  
                // data:$('#employeeform').serialize(),
                data:formData,
                processData: false,
                contentType: false,
                cache: false,
                success:function(data){
                    alert(data);
                    // if (data == 1) {
                    //     alert('Data added successfully');
                    // }else{
                    //     alert('Data not added'); 
                    // }
                    $('#employeeform')[0].reset();   
                    $('#addemployee').modal('hide');
                    location.reload(true);
                }
            });
        });


        $(document).on('click', '.editemp', function () {
            var tr = $(this).closest('.editrow');
            // var formid = $(this).attr("id");
            var trid = $(this).closest('tr').attr('id');
            var name = tr.find('.editname').text();
            var desig = tr.find('.editdesig').text();
            var email = tr.find('.editemail').text();
            var number = tr.find('.editnumber').text();
            var img = tr.find('.editimg').text();

            $('#efname').val(name);
            $('#edesignation').val(desig);
            $('#eemail').val(email);
            $('#ecnumber').val(number);
            $('#pid').val(trid);
            // $('#eepic').val(img);
            

            // alert(trid);
            // alert(name);
            // alert(desig);
            // alert(email);
            // alert(number);
            // alert(img);
        });

        $('#editemployeeform').on("submit", function(event){
            event.preventDefault();
            var formData = new FormData(this);
            //alert('ok');
            $.ajax({
                url:"editemployeeinsert.php",  
                method:"POST",  
                // data:$('#employeeform').serialize(),
                data:formData,
                processData: false,
                contentType: false,
                cache: false,
                success:function(data){
                    alert(data);
                    // if (data == 1) {
                    //     alert('Data added successfully');
                    // }else{
                    //     alert('Data not added'); 
                    // }
                    $('#editemployeeform')[0].reset();   
                    $('#editemployee').modal('hide');
                    location.reload(true);
                }
            });
        });

        function empdelete(i){
            if(confirm('Are you sure to Delete?')){
                $.ajax({
                    url:"delemployee.php",  
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
