<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<body>
    <div class="container">
        <div class="main-content">
            <main class="content">
                <div class="table-container">
                    <h2>Orders</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Items</th>
                                <th>Image</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#10234</td>
                                <td>Raha Jain</td> 
                                <td>2 Biryani, 1 Cola</td>
                                <td><img src="https://media-cdn.tripadvisor.com/media/photo-s/11/9f/01/81/mutton-briyani.jpg" alt="Biryani" class="product-image"></td>
                                <td>₹599</td>
                                 <td><span class="status pending">Pending</span></td>
                                <td><a href="#" class="edit-link">Edit</a></td>
                            </tr>
                            <tr>
                                <td>#10235</td>
                                <td>Ria</td>
                                <td>3 Cake</td>
                                <td><img src="https://mrbrownbakery.com/image/images/GJ7uCwGiteTF24HTWBclkziVTdhpQeZWH23MvQfq.jpeg?p=full" alt="Cake" class="product-image"></td>
                                <td>₹499</td>
                                 <td><span class="status completed">completed23</span></td>
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