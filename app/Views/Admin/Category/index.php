<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>

<?php include VIEW_PATH . '/partials/_message.php' ?>

<div class="container">
    <div class="main-content">
        <main class="content">
            <a href="/admin/category/create">Add Category</a>
            <div class="table-container">
                <h2>Category List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($categories as $c): ?>
                        <tr>
                            <td><?= $c->id ?></td>
                            <td><?= $c->name ?></td>
                            <td><?= $c->description ?></td>
                            <td><img src="https://media-cdn.tripadvisor.com/media/photo-s/11/9f/01/81/mutton-briyani.jpg" alt="Biryani" class="product-image"></td>
                            <td><a href="/admin/category/<?= $c->id ?>/edit" class="edit-link">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
                <div class="form-buttons">
                    <a href="#" class="save-button">Save</a>
                    <a href="#" class="back-button">Back</a>
                </div>
            </div>
        </main>
    </div>
</div>