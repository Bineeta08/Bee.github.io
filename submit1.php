<?php
include('config.php');
$name=$_POST['un'];
$email=$_POST['em'];
$dob=$_POST['date'];
$ps=$_POST['pw'];
$datetime=date('Y-m-d H:i:s');

$qr="SELECT id FROM `reg-log` where uname='$name'";
$qrl=mysqli_query($conn,$qr) or die(mysqli_error($conn));
$num=mysqli_num_rows($qrl);

$qr1="SELECT id FROM `reg-log` where email='$email'";
$qr=mysqli_query($conn,$qr1) or die(mysqli_error($conn));
$eml=mysqli_num_rows($qr);

if(!$num){
    if(!$eml){
        $sql="INSERT INTO `reg-log` (`uname`, `email`, `dob`, `psw`, `datetime`) VALUES 
        ('$name', '$email', '$dob', '$ps', '$datetime')";
        $qrr=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($qrr){
            echo '<script>
            alert("Registered successfully");
            window.location.href="index.php";
            </script>';
        }
        else{
            echo '<script>

            alert("Submit Not Success .");
            history.go(-1);

            </script>';
        }
    }
    else{
        echo '<script>
    
        alert("Email already exist");
        history.go(-1);
    
        </script>';
    }
    
}
else{
    echo '<script>

	alert("Username Taken");
	history.go(-1);

	</script>';
}
?>