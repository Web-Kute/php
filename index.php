<?php
if (isset($_POST['submit'])) {
    // echo '<h3>' . $GET['username'] . '</h3>';
    echo '<h3>' . $_POST['name'] . '</h3>';
  } ?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
          <label>Name: </label>
          <input type="text" name="name">
        </div>
        <br>
        <div>
        <label>Password: </label>
          <input type="password" name="password">
        </div>
        <br>
          <input type="submit" name="submit" value="Submit">
        </form>
</body>
</html>