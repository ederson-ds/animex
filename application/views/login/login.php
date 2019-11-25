<div class="container">
    <div class="row" style="margin-top: 100px;">
        <div class="col-5 offset-md-3">
            <h1>Login</h1>
            <form action="">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="name" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <a href="<?php echo base_url() . 'persona' ?>" class="btn btn-secondary">Sign in</a>
                        </div>
                        <div class="col-10">
                            <input type="submit" class="btn btn-primary form-control" value="Enter">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>