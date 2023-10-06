<?php
$fullname=filter_input(INPUT_POST,'fullname');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');

$dbusername="root";
$dbpassword="";
$dbname="Phase1";

// creating a connection

$conn=new mysqli ($host,$fullname,$email,$password,$dbname);
if(mysqli_connect()){
    die('Connect Error ('.mysqli_connect_errno() .')'
    .mysqli_connect_error());
}
else{
    $sql="INSERT INTO user (fullname,email,password) 
    values ('$fullname','$email','$password')";
    if($conn->query($sql)){
        echo "New record is inserted sucessfully!";
    }
    else{
        echo "Error: ".$sql."<br>".$conn->error;
    }
    $conn->close();
}


if(!empty($fullname)){
}else{
    echo "Please full your FullName";
    die();
}

if(!empty($email)){
}else{
    echo "Please enter your Email address ";
    die();
}
if(!empty($password)){
}else{
    echo "Password must not be empty";
    die();
}




?>