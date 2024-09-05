<html>
<main>
    <h1>Add Order</h1>
    <form action="index.php" method="post" id="add_orders_form">
        <input type="hidden" name="action" value="add_order">
        <label>Order Number:</label>
        <input type="text" name="order_num" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Order" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="?action=list_order">View Order List</a>
    </p>

</main>
</html>