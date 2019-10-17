<?php
    require_once('../database.php');
    require_once('checklogin.php');
    $getdata = "SELECT * FROM album";
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
    <title>Add Image</title>

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
                            <div class="card" style="width: 100%">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Gallery</h4>
                                        </div>
                                        <div class="offset-md-3 col-md-3">
                                            <button type="button" class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#addalbum">
                                            <i class="zmdi zmdi-plus"></i>Add New Album
                                            </button>
                                        </div>
                                    </div>   
                                </div>
                                <div class="card-body">
                                    <div class="default-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="true">Albums</a>
                                                <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-images" role="tab" aria-controls="nav-images" aria-selected="false">Profile</a> -->
                                                <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="true">Contact</a> -->
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade active show" id="nav-gallery" role="tabpanel" aria-labelledby="nav-home-tab">
                                                
                                                    <h3 class="title-3 m-b-30">All Albums</h3>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <th>Album Name</th>
                                                                <th style="display:none;">Caption</th>
                                                                <th></th>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    while($row = mysqli_fetch_array($res)){
                                                                ?>
                                                                <tr class="moreadd" id="<?php echo $row['id_pk'];?>">
                                                                    <td class="malbum"><?php echo $row["albumname"]; ?></td>
                                                                    <td class="mcaption" style="display:none;"><?php echo $row["albumcaption"]; ?></td>
                                                                    <td>
                                                                        <div class="table-data-feature">
                                                                            <!-- <button class="item editemp" 
                                                                            data-toggle="" 
                                                                            data-target="" data-placement="top" 
                                                                            title="edit" data-original-title="Edit"><i class="zmdi zmdi-edit"></i>
                                                                            </button> -->
                                                                            <button class="item addmorebtn"
                                                                            data-toggle="modal" 
                                                                            data-target="#addmore" data-placement="top" title="Add more photos" data-original-title="Add more">
                                                                                <i class="fas fa-plus"></i>
                                                                            </button>
                                                                            <button class="item" data-placement="top" title="delete Whole album" data-original-title="Delete" onclick = "albumdelete(<?php echo $row['id_pk'];?>)">
                                                                                <i class="zmdi zmdi-delete"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <p></p>
                                            </div>
                                            <!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth
                                                    master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                                    dreamcatcher synth. Cosby sweater eu banh mi, irure terry richardson ex sd. Alip placeat salvia cillum iphone.
                                                    Seitan alip s cardigan american apparel, butcher voluptate nisi .</p>
                                            </div> -->
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

            <!-- modal medium -->
                        <div class="modal fade" id="addalbum" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Add Album</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Create</strong> Album
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="" method="post" class="" id = "albumform" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="aname" class="pr-1  form-control-label">Album Name</label>
                                                        <input type="text" id="aname" name = "aname" placeholder="Album Name" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="acaption" class="px-1  form-control-label">Album Caption</label>
                                                        <textarea id="acaption" name = "acaption" class="form-control" rows="5">
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="picture" class="px-1  form-control-label">Picture</label>
                                                        <input type="file" name="albumpic[]" multiple class="form-control" required="required">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" id = "employeeaddbtn" name="employeeaddbtn" value="Save">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
    
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end modal medium -->

                        <!-- modal medium -->
                        <div class="modal fade" id="addmore" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Add Album</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Create</strong> Album
                                            </div>
                                            <div class="card-body card-block">
                                                <form action="" method="post" class="" id = "addmoreform" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="moreaname" class="pr-1  form-control-label">Album Name</label>
                                                        <input type="text" id="moreaname" name = "moreaname" placeholder="Album Name" required="required" class="form-control" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="moreacaption" class="px-1  form-control-label">Album Caption</label>
                                                        <textarea id="moreacaption" name = "moreacaption" class="form-control" rows="5" readonly>
                                                        </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="picture" class="px-1  form-control-label">Picture</label>
                                                        <input type="file" name="morealbumpic[]" multiple class="form-control" required="required">
                                                    </div>
                                                    <input type="hidden" name="mid" id="mid">
                                                    <div class="modal-footer">
                                                        <input type="submit" class="btn btn-primary" id = "moreaddbtn" name="moreaddbtn" value="Add">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
    
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
        $('#albumform').on("submit", function(event){
            event.preventDefault();
            var formData = new FormData(this);
            //alert('ok');
            $.ajax({
                url:"photoalbuminsert.php",  
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
                    $('#albumform')[0].reset();   
                    $('#addalbum').modal('hide');
                    location.reload(true);
                }
            });
        });

        $(document).on('click', '.addmorebtn', function () {
            var tr = $(this).closest('.moreadd');
            // var formid = $(this).attr("id");
            var trid = $(this).closest('tr').attr('id');
            var albumname = tr.find('.malbum').text();
            var albumcaption = tr.find('.mcaption').text();

            $('#moreaname').val(albumname);
            $('#moreacaption').val(albumcaption);
            $('#mid').val(trid);
            
             // alert(trid);
             // alert(albumname);
             // alert(albumcaption);
            // alert(email);
            // alert(number);
            // alert(img);
        });

        $('#addmoreform').on("submit", function(event){
            event.preventDefault();
            var formData = new FormData(this);
            //alert('ok');
            $.ajax({
                url:"addmorephoto.php",  
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
                    $('#addmoreform')[0].reset();   
                    $('#addmore').modal('hide');
                    // location.reload(true);
                }
            });
        });

        function albumdelete(i){
            if(confirm('Are you sure to Delete?')){
                $.ajax({
                    url:"delalbum.php",  
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
