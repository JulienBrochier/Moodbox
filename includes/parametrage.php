<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Moodbox</title>

        <!-- Bootstrap core CSS -->
        <link href="../imports/bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../imports/bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
        <link href="../imports/bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../imports/bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap-theme.css" rel="stylesheet">

        <link href="../CSS/style.css" rel="stylesheet"> 


    </head>

    <body>
        <div id="palette">

            <div class="element">      
            </div>
            <div class="element">
            </div>
            <div class="element">
            </div>
            <div class="element">
                    
            </div>
            <div class="element">
                
            </div>
            <div class="element">
                
            </div>
        </div>

        

        <script type="text/javascript">
                function ColorButton(I,color) 
                {
                //document.getElementById(I).style.backgroundColor = color;
                
                <?php php_func(); ?>
                // appeler la page color.php grâce à Ajax
                } 
        </script>

        <?php
            function php_func()
            {
                echo"Test";
            }
        ?>


        
    </body>