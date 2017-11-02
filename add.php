<?php
           if( $_POST["name"] || $_POST["age"] ) {
              if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
                 die ("invalid name and name should be alpha");
              }
              $name = $_POST['name'];
              $age = $_POST['age'];

              $file = file_put_contents('data.txt', $age.PHP_EOL , FILE_APPEND | LOCK_EX);
              fclose($file);
              
              exit();
           }
            
?>