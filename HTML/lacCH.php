<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Attention au chemin ! -->
        <link rel="icon" href="../IMG/logoTransparentSansTitre.png"  type="image/png">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../CSS/nav_style.css">	
        <title>CLAQH - Lacs </title>

    </head>

    <body>
        <?php 
            include_once 'navigation.html'; 
            //include_once 'script.js';
        ?>
       

        <!-- <div class="jumbotron"> -->
            <div class="row">
                <div class="col-lg-3">
                    <br/><br/>
                    <p>
                        <img height=470 width=600 src="../IMG/HC.jpg"/> <!--../IMG/lac-CH.jpg--> <!--class='img-responsive'-->
                        <img class="carte" src="../IMG/carte-CH.jpg" alt="" height=470 width=470/>
                    </p>
                </div>
                <div class="col-lg-offset-2 col-lg-6"> <!--"col-lg-offset-1 col-lg-6 col-lg-offset-1" -->
                    <br/>
                    <h2>Lac de Carcans-Hourtin
                    <button class="btn btn-default" onclick="afficher()">  Afficher la carte </button> </h2> 
                    <br/>
                    <p style="text-align:justify;">
                        Il s’agit du plus grand lac d’eau douce de France. Parmi les quatre lacs étudiés, il est celui situé le plus au nord.  Ce lac s’étend sur 18 km de long et 5 km de large parallèlement à la côte atlantique, de la commune d’Hourtin (au Nord) à celle de Carcans (au Sud).
                        Le lac de Carcans-Hourtin communique avec le lac de Lacanau grâce au canal des Etangs.
                    </p>
                    <br/>
                    <p>
                        <a href="https://aappmacarcans.wordpress.com/"/>AAPPMA</a> (Association Agréée pour la Pêche et la Protection du Milieu Aquatique)
                    </p>
                    <br/>
                    <p>
                        <!-- tableau -->
                        <table class="table table-bordered table-striped table-condensed">
                            <caption>
                                <strong>Caractéristiques du lac Carcans-Hourtin</strong>
                            </caption>
                            <tbody>
                                <tr>
                                    <td>Superficie <i>km²</i> </td>
                                    <td>62</td>
                                </tr>
                                <tr>
                                    <td>Profondeur <i>m</i> </td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Catégorie de pêche</td>
                                    <td> 2ème catégorie</td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>

        <div class="position">
            <?php include "footer.php"; ?>
        </div>

        <!--Scripts Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>

</html>
