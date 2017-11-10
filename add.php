<?php
           if( $_POST["clean"]){
               file_put_contents("data.txt", "");
           }
           if( $_POST["state"]) {

              $state = $_POST['state'];
               
              $file = file_put_contents('data.txt', $state.PHP_EOL , FILE_APPEND | LOCK_EX);
            
              fclose($file);
              
              exit();
           }
            
?>