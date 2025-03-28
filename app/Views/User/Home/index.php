<?php $this->use('templates/user.php', ['title' => 'Home | User']) ?>

<!-- Main Content Section -->
<main class="dashboard-content">
    <?php include VIEW_PATH .'/partials/_message.php' ?>

    <div class="search-bar">
        <form action="/user/search/index" method="get">
            <input name="q" type="text" id="search-box" placeholder="Search food items...">
            <button id="search-button" type="submit"><i class="ri-search-line"></i></button>
        </form>
    </div>

    <h2>𝔼𝕩𝕡𝕝𝕠𝕣𝕖 𝕆𝕦𝕣 𝔻𝕚𝕤𝕙𝕖𝕤 </h2>
    


    <div class="dashboard">
        <div class="categories">


            <a href="?category=starter" class="category-item <?= ($_GET['category'] ?? '') == 'starter' ? 'active' : '' ?>">
                <img src="https://media-assets.swiggy.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/972a37599772cdc7df93a0855ad87591" alt="Starter">
                <span>Starter</span>
            </a>
            <a href="?category=main" class="category-item <?= ($_GET['category'] ?? '') == 'main' ? 'active' : '' ?>">
                <img src="https://bombaycatral.com/wp-content/uploads/2023/06/Untitled-1sdfsfscxzdasd.jpg" alt="Main Course">
                <span>Main Course</span>
            </a>
            <a href="?category=dessert" class="category-item <?= ($_GET['category'] ?? '') == 'dessert' ? 'active' : '' ?>">
                <img src="https://chopnotch.com/wp-content/uploads/2020/11/Panna-Cotta-1.jpg" alt="Dessert">
                <span>Dessert</span>
            </a>
            <a href="?category=drinks" class="category-item <?= ($_GET['category'] ?? '') == 'drinks' ? 'active' : '' ?>">
                <img src="https://www.acouplecooks.com/wp-content/uploads/2021/06/Strawberry-Water-006.jpg" alt="Drinks">
                <span>Drinks</span>
            </a>
        </div>
    </div>



  <?php 
  $selected_category = $_GET['category'] ?? null;
  ?>

  <!-- Starters Section -->
  <section id="starters" style="display: <?= !$selected_category || $selected_category == 'starter' ? 'block' : 'none' ?>;">
      <h3 class="underlined-heading">Starters</h3>
      <div class="dishes-container">
          <?php foreach ($starters as $dish): ?>
              <div class="dish-card">
                  <a href="/user/food/details?id=<?= $dish->id ?>">
                      <img src="<?= $dish->image_url ?>" alt="<?= $dish->product_name ?>">
                  </a>
                  <h3><?= $dish->product_name ?></h3>
                  <p>₹<?= $dish->price_sp ?></p>
                  <form method="POST" action="/user/cart/add">
                      <input type="hidden" name="product_id" value="<?= $dish->id ?>">
                      <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                  </form>       
              </div>
          <?php endforeach; ?>
      </div>
  </section>

  <!-- Main Course Section -->
  <section id="main-course" style="display: <?= !$selected_category || $selected_category == 'main' ? 'block' : 'none' ?>;">
      <h3 class="underlined-heading">Main Course</h3>
      <div class="dishes-container">
          <?php foreach ($main_course as $dish): ?>
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

  <!-- Desserts Section -->
  <section id="desserts" style="display: <?= !$selected_category || $selected_category == 'dessert' ? 'block' : 'none' ?>;">
      <h3 class="underlined-heading">Desserts</h3>
      <div class="dishes-container">
          <?php foreach ($desserts as $dish): ?>
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

  <!-- Drinks Section -->
  <section id="drinks" style="display: <?= !$selected_category || $selected_category == 'drinks' ? 'block' : 'none' ?>;">
      <h3 class="underlined-heading">Drinks</h3>
      <div class="dishes-container">
          <?php foreach ($drinks as $dish): ?>
              <div class="dish-card">
                  <a href="details.php?id=<?= $dish->id ?>">
                      <img src="<?= $dish->image_url ?>" alt="<?= $dish->product_name ?>">
                  </a>
                  <h3><?= $dish->product_name ?></h3>
                  <p>₹<?= $dish->price_sp ?></p>
                  <button class="add-to-cart-btn">Add to Cart</button>
              </div>
          <?php endforeach; ?>
      </div>

  </section>
