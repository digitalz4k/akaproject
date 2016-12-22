<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

<div class="row">
    <h1 class="text-primary text-center">Login</h1>
    
    <div class="has-error text-center"><?php echo $error; ?></div>
    
    <form action="/akaproject/public/login" method="POST" class="text-center">
        <div class="form-group">
            <input type="text" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" value="Sign In"/>
        </div>
        <div class="form-group">
            <a class="btn btn-link" href="/akaproject/public/lostpassword">Lost password?</a>
        </div>
    </form>
</div>

<?php $this->stop('main_content') ?>