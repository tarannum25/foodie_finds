<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <div class="form-container">
        <h2>Edit User</h2>
        <form>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="number" required>
            </div>
             <div class="form-group">
                <label>Email</label>
                <input type="email" required>
            </div>
            <!-- <div class="form-group">
                <label>Image</label>
                <input type="file" required>
            </div> -->
            <div class="form-buttons">
                <a href="#" class="save-button">Save</a>
                <a href="#" class="back-button">Back</a>
            </div>
        </form>
    </div>
</main>
</div>
</div>