<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Danh sach san pham</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<h1> Danh sach san pham</h1>
<form action="?route=add" method="post">
    <button type="submit"> ADD </button>
</form>
<table class="table table-striped table bordered">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Price</th>
    </thead>
    <tbody>
    <?php foreach ($list as $item): ?>
    <tr>
        <td><?php echo $item["id"] ?></td>
        <td><?php echo $item["name"] ?></td>
        <td><?php echo $item["category"] ?></td>
        <td><?php echo $item["quantity"] ?></td>
        <td><?php echo $item["price"] ?>
            <a href="?route=edit&id=<?php echo $item["id"] ?>"> Edit</a>
            <a href="?route=delete&id=<?php echo $item["id"] ?>"> Delete</a>
        </td>
    </tr>

    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

