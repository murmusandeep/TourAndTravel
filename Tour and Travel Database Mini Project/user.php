<?php
include_once 'database.php';
$result = mysqli_query($conn,"CALL `getusers`();");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> User Details</title>
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
    <td>Username</td>
    <td>Password</td>
    <td>Phone Number</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["username"]; ?></td>
    <td><?php echo $row["password"]; ?></td>
    <td><?php echo $row["phonenumber"]; ?></td>
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