<html>
<main>
    <h1>Order List</h1>


    <section>
        <table>
            <tr>
                <th>Orders</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($order_list as $order) : ?>
            <tr>
                <td><?php echo $order['order_num']; ?></td>
                <td><?php echo $order['order_date']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p class="last_paragraph">
            <a href="?action=show_add_order_form">Add Order</a>
        </p>
    </section>
</main>
</html>