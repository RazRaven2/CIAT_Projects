<?php
require_once('database.php');

$query = 'SELECT * FROM categories ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Guitar Shop</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <header><h1>Category Manager</h1></header>
        <main>
            <h1>Add Category</h1>
            <form action="add_category.php" method="post" id="add_category_form">
                <label>Category Code is Auto Incremented.</label><br>

                <label>Name: </label>
                <input type="text" name="name"><br>
                <label>&nbsp;</label>
                <input type="submit" name="Add Category"><br>
            </form>
            <p><a href="index.php">View Product</a></p>
        </main>
        <footer>
                <p>&copy; <?php echo date('Y'); ?>My Guitar Shop, Inc.</p>
        </footer>
    </body>
</html>