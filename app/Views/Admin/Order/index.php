<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<body>
    <div class="container">
        <div class="main-content">
            <main class="content">
                 <div class="action-bar">
                <div class="search-wrapper">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Search orders...">
                </div>
                   <a href="/admin/order/create"class="btn"> + Order</a> 
                </div>
                <div class="table-container">
                    <h2>Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Order Date</th>
                                <th>Gross Total</th>
                                <th>Sub Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $o): ?>
                            <tr>
                                <td><?= $o->id ?></td>
                                <td><?= $o->order_date ?></td> 
                                <!-- <td><img src="https://media-cdn.tripadvisor.com/media/photo-s/11/9f/01/81/mutton-briyani.jpg" alt="Biryani" class="product-image"></td> -->
                                <td><?= $o->gross_total ?></td>
                                <td><?= $o->sub_total ?></td>
                                <td><span class="<?= $o->status ?>"></span></td>
                                <td>
                                <a href="/admin/order/<?= $o->id ?>/show" class="view-link">View</a>
                                </td>
                                <?php endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </main>
        </div>
    </div>