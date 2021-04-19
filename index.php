<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $mysqli = mysqli_connect('localhost', 'root', null, 'project01');

  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($mysqli, "
    SELECT * FROM supers
  ");

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<!-- Step 3: (2 points) Include your header here -->
  <head>
    <title>Supers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <div>
    <header>
      <h2>Supers</h2>
    </header>
  </div>
<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="new.php">Create New Super</a>
</div>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<table class="table table-striped my-5">
  <thead>
    <tr>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Date of Birth</td>
      <td>Alias</td>
      <td>Active</td>
      <td>Hero</td>
      <td>Actions</td>
    </tr>
  </thead>

  <tbody>
    <?php foreach($rows as $row): ?>
      <tr>
        <td><?= $row["first_name"] ?></td>
        <td><?= $row["last_name"] ?></td>
        <td><?= $row["date_of_birth"] ?></td>
        <td><?= $row["alias"] ?></td>
        <td><?= $row["active"] ?></td>
        <td><?= $row["hero"] ?></td>
        <td>
          <a href="edit.php?id=<?= $row["id"] ?>">Edit</a>
          |
          <a href="delete.php?id=<?= $row["id"] ?>" onClick="return confirm('Are you sure?')">Delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<!-- Step 7: (2 points) Include your footer here -->
  <footer>
    <p>Author: Joshua Balsicas<br>
  </footer>
</html>
<!-- TOTAL POINTS POSSIBLE: 34 -->