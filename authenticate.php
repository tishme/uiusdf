<?php
    include 'dbconnect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    // prevent sql injection
    $username =stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select * from `admin` where `admin_email` = '$username' and adminpass = '$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count==1){
        header("Location:admin.php");
    }
    else{
        echo "Login failed. Invalid username or password.";
    }
?>