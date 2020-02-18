<?php
require_once('database.php');

if (!isset($ItemNum)) {
    $ItemNum = filter_input(INPUT_GET, 'item_num', 
            FILTER_VALIDATE_INT);
    if ($ItemNum == NULL || $ItemNum == FALSE) {
        $ItemNum = 1;
    }
}
// Get products for selected category
$queryProducts = 'SELECT * FROM todoitems
                  ORDER BY ItemNum';
$statement = $db->prepare($queryProducts);
$statement->bindValue(':Item_Num', $ItemNum);
$statement->execute();
$todoitems = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-do List</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>

        <?php foreach ($todoitems as $todoitem) : ?>
        <table>
        <tr>
            <td><?php echo $todoitem['ItemNum']; ?></td>
            <td><?php echo $todoitem['Title']; ?></td>
            <td><?php echo $todoitem['Description']; ?></td>
            <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="itemNum"
                           value="<?php echo $todoitem['ItemNum']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="add_product_form.php">Click here to add an item</a></p>  
</body>
</html>