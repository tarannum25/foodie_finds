<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


    <div class="container">
        <div class="main-content">
            <main class="content">
                 <div class="action-bar">
                <div class="search-wrapper">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Search products...">
                </div>
                    <a href="/admin/product/create"class="btn"> + Product</a>
                </div>
                <div class="table-container">
                    <h2>Product List</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>description</th>
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
                                    <?php /* <td><img src="<?=$p->image_url?>" alt="<?=$p->product_name?>"></td> */ ?>
                                    <td><img src="image.png" alt="Biryani" class="product-image"></td>
                                    <td><?= $p->product_name ?></td>
                                    <td><?= $p->description ?></td>
                                    <td><?= $p->category_id?></td>
                                    <td><?= $p->price_mp ?></td>
                                    <td><?= $p->price_sp ?></td>  
                                    <td><a href="/admin/product/<?= $p->id ?>/edit" class="edit-link">Edit</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="form-buttons">
                        <!-- <a href="#" class="back-button">Back</a> -->
                         <button type="submit" class="btn">Save</button>
                        
                    </div>
                </div>
            </main>
        </div>
    </div>