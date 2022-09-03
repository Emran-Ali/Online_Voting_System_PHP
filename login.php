<?php
session_start();
include('connect.php');

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from `user` where username='$username' and password='$password' and status=1";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
    $sql="select id,name,mobile,photo,tvote from `user` where catag='candidate' and status=1";
    $resultGro=mysqli_query($con,$sql);
    if(mysqli_num_rows($resultGro)>0){
        $catagory=mysqli_fetch_all($resultGro,MYSQLI_ASSOC);
        $_SESSION['catagory']=$catagory;
    }
    $data=mysqli_fetch_array($result);
    $_SESSION['id']=$data['id'];
    $_SESSION['status']=$data['status'];
    // $_SESSION['tvote']=$data['tvote'];
    $_SESSION['vote']=$data['vote'];
    $_SESSION['data']=$data;

    echo '<script>
    window.location="./cust.php";
    </script>';

}
else{
    echo '<script>
    alert("Invalid Username Or Password OR You are still not aded by aurthor");
    window.location="./adminLogin.php";
    </script>';

}


?>