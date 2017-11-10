<html>
   <head>
      <title>Go Log</title>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.js"></script>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       <script src="sketch.js"></script>
   </head>
<body>
    <div class="container">
        <h1 class"display-3">Last Game</h1>

        <div class="col row-md-offset-2">
            <div id="sketch-holder"></div>

            <button type="button" class="btn btn-primary btn-lg ">Delete</button>
            <script type="text/javascript">
                $(document).ready(function(){
                    $("button").click(function(){

                        $.ajax({
                            type: 'POST',
                            url: 'delete.php',
                            success: function(data) {
                                alert("Delete Successful Now refresh the page");
                            }
                        });
               });
            });
            </script>
        </div>
        
        
    </div>
</body>
</html>