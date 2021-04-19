<!DOCTYPE html>
<html>
<!-- Step 1: (2 points) Include your header here -->
    <head>
        <title>Create a Super</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    
    <div>
        <header>
            <h2>Create a Super</h2>
        </header>
    </div>
<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php">Home</a>

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<body>
    <div class="container">
      <form action="insert.php" method="post">

        <div class="form-group">
          <label>First Name:</label>
          <input class="form-control" type="text" name="first_name">
        </div>

        <div class="form-group">
          <label>Last Name:</label>
          <input class="form-control" type="text" name="last_name">
        </div>

        <div class="form-group">
          <label>Date of Birth:</label>
          <input class="form-control" type="date" name="date_of_birth">
        </div>

        <div class="form-group">
          <label>Alias:</label>
          <input class="form-control" type="text" name="alias">
        </div>

        <div class="form-group">
          <label>Active:</label>
          <input class="form-control" type="text" name="active">
        </div>

        <div class="form-group">
          <label>Hero:</label>
          <input class="form-control" type="checkbox" name="hero">
        </div>

        <button class="btn btn-primary" type="submit">Create</button>
      </form>
    </div>
  </body>

<!-- Step 5: (2 points) Include your footer here -->
<footer>
    <p>Author: Joshua Balsicas<br>
  </footer>
</html>
<!-- TOTAL POINTS POSSIBLE: 24 -->