
<?php include 'inc/header.php'; ?>

<?php
// Set variables to empty values
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// POSTS submit
if(isset($_POST['submit'])){
  // Validate name
  if(empty($_POST['name'])){
    echo  $nameErr = 'Le nom est requis';
  }else{
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  } 

// Validate email
    if(empty($_POST['email'])){
        echo  $emailErr = 'L\'email est requis';
    }else{
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    } 

// Validate body
  if(empty($_POST['body'])){
    echo  $bodyErr = 'Un texte est requis';
  }else{
    $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  } 

  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
    // add to database
    $sql = "INSERT INTO users (name, emails, body) VALUES ('$name', '$email', '$body')";
    if (mysqli_query($mysqli, $sql)) {
      // success
      header('Location: feedback.php');
    } else {
      // error
      echo 'Error: ' . mysqli_error($mysqli);
    }
  }
}
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?:
          'is-invalid'; ?>" id="name" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
        <div class="invalid-feedback">
          <?php $nameErr ?> Merci de renseigner un nom valide.
        </div>
      </div>
  
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?:
          'is-invalid'; ?>" id="email" name="email" placeholder="Enter your email" value="<?php $email; ?>">
        <div class="invalid-feedback">
          <?php $emailErr ?> Merci de renseigner un email valide.
        </div>
        <div id="emailHelp" class="form-text">
          Nous ne partageons jamais vos données.
        </div>
      </div>

      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$bodyErr ?:
          'is-invalid'; ?>" id="body" name="body" placeholder="Enter your feedback"><?php echo $body; ?></textarea>
      </div>
      <div class="invalid-feedback">
          <?php $bodyErr ?> Merci de renseigner le champ de feedback.
        </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Envoyer" class="btn btn-dark w-100">
      </div>
    </form>
  <?php include 'inc/footer.php'; ?>