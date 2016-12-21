<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>

<div class="row">
    <h1 class="text-primary text-center">Lost password?</h1>
    
    <form class="text-center" action="/akaproject/public/lostpassword" method="POST">
        <div class="form-group">
            <input type="text" name="email" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" value="Recover your password"/>
        </div>
    </form>
</div>

<?php $this->stop('main_content') ?>