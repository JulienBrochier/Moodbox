<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Moodbox</title>

        <!-- Bootstrap core CSS -->
        <link href="../imports/bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../imports/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
        <link href="../imports/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../imports/bootstrap-3.3.7/dist/css/bootstrap-theme.css" rel="stylesheet">

        <link href="../CSS/style.css" rel="stylesheet"> 


    </head>


    <body class ="styled">  
    <div class ="container">
        <div class="row espace">
            <div class = "logoTitre">
                    <img src = "image/logo.png" title ="Logo" alt = "Logo">
            </div>
        </div>
    </div>

        <div class ="container " id="plannification">
            <div class="row">
                <div class="col-xs-5">
                    <p class="titre_zone">Réveil / Coucher</p>
                    
                    <form action="plannification.php" method="get">
                    Je me réveille à : <input class="black arrondi" type="time" name="reveil"> </br>
                    Je veux m'endormir à : <input class="black arrondi" type="time" name="couche"></br>
                    Commencer : <input class="black arrondi" type="time" name="couche"> avant </br>

                    <p> Ambiances </p>
                    <!-- For each ambiance display bouton ambiance -->
                    <select name='ambiance' size = "2" class="black arrondi" required>
                        <!-- php -->
                        <option value='ambiance_reveil'> Réveil</option>
                        <option value='ambiance_couche'> Coucher</option>
                        <option value='ambiance_doux'> Doux</option>
                    </select>

                    </br>
                    </br> <input class="black arrondi" type="submit">
                    </form>
                
                </div>
                <div class="col-xs-2 white_background">
                </div>
                <div class="col-xs-5">
                    <p class="titre_zone">Plannification</p>

                    <form action="plannification.php" method="get">
                    Début : <input class="black arrondi" type="time" name="reveil"> 
                    Fin : <input class="black arrondi" type="time" name="couche"></br>
                   
                    <p> Ambiances </p>
                    <!-- For each ambiance display bouton ambiance -->
                    <select name='ambiance' size = "2" class="black arrondi" required>
                        <!-- php -->
                        <option value='ambiance_reveil'> Réveil</option>
                        <option value='ambiance_couche'> Coucher</option>
                        <option value='ambiance_doux'> Doux</option>
                    </select>

                    </br>
                    </br> <input class="black arrondi" type="submit">
                    </form>

                </div>
            </div>
        </div>
    </body>

</html>
