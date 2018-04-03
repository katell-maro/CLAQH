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
        <?php include_once 'navigation.html'; ?>
        <!-- <div class="jumbotron"> -->
            <div class="row">
                <div class="col-lg-offset-1 col-lg-3">
                    <br/><br/><br/>
                    <img height=370 width=470 src="../IMG/SANGUINET.jpg"/>
                    <img class="carte" src="../IMG/carte-S.png" height=370 width=470/>
                </div>
                <div class="col-lg-offset-1 col-lg-6 col-lg-offset-1">
                    <br/>
                    <h2>
                        Lac de Cazaux-Sanguinet
                        <button class="btn btn-default" onclick="afficher()">  Afficher la carte </button>
                    </h2>

                    <br/>
                    <br/>
                    <p style="text-align:justify;">
                        Aussi appelé lac de Sanguinet, ce lac s’étend sur plusieurs communes : La Teste-de-Buch au nord, Sanguinet à l’est et Biscarosse au sud. Ce lac est relié au bassin d’Arcachon et au lac de Biscarrosse-Parentis par le canal des Landes.
                        Ce lac est le troisième lac étudié en partant du Nord.
                    </p>
                    <br/>
                    <p>
                        <a href="https://www.aappmasanguinet.com/"/>AAPPMA</a> (Association Agréée pour la Pêche et la Protection du Milieu Aquatique)
                    </p>
                    <br/>
                    <p>
                        <!-- tableau -->
                        <table class="table table-bordered table-striped table-condensed">
                            <caption>
                                <strong>Caractéristiques du lac Cazaux-Sanguinet</strong>
                            </caption>
                            <tbody>
                                <tr>
                                    <td>Superficie <i>km²</i> </td>
                                    <td>58</td>
                                </tr>
                                <tr>
                                    <td>Profondeur <i>m</i> </td>
                                    <td>23</td>
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
        <!-- </div> -->

        <div id="position">
            <?php include "footer.php"; ?>
        </div>

        <!--Scripts Bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="script.js"></script>
    </body>

</html>
