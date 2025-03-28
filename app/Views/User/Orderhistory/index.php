<?php $this->use('templates/history.php', ['title' => 'Orderhistory| User']) ?>


<div class="container">
        <h2>Your Order History 📜</h2>
        <p>Select an order to view details.</p>
        <form action="/user/order/history" method="POST"> 
        <div class="order-history">
            <!-- Order 1 -->
            <?php foreach ($orders as $index => $o): ?>
                <input type="radio" id="order<?= $o->id ?>" name="order" class="toggle">
                <label for="order<?= $o->id ?>" class="order-label">
                    Order #<?= $o->id ?> - ₹<?= $o->sub_total ?> (<?= date('d M, Y', strtotime($o->created_at)) ?>)
                </label>
                <div class="order-details">
                    <table>
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <?php foreach ($o->order_items as $order_item): ?>
                            <tr>
                                <td><?= $order_item->product->product_name ?></td>
                                <td><?=$order_item->quantity?></td>
                                <td>₹<?=$order_item->price_sp?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <p><strong>Total:</strong>₹<?= $o->sub_total ?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </form>

       
</div>

   