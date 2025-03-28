<?php $this->use('templates/thankyou.php', ['title' => 'Thankyou | User']) ?>


<body>
    <div class="thank-you-container">
        <h2>Thank You for Your Order! 🎉</h2>
        <p>Your order has been placed successfully.</p>
        <p>We will notify you once your food is on its way. 🍕</p>
        <p><strong>Order ID:</strong> #123456</p>

        <div class="button-group">
            <a href="/user/order/history"><button>View Order History</button></a>
            <a href="/user/home/index"><button>Back to Home</button></a>
        </div>
    </div>