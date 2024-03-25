<?php
include('../Server/dbcon.php');


if(isset($_POST["add-input"])){
  $Product_Code = $_POST['Product-Code'];
  $Unit = $_POST['Unit'];
  $Product_Price = $_POST['Product-Price'];
  $Quantity = $_POST['Quantity'];
  $Product_Desc = $_POST['Product-Desc'];
  



  if($Product_Code =='' || empty($Product_Code)){
    echo "<script> alert('Product code cannot be empty')
    window.location.href='../input.php';</script>";
  }
  else{
    $query = "insert into `products` (`Product_Code`,`Product_Unit`,`Product_Price`,`Quantity`,`Product_Desc`) values ('$Product_Code','$Unit','$Product_Price','$Quantity','$Product_Desc')";

    $result = mysqli_query($connection,$query);

    if(!$result){
      die("Query Failed".mysqli_error($connection));
    }
    else{
        header('location:../index.php?');
    }
  }

}

?>