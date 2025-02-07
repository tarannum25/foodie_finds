<?php $this->use('templates/auth.php', ['title' => 'Register']) ?>

 


<div  id="signup-form"class="form-container">

    	<?php include VIEW_PATH . '/partials/_message.php' ?>
	
    <div class="circle-form">

        <h2>Signup</h2>

       
        <form action="/auth/register/store" method="post">
            <input
                name="first_name"
                type="text"
                placeholder="Name"
                required
                value="">
            <input name="phone" type="text" id="phone" placeholder="Phone" required>
            <input name="email" type="email" placeholder="Email" required>
            <input name="password" type="password" placeholder="Password" required>
            <input name="confirm" type="password" placeholder="Confirm Password" required>
            <button type="submit">Sign Up</button>
            <a href="/auth/login/authenticate" class="toggle-link">Already have an account? Login</a>
        </form>
    </div>
</div>






