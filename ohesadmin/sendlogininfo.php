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
    <title>Login</title>

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
<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $myAwardSpaceEmail = "contact@ohesbd.com";
    $myAwardSpaceEmailPassword = "ohescontact@12";
    $myPersonalEmail = "info@ohesbd.com";
    
    require './src/Exception.php';
    require './src/PHPMailer.php';
    require './src/SMTP.php';

    <!-- if(isset($_POST['submit'])) { -->

        $replymail = "contact@ohesbd.com";
        $fullname = "Admin";
        $content = "Username:ohesadmin, 
                    password:ohesadmin@12";
        $mail = new PHPMailer(true);
        $mail->isSMTP();

        $mail->SMTPDebug = 0;

        $mail->Host = 'mail.ohesbd.com';
        $mail->SMTPAuth = true;
        $mail->Username = $myAwardSpaceEmail;
        $mail->Password = $myAwardSpaceEmailPassword;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($myAwardSpaceEmail, 'Mailer');
        $mail->addAddress($myPersonalEmail);
        $mail->addReplyTo($replymail, $fullname);

        $mail->isHTML(true);    
        $mail->Subject = "Inquiry";
        $mail->Body = $_POST['message'];

        try {
            $mail->send();
?>
        <div class = "mailsucs">
            <img src = "images/Logo.png" style = "height:300px;width:300px;"> 
            <h4 class = "text-center" style = "color:Green;"><i class="fas fa-check-circle"></i> Your Login info has been sent to mail info@ohesbd.com. Please check.</h4>
            <!-- <p class = "text-center">Thank you for choosing us. <i class="fas fa-smile"></i></p> -->
            <p class = "text-center"><a href="login.php">Go to login page</a></p>
        </div>
<?php            
        } catch (Exception $e) {
            echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
        }
        
    <!-- } else {
        echo "There is a problem with the contact.html document!";
    } -->
    
?>
    </div>
</body>

</html>