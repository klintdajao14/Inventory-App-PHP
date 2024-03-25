<?php
include('../Server/dbcon.php');

if(isset($_POST["update-input"])){
    $id = $_POST['id'];
    $Product_Code = $_POST['Product-Code'];
    $Quantity = $_POST['Quantity'];

    $query = "SELECT Quantity FROM `products` WHERE Product_Code = '$Product_Code'";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    }

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $availableQuantity = $row['Quantity'];

        if($Quantity > $availableQuantity){
            echo "<script>alert('Quantity requested exceeds available stock. Available stock: $availableQuantity'); window.location.href = '../Select.php';</script>";
            exit(); 
        } else {
            
            $newQuantity = $availableQuantity - $Quantity;
            $updateQuery = "UPDATE `products` SET Quantity = $newQuantity WHERE Product_Code = '$Product_Code'";
            $updateResult = mysqli_query($connection, $updateQuery);
            if(!$updateResult){
                die("Update Query Failed" . mysqli_error($connection));
            } else {
                echo "<script>alert('Thanks for buying!'); window.location.href = '../index.php';</script>";
                exit();
            }
        }
    } else {
        echo "<script>alert('Product code not found.'); window.location.href = '../Select.php';</script>";
        exit(); 
    }
}
?>
