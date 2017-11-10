<?php
  if( $_POST["state"]) {
    // If there is a POST request called state.

    // Get the content
    $state = $_POST['state'];

    // Store to the data.txt
    $file = file_put_contents('data.txt', $state.PHP_EOL , FILE_APPEND | LOCK_EX);

    // Close the file
    fclose($file);

    // Exit.
    exit();
  }
?>
