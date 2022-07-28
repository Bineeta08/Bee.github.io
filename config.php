<?php
$servername='localhost';
$username='root';
$password='';
$database='survey';

$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function conv_date($datetime)
{
    $ret='';
    if($datetime){
        $ret=date('d M Y h:i:s a',strtotime($datetime));
    }
    return $ret;
}
?>