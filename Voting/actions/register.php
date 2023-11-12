<?php 
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
    echo '<script>
    alert("Passwords do no match");
    window.location="../part1/registration.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `userdata` (username,mobile,password,photo,standard,status,votes) values('$username','$mobile','$password','$image','$std',0,0)";
    $res=mysqli_query($con,$sql);
    if($res){
        echo '<script>
    alert("Registeration successful");
    window.location="../";
    </script>';
    }
    else{
        die(mysqli_error($con));
    }
}
?>