<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <div class="form-container">
        <h2>Edit User</h2>
        <form>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name"type="text" required>
            </div>
             <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="ast_name" name="last_name"type="text" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" name="phone"type="number" required>
            </div>
             <div class="form-group">
               <label for="email">email</label>
                <input id="email" name="email"type="text" required>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input id="image" name="image"type="file" disabled>
            </div>
           <div class="form-buttons">
                <button type="submit" class="save-button">Save</button>
                <a href="#" class="back-button">Back</a>
            </div>
        </form>
    </div>
</main>
</div>
</div>