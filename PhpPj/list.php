<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Danh sach san pham</title>
</head>
<body>
<h1> Danh sach san pham</h1>
<?php
$servername="localhost";
$username="root";
$password="root";
$db="product";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Connect error");
}
$sql_text="select * from product";
$rs=$conn->query($sql_text);
$dssp=[];
if($rs->num_rows>0){
    while ($row = $rs->fetch_assoc())
        {
            $dssp[] = $row;
        }
    }
?>
<ul>
    <?php
    foreach ($dssp as $sp){?>
        <li>
             <?php
             $id = $sp["id"];
             echo "Id: ".$sp["id"]." ".$sp["name"]
                    ."-- Category: ".$sp["category"]
                    ."-- Quantity: ".$sp["quantity"]
                    ."-- Price: ".$sp["price"]
                ?>
            <a href="add.php"> Add</a>
            <a href="edit.php?id=<?php echo $id ?>"> Edit</a>
            <a href="delete.php?id=<?php echo $id ?>"> Delete</a>
        </li>

    <?php } ?>

</ul>
</body>
</html>
