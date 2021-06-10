<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Danh sach sinh vien</title>
</head>
<body>
<h1> Edit san pham</h1>
<?php
//params
$id = $_GET["id"];
$servername="localhost";
$username="root";
$password="root";
$db="product";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect error");
}
$sql_text="select * from product where id = $id";
$rs=$conn->query($sql_text);
$sp=null;
if($rs->num_rows>0){
    while ($row = $rs->fetch_assoc())
    {
        $sp = $row;
        break;
    }
}
if($sp == null){
    header("list.php");
}
?>
<form action="?route=update" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="text" name="name" value="<?php echo $sp["name"] ?>" placeholder="name">
    <input type="text" name="category" value="<?php echo $sp["category"] ?>" placeholder="category">
    <input type="number" name="quantity" value="<?php echo $sp["quantity"] ?>" placeholder="quantity">
    <input type="number" name="price" value="<?php echo $sp["price"] ?>" placeholder="price">
    <button type="submit">SUBMIT</button>
    <button type="reset">RESET</button>
</form>
</body>
</html>
