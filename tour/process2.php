<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pickup = $_POST['pickup'];
    $dropl = $_POST['dropl'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $min = $_POST['min'];
    $am = $_POST['am'];

    $sql="INSERT INTO commutebooking (name,email,phone,pickup,dropl,date,hour,min,am) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$name, $email,$phone,$pickup,$dropl,$date,$hour,$min,$am]);
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