<?php
    require('config/config.php');
    require('config/db.php');
    //CREATE QUERY
    $query = 'SELECT * FROM Songs';

    //GET RESULT
    $result = mysqli_query($conn, $query);

    //FETCH DATA
    $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //var_dump($songs);
    //FREE RESULT
    mysqli_free_result($result);

    //CLOSE CONNECTION
    mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
        <div class="container">
          <h1>Posts</h1>
          <div class="row col-12">
            <?php foreach($songs as $song) : ?>
              <div class="jumbotron col-4">

                  <h6>Username: </h6>
                  <p><?php echo $song['Username']; ?></p>
                  <h6>E-mail: </h6>
                  <p><?php echo $song['E-mail']; ?></p>
                  <h6>Personal message: </h6>
                  <p><?php echo $song['Personal message']; ?></p><br><br>

                <a class="btn btn-secondary" href="post.php?ID=<?php echo $song['ID']; ?>">Read more</a>

              </div>
            <?php endforeach; ?>
          </div>
        </div>
<?php include('inc/footer.php'); ?>
