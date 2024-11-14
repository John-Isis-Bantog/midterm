<?php
    include('../classes/menu_items.php');
    include('../classes/order.php');
    $transact = new Orders(); 
    $data = $transact->processTransaction(); 
    if(isset($_GET['name'])){
        $name = $_GET['name'];
        $price = $_GET['price'];

       
    }
    require_once('auth.php');
    checkLogin();
?>
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
            <a href="view_menu_items.php" class="btn btn-primary">View Menu</a>
            <a href="view_order.php" class="btn btn-info">View Order</a>
            <a href="logout.php" class="btn btn-danger" >Logout</a>
            <!-- <button onclick="view_order()" class="btn btn-info">View order</button> -->
            
           
            
            

        </div>
            
       
    </nav>
 
    <h1 class="text-center text-danger">Add To Cart</h1>


    <form class="container" method="post" action="process.php">
        <div class="form-group">
            <label for="Item_Name">Item Name</label>
            <input type="hidden" name="name" class="form-control" value="<?php echo $name?>" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" class="form-control" value="1" min="1" max="20" placeholder="Enter Quantity">
        </div>

        <div class="form-group">
            <label for="Item_Number">Item Number</label>
            <input type="number" name="Item_Number" class="form-control" min="1" placeholder="Enter Item Number">

        </div>

        <div class="form-group">
            <label for="Order_Number">Order Number</label>
            <input type="number" name="Order_Number" class="form-control" min="1" placeholder="Enter Order Number">
        </div>

        <div class="form-group">
            <label for="Transaction_ID">Transaction ID</label>
            <input type="number" name="Transaction_ID" class="form-control" min="1" placeholder="Enter Transaction ID">
        </div>

        <div class="form-group mt-3">Payment Option
            <select name="payment" class="form-select" aria-label="Default select example">
                
                
                <option value="Cash">Cash</option>
                <option value="Credit Card">Credit Card</option>
                <option value="gcash">Gcash</option>
            </select>
        </div>

        <div class="form-group mt-3">Delivery Option
            <select name="delivery" class="form-select" aria-label="Default select example">
                
                <option value="Pick Up">Pick Up</option>
                <option value="COD">Cash On Delivery</option>
                <option value="standard">Standard Shipping</option>
            </select>
        </div>

        <div class="form-group">
           
            <input type="hidden" name="price" class="form-control" value="<?php echo $price?>">
        </div>

        <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
    </form>
</body>
</html>

