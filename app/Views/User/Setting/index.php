<?php $this->use('templates/settings.php', ['title' => 'Setting | User']) ?>

<div class="container">
        <h2>🍽️ Foodie Finds - User Settings</h2>
        <form action="/user/setting/update-profile" method="POST"> 
             
        <!-- User Information Section -->
        
            <h3>👤 Update Profile</h3>

            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit" class="btn-save">Save Changes</button>
        </form>

        <hr>

        <!-- Change Password Section -->
        <form action="change_password.php" method="POST" class="settings-form">
            <h3>🔑 Change Password</h3>

            <label for="current-password">Current Password:</label>
            <input type="password" id="current-password" name="current_password" required>

            <label for="new-password">New Password:</label>
            <input type="password" id="new-password" name="new_password" required>

            <label for="confirm-password">Confirm New Password:</label>
            <input type="password" id="confirm-password" name="confirm_password" required>

            <button type="submit" class="btn-save">Update Password</button>
        </form>

    </div>