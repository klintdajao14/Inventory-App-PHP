<!DOCTYPE html>
<html lang="en">
<head>
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Dashboard</title>
</head>
<body>
<?php include('Server/dbcon.php'); ?>


  <p class="header"> DASHBOARD</p>
  <div class="btn-container">
    <div class="btn">
      <a href="input.php">
        <button>Add</button>
      </a>
      <a href="Select.php">
      <button style="background:#ff5349">Select</button>
      </a>
      
    </div>
  </div>

  <div class="container">
    <table border="1" id="employee-table">
 
        <tr >
          <th>Id</th>
          <th>Product Code</th>
          <th>Description</th>
          <th>Unit</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>

      <tbody>
        <?php
          $query = "SELECT * FROM `products`";
          $result = mysqli_query($connection, $query);

          if(!$result){
            die("Query failed" . mysqli_error($connection));
          } else {
            while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
              echo "<td>" . $row['Id'] . "</td>";
              echo "<td>" . $row['Product_Code'] . "</td>";
              echo "<td>" . $row['Product_Desc'] . "</td>";
              echo "<td>" . $row['Product_Unit'] . "</td>";
              echo "<td>" . $row['Product_Price'] . "</td>";
              echo "<td>" . $row['Quantity'] . "</td>";
              echo "<td style='text-align:center'>";
              echo "<a href='Update.php?id=" . $row['Id'] . "'><button style='background: #5bb662; width:140px !important'>Edit</button></a>";
              echo "<a href='CRUD/delete-data.php?id=" . $row['Id'] . "'><button style='margin-top:10px;background: #ff5349'>Delete</button></a>";
              echo "</td>";
            echo "</tr>";

            }
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
