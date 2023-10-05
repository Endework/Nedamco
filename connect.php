<?php
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    


    // database connection
$conn= new mysqli('localhost','root','','bookapp');
if ($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registration(fullname,email,password) values(?,?,?)");
    $stmt->bind_param('sss',$fullname, $email, $password);
    $stmt->execute();
    echo"Registration successful";
    $stmt->close();
    $conn->close();

}

?>