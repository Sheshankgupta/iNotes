<?php
    $conn=mysqli_connect('localhost','root','','notes');
    if($conn){
        //echo "Connected successfully";
    } else{
        die("Couldn't connect");
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $title=$_POST['title'];
        $desc=$_POST['description'];
    }
    $sql="insert into notes (Title, Description) values ('".$title."','".$desc."')";
    $query=mysqli_query($conn,$sql);
    header('Location:index.php')
?>