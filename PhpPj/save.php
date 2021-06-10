<?php
//params
$name=$_POST["name"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$category=$_POST["category"];
//db
$servername="localhost";
$username="root";
$password="root";
$db="product";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect error");
}
$sql_text = "insert into product(name,category,quantity,price) values
                                                         ('$name','$category','$price','$quantity')";
if($conn->query($sql_text)===true){
    header("location: list.php");
}
else{
echo "ERROR".$conn->error;
}
?>