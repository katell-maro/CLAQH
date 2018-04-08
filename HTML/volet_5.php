<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> CLAQH </title>
		<link rel="icon" href="../IMG/logoTransparentSansTitre.png"  type="image/png">
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../CSS/style.css">
		<link rel="stylesheet" href="../CSS/volet_style.css">
		<link rel="stylesheet" href="../CSS/nav_style.css">
		<script src="../js/volet.js"></script>
	</head>

	<body>
    <?php include_once 'navigation.html'; ?>

		<div class="voletContainer container">
			<div class="row">
				<div class="col-menu col-md-2 col-sm-2 col-xs-2">
					<div class="vertical-menu">
						<a href="volet_1.php">Volet 1</a>
						<a href="volet_2.php">Volet 2</a>
            			<a href="volet_3.php">Volet 3</a>
						<a href="volet_4.php">Volet 4</a>
						<a href="volet_5.php" class="active">Volet 5</a>
						<a href="volet_6.php">Volet 6</a>
					</div>
				</div>

				<div class="col-md-10 col-sm-10 col-xs-10">
					<h1> Étudier le sédiment pour quantifier la production de méthylmercure </h1>
					<p class="texteVolet">
						Au sein de l'UMR EPOC, l’équipe Ecobioc étudie l'effet de l'environnement sur les organismes mais elle s'intéresse également en retour à l'effet des organismes sur l'environnement. A ce titre, Ecobioc revendique son leitmotiv : « Structuration du vivant et son rôle dans le fonctionnement des écosystèmes ». Ecobioc est organisée en 4 axes où l’on retrouve le glissement de thématique qui va de l'écologie à la biogéochimie, association de compétences qui rend Ecobioc unique dans le paysage national. La définition de ces axes repose à la fois sur une question d'échelle et d'interaction disciplinaires : l'axe 1 traite d'écologie à petite échelle, l'axe 2 associe écologie et biogéochimie (au sens réseau trophique) à grande échelle, l'axe 3 envisage à petite échelle l'interaction biogéochimie (au sens dynamique des espèces chimiques)/écologie (au sens bioturbation) et l'axe 4 traite des flux biogéochimiques (flux et origine des éléments biogènes) à grande échelle. Le volet 5 du projet CLAQH s’inscrit dans le 4e volet. Au-delà des axes, Ecobioc repose sur un socle solide de compétences et d'un parc analytique adossé à des plateformes, respectivement « biodiversité », « chimie, volet biogéochimie » et « biologie moléculaire ».
          			</p>

					<h2>Équipe de recherche en charge du volet 5 :</h2>
					<p class="equipeVolet">
						Université de Bordeaux/ UMR EPOC 5805 – équipe ECOBIOC (ECOlogie et BIOgéochimie des systèmes Côtiers)
						<br/>
						ANSCHUTZ Pierre (Pr), CHARBONNIER Céline (IR), BUQUET Damien (Doct et ATER), CANREDON Axel (M2 et IE), POIRIER Dominique (AI) et ROSSI Léna (M1 et M2)
					</p>

					<a href="javascript: enSavoirPlus('details3');">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details3">

					</div>

					

				</div>
			</div>
		</div>


		<div class="position">
			<div class="footer-container container">
				<div class="row">
					<div class="col-menu col-md-2 col-sm-2 col-xs-2"></div>
					<div class="col-menu col-md-10 col-sm-2 col-xs-2">
						<?php include "footer.php"; ?>
					</div>
				</div>
			</div>
		</div>

	</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
