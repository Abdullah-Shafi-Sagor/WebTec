<?php
require_once('../models/dbmodel.php');
$conn = getConnection();
$sql= allUser();
$sql2= User();
$result = $conn->query($sql);
$result2 = $conn->query($sql2);  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <form method="get" >
  
     <table border="1">
        <tr>
         <th>Id</th>
         <th>Name</th>
         <th>Address</th>
         <th>Option</th>
     </tr>
     <?php while ($row=$result->fetch_assoc()) { ?>
     <tr>
         <td><?php echo $row["Id"]; ?></td>
         <td><?php echo $row["Name"]; ?></td>
         <td><?php echo $row["Address"]; ?></td>
         
     </tr>
 <?php } ?>

     </table>


<?php while ($row=$result2->fetch_assoc()) { ?>
  
         <?php echo $row["Id"]; ?>
         <?php echo $row["Name"]; ?>
         <?php echo $row["Address"]; ?>
         
    
 <?php } ?>
    </form>
</body>
</html>