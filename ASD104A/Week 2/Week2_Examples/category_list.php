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

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Category Manager</h1></header>
<main>
    <h1>Category List</h1>

    <section>
        <!-- display a table of categories -->
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category['categoryID']; ?></td>
                <td><?php echo $category['categoryName']; ?></td>
                <td><form action="delete_category.php" method="post">
                    <input type="hidden" name="category_id"
                        value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_category_form.php">Add Category</a></p>
        <p><a href="index.php">Home</a></p>        
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>