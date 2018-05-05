<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> CLAQH - Volet 5 </title>
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
				<div class="col-md-2 col-sm-2 col-xs-2">
					<div class="vertical-menu">
						<a href="volet_1.php">Volet 1</a>
						<a href="volet_2.php">Volet 2</a>
            			<a href="volet_3.php">Volet 3</a>
						<a href="volet_4.php">Volet 4</a>
						<a href="volet_5.php" class="active">Volet 5</a>
						<a href="volet_6.php">Volet 6</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1> Étudier le sédiment pour quantifier la production de méthylmercure </h1>

					<h2>Objectifs</h2>
					<p class="texteVolet">
						
          			</p>

          			<!--
					<p class="texteVolet">
						Pour créer un nouveau paragraphe à la partie objectif, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
					</p>
					-->


					<h3>Équipe de recherche</h3>
					<p class="equipeVolet">
						Université de Bordeaux/ UMR EPOC 5805 – équipe ECOBIOC.
						<br/>
						Pierre Anschutz, Charbonnier Céline, Buquet Damien, Canredon Axel, Poirier Dominique, Rossi Léna et Bujan Stéphane.
					</p>


					<div class="galerie">
						<img src="../IMG/volet5-a.png"/>
						<img src="../IMG/volet5-b.png"/>
						<img src="../IMG/volet5-c.png"/>
						<img src="../IMG/volet5-d.png"/>
				        <!-- <img src="../IMG/inserer ici le nom de l'image que vous souhaitez faire apparaitre dans la galerie (cette image devra être placer dans le dossier IMG)" et supprimer le <!- - du début et le - -> de la fin/> -->
					</div>


					<a class="btn_details" href="javascript: enSavoirPlus('details5');">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details5">
						<p>

						</p>

						<!--
						<p>
							Pour créer un nouveau paragraphe à la partie en savoir plus, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
						</p>
						-->
					</div>

					

				</div>
			</div>
		</div>

	</body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</html>
