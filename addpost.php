<?php
    require('config/config.php');
    require('config/db.php');

    //CHECK FOR SUBMIT
    if (isset($_POST['submit'])) {
      //GET FORM DATA
      $username = mysqli_real_escape_string($conn, $_POST['Username']);
      $email = mysqli_real_escape_string($conn, $_POST['E-mail']);
      $pm = mysqli_real_escape_string($conn, $_POST['Personal message']);

      $artist1 = mysqli_real_escape_string($conn, $_POST['Artist 1']);
      $song1 = mysqli_real_escape_string($conn, $_POST['Song 1']);
      $url1 = mysqli_real_escape_string($conn, $_POST['Url 1']);

      $artist2 = mysqli_real_escape_string($conn, $_POST['Artist 2']);
      $song2 = mysqli_real_escape_string($conn, $_POST['Song 2']);
      $url2 = mysqli_real_escape_string($conn, $_POST['Url 2']);

      $artist3 = mysqli_real_escape_string($conn, $_POST['Artist 3']);
      $song3 = mysqli_real_escape_string($conn, $_POST['Song 3']);
      $url3 = mysqli_real_escape_string($conn, $_POST['Url 3']);

      $query = "INSERT INTO songs(username, email, pm, artist1, song1, url1, artist2, song2, url2, artist3, song3, url3)
                VALUES('$username', '$email', '$pm', '$artist1', '$song1', '$url1', '$artist2', '$song2', '$url2', '$artist3', '$song3', '$url3')";

      if (mysqli_query($conn, $query)) {
        header('Location: '.ROOT_URL.'');
      } else {
        echo 'ERROR: '. mysqli_error($conn);
      }
    }
?>

<?php include('inc/header.php'); ?>
        <div class="container">
          <h1>Add Posts</h1>
            <form class="" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="Username" class="form-control">
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input type="text" name="E-mail" class="form-control">
              </div>
              <div class="form-group">
                <label>Personal message</label>
                <textarea type="text" name="Personal message" class="form-control"></textarea>
              </div>

              <div class="form-group">
                <label>Artist 1</label>
                <input type="text" name="Artist 1" class="form-control">
              </div>
              <div class="form-group">
                <label>Song 1</label>
                <input type="text" name="Song 1" class="form-control">
              </div>
              <div class="form-group">
                <label>URL 1</label>
                <input type="text" name="Url 1" class="form-control">
              </div>

              <div class="form-group">
                <label>Artist 2</label>
                <input type="text" name="Artist 2" class="form-control">
              </div>
              <div class="form-group">
                <label>Song 2</label>
                <input type="text" name="Song 2" class="form-control">
              </div>
              <div class="form-group">
                <label>URL 2</label>
                <input type="text" name="Url 2" class="form-control">
              </div>

              <div class="form-group">
                <label>Artist 3</label>
                <input type="text" name="Artist 3" class="form-control">
              </div>
              <div class="form-group">
                <label>Song 3</label>
                <input type="text" name="Song 3" class="form-control">
              </div>
              <div class="form-group">
                <label>URL 3</label>
                <input type="text" name="Url 3" class="form-control">
              </div>

              <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
<?php include('inc/footer.php'); ?>
