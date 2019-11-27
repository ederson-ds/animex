<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-5 offset-md-3">
            <h1>Sign Up</h1>
            <span style="color: red;">
                <?php echo validation_errors(); ?>
            </span>
            <form action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Username" value="<?php echo set_value('name'); ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" name="repeat-password" class="form-control" placeholder="Password" value="<?php echo set_value('repeat-password'); ?>">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <a href="<?php echo base_url() . 'login' ?>" class="btn btn-secondary">Sign In</a>
                        </div>
                        <div class="col-10">
                            <input type="submit" class="btn btn-primary form-control" value="Sign Up">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>