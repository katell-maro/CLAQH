<html>
    <head>
        <?php include_once 'head.php'; ?>
        <title>CLAQH - Lac Biscarosse-Parentis </title>
        
    </head>

    <body>
        <?php include_once 'navigation.php'; ?>

        <div class="contenu">
            <div class="conteneur_lac row">
                <div class="conteneur_img_lac col-lg-6">
                    <img class="imgLac" src="../IMG/lac-BP.jpg"/>
                    <img class="carte imgLac" src="../IMG/carte-BP.jpg"/>
                </div>

                <div class="col-lg-6">
                    <h1>
                        Lac de Biscarosse-Parentis
                    </h1>

                    <p>
                        Le lac de Biscarrosse-Parentis est situé sur les communes de Biscarrosse et de Parentis, il est relié avec le lac de Cazaux-Sanguinet par le canal des Landes.
                        Parmi les lacs étudiés, il est celui le plus au Sud.
                    </p>

                    <p>
                        <a href=https://www.aappma40.com/l-a-a-p-p-m-a/>AAPPMA</a> (Association Agréée pour la Pêche et la Protection du Milieu Aquatique)
                    </p>

                    <p>
                        <a href=# onclick="afficher()"> Où se trouve ce lac ? </a>
                    </p>

                    <p> <!-- tableau -->
                        <table class="table table-bordered table-striped table-condensed">
                            <caption>
                                <strong>Caractéristiques du lac Biscarosse-Parentis</strong>
                            </caption>
                            <tbody>
                                <tr>
                                    <td>Superficie <i>km²</i> </td>
                                    <td>35</td>
                                </tr>
                                <tr>
                                    <td>Profondeur <i>m</i> </td>
                                    <td>20.5</td>
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
