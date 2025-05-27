<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <div class="form-container">
        <h2>Edit Product</h2>
        <form action="/admin/product/<?= $product->id ?>/update" method="post" enctype="multipart/form-data">
        <form>
           <div class="form-group">
                <label for="product_name">Product Name</label>
                <input id="product_name" name="product_name" type="text" value="<?= $product->product_name ?>"  required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input id="description" name="description"type="text" value="<?= $product->description ?>" required>
            </div>
            <div class="form-group">
                <label for="price_mp">Marked Price</label>
                <input id="price_mp" name="price_mp"type="number" value="<?= $product->price_mp ?>" required>
            </div>
            <div class="form-group">
                <label for="price_sp">Sale Price</label>
                <input id="price_sp" name="price_sp"type="number" value="<?= $product->price_sp ?>" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" required>
                    <option value="" disabled>Select Category</option>
                    <?php foreach($categories as $c): ?>
                        <option
                            <?= $product->category_id == $c->id ? 'selected' : '' ?>
                            value="<?= $c->id ?>"
                        >
                            <?= $c->name ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file">
            </div>
            <div class="form-buttons">
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
</main>
</div>
</div>