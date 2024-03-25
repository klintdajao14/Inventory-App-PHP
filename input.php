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
  <form action="CRUD/insert-data.php" method="post">
  <p class="header">Add Product</p>
  <div class="center-div">
    <div class="border-container">
      <div class="input-grp">
        <label for="Product-Code">Product Code</label>
        <input type="text" name="Product-Code" maxlength="10" placeholder="E.g: XMSAS12345">
        <label for="Unit">Unit</label>
        <select name="Unit" >
          <option disabled selected>Please select</option>
          <option value="PCS">PCS</option>
          <option value="CSE">CSE</option>
          <option value="BOT">BOT</option>
        </select>
        <label for="Product-Price">Product Price</label>
        <input type="number" name="Product-Price" step="0.01" min="0" placeholder="0.00">
        <label for="Quantity">Quantity</label>
        <input type="number" name="Quantity" step="0" min="0" placeholder="0">
        <label for="Product-Desc">Description</label>
        <textarea name="Product-Desc" id="Product-Desc" cols="100" rows="4"></textarea>
        
          <button class="submit-btn" name="add-input" type="submit">Submit</button>
      </div>

    </div>
  </div>
  </form>

</body>
</html>