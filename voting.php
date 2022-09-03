<?php
session_start();
include('connect.php');

$votes=$_POST['catagvote'];
$tvote=$votes+1;

$cid=$_POST['catagid'];
$uid=$_SESSION['id'];

$utvote=mysqli_query($con,"update `user` set tvote='$tvote' where id='$cid'");

$uvotst=mysqli_query($con,"update `user` set vote=1 where id='$uid'");

if($utvote and $uvotst)
{
    // $getcatag=mysqli_query($con,);
    echo '<script>
    alert("succesfully voted");
    window.location="./cust.php";
    </script>';
}

else{
    echo '<script>
    alert("Error voting");
    window.location="./cust.php";
    </script>';
}
?>