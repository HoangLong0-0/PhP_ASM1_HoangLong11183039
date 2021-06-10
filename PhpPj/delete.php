<?php
$id=$_GET["id"];
$servername="localhost";
$username="root";
$password="root";
$db="product";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect error");
}
$sql_text="delete from product where id = $id";
$rs=$conn->query($sql_text);
if($conn->query($sql_text)===true){
    header("location: list.php");
}
else{
    echo "ERROR".$conn->error;
}
?>