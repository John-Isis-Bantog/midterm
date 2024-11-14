<?php  
    session_start();
    require_once('../classes/connection.php');
    require_once('../classes/users.php');
    if (isset($_POST["submit"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $user = new Users($GLOBALS['connection']);
        $count = $user->login($username, $password);
    
        if ($count == 1) {
            $_SESSION['login'] = "<div class='success'>Logged in Successfully</div>";
            $_SESSION['user'] = $username;
            header('location:../index.php');
            
        } else {
            $_SESSION['login'] = "<div class='error'>Username or Password did not match</div>";
            // header('location:login.php');
            echo $username;
            echo $password;
        }
    }
?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Online Ordering System</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body class="bg-white">
        <div class="container-fluid vh-100 overflow-auto">
            <div class="row vh-100 ">
                <div class="col-lg-6 bg-gray p-5 text-center">
                

                   <div class="img-cover p-4">
                        <img src="assets/images/loginbg.svg" alt="">
                   </div>
                </div>
                <div class="col-lg-6 p  vh-100">
                   <div class="row d-flex vh-100">

                       <div class="col-md-8 p-4 ikigui m-auto text-center align-items-center">
                           <h4 class="text-center fw-bolder mb-4 fs-2">Login</h4>

                           <form action="" method="POST">
                           <div class="input-group mb-4">
                              <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-person"></i></span>
                              <input name="username" type="text" class="form-control ps-2 border-start-0 fs-7 inbg form-control-lg mb-0 " placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
                           </div>
                           <div class="input-group mb-4">
                              <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-lock"></i></span>
                              <input name="password" type="password" class="form-control ps-2 fs-7 border-start-0 form-control-lg inbg mb-0" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                           </div>
                           
                           <input type="submit" name="submit" value="Login" class="btn btn-primary" style="margin-top:2%">
                           <button class="btn btn-success " style="margin-bottom:-11px;"><a href="newacc.php">Create Account</a></button>
                           </form>
                           
                           
                           <ul class="d-inline-block mx-auto">
                               <li class="float-start px-3"><a href=""><i class="bi bi-facebook"></i></a></li>
                               <li class="float-start px-3"><a href=""><i class="bi bi-twitter"></i></a></li>
                               <li class="float-start px-3"><a href=""><i class="bi bi-linkedin"></i></a></li>
                               <li class="float-start px-3"><a href=""><i class="bi bi-google"></i></a></li>
                              
                               
                           </ul>
                       </div>
                   </div>
                    
                </div>
            </div>
        </div>  
    </body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>

</html>
<?php 


