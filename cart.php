<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dearmyhijab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo-head.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('topbar.php'); ?>

    <?php require_once('navbar.php'); ?>
    
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">You Should Login First!</h1>            
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid ">     
        <div class="col-xl-2 order-xl-1" style="margin-left: auto; margin-right: auto;">
            <a href="login.php">    
                <div class="card">
                    <div class="card-body btn btn-outline-primary">      
                        Login
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center" style="margin:20px;">
                <p>Don't have an accout yet?</p>
            </div>
        <div class="col-xl-2 order-xl-1" style="margin-left: auto; margin-right: auto;">
            <a href="signup.php">    
                <div class="card">
                    <div class="card-body btn btn-outline-primary">      
                        Signup
                    </div>
                </div>
            </a>
        </div>
    </div>

    <?php require_once('footer.php'); ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>