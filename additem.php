<?php

$title = filter_input(INPUT_POST, 'title');
$description = filter_input(INPUT_POST, 'description');


// Validate inputs
if ($title == null || $title == null || $description == null || $description == false) {
    $error = "Invalid product data. Check all fields and try again.";
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO todoitems
                 (Title, Description)
              VALUES
                 (:title, :description)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->execute();
    $statement->closeCursor();

include('index.php');
}
?>