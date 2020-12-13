<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $rooms = $_POST['rooms'];
    $guest = $_POST['guest'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $sql="INSERT INTO staybooking (name,email,phone,rooms,guest,checkin,checkout) VALUES (?,?,?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$name, $email,$phone,$rooms,$guest,$checkin,$checkout]);
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