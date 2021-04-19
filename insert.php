<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  $mysqli = mysqli_connect('localhost', 'root', null, 'project01');

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  if (isset($_POST['first_name'])) {
    $result = mysqli_query($mysqli, "
      INSERT INTO supers (
        first_name,
        last_name,
        date_of_birth,
        alias,
        active,
        hero
      ) VALUES (
        '{$_POST['first_name']}',
        '{$_POST['last_name']}',
        '{$_POST['date_of_birth']}',
        '{$_POST['alias']}',
        '{$_POST['active']}',
        '{$_POST['hero']}'
      )
    ");

    session_start();

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
    if ($result) {
      $_SESSION["message"] = "The new Super was created successfully";
    } else {
      $error = mysqli_error($mysqli);
      $_SESSION["message"] = "There was an error creating the new Super: " . $error;
    }

    header("Location: notification.php");
    exit();
  }
  // TOTAL POINTS POSSIBLE: 35
?>