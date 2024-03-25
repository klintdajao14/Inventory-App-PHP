<?php
include('../Server/dbcon.php');


  if(isset($_POST["update-input"])){

    $id = $_POST['id'];
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
      $query = "update `products` set `Product_Code` ='$Product_Code', `Product_Unit`= '$Unit',`Product_Price` = '$Product_Price',`Quantity` = '$Quantity',`Product_Desc` = '$Product_Desc' where `Id` = '$id'";
  
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