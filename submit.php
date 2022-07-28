<?php
include('config.php');

$name=$_POST['uname'];
$psw=$_POST['passw'];

$qrr="SELECT id FROM `reg-log` where uname='$name' && psw='$psw'";
$qr=mysqli_query($conn,$qrr) or die(mysqli_error($conn));
$check=mysqli_num_rows($qr);

if(!$check){
    echo '<script>
    alert("You have entered a wrong password");
    history.go(-1);
    </script>';
    
}
else{
    echo '<script>
    alert("Welcome to our website");
    window.location.href="index.php";
    </script>';
}
?>