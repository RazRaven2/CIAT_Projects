<html>
<main>
    <h1>Add Customer</h1>
    <form action="index.php" method="post" id="add_customer_form">
        <input type="hidden" name="action" value="add_customer">
        <label>Customer Number:</label>
        <input type="text" name="customer_num" />
        <br>
        <label>Customer Name:</label>
        <input type="text" name="customer_name" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Customer" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="?action=list_customer">View Customer List</a>
    </p>

</main>
</html>