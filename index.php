<html>
   <head>
      <title>Go Log</title>
   </head>
<body>
   <h1>Log Information</h1>


      <?php

        $fh = fopen('data.txt','r');
        while ($line = fgets($fh)) {
          echo($line);
        }
        
        fclose($fh);
      ?>
    
    <form action="delete.php">
       <input type="submit" value="Submit">
     </form> 

</body>
</html>