<?php
include('../Server/dbcon.php');


if(isset($_GET["id"])){
  $id = $_GET['id'];

  $query = "DELETE FROM `products` WHERE `Id` = '$id'";
  $result = mysqli_query($connection, $query);

  if(!$result){
    die("Query Failed" . mysqli_error($connection));
  } else {
    header('location:../index.php');
  }
} else {
  echo "ID not provided.";
}
?>