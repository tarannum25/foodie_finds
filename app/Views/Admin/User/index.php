<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<body>
    <div class="container">
        <div class="main-content">
            <main class="content">
               <div class="action-bar">
                   <div class="search-wrapper">
                       <i class="fa fa-search search-icon"></i>
                       <input type="text" class="search-input" placeholder="Search users...">
                   </div>  
                   <a href="/admin/user/create"class="btn"> + User</a>
               </div>
               <div class="table-container">
                <h2>Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Image</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($users as $u): ?>
                        <tr>
                            <td><?= $u->id ?></td>
                            <td><?= $u->first_name ?></td>
                            <td><?= $u->last_name ?></td>
                            <td><img src="User.png" alt="Biryani" class="product-image"></td>
                            <td><?= $u->phone ?></td>
                            <td><?= $u->email ?></td>
                            <td><span class="status pending">Pending</span></td>
                            <td>
                                <a href="/admin/user/<?= $u->id ?>/show" class="view-link">View</a>
                                <a href="/admin/user/<?= $u->id ?>/edit" class="edit-link">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </main>
</div>
</div>


