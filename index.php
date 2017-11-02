<?php 
    $myfile = fopen("data.txt", "r") or die("Unable to open file!");
    $dataAge = fgets($myfile);
    fclose($myfile);
    
?>

<html>
   <head>
      <title>Test</title>
   </head>
<body>
   <h1>Age</h1>


      <?php 
		  printf($dataAge);
      ?>

   </table>
</body>
</html>