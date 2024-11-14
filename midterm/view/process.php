<?php 
    require("../classes/order.php");

    // if(isset($_GET['id'])){
    //   $id = $_GET['id'];
      
      
      

    // }else{
    //     header("location:view_menu_items.php");
    // }

    if(isset($_POST['submit'])){
        $quantity = $_POST['quantity'];
        $Item_Number = $_POST['Item_Number'];
        $Order_Number = $_POST['Order_Number'];
        $Transaction_ID = $_POST['Transaction_ID'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $payment = $_POST['payment'];
        $delivery = $_POST['delivery'];
        $total = $price * $quantity; 
        // header("location:view_menu_items.php");
     
      $orders = new Orders();

      // Call the insertquery method and pass the form data
      $result = $orders->insertquery($Item_Number, $Order_Number, $Transaction_ID, $quantity, $name, $price,$payment,$delivery,$total);
      
    }
      if ($result) {
         header('location:../index.php');
      } else {
          echo "Failed to insert order.";
      }
  
      
?>