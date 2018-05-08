<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Volet 1</title>
		<link rel="stylesheet" href="../CSS/volet_style.css">
		<script src="../js/volet.js"></script>
	</head>

	<body>
    <?php include_once 'navigation.php'; ?>

		<div class="voletContainer container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-2">
					<div class="vertical-menu">
						<a href="volet_1.php" class="active">Volet 1</a>
						<a href="volet_2.php">Volet 2</a>
						<a href="volet_3.php">Volet 3</a>
						<a href="volet_4.php">Volet 4</a>
						<a href="volet_5.php">Volet 5</a>
						<a href="volet_6.php">Volet 6</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1>Étudier la répartition des métaux traces dans les poissons des quatre lacs</h1>

					<h2> Objectifs</h2>
					<p class="texteVolet">
						Cette étude permet de faire un état des lieux des concentrations en divers <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">métaux traces <span class="definition cache"> Ensemble des métaux suivants : l’aluminium, l’arsenic, le cadmium, le chrome, le cuivre, l’étain, le fer, le manganèse, le mercure, le nickel, le plomb, le sélénium et le zinc </span></span> dans les poissons afin de mieux connaître et suivre la qualité des milieux dans les quatre lacs.
					</p>

					<p class="texteVolet">
						Au cours du projet, deux types de suivis sont effectués :
						<ul>
							<li>
								La première année sur une période courte de 2 mois, les quatre lacs sont échantillonnés simultanément et toutes les espèces de poissons ainsi que toutes les sources potentielles de nourriture seront prélevées, afin de faire une étude de la présence des  <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">métaux traces <span class="definition cache"> Ensemble des métaux suivants : l’aluminium, l’arsenic, le cadmium, le chrome, le cuivre, l’étain, le fer, le manganèse, le mercure, le nickel, le plomb, le sélénium et le zinc </span></span> en comparant les quatre lacs.
							</li>
							<li>
								La deuxième année, un focus est effectué sur une seule espèce de poisson retenue à partir des résultats de la première année. Cette espèce ainsi que sa nourriture seront prélevées sur un seul lac sur les quatre saisons, afin de mettre en évidence un éventuel impact de la saison sur la présence de  <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">métaux traces <span class="definition cache"> Ensemble des métaux suivants : l’aluminium, l’arsenic, le cadmium, le chrome, le cuivre, l’étain, le fer, le manganèse, le mercure, le nickel, le plomb, le sélénium et le zinc </span></span> dans la chair de poissons.
							</li>
							<!--
							<li>
								Pour créer un nouveau point, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
							</li>
							-->
						</ul>
					</p>

					<!--
					<p class="texteVolet">
						Pour créer un nouveau paragraphe à la partie objectif, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
					</p>
					-->


					<h3>Équipe de recherche</h3>
					<p class="equipeVolet">
						Université de Bordeaux/UMR EPOC 5805 équipe d’Ecotoxicologie Aquatique (EA)
						<br/>
						Alexia Legeay, Régine Maury-Brachet, Agnès Feurtet-Mazel, Magalie Baudrimont et Sophie Gentes.
					</p>


					<div class="galerie">
				        <img  src="../IMG/volet1-a.jpg"/>
				        <img  src="../IMG/volet1-b.jpg"/>
				        <img  src="../IMG/volet1-c.jpg"/>
				        <img  src="../IMG/volet1-d.jpg"/>
				        <img  src="../IMG/volet1-e.jpg"/>
				        <img  src="../IMG/volet1-f.jpg"/>
				        <!-- <img src="../IMG/inserer ici le nom de l'image que vous souhaitez faire apparaitre dans la galerie (cette image devra être placer dans le dossier IMG)" et supprimer le <!- - du début et le - -> de la fin/> -->
					</div>
					

					<a class="btn_details" onclick="enSavoirPlus('details1');" href="#details1">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details1">
						<p>
							Un important effort de pêche est mis en œuvre sur les 4 lacs. Ceci afin d’obtenir suffisamment d’espèces bien représentées pour pouvoir comparer les quatre lacs. Il est nécessaire de pêcher des espèces de différents <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">niveaux trophiques <span class="definition cache">Correspond à une situation (producteur, consommateur) dans la chaîne alimentaire. Les niveaux trophiques sont au nombre de 3 : producteurs primaires, consommateurs (herbivores, carnivores) et les décomposeurs.</span></span> (poissons <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">carnassiers <span class="definition cache">poissons qui chassent et se nourrissent de proies vivantes</span></span>, <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">omnivores <span class="definition cache"> poissons opportunistes, se nourrissent de végétaux, de larves d’insectes, de crustacés et de mollusques.</span></span>, <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">benthivores <span class="definition cache">se nourrissent de détritus organiques ou de petites proies vivant dans les couches superficielles du sédiment.</span></span>, etc.). Chaque <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">niveau trophique <span class="definition cache">Correspond à une situation (producteur, consommateur) dans la chaîne alimentaire. Les niveaux trophiques sont au nombre de 3 : producteurs primaires, consommateurs (herbivores, carnivores) et les décomposeurs.</span></span> présente un grand intérêt pour comprendre d’une part les processus de diffusion des <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">métaux traces <span class="definition cache"> Ensemble des métaux suivants : l’aluminium, l’arsenic, le cadmium, le chrome, le cuivre, l’étain, le fer, le manganèse, le mercure, le nickel, le plomb, le sélénium et le zinc </span></span> dans un lac, et d’autre part pour mieux tracer leur origine. Plusieurs types de pêche sont pratiqués (pêche au trémail, à la ligne, nasse …).
						</p>

						<p>
							Nous profitons de cet échantillonnage exhaustif pour analyser les concentrations d’une douzaine de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">métaux traces <span class="definition cache"> Ensemble des métaux suivants : l’aluminium, l’arsenic, le cadmium, le chrome, le cuivre, l’étain, le fer, le manganèse, le mercure, le nickel, le plomb, le sélénium et le zinc </span></span>, car peu de données de ce type sont disponibles sur l’<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">ichtyofaune<span class="definition cache">ensemble des poissons d'un écosystème aquatique.</span></span> de ces sites. Afin d’optimiser la collecte des échantillons de poissons et pouvoir envisager des analyses complémentaires si nécessaire, une dissection complète de chaque individu est effectuée afin de pouvoir réaliser les relevés et analyses suivants :

							<ul>
								<li>
									Relevé de paramètres biométriques : longueur standard et totale, poids total du poisson et de chaque organe, indice de condition de  <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">Fulton<span class="definition cache"> coefficient révélant l'état physiologique des poissons d'une même espèce, qui indique, entre autres, leur capacité de reproduction. </span></span>, détermination du sexe.
								</li>
								<li>
									Dissection et conservation des principaux organes : muscle, foie, rein, estomac, cerveau, intestin, etc.
								</li>
								<li>
									Détermination de l’âge : à partir des écailles de poisson avec l’appui du laboratoire UMR Ecobiop (INRA/UPPA - Saint Pée sur Nivelle, François Guéraud, Tech. et Valérie Bolliet, Pr).
								</li>
								<li>
									Analyse du mercure total et du MeHg ainsi que 12 <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">métaux traces <span class="definition cache"> Ensemble des métaux suivants : l’aluminium, l’arsenic, le cadmium, le chrome, le cuivre, l’étain, le fer, le manganèse, le mercure, le nickel, le plomb, le sélénium et le zinc </span></span> (Argent ‘Ag’, aluminium ‘Al’, arsenic ‘As’, cadmium ‘Cd’, chrome ‘Cr’, cobalt ‘Co’, cuivre ‘Cu’, manganèse ‘Mn’, nickel ‘Ni’, plomb ‘Pb’, vanadium ‘Va’ et zinc ‘Zn’).
								</li>
								<li>
									Analyse du <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">niveau trophique <span class="definition cache">Correspond à une situation (producteur, consommateur) dans la chaîne alimentaire. Les niveaux trophiques sont au nombre de 3 : producteurs primaires, consommateurs (herbivores, carnivores) et les décomposeurs.</span></span> par l’étude des isotopes stables du carbone (δ13C) et de l’azote (δ15N) dans le muscle et étude du contenu stomacal. En parallèle, un effort d’échantillonnage sera effectué sur les sources alimentaires des poissons (crustacés, mollusques, plantes, biofilm, etc.).
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
