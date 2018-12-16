<?php
	if (isset($_POST['white']))
	{
		shell_exec('/usr/local/bin/pigs p 17 255');
		shell_exec('/usr/local/bin/pigs p 22 255');
		shell_exec('/usr/local/bin/pigs p 24 255');
	}
	if (isset($_POST['red']))
	{
		shell_exec('/usr/local/bin/pigs p 17 255');
		shell_exec('/usr/local/bin/pigs p 22 0');
		shell_exec('/usr/local/bin/pigs p 24 0');
	}
	if (isset($_POST['green']))
	{
		shell_exec('/usr/local/bin/pigs p 17 0');
		shell_exec('/usr/local/bin/pigs p 22 255');
		shell_exec('/usr/local/bin/pigs p 24 0');
	}
	if (isset($_POST['blue']))
	{
		shell_exec('/usr/local/bin/pigs p 17 0');
		shell_exec('/usr/local/bin/pigs p 22 0');
		shell_exec('/usr/local/bin/pigs p 24 255');
	}
	if (isset($_POST['black']))
	{
		shell_exec('/usr/local/bin/pigs p 17 0');
		shell_exec('/usr/local/bin/pigs p 22 0');
		shell_exec('/usr/local/bin/pigs p 24 0');
	}
	if (isset($_POST['yellow']))
	{
		shell_exec('/usr/local/bin/pigs p 17 255');
		shell_exec('/usr/local/bin/pigs p 22 255');
		shell_exec('/usr/local/bin/pigs p 24 0');
	}
	if (isset($_POST['cyan']))
	{
		shell_exec('/usr/local/bin/pigs p 17 0');
		shell_exec('/usr/local/bin/pigs p 22 204');
		shell_exec('/usr/local/bin/pigs p 24 255');
	}
	if (isset($_POST['rose']))
	{
		shell_exec('/usr/local/bin/pigs p 17 255');
		shell_exec('/usr/local/bin/pigs p 22 0');
		shell_exec('/usr/local/bin/pigs p 24 255');
	}
	if (isset($_POST['grey']))
	{
		shell_exec('/usr/local/bin/pigs p 17 128');
		shell_exec('/usr/local/bin/pigs p 22 128');
		shell_exec('/usr/local/bin/pigs p 24 128');
	}
	if (isset($_POST['dark_green']))
	{
		shell_exec('/usr/local/bin/pigs p 17 0');
		shell_exec('/usr/local/bin/pigs p 22 102');
		shell_exec('/usr/local/bin/pigs p 24 0');
	}
	if (isset($_POST['purple']))
	{
		shell_exec('/usr/local/bin/pigs p 17 128');
		shell_exec('/usr/local/bin/pigs p 22 0');
		shell_exec('/usr/local/bin/pigs p 24 128');
	}
	if (isset($_POST['ocean']))
	{
		shell_exec('/usr/local/bin/pigs p 17 0');
		shell_exec('/usr/local/bin/pigs p 22 204');
		shell_exec('/usr/local/bin/pigs p 24 255');
	}

	if (isset($_POST['strobo']))
	{
		for( $i = 0 ; $i < 20 ; $i++ )
		{
			usleep(50);

			shell_exec('/usr/local/bin/pigs p 17 255');
			shell_exec('/usr/local/bin/pigs p 22 255');
			shell_exec('/usr/local/bin/pigs p 24 255');

			usleep(50);

			shell_exec('/usr/local/bin/pigs p 17 0');
			shell_exec('/usr/local/bin/pigs p 22 0');
			shell_exec('/usr/local/bin/pigs p 24 0');
		}
	}

	if (isset($_POST['changingColor']))
	{
		for( $i = 0 ; $i <= 255 ; $i++ )
		{
			shell_exec('usr/local/bin/pigs p 17 ' + $i);
			usleep(200);
		}
	}
?>

<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Moodbox</title>

        <!-- Bootstrap core CSS -->
        <link href="../bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.css" rel="stylesheet">
        <link href="../bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap-theme.css" rel="stylesheet">

        <link href="../CSS/style.css" rel="stylesheet"> 


    </head>

    <body>
    <form action="parametrage.php" method="post">
        <div id = "page">
        <div id = "partie_gauche">
        <div id ="telecommande">
            <div id = "on"> <input type='image' src ="image/power.png" title = "On" alt = "On/Off" id = "onoff"></div>
            <div id="palette">
                    <?php 

                    $array_color = array("black","white","red","green","blue","yellow",
                                        "cyan","rose","grey","dark_green","purple","ocean");
                        for ($i = 1; $i<=2; $i++)
                            {echo("<div id='ligne$i'> ");
                                
                                for($j = 1; $j <= 6; $j++)
                                    {
                                        $index = ($i-1)*6 + $j -1;
                                        echo("<button value='$array_color[$index]' name='$array_color[$index]' class='element$i'>");  
                                        //input type='button' value='Click Me!'    
                                    }
                            echo("</div>");
                            }
                    ?>
                
            </div>
            <div id = "palettedegrade"> <img src ="image/degrade.png" title = "degrade" alt = "degrade" id = "degrade"></div>
            <div id = "saturation">
                <p id="psaturation">SATURATION</p>
                <div id = "divsaturation"><img src ="image/saturation.png" title = "Saturation" alt = "Saturation" id = "imgsaturation"></div>
                
            </div>
            <div id = "luminosite">
                    <p id="pluminosite">LUMINOSITE</p>
                    <div id = "controleluminosite">
                            <img src ="image/substract.png" title = "Moins" alt = "Moins" id = "Moins">
                            
                            <div id = "divcercle">
                                <div class="cercle"></div>
                                <div class="cercle"></div>    
                                <div class="cercle"></div>    
                                <div class="cercle"></div>    
                                <div class="cercle"></div>        
                            </div>
                            <img src ="image/add.png" title = "Plus" alt = "Plus" id = "plus">
                            
                    </div>    
            </div>
            <div id = "mode">
                <p id = "pmode">MODE</p>
                <div id="typemode">
                    <div>
                        <div id="uni"></div>
                        <p id = "puni">Uni</p>
                    </div>
                    <div>
                        <div id="cligno"><input type="button" name="strobo" src = "image/flash.png" class = "imgMode" title ="Clignotant" alt = "Clignotant"></div>
                        <p id ="pcligno">Stroboscope</p>
                    </div>
                    <div>
                        <div id="multi"><img src = "image/rgb.png" class = "imgMode " title ="Multicouleur" alt = "Multicouleur"></div>
                        <p id = "pmulti">Multi-couleur</p>
                    </div>
                </div>
            </div>
        </div>
        </div>

       
        <div id = "partie_centre">
            <div id = "logo">
                <img src = "image/logo.png" title ="Logo" alt = "Logo">
            </div>
            <div id = "ambiance_base">
                <p id = "pambiance">AMBIANCE DE BASE</p>

            <?php 

            $array_ambiancesMood = array("sunset","meditation","creativity",
                                "reading","moon","movie");

                for ($i = 0; $i<=1; $i++)
                    {echo("<div id='ligne1'> ");
                        
                        for($j = 0; $j <= 2; $j++)
                            {
                                $index = $i*3 + $j;
                                echo("<div class = 'divambiance'><input type='image' class = 'imgambiance' 
                                    src = 'image/$array_ambiancesMood[$index].png' name ='$array_ambiancesMood[$index]' 
                                    title ='$array_ambiancesMood[$index]' alt = '$array_ambiancesMood[$index]'></div>");  
                                //input type='button' value='Click Me!'    
                            }
                    echo("</div>");
                    }
            ?>
                
            </div>
            <div id = "ambiance_perso">
                    <p id = "pambiance_perso">AMBIANCES CREES</p>
                    <div id = "menu_deroulant">
                    <div id = "ligne_2">
                            <div id = "clic_ambiance"> 
                                    <button class="favorite styled2"
                                    type="button">
                                   
                                    </button></div>
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                    
                                    </button></div>
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                    
                                    </button></div>
                        
                    </div>
                    <div id = "ligne_2">
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                    
                                    </button></div>
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                    
                                    </button></div>
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                   
                                    </button></div>
                    </div>
                    <div id = "ligne_2">
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                   
                                    </button></div>
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                    
                                    </button></div>
                            <div id = "clic_ambiance">
                                    <button class="favorite styled2"
                                    type="button">
                                   
                                    </button></div>
                    </div>
                    </div>
            </div>
        </div>

        

        <div id = "partie_droite">
            <div id ="programmation">
                <p id = "pprogra">PROGRAMMATION</p>
            </div>
                <div id = "planif_ambiance"><a href="plannification.php"><button class="favorite styled" 
                    type="button">Planifier une ambiance</button></a></div>
                    <div id = "planif_ambiance"><button class="favorite styled"
                        type="button">Créer une ambiance</button></div>
            

        </div>
        </div>

        </form>


        
    </body>



</html>


        

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

