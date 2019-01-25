<?php include('inc/header.php'); ?>
    <h1>Admin login.</h1>
    <div class="container row col-12">
        <div class="form col-6">
            <form class="" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    <a href="admin.php">temp link</a>
                </div>
            </form>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
