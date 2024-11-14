<?php
    include('../classes/menu_items.php');
    require_once('auth.php');
    checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savory Bites</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <!-- remixicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" integrity="sha512-OQDNdI5rpnZ0BRhhJc+btbbtnxaj+LdQFeh0V9/igiEPDiWE2fG+ZsXl0JEH+bjXKPJ3zcXqNyP4/F/NegVdZg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <nav class="navbar navbar-light bg-light mx-5 justify-space-around">
        <a class="navbar-brand" href="#">
            <i class="ri-restaurant-line"></i>
        </a>
        <div>
            <!-- <button onclick="view_menu()" class="btn btn-primary">View menu</button> -->
            <a href="../index.php" class="btn btn-primary">Home</a>
            <a href="view_menu_items.php" class="btn btn-primary">View Order</a>
            <a href="view_order.php" class="btn btn-info">View Cart</a>
            <a href="logout.php" class="btn btn-danger" >Logout</a>
          
            <!-- <button onclick="view_order()" class="btn btn-info">View order</button> -->
            
           
            
            

        </div>
            
       
    </nav>
    

        
    <div class="container p-2">
        <div class="row">
            <div class="col">
                <div class="row">
                <?php 
                    $menu = new MenuItems();
                    $menu_items = $menu->viewMenu();
                    foreach ($menu_items as $key => $value) {
                        echo '<div class="col">
                                <div class="card bg-warning mb-5" style="width: 18rem;">
                                    <img  id="menu-images" src="../resources/' . $value['image'] . '.jpg" class="card-img-top w-100 h-100" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">₱ ' . $value['price'] . '.00</h5>
                                        <p class="card-text">' . $value['name'] . '</p>';
                        ?>
                                        <a href="add_to_cart.php?id=<?php echo $value['id']; ?>&name=<?php echo urlencode($value['name']); ?>&price=<?php echo urlencode($value['price']); ?>" class="btn btn-primary">Add to cart</a>
                        <?php
                        echo '      </div>
                                </div>
                            </div>';    
                    }
                    ?>
                </div>                
            </div>
        </div>
    </div>
    

<?php include("footer.php")?>