<?php $this->use('templates/user.php', ['title' => 'Search | User']) ?>

<!-- Main Content Section -->
<main class="dashboard-content">
    <div class="search-bar">
        <form action="/user/search/index" method="get">
            <input name="q" type="text" id="search-box" placeholder="Search food items...">
            <button id="search-button" type="submit"><i class="ri-search-line"></i></button>
        </form>
    </div>
    <h2></h2>

    <div class="dashboard">

        <!-- Starters Section -->
        <section id="starters">
            <h3 class="underlined-heading">Search result for &quot;<?= e($query) ?>&quot;</h3>

            <div class="dishes-container">
                <?php foreach ($products as $dish): ?>
                    <div class="dish-card">
                        <a href="/user/food/details?id=<?= $dish->id ?>">
                            <img src="<?= $dish->image_url ?>" alt="<?= $dish->product_name ?>">
                        </a>
                        <h3><?= $dish->product_name ?></h3>
                        <p>₹<?= $dish->price_sp ?></p>
                        <button class="add-to-cart-btn">Add to Cart</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>


</main>