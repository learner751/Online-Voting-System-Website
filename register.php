<?php
include('./actions.php');

$fname = $_POST['fname'];
$number = $_POST['number'];
$username = $_POST['username'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];
$image = $_FILES['photo']['name'];
$temp_name = $_FILES['photo']['temp_name'];
$std = $_POST['std'];

if ($password != $conpassword) {
    echo '<script>
     alert("Passwords did not match");
     window.location = "./registration.php";
    </script>';
}

else {
    move_uploaded_file($temp_name,"./uploads/$image");
   
    $sql = "insert into userdata (fname,number,username,password,photo,standard,status,votes)
    values('$fname','$number','$username','$password','$image','$std',0,0)";
   
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo '<script>
        alert("Registration Successful");
        window.location = "./start.php";
       </script>';
    }
}

?>