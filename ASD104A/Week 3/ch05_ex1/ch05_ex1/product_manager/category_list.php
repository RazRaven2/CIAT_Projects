<?php include '../view/header.php'; ?>
<?php
require_once('..\\model\\database.php');

$query = 'SELECT * FROM categories ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
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
                <td><?php echo $category['categoryName']; ?></td>
                <td><form action="." method="post" id="delete_category">
                    <input type="hidden" name="action"
                        value="delete_category">
                    <input type="hidden" name="category_id"
                        value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table><br><br>
        <section>
            <form action="index.php" method="post" id="add_category_form">            
            <label>ID: </label>
            <input type="number" name="category_id">
            <label>Name: </label>
            <input type="text" name="name">
            <label>&nbsp;</label>
            <input type="submit" value="Add"><br>
            </form>
        </section>
      
    </section>
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>