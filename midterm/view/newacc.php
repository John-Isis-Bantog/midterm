<?php 
 require_once('../classes/connection.php');
 require_once('../classes/users.php');
 $user = new Users($GLOBALS['connection']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container" style="margin: 150px auto !important;">
    <div class="wrapper">
        <h1>Create Account</h1>
        <br><br>
        
        <form action="" method="POST" >
            <table class="table table-hover table-bordered table-striped tbl-30 ">
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" class="form-control" Name="full_name" placeholder="Enter Name"></td>
                </tr>
                
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="form-control" Name="username" placeholder="Enter Username"></td>
                </tr>
                <tr> 
                    <td>Password</td>
                    <td><input type="password" class="form-control" Name="password" placeholder="Enter Password"></td>

                </tr>

                <tr colspan="2">
                    <td >
                       <input type="submit" value="Add Account" name="submit" class="btn btn-primary" >
                       <a href="loginpage.php" class="back btn btn-success">Back</a>
                    </td>
                   
                    
                   
                    
                </tr>
            </table>
            

        </form>
                
                
            
        
    </div>
</div>


<?php 

//process the vbalue from and save datebase


if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $res = $user->createAccount($full_name, $username, $password);

    if ($res) {
        $_SESSION['add'] = "<div class='success'>Account Created Successfully</div>";
        echo "<script>window.location.href='login.php'</script>";
    } else {
        $_SESSION['add'] = "<div class='error'>Failed To Create Account</div>";
        echo "<script>window.location.href='newacc.php'</script>";
    }
}
  
?>
</body>
</html>

