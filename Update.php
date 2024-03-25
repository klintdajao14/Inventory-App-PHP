<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
<?php include('Server/dbcon.php'); ?>
<?php 

if(isset($_GET['id'])){
  $id = $_GET['id'];

          $query = "SELECT * FROM `products` where `Id` = '$id'";
          $result = mysqli_query($connection, $query);

          if(!$result){
            die("Query failed" . mysqli_error($connection));
          } else {
            $row = mysqli_fetch_assoc($result);
          
          }
        }
        
?>





<form action="CRUD/update-data.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <p class="header">Update Product</p>
  <div class="center-div">
    <div class="border-container">
      <div class="input-grp">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="Product-Code">Product Code</label>
        <input type="text" name="Product-Code" maxlength="10" placeholder="E.g: XMSAS12345"  value="<?php echo $row['Product_Code'] ?>">
        <label for="Unit">Unit</label>
        <select name="Unit" >
          <option disabled selected><?php echo $row['Product_Unit']?></option>
          <option value="PCS">PCS</option>
          <option value="CSE">CSE</option>
          <option value="BOT">BOT</option>
        </select>
        <label for="Product-Price">Product Price</label>
        <input type="number" name="Product-Price" step="0.01" min="0" placeholder="0.00" value="<?php echo $row['Product_Price'] ?>">
        <label for="Quantity">Quantity</label>
        <input type="number" name="Quantity" step="0" min="0" placeholder="0" value="<?php echo $row['Quantity'] ?>">
        <label for="Product-Desc">Description</label>
        <textarea name="Product-Desc" id="Product-Desc" cols="100" rows="4" ><?php echo $row['Product_Desc'] ?></textarea>
        
          <button class="submit-btn" name="update-input" type="submit">Submit</button>
      </div>

    </div>
  </div>
  </form>

</body>
</html>