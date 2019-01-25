<?php include('inc/header.php'); ?>
    <h1>Geef hier uw favoriete top 3 dans/meezingliedjes op.</h1>
    <div class="frontpage container row col-12">
        <div class="form col-4">
            <form class="" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    <a href="addpost.php">temp link</a>
                </div>
            </form>
        </div>
    </div>
<?php include('inc/footer.php'); ?>
