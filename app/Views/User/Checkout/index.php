<?php $this->use('templates/checkout.php', ['title' => 'Checkout| User']) ?>

<div class="checkout-container">
    <!-- Left Side: Food Items -->
    <div class="food-list">
        <h2>Your Order</h2>
         <?php foreach ($products as $p): ?>
            <div class="food-item">
                <img src="<?=$p->image_url?>" alt="<?=$p->product_name?>"> 
                <div class="<?= $p->description ?>">
                    <h3><?= $p->product_name ?></h3>
                    <p>Quantity: 1</p>
                    <p>₹<?= $p->price_sp ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>

    <!-- Right Side: Order Summary -->
    <div class="order-summary">
        <h2>Order Summary</h2>
        <p>Subtotal: <strong>₹<?= $subtotal; ?></strong></p>
        <p>Discount: <strong>-₹<?= $discount; ?></strong></p>
        <p>Delivery Charges: <strong>₹99</strong></p>
        <hr>
        <p><strong>Total Payable: ₹<?= $total; ?></strong></p>
        <a href="/user/thankyou">
            <button>Proceed to Payment</button>
        </a>
    </div>
</div>