<div class="row">
    <h1 class="text-primary text-center">Sign Up</h1>
    
    <div class="has-error text-center"><?php echo $error; ?></div>
    
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