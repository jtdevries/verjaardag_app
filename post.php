<?php
    require('config/config.php');
    require('config/db.php');
    //GET ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    //CREATE QUERY
    $query = 'SELECT * FROM Songs WHERE ID = '.$id;

    //GET RESULT
    $result = mysqli_query($conn, $query);

    //FETCH DATA
    $song = mysqli_fetch_assoc($result);
    //var_dump($songs);
    //FREE RESULT
    mysqli_free_result($result);

    //CLOSE CONNECTION
    mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
        <div class="container">
          <h1><?php echo $song['username']; ?></h1>

            <div class="jumbotron row col-12">
              <div class="col-6">
                <a href="<?php echo ROOT_URL; ?>admin.php" class="btn btn-primary">Back</a><br><br><br>
                <h6>E-mail: </h6>
                <p><?php echo $song['email']; ?></p>
                <h6>Personal message: </h6>
                <p><?php echo $song['personalmessage']; ?></p><br><br>

                <h5>Song 1</h5>
                <h6>Artist: </h6>
                <p><?php echo $song['artist1']; ?></p>
                <h6>Song: </h6>
                <p><?php echo $song['song1']; ?></p>
                <h6>URL: </h6>
                <p><?php echo $song['url1']; ?></p>
              </div>

              <div class="col-6">
                <h5>Song 2</h5>
                <h6>Artist: </h6>
                <p><?php echo $song['artist2']; ?></p>
                <h6>Song: </h6>
                <p><?php echo $song['song2']; ?></p>
                <h6>URL: </h6>
                <p><?php echo $song['url2']; ?></p><br>

                <h5>Song 3</h5>
                <h6>Artist: </h6>
                <p><?php echo $song['artist3']; ?></p>
                <h6>Song: </h6>
                <p><?php echo $song['song3']; ?></p>
                <h6>URL: </h6>
                <p><?php echo $song['url3']; ?></p>
              </div>
            </div>
        </div>
<?php include('inc/footer.php'); ?>
