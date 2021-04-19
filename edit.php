<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $mysqli = mysqli_connect('localhost', 'root', null, 'project01');

  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "SELECT * FROM supers WHERE id = {$_GET["id"]}";
  $result = mysqli_query($mysqli, $sql);

  $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<!-- Step 3: (2 points) Include your header here -->
  <head>
    <title>Edit Super</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>  

  <div>
    <header>
      <h2>Edit Super</h2>
    </header>
  </div>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php">Home</a>

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<body>
    <div class="container">
      <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $row["id"] ?>">

        <div class="form-group">
          <label>First Name:</label>
          <input class="form-control" type="text" name="first_name" value="<?= $row["first_name"] ?>">
        </div>

        <div class="form-group">
          <label>Last Name:</label>
          <input class="form-control" type="text" name="last_name" value="<?= $row["last_name"] ?>">
        </div>

        <div class="form-group">
          <label>Date of Birth:</label>
          <input class="form-control" type="date" name="date_of_birth" value="<?= $row["date_of_birth"] ?>">
        </div>

        <div class="form-group">
          <label>Alias:</label>
          <input class="form-control" type="text" name="alias" value="<?= $row["alias"] ?>">
        </div>

        <div class="form-group">
          <label>Active:</label>
          <input class="form-control" type="text" name="active" value="<?= $row["active"] ?>">
        </div>

        <div class="form-group">
          <label>Hero:</label>
          <input class="form-control" type="checkbox" name="hero">
        </div>

        <button class="btn btn-primary" type="submit">Finish Edit</button>
      </form>
    </div>
  </body>

<!-- Step 8: (2 points) Include your footer here -->
<footer>
  <p>Author: Joshua Balsicas<br>
</footer>
<!-- TOTAL POINTS POSSIBLE: 44 -->