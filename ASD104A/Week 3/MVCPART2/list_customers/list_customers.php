<html>
<main>
    <h1>Customer List</h1>


    <section>
        <table>
            <tr>
                <th>Name</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($customer_list as $customer) : ?>
            <tr>
                <td><?php echo $customer['customer_name']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_form">Add Customer</a>
        </p>
    </section>
</main>
</html>