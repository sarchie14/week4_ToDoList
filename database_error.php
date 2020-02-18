<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>

    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>

        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>