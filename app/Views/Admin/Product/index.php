<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<body>
    <div class="container">
        <div class="main-content">
            <main class="content">
                <a href="/admin/Product/create"class="btn"> + Product</a>
                <div class="table-container">
                    <h2>Product List</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>description</th>
                                <th>Product Name</th>
                                <th>Category ID</th>
                                <th>Marked Price</th>
                                <th>Sale Price</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($products as $p): ?>
                            <tr>
                                    <td><?= $p->id ?></td>
                                    <td><img src="" alt="Biryani" class="product-image"></td>
                                    <td><?= $p->product_name ?></td>
                                    <td><?= $p->description ?></td>
                                    <td><?= $p->category_id?></td>
                                    <td><?= $p->price_mp ?></td>
                                    <td><?= $p->price_sp ?></td>  
                                    <td><a href="/admin/product/<?= $p->id ?>" class="edit-link">Edit</a></td>
                                <?php endforeach; ?>
                            </tr>
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