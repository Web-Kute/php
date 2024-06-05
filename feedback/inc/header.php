<?php
include './config/config.php';
include 'config/function.php';

session_start();
$sql = 'SELECT * FROM users';
$result = mysqli_query($mysqli, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Feedback</title>
</head>

<body>
  <header>
    <figure>
      <img src="./img/logo-mds.png" alt="Logo MyDigitalSchool">
    </figure>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
      <div class="container">
        <a class="navbar-brand" href="#">MyDigitalSchool</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Add Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./feedback.php">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <h1>Feedback App</h1>
  </header>
  <main>
    <section>