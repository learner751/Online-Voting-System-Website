<?php
session_start();
include('actions.php');

$username = $_POST['username'];
$password = $_POST['password'];
$number = $_POST['number'];
$std = $_POST['std'];

$sql = "select * from userdata where username = '$username' and password = '$password' and number ='$number' and standard = '$std'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
   
    $sql = "select username,photo,votes,id from userdata where standard = 'Group'";

    $resultgroup = mysqli_query($con,$sql);

    if(mysqli_num_rows($resultgroup)>0){
        $groups = mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
    }

    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;

 echo '<script> 
    alert("You have logged in successfully");
    window.location="./dashboard.php";
    </script>';

}
else {
    echo '<script> 
    alert("Invalid Credentials");
    window.location="./start.php";
    </script>';
}
?>