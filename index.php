<html>
   <head>
      <title>Go Log</title>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    
<!--
    <form action="delete.php">
       <input type="submit" value="Submit">
     </form> 
-->
    
    <button type="button">Delete</button>
    <p></p>
    <script type="text/javascript">
        $(document).ready(function(){
            $("button").click(function(){

                $.ajax({
                    type: 'POST',
                    url: 'delete.php',
                    success: function(data) {
                        alert("Delete Successful");
                    }
                });
       });
    });
    </script>

</body>
</html>