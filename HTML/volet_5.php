<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Volet 5</title>
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
						<a href="volet_5.php" class="active">Volet 5</a>
						<a href="volet_6.php">Volet 6</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1> Étudier le sédiment pour quantifier la production de méthylmercure </h1>

					<h2>Objectifs</h2>
					<p class="texteVolet">
						L’approche biogéochimique des systèmes aquatiques revêt un enjeu majeur en termes de qualité des eaux, d’impacts anthropiques, de capacité tampon, d’autoépuration et de bilan carbone. Les lacs sont en relation directe avec leur bassin versant. Les flux issus de ce bassin constituent un paramètre déterminant de la qualité des eaux et de l’état trophique des lacs. Les éléments traces métalliques ont un comportement qui dépend des processus biogéochimiques dans l’environnement.
          			</p>

          			<p class="texteVolet">
						Le volet 5 étudie les paramètres qui permettent de mieux comprendre le fonctionnement biogéochimique des lacs: la dynamique biogéochimique spatiale et temporelle du mercure, de l’azote, du phosphore, de la silice et du carbone en lien avec les sources (bassin versant, anthropisation, flux naturels, sédiments) et les puits (production, export, enfouissement). Les 3 actions suivantes sont menées :
						<ul>
							<li>
								Cartographier les sédiments d’un point de vue quantitatif et qualitatif.
							</li>
							<li>
								Faire une étude comparative au niveau des lacs landais pour mieux comprendre le fonctionnement biogéochimique de chaque lac.
							</li>
							<li>
								Mesurer l’ensemble des paramètres pour caractériser la biogéochimie de chaque lac, les concentrations en Hg total au niveau des échantillons de sédiments collectés et en <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylmercure<span class="definition cache">Forme organique la plus toxique du mercure</span></span> seulement pour les échantillons chargés en matière organique.
							</li>
							<!--
							<li>
								Pour créer un nouveau point, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
							</li>
							-->
						</ul>
          			</p>

          			<p class="texteVolet">
						Ainsi, il sera possible d’évaluer la quantité potentielle de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylmercure<span class="definition cache">Forme organique la plus toxique du mercure</span></span> produite au niveau de chaque lac au niveau de l’interface eau-sédiment et pourra nous éclairer sur les différences de présence observées entre les 4 lacs.
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


					<a class="btn_details" onclick="enSavoirPlus('details5');" href="#details5">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details5">
						<p>
							Au sein de l'UMR EPOC, l’équipe Ecobioc (ECOlogie et BIOgéochimie des systèmes Côtiers) étudie l'effet de l'environnement sur les organismes mais elle s'intéresse également en retour à l'effet des organismes sur l'environnement. A ce titre, Ecobioc revendique son leitmotiv : "Structuration du vivant et son rôle dans le fonctionnement des écosystèmes". Ecobioc est organisée en 4 axes où l’on retrouve le glissement de thématique qui va de l'écologie à la biogéochimie, association de compétences qui rend Ecobioc unique dans le paysage national. La définition de ces axes repose à la fois sur une question d'échelle et d'interactions disciplinaires : l'axe 1 traite d'écologie à petite échelle, l'axe 2 associe écologie et biogéochimie (au sens réseau trophique) à grande échelle, l'axe 3 envisage à petite échelle l'interaction biogéochimie (au sens dynamique des espèces chimiques)/écologie (au sens bioturbation) et l'axe 4 traite des flux biogéochimiques (flux et origine des éléments biogènes) à grande échelle. Le volet 5 du projet CLAQH s’inscrit dans le 4e volet. Au-delà des axes, Ecobioc repose sur un socle solide de compétences et d'un parc analytique adossé à des plateformes, respectivement "biodiversité", "chimie, volet biogéochimie" et "biologie moléculaire".
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
