<html>
   <head>
      <title>Go Log</title>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.js"></script>
       <script src="sketch.js"></script>
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
    <button type="button">Delete</button>
    
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
    
    <div id="sketch-holder">
      <!-- Our sketch will go here! -->
    </div>

</body>
</html>