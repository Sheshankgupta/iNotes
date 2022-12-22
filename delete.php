<?php
    $conn=mysqli_connect('localhost','root','','notes');
    if($conn){
        //echo "Connected successfully";
    } else{
        die("Couldn't connect");
    }
    $id=$_GET['id'];
    echo $id;
    $sql="delete from notes where sno = $id";
    echo $sql;
    $query=mysqli_query($conn,$sql);
    header("Location:data.php");
?>