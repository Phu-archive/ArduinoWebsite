<html>
   <head>
      <title>Test</title>
   </head>
<body>
   <h1>Age</h1>


      <?php

        $fh = fopen('data.txt','r');
        while ($line = fgets($fh)) {
          // <... Do your work with the line ...>
          echo($line);
        }
        fclose($fh);
      ?>

   </table>
</body>
</html>