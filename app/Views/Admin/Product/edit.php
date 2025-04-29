<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <div class="form-container">
        <h2>Edit Product</h2>
        <form>
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
                <select required>
                    <option value="">Select Category</option>
                    <option>Starter</option>
                    <option>Main Course</option>
                    <option>Drinks</option>
                    <option>Desserts</option>
                </select>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" required>
            </div>
            <div class="form-buttons">
                <a href="#" class="save-button">Save</a>
                <a href="#" class="back-button">Back</a>
            </div>
        </form>
    </div>
</main>
</div>
</div>