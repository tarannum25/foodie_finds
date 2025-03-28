<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <div class="form-container">
        <h2>Create Product</h2>
        <form>
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Mark Price</label>
                <input type="number" required>
            </div>
            <div class="form-group">
                <label>Sale Price</label>
                <input type="number" required>
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