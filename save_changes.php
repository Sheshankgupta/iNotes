<?php 
$conn=mysqli_connect('localhost','root','','notes');
if($conn){
    //echo "Connected successfully";
} else{
    die("Couldn't connect");
}
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
        $title=$_POST['title'];
        $desc=$_POST['description'];
        echo $title,$desc;
        $sql2="update notes set Title='".$title."',description='".$desc."' where sno=$id";
        $result=mysqli_query($conn,$sql2);
        header("Location:data.php");
}
?>