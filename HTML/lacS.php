<html>
    <head>
        <?php include_once 'head.php'; ?>
        <title>CLAQH - Lac Sanguinet</title>
    </head>

    <body>
        <?php include_once 'navigation.php'; ?>

        <div class="contenu">
            <div class="conteneur_lac row">
                <div class="conteneur_img_lac col-lg-6">
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

        <script src="../js/lac.js"></script>
    </body>

</html>
