<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <?php include VIEW_PATH .'/partials/_message.php' ?>
    <div class="form-container">
        <h2>Create Category</h2>
        <form action="/admin/category/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Category Name</label>
                <input name="name" id="name" placeholder="Category name" type="text" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input name="description" id="description" placeholder="Category description" type="text" required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input name="photo" id="photo" type="file">
            </div>
            <div class="form-buttons">
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
</main>
