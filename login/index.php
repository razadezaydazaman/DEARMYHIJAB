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

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php require_once('topbar.php'); ?>

    <?php require_once('navbar.php'); ?>

    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 510px;">
                <img class="img-fluid" src="img/dmh-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-light text-uppercase font-weight-medium mb-3">Weekend Sale Up To 30% Off</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                            <a href="shop.php" class="btn btn-light py-2 px-3">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 510px;">
                    <img class="img-fluid" src="img/dmh-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                            <a href="shop.php" class="btn btn-light py-2 px-3">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="cat-item d-flex flex-column border mb-1" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="shop.php" class="cat-img position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/edit-1.jpg" alt="">
                    </a>
                    <h6 class="font-weight-semi-bold m-0">All</h6>
                </div>
            </div>
            <div class="col">
                <div class="cat-item d-flex flex-column border mb-1" style="padding: 30px;">
                    <p class="text-right">4 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/edit-2.jpg" alt="">
                    </a>
                    <h6 class="font-weight-semi-bold m-0">Bottoms</h6>
                </div>
            </div>
            <div class="col">
                <div class="cat-item d-flex flex-column border mb-1" style="padding: 30px;">
                    <p class="text-right">2 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/edit-3.jpg" alt="">
                    </a>
                    <h6 class="font-weight-semi-bold m-0">Dresses</h6>
                </div>
            </div>
            <div class="col">
                <div class="cat-item d-flex flex-column border mb-1" style="padding: 30px;">
                    <p class="text-right">3 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/edit-4.jpg" alt="">
                    </a>
                    <h6 class="font-weight-semi-bold m-0">Tops</h6>
                </div>
            </div>
            <div class="col">
                <div class="cat-item d-flex flex-column border mb-1" style="padding: 30px;">
                    <p class="text-right">3 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/edit-5.jpg" alt="">
                    </a>
                    <h6 class="font-weight-semi-bold m-0">Inners</h6>
                </div>
            </div>
            <div class="col">
                <div class="cat-item d-flex flex-column border mb-1" style="padding: 30px;">
                    <p class="text-right">3 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="img/edit-6.jpg" alt="">
                    </a>
                    <h6 class="font-weight-semi-bold m-0">Scarf</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Offer Start -->
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="img/sale-1.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">10% off the all order</h5>
                        <h1 class="mb-4 font-weight-semi-bold">New Collection</h1>
                        <a href="shop.php" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="img/test-2.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">Free Shipping</h5>
                        <h1 class="mb-4 font-weight-semi-bold">New Customer</h1>
                        <a href="shop.php" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sale</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/Bottom-2.webp" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Razama Top Plain</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp 310.000</h6><h6 class="text-muted ml-2"><del>Rp 200.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/Top-1.webp" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Kama Pants Plain Khaki</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp 250.000</h6><h6 class="text-muted ml-2"><del>Rp 180.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/tunik-1.webp" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Zini Tunic Sakura</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp 500.000</h6><h6 class="text-muted ml-2"><del>Rp 350.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/scarfplain-1.webp" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Airy Voal Scarf Plain</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp 150.000</h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


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