<?php $this->use('templates/history.php', ['title' => 'Orderhistory| User']) ?>



<div class="container">
        <h2>Your Order History 📜</h2>
        <p>Select an order to view details.</p>
        <form action="/user/order history/index" method="POST"> 
        <div class="order-history">
            <!-- Order 1 -->
            <input type="radio" id="order1" name="order" class="toggle">
            <label for="order1" class="order-label">Order #123456 - $23.97 (Jan 15, 2025)</label>
            <div class="order-details">
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Cheese Burger</td>
                        <td>2</td>
                        <td>₹258</td>
                    </tr>
                    <tr>
                        <td>Pepperoni Pizza</td>
                        <td>1</td>
                        <td>₹199</td>
                    </tr>
                </table>
                <p><strong>Total:</strong> ₹457</p>
            </div>

            <!-- Order 2 -->
            <input type="radio" id="order2" name="order" class="toggle">
            <label for="order2" class="order-label">Order #123457 - ₹457 (Jan 12, 2025)</label>
            <div class="order-details">
                <table>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Pasta</td>
                        <td>1</td>
                        <td>₹99</td>
                    </tr>
                    <tr>
                        <td>Salad</td>
                        <td>1</td>
                        <td>₹50</td>
                    </tr>
                </table>
                <p><strong>Total:</strong> ₹149</p>
            </div>
        </div>

       
    </div>

   