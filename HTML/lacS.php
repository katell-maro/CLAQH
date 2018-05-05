<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../IMG/logoTransparentSansTitre.png"  type="image/png">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../CSS/nav_style.css">	
        <title>CLAQH - Lac Sanguinet</title>
    </head>

    <body>
        <?php include_once 'navigation.html'; ?>

        <div class="contenu">
            <div class="row">
                <div class="col-lg-6">
                    <img class="imgLac" src="../IMG/SANGUINET.jpg"/>
                    <img class="carte imgLac" src="../IMG/carte-S.png"/>
                </div>

                <div class="col-lg-6">
                    <h1>Lac de Cazaux-Sanguinet</h1>

                    <p>
                        Aussi appelé lac de Sanguinet, ce lac s’étend sur plusieurs communes : La Teste-de-Buch au nord, Sanguinet à l’est et Biscarosse au sud. Ce lac est relié au bassin d’Arcachon et au lac de Biscarrosse-Parentis par le canal des Landes.
                        Ce lac est le troisième lac étudié en partant du Nord.
                    </p>
                    
                    <p>
                        <a href="https://www.aappmasanguinet.com/"/>AAPPMA</a> (Association Agréée pour la Pêche et la Protection du Milieu Aquatique)
                    </p>

                    <p>
                        <a href=# onclick="afficher()"> Où se trouve ce lac ? </a>
                    </p>
                    
                    <p>
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
                                <!--
                                <tr>
                                    <td> Pour créer une nouvelle ligne au tableau insérer ici l'intitulé </td>
                                    <td> et ici le contenu et supprimer le <!- - du début et le - -> de la fin</td>
                                </tr>
                                -->
                            </tbody>
                        </table>
                    </p>

                    <!--
                    <p>
                        Pour créer un nouveau paragraphe, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
                    </p>
                    -->
                </div>
            </div>
        </div>


        <div class="position">
            <?php include "footer.php"; ?>
        </div>


        <!--Scripts js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="../js/lac.js"></script>
    </body>

</html>
