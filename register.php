<?php
include 'connect.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$photo = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$catag = $_POST['catag'];
$dir='upload/'.$photo;


if ($password != $cpassword) {
    echo '<script>
            alert("password not match");
            window.location="./home.php";
            </script>';
            
} else {
    $uploadDirectory = "upload/".$photo;
    move_uploaded_file( $tmp_name, $uploadDirectory );

    $sql = "INSERT INTO `user` (`name`, `mobile`, `username`, `password`, `photo`, `catag`, `status`, `vote`, `tvote`) VALUES ('$name', '$mobile', '$username', '$password', '$photo','$catag',0,false,0)";
    $result = mysqli_query($con, $sql);
    move_uploaded_file( $tmp_name,$uploadDirectory );

    if ($result) {
        echo '<script>
            alert("Registration Successfull");
            window.location="./home.php";
            </script>';
    } else {
        echo '<script>
            alert("eror");
            </script>';
    }
}
