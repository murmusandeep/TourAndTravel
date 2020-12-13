<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];

    $sql="INSERT INTO users (name, email, username, password, phonenumber) VALUES (?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$name, $email, $username, $password, $phonenumber]);
    if($result){
        echo 'Sucessfully saved';
    }
    else{
        echo 'Errors';
    }
    
}
else{
    echo 'NO DATA';
}


?>