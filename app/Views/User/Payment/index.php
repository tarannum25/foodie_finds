<?php $this->use('templates/payment.php', ['title' => 'Payment| User']) ?>




    
    <div class="checkout-container">
        <h2>Checkout</h2>
        
        <div class="delivery-address">
            <h3>DELIVERY ADDRESS</h3>
            <p class="home-address">HOME ADDRESS</p>
            <p>123 Main Street, Kolkata <span class="check-mark">✔</span></p>
        </div>
        
        <div class="payment-method">
            <h3>PAYMENT METHOD</h3>
            
               <label><input type="radio" name="payment" checked> **** **** **** 1234 (Visa)</label><br>
               <label><input type="radio" name="payment"> **** **** **** 5678 (Mastercard)</label>
           </div>
           <a href="/user/thankyou/index" class="payment-btn">Pay Now</a>
       </div >
            
    <div class="popup-overlay" id="popup">
        <div class="popup">
            <h2>✔</h2>
            <h3>Your order is successfully.</h3>
            <p>You can track the delivery in the "Orders" section.</p>
            <a href="user/home/index" class="continue-btn">Continue Shopping</a>
            <p class="go-orders"><a href="">Go to orders</a></p>
        </div>
    </div>