<?php
require('database.php');
$query = 'SELECT *
          FROM todoitems
          ORDER BY ItemNum';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>To-Do List</h1></header>

    <main>
        <h1>Add Product</h1>
        <form action="additem.php" method="post"
              id="add_product_form">

            <label>Title:</label>
            <input type="text" name="title"><br>

            <label>Description:</label>
            <input type="text" name="description"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>
</body>
</html>