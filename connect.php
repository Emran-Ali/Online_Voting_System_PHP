<?php
$con=mysqli_connect("localhost","root","","evoting");
if(!$con)
{
    
    die(mysqli_error($con));
}
?>
<!-- http://localhost/VotE/connect.php -->