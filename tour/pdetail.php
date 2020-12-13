<?php
include_once 'database.php';
$result = mysqli_query($conn,"CALL `getpaymentdetails`();");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Payment Details</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
  <table>
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
    <td>City</td>
    <td>State</td>
    <td>zip</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["fname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["adr"]; ?></td>
    <td><?php echo $row["city"]; ?></td>
    <td><?php echo $row["state"]; ?></td>
    <td><?php echo $row["zip"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>