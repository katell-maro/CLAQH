<html>
    <head>
        <?php include_once 'head.php'; ?>
        <title>CLAQH - Lac Carcans-Hourtin </title>
    </head>

    <body>
        <?php include_once 'navigation.php'; ?>
       
        <div class="contenu">
            <div class="conteneur_lac row">
                <div class="conteneur_img_lac col-lg-6">
                    <p>
                        <img class="imgLac" src="../IMG/HC.jpg"/>
                        <img class="carte imgLac" src="../IMG/carte-CH.jpg"/>
                    </p>
                </div>

                <div class="col-lg-6">
                    <h1>Lac de Carcans-Hourtin </h1> 
                    
                    <p>
                        Il s’agit du plus grand lac d’eau douce de France. Parmi les quatre lacs étudiés, il est celui situé le plus au nord.  Ce lac s’étend sur 18 km de long et 5 km de large parallèlement à la côte atlantique, de la commune d’Hourtin (au Nord) à celle de Carcans (au Sud).
                        Le lac de Carcans-Hourtin communique avec le lac de Lacanau grâce au canal des Etangs.
                    </p>
                    
                    <p>
                        <a href="https://aappmacarcans.wordpress.com/"/>AAPPMA</a> (Association Agréée pour la Pêche et la Protection du Milieu Aquatique)
                    </p>

                    <p>
                        <a href=# onclick="afficher()"> Où se trouve ce lac ? </a>
                    </p>
                    
                    <p> <!-- tableau -->
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
