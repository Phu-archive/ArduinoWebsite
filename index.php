<html>
   <head>
      <title>Test</title>
   </head>
<body>
   <h1>Age</h1>


      <?php

        $fh = fopen('data.txt','r');
        while ($line = fgets($fh)) {
          echo($line);
        }
        file_put_contents("data .txt", "");
        fclose($fh);
      ?>

   </table>
</body>
</html>