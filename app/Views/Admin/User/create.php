<?php $this->use('templates/admin.php', ['title' => 'Welcome']) ?>


<main class="content">
    <div class="form-container">
        <h2>Create User</h2>
        <form action="/admin/user/store" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name"type="text" required>
            </div>
             <div class="form-group">
                <label for="last_name">last Name</label>
                <input id="ast_name" name="last_name"type="text" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="number" required>
            </div>
             <div class="form-group">
               <label for="email">Email</label>
                <input id="email" name="email" type="text" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input id="image" name="image" type="file" disabled>
            </div>
           <div class="form-buttons">
               <button type="submit" class="btn">Save</button>
           </div>
        </form>
    </div>
</main>
</div>
</div>