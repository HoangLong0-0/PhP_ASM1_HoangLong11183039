<?php
//params
$id=$_POST["id"];
$name=$_POST["name"];
$category=$_POST["category"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
//db
$servername="localhost";
$username="root";
$password="root";
$db="product";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect error");
}
$sql_text = "update product set 
                   name='$name',category='$category',quantity='$quantity',price='$price'
                    where id = $id";
if($conn->query($sql_text)===true){
    header("location: list.php");
}
else{
    echo "ERROR".$conn->error;
}
?>
