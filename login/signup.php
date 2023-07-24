<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Signup Dearmyhijab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" " name="keywords">
    <meta content=" " name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <div class="signup">
        <div class="container3">
            <form action="process-signup.php" method="post">
                <div class="title">
                    Signup
                </div>             
                <div class="input-box">                    
                    <input type="text" id="name" name="name" placeholder="Enter Your Name" required />
                    <div class="underline"></div>
                </div>
                <div class="input-box">
                    <input type="text" id="username" name="username" placeholder="Enter Your Username" required />
                    <div class="underline"></div>
                </div>
                <div class="input-box">
                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required />
                    <div class="underline"></div>
                </div>
                <div class="input-box">
                    <input type="text" id="no_telp" name="no_telp" placeholder="Enter Your Phone Number" required />
                    <div class="underline"></div>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Enter Your Password" required />
                    <div class="underline"></div>
                </div>
                <div class="input-box">
                    <input type="password" id="cpassword" name="cpassword" placeholder="Repeat Your Password" required />
                    <div class="underline"></div>
                </div>
                <div class="input-box button">     
                    <input type="submit" name="" value="SIGN UP"/>
                </div>                               
            </form>
            <div class="pilihlogin">
                <p>Don't have an accout yet? 
                    <a href="login.php" class="clicklogin">Login</a>
                </p>
            </div>
        </div>        
    </div>
</body>
</html>