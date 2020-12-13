<?php
require_once('config.php');
?>

<?php


 if(isset($_POST)){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $adr = $_POST['adr'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cname = $_POST['cname'];
    $ccnum = $_POST['ccnum'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    $sql="INSERT INTO payment (fname,email,adr,city,state,zip,cname,ccnum,expmonth,expyear,cvv) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert=$db->prepare($sql);
    $result= $stmtinsert->execute([$fname, $email,$adr,$city,$state,$zip,$cname,$ccnum,$expmonth,$expyear,$cvv]);
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