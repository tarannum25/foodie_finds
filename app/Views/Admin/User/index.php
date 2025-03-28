<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<body>
    <div class="container">
        <div class="main-content">
            <main class="content">
                <div class="table-container">
                    <h2>Users</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User Name</th>
                                <th>Image</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tarannum Mahtab</td>
                                <td><img src="User.png" alt="Biryani" class="product-image"></td>
                                <td>9330896193</td>
                                <td>tarannum@gmail.com</td>
                                <td><span class="status pending">Pending</span></td>
                                <td><a href="#" class="edit-link">Edit</a></td>
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