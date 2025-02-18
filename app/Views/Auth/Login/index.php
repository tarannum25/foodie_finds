<?php $this->use('templates/auth.php', ['title' => 'Login']) ?>

  
  <div id="login-form"class="form-container">
    <div class="circle-form">
        <h2>Login</h2>
        <form action="/auth/login/authenticate" method="post">

        	<?php include VIEW_PATH . '/partials/_message.php' ?>

            <input name="email" type="text" placeholder="Email" required>
            <input name="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <a href="/auth/register/store" class="toggle-link">Don't have an account? Sign up</a></a>
        </form>
    </div>
</div>
     

     
    
        