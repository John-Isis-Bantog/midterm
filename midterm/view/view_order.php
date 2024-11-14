<?php 
    require_once('auth.php');
    include('../classes/order.php');
    $transact = new Orders(); 
    $data = $transact->processTransaction(); 
    
    checkLogin();

   
    $totalSum = $transact->getTotalSum();

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
            <a href="view_menu_items.php" class="btn btn-primary">View Menu</a>
            <a href="view_order.php" class="btn btn-info">View Order</a>
            <a href="logout.php" class="btn btn-danger" >Logout</a>
            
            <!-- <button onclick="view_order()" class="btn btn-info">View order</button> -->
            
           
            
            

        </div>
            
       
    </nav>
    


    <div class="container mt-5">
        <h1>View Cart</h1>
    <table class="table table-dark table-hover">
        <thead> 
        <tr>
            <th>No</th>
            <th>Item Number</th>
            <th>Transaction ID</th>
            <th> Quantity</th>
            <th>Name</th>
            <th>price</th>
            <th>total</th>
            <th>Payment</th>
            <th>Delivery</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($data as $row) {
                    echo "<tr>";
                      
                        echo "<td>" . htmlspecialchars($row['item_no']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['order_no']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['transaction_id']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['quantity']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['total']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['payment']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['delivery']) . "</td>";
                        
                        
                    echo "</tr>";
                    
                } 
                
            ?>
        </tbody>
    </table>
<?php 

   
?>

  <!-- <h1> Total = 
    
</h1> -->
        <!--       <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> Proceed to Checkout</button> -->
    </div>
    
    
    
<?php include("footer.php")?>






<!-- Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Payment and Delivery</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>Payment Option</option>
                    <option value="cash">Cash</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="Gcash">Gcash</option>
                </select>
            </div>
            
           <div class="form-group">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Delivery Option</option>
                    <option value="COD">COD</option>
                    <option value="Pick Up">Pick Up</option>
                    <option value="Standard ">Standard Delivery</option>
                </select>
           </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->