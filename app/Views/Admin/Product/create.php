<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
     <?php include VIEW_PATH .'/partials/_message.php' ?>
    <div class="form-container">
        <h2>Create Product</h2>
        <form action="/admin/product/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input id="product_name" name="product_name" type="text" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input id="description" name="description"type="text" required>
            </div>
            <div class="form-group">
                <label for="price_mp">Marked Price</label>
                <input id="price_mp" name="price_mp"type="number" required>
            </div>
            <div class="form-group">
                <label for="price_sp">Sale Price</label>
                <input id="price_sp" name="price_sp"type="number" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" required>
                    <option value="" disabled selected>Select Category</option>
                    <?php foreach($categories as $c): ?>
                        <option value="<?= $c->id ?>"><?= $c->name ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <div class="form-group">
                <label for="Image">Image</label>
                <input id="Image" name="Image"type="file" disabled>
            </div>
            <div class="form-buttons">
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
</main>
</div>
</div>