<?php $this->use('templates/base.php', ['title' => 'Welcome']) ?>

 <body>
    <div class="hero">
        <div>
            <h1>Discover Deliciousness Every Day!</h1>
            <p>Explore our mouth-watering menu and experience the best of Foodie Finds.</p>
            <a href="/auth/register">
                <button>Explore Menu</button>
            </a>
        </div>
    </div>

    <section class="services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service-box">
                <img src="https://img.icons8.com/ios-filled/50/ff6347/table.png" alt="Dine-In">
                <h3>Dine-In</h3>
                <p>Enjoy a fine dining experience at our restaurant.</p>
            </div>
            <div class="service-box">
                <img src="https://img.icons8.com/ios-filled/50/ff6347/box.png" alt="Take Away">
                <h3>Take Away</h3>
                <p>Order your favorite dishes to go.</p>
            </div>
            <div class="service-box">
                <img src="https://img.icons8.com/ios-filled/50/ff6347/van.png" alt="Home Delivery">
                <h3>Home Delivery</h3>
                <p>Get your food delivered to your doorstep.</p>
            </div>
        </div>
    </section>
    </body>