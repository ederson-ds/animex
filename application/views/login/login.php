<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-5 offset-md-3">
            <h1>Login</h1>
            <span style="color: red;">
                <?php echo validation_errors(); ?>
                <p><?php echo $error ?></p>
            </span>
            <form action="" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Username" value="<?php echo set_value('name') ?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-3">
                            <a href="<?php echo base_url() . 'login/signup' ?>" class="btn btn-secondary">Sign Up</a>
                        </div>
                        <div class="col-9">
                            <input type="submit" class="btn btn-primary form-control" value="Enter">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>