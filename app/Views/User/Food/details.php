<?php $this->use('templates/detail.php', ['title' => 'Food | User']) ?>



<div class="container">
    <div class="food-image">
        <img src="<?=$food->image_url?>" alt="<?=$food->product_name?>"> 
        
    </div>
    <div class="food-details">
        <div class="food-title"><?= $food->product_name ?></div>
        <div class="food-description"><?= $food->description ?></div>
        <div class="price">₹<?= $food->price_sp ?></div>
        <button class="add-to-cart">Add to Cart</button>
    </div>
</div>




