<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <div class="form-container">
        <h2>Edit Category</h2>
        <form action="/admin/category/<?= $category->id ?>/update" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Category Name</label>
                <input name="name" id="name" placeholder="Category name" type="text" value="<?= $category->name ?>" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input name="description" id="description" placeholder="Category description" type="text" value="<?= $category->description ?>" required>
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
