<?php
    require('config/config.php');
    require('config/db.php');

    //CHECK FOR SUBMIT
    if (isset($_POST['submit'])) {
      //GET FORM DATA
      $username = mysqli_real_escape_string($conn, $_POST['username']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $personalmessage = mysqli_real_escape_string($conn, $_POST['personalmessage']);

      $artist1 = mysqli_real_escape_string($conn, $_POST['artist1']);
      $song1 = mysqli_real_escape_string($conn, $_POST['song1']);
      $url1 = mysqli_real_escape_string($conn, $_POST['url1']);

      $artist2 = mysqli_real_escape_string($conn, $_POST['artist2']);
      $song2 = mysqli_real_escape_string($conn, $_POST['song2']);
      $url2 = mysqli_real_escape_string($conn, $_POST['url2']);

      $artist3 = mysqli_real_escape_string($conn, $_POST['artist3']);
      $song3 = mysqli_real_escape_string($conn, $_POST['song3']);
      $url3 = mysqli_real_escape_string($conn, $_POST['url3']);

      $query = "INSERT INTO songs(username, email, personalmessage, artist1, song1, url1, artist2, song2, url2, artist3, song3, url3) VALUES('$username', '$email', '$personalmessage', '$artist1', '$song1', '$url1', '$artist2', '$song2', '$url2', '$artist3', '$song3', '$url3')";

      if (mysqli_query($conn, $query)) {
        header('Location: '.ROOT_URL.'');
      } else {
        echo 'ERROR: '. mysqli_error($conn);
      }
    }
?>

<?php include('inc/header.php'); ?>
        <div class="container row col-12">
          <div class="form col-6">
            <h1>Add Posts</h1>
              <form class="" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                  <label>E-mail</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Personal message</label>
                  <textarea type="text" name="personalmessage" class="form-control"></textarea>
                </div>

                <div class="form-group">
                  <label>Artist 1</label>
                  <input type="text" name="artist1" class="form-control">
                </div>
                <div class="form-group">
                  <label>Song 1</label>
                  <input type="text" name="song1" class="form-control">
                </div>
                <div class="form-group">
                  <label>URL 1</label>
                  <input type="text" name="url1" class="form-control">
                </div>

                <div class="form-group">
                  <label>Artist 2</label>
                  <input type="text" name="artist2" class="form-control">
                </div>
                <div class="form-group">
                  <label>Song 2</label>
                  <input type="text" name="song2" class="form-control">
                </div>
                <div class="form-group">
                  <label>URL 2</label>
                  <input type="text" name="url2" class="form-control">
                </div>

                <div class="form-group">
                  <label>Artist 3</label>
                  <input type="text" name="artist3" class="form-control">
                </div>
                <div class="form-group">
                  <label>Song 3</label>
                  <input type="text" name="song3" class="form-control">
                </div>
                <div class="form-group">
                  <label>URL 3</label>
                  <input type="text" name="url3" class="form-control">
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-primary"><br><br><br>
              </form>
          </div>
          <div class="col-6">
            <form class="form-group col-12" action="index.html" method="post">
              <h4>Youtube search</h4>
                <iframe class="col-12"  id="player" type="text/html" width="640" height="380"
                src="http://www.youtube.com/embed?listType=search&list="
                frameborder="0"></iframe><br>
                <input class="form-control col-12" type="text" name="searchYT" id="searchYT" placeholder="Search: artist - song">
                <h6 id="directURL">Direct link: </h6>
                <a id="directURL1" href="#" target="_blank">link</a><br><br>
                <h6 id="resultURL">Search result: </h6>
                <a id="resultURL1" href="#" target="_blank">link</a><br>

                <button class="btn btn-secondary" name="search" id="search" type="button">Search</button>
                <button class="btn btn-default" name="search" id="link" type="button">Get link</button>

            </form>
          </div>
        </div>
<?php include('inc/footer.php'); ?>
