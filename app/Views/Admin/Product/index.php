<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<body>
    <div class="container">
        <div class="main-content">
            <main class="content">
                <div class="table-container">
                    <h2>Product List</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product Code</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Marked Price</th>
                                <th>Sale Price</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1400000</td>
                                <td><img src="https://media-cdn.tripadvisor.com/media/photo-s/11/9f/01/81/mutton-briyani.jpg" alt="Biryani" class="product-image"></td>
                                <td>Biryani</td>
                                <td>Main Course</td>
                                <td>349</td>
                                <td>299</td>  
                                <td><a href="#" class="edit-link">Edit</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1400001</td>
                                <td><img src="https://mrbrownbakery.com/image/images/GJ7uCwGiteTF24HTWBclkziVTdhpQeZWH23MvQfq.jpeg?p=full" alt="Biryani" class="product-image"></td>
                                <td>Cake</td>
                                <td>Dessert</td>
                                <td>549</td>
                                <td>499</td>
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