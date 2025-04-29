<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>

<main class="content">
                        <div class="order-details-container">
                          
                          <!-- Left Section: Order Items -->
                          <div class="order-items">
                            <h2>Order Items</h2>
                            <table>
                              <thead>
                                <tr>
                                  <th>Image</th>
                                  <th>Item Name</th>
                                  <th>Mark Price</th>
                                  <th>Sale Price</th>
                                  <th>Quantity</th>
                                </tr>
                              </thead>
                              <tbody>
                                <!-- Example Row (Repeat dynamically) -->
                                <tr>
                                  <td><img src="/path/to/image.jpg" alt="Item"></td>
                                  <td>Grilled Chicken</td>
                                  <td>₹350</td>
                                  <td>₹299</td>
                                  <td>2</td>
                                </tr>
                                <!-- Repeat rows as needed -->
                              </tbody>
                            </table>
                          </div>

                          <!-- Right Section: Order Summary -->
                          <div class="order-summary">
                            <h2>Order Summary</h2>
                            <p><strong>Order ID:</strong> #12345</p>
                            <p><strong>Customer Name:</strong> Tarannum Mahtab</p>
                            <p><strong>Order Date:</strong> April 29, 2025</p>
                            <hr>
                            <p><strong>Subtotal:</strong> ₹898</p>
                            <p><strong>Discount:</strong> ₹100</p>
                            <p><strong>Tax:</strong> ₹45</p>
                            <p><strong>Delivery Charges:</strong> ₹50</p>
                            <hr>
                            <p><strong>Total Amount:</strong> ₹893</p>
                            <p><strong>Payment Method:</strong> Cash on Delivery</p>
                            <p><strong>Status:</strong> Delivered</p>
                          </div>

                </div>
            </main>
        </div>
    </div>