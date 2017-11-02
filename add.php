<?php
           if( $_POST["name"] || $_POST["age"] ) {
              if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
                 die ("invalid name and name should be alpha");
              }
              $name = $_POST['name'];
              $age = $_POST['age'];

              $file = fopen("data.txt", "a") or die("Unable to open file!");
              fwrite($file, "\n". $name);
              fclose($file);
              
              exit();
           }
            
?>