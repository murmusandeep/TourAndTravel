<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql="INSERT INTO contactus (name,email,subject,message) VALUES (?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$name,$email,$subject,$message]);
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