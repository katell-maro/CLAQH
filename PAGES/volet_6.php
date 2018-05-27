<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Volet 6</title>
		<link rel="stylesheet" href="../CSS/volet_style.css">
		<script src="../js/volet.js"></script>
	</head>

	<body>
    <?php include_once 'navigation.php'; ?>

		<div class="voletContainer container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-2">
					<div class="vertical-menu">
						<a href="volet_1.php">Volet 1</a>
						<a href="volet_2.php">Volet 2</a>
            			<a href="volet_3.php">Volet 3</a>
						<a href="volet_4.php">Volet 4</a>
						<a href="volet_5.php">Volet 5</a>
						<a href="volet_6.php" class="active">Volet 6</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1> Appréhender les risques pour la santé humaine des usagers </h1>

					<h2> Objectifs</h2>
					<p class="texteVolet">
						Les attendus de ce sixième volet sont triples :
						<ul>
							<li>
								Évaluer le niveau de connaissance et la représentation des risques liés à la consommation de poissons pêchés dans les lacs littoraux aquitains.
							</li>
							<li>
								Analyser et mettre en relation les résultats écotoxicologiques avec les données psychosociologiques.
							</li>
							<li>
								Informer et sensibiliser la population sur l’état du milieu.
							</li>
							<!--
							<li>
								Pour créer un nouveau point, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
							</li>
							-->
						</ul>
          			</p>

					<p class="texteVolet">
						Par l’intermédiaire de questionnaires et d’interviews, plusieurs aspects sont appréhendés pour mieux répondre aux objectifs de départ, comme par exemple :
						<ul>
							<li>
								Quelle est la perception du risque « mercure » au niveau des différents acteurs de la région (pêcheurs, touristes, locaux consommateurs de poissons du lac, etc.) ?
							</li>
							<li>
								Quel est le ressenti des populations suite à l’affichage déjà mis en place ?
							</li>
							<li>
								Quel est leur sentiment par rapport aux risques d’exposition au mercure (Hg) par les sandres ? 
							</li>
							<li>
								Évaluer la connaissance des différentes populations par rapport à cette problématique et quel est le niveau d’information de la population ?
							</li>
							<!--
							<li>
								Pour créer un nouveau point, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
							</li>
							-->
						</ul>
          			</p>

          			<p class="texteVolet">
          				L’analyse des questionnaires permet de mettre en relation les résultats écotoxicologiques avec les données psychosociologiques (démographie, habitudes alimentaires, etc.). Les acteurs locaux (mairies, fédérations de pêche) peuvent alors proposer des documents mieux ciblés pour informer et sensibiliser la population sur les risques potentiels liés à la présence de contaminants dans le milieu. 
          			</p>

          			<!--
					<p class="texteVolet">
						Pour créer un nouveau paragraphe à la partie objectif, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
					</p>
					-->


					<h3>Équipe de recherche</h3>
					<p class="equipeVolet">
						École Nationale Supérieure de Cognitique (ENSC) et laboratoire IMS UMR 5218, équipe CIH.
						<br/>
						Jean Marc André et Véronique Lespinet-Najib.
					</p>


					<div class="galerie">
				        <!-- <img src="../IMG/inserer ici le nom de l'image que vous souhaitez faire apparaitre dans la galerie (cette image devra être placer dans le dossier IMG)" et supprimer le <!- - du début et le - -> de la fin/> -->
					</div>


					<a class="btn_details" onclick="enSavoirPlus('details6');" href="#details6">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details6">
						<p>
							Les résultats de ce volet 6 doivent permettre d’appréhender : l’impact de la présence de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">métaux traces <span class="definition cache"> Ensemble des métaux suivants : l’aluminium, l’arsenic, le cadmium, le chrome, le cuivre, l’étain, le fer, le manganèse, le mercure, le nickel, le plomb, le sélénium et le zinc </span></span> (mercure notamment) sur la population locale et touristique et de permettre aux acteurs locaux et aux instances publiques de prendre de nouvelles mesures.
						</p>

						<p>
							La démarche méthodologique suivie est la suivante :
							<ul>
								<li>
									Préparation des enquêtes de terrain et des supports de communication / sensibilisation.
								</li>
								<li>
									Enquêtes sur le terrain par des questionnaires et des entretiens auprès de volontaires issus de la population pour les différents lacs retenus. 
								</li>
								<li>
									Dépouillement et analyse des enquêtes.
								</li>
								<!--
								<li>
									Pour créer un nouveau point, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
								</li>
								-->
							</ul>
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

		<?php include 'scriptBootstrap.php'; ?>
	</body>
</html>
