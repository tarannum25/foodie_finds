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
                                  <th>Marked Price</th>
                                  <th>Sale Price</th>
                                  <th>Quantity</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($order_items as $oi): ?>
                                <tr>
                                  <td>
                                    <img src="<?= $oi->product()->image_url ?>" alt="<?= $oi->product()->product_name ?>"></td>
                                  <td><?= $oi->product()->product_name ?></td>
                                  <td><?= $oi->price_mp ?></td>
                                  <td><?= $oi->price_sp ?></td>
                                  <td><?= $oi->quantity ?></td>
                                   <?php endforeach; ?>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                          <!-- Right Section: Order Summary -->
                          <div class="order-summary">
                            <h2>Order Summary</h2>
                            <p><strong>Order ID:</strong> #<?= $order->id ?></p>
                            <p><strong>Customer Name:</strong> <?= $user->fullName() ?></p>
                            <p><strong>Customer Name2:</strong> <?= $order->user()->fullName() ?></p>
                            <p><strong>Order Date:</strong><?= $order->order_date ?></p>
                            <hr>
                            <p><strong>Subtotal:</strong>₹<?= $order->sub_total?></p>
                            <p><strong>Discount:</strong> ₹<?=$order->discount ?></p>
                            <p><strong>Tax:</strong> ₹45</p>
                            <p><strong>Delivery Charges:</strong> ₹50</p>
                            <hr>
                            <p><strong>Total Amount:</strong> ₹<?= $order->gross_total?></p>
                            <p><strong>Payment Method:</strong> Cash on Delivery</p>
                            <p><strong>Status:</strong> Delivered</p>
                          </div>

                </div>
            </main>
        </div>
    </div>