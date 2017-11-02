<?php
           if( $_POST["clean"]){
               file_put_contents("data.txt", "");
               echo "works";
           }
           if( $_POST["x"] || $_POST["y"] ) {

              $x = $_POST['x'];
              $y = $_POST['y'];
               
              $add = $x + " " + $y + '\n';
               
              $file = file_put_contents('data.txt', $add.PHP_EOL , FILE_APPEND | LOCK_EX);
            
              fclose($file);
              
              exit();
           }
            
?>