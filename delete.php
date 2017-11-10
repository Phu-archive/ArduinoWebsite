<?php
  // Delete the content in file
  $fh = fopen('data.txt','r');
  file_put_contents("data.txt", "");
  fclose($fh);
?>
