<?php
include("database.php");
extract($_POST);

if(isset($submit))
{
    $rs=mysqli_query($conn,"select * from users where email='$email' and password='$password'");
    if(mysqli_num_rows($rs)<1)
    {
        $found="N";
    }
    else
    {
        $_SESSION["login"]=$email;
    }
}
if (isset($_SESSION["login"]))
{
    header('Location: http://localhost:3000/home.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Designing The SignIn Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="signin">
        <form action="login.php" method="post" class="p-4">
            <h2>Sign In</h2>
            <div class="form-group">
            <i class="fas fa-user"></i><input type="text" id="loginid2" name="email" class="form-control form-control-lg" placeholder="Email" required>
            </div>
            <div class="form-group">
            <i class="fas fa-lock"></i><input type="password" id="pass2" name="password" class="form-control form-control-lg" placeholder="password" required>
            </div>
            <div class="form-group">
            <input name="submit" type="submit" id="submit" value="Login" class="btn btn-danger btn-block">
            </div>
            <br>
            <br>
            <a href="login1.html">Login as Administrator</a>
            <br>
            <br>
            <button onclick= "window.location.href = 'http://localhost:3000/signup.php';"> Don't have an account?</button>
            
            <br>
            <br>
            <?php
          if(isset($found))
          {
            echo '<p class="w3-center w3-text-red">Invalid user id or password<br><a href="login.php">Please try again</p>';
          }
          ?>
        </form>
    </div>
    <script src="login1.js"></script>
</body>
</html>