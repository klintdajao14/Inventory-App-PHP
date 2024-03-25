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


$query = "SELECT Product_Code FROM `products`";
$result = mysqli_query($connection, $query);

if(!$result){
  die("Query failed" . mysqli_error($connection));
}

$productCodes = array();
while($row = mysqli_fetch_assoc($result)){
  $productCodes[] = $row['Product_Code'];
}
?>

<form action="CRUD/select-product.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <p class="header">Select Product</p>
  <div class="center-div">
    <div class="border-container">
      <div class="input-grp">
        <select name="Product-Code">
          <option disabled selected>Please select</option>
          <?php foreach($productCodes as $code): ?>
            <option value="<?php echo $code; ?>"><?php echo $code; ?></option>
          <?php endforeach; ?>
        </select>
        <label for="Quantity">Quantity</label>
        <input type="number" name="Quantity" step="0" min="0" placeholder="0">
        
        <button class="submit-btn" name="update-input" type="submit">Submit</button>
      </div>
    </div>
  </div>
</form>

</body>
</html>
