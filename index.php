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
          echo(<br />);
        }
        file_put_contents("data.txt", "");
        fclose($fh);
      ?>

   </table>
</body>
</html>