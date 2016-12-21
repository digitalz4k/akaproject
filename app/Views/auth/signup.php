<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

<div class="row">
    <h1 class="text-primary text-center">Sign Up</h1>
    
    <form class="text-center" action="/akaproject/public/signup" method="POST">
        <div class="form-group">
            <input type="text" name="first_name" placeholder="First name"/>
        </div>
        <div class="form-group">
            <input type="text" name="last_name" placeholder="Last name"/>
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input type="text" name="password" placeholder="Password"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" value="Sign Up"/>
        </div>
    </form>
</div>

<?php $this->stop('main_content') ?>