<?php $this->layout('layout', ['title' => 'Lost password']) ?>

<?php $this->start('main_content') ?>

<div class="row">
    <h1 class="text-primary text-center">Lost password?</h1>
    
    <div class="has-error text-center">
        <?php echo $error; ?>
    </div>
    
    <form class="text-center" method="POST">
        <div class="form-group">
            <input type="text" name="email" placeholder="Email"/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" value="Recover your password"/>
        </div>
    </form>
</div>

<?php $this->stop('main_content') ?>