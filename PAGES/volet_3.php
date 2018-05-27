<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Volet 3</title>
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
            			<a href="volet_3.php" class="active">Volet 3</a>
						<a href="volet_4.php">Volet 4</a>
						<a href="volet_5.php">Volet 5</a>
						<a href="volet_6.php">Volet 6</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1> Tracer l’origine du mercure dans les poissons des lacs aquitains </h1>

					<h2> Objectifs</h2>
					<p class="texteVolet">
						Les sources anthropiques du mercure (Hg) atmosphérique dominent largement les sources naturelles avec une contribution d’environ 50-75% du Hg total. Cependant, il demeure difficile de déterminer précisément l’origine de ce Hg, notamment dans les écosystèmes aquatiques où il peut être l’objet de diverses transformations bio-physico-chimiques.
          			</p>

          			<p class="texteVolet">
          				Des études récentes montrent que la signature isotopique apporte des informations précieuses sur les mécanismes d’accumulation dans les <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">réseaux trophiques<span class="definition cache">Ensemble de chaînes alimentaires reliées entre elles au sein d'un écosystème.</span></span>. Ainsi, certains travaux montrent que le Hg(II) et le <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylmercure<span class="definition cache">Forme organique la plus toxique du mercure</span></span> (MeHg) peuvent ne pas avoir la même signature isotopique.
          			</p>

          			<p class="texteVolet">
          				Le volet 3 consiste dans un premier temps à déterminer la composition isotopique du Hg dans les muscles de poissons prélevés dans le volet 1, ainsi que dans les différents compartiments environnementaux récepteurs des sources de Hg et sites potentiels pour la <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span> (sédiments, plantes, <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">périphytons<span class="definition cache">Mélange complexe d'algues, de bactéries, de champignons, de microbes et de détritus.</span></span>). Ces données permettront de déterminer l’origine du Hg dans ces poissons qui reste inconnue à ce jour dans les lacs aquitains.
          			</p>

          			<p class="texteVolet">
          				Dans un second temps, la composition isotopique de chaque forme du Hg sera déterminée dans une sélection de tissus pertinents (muscle, foie…) afin de mieux comprendre les processus de métabolisation et de bioamplification dans le <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">réseau trophique<span class="definition cache">Ensemble de chaînes alimentaires reliées entre elles au sein d'un écosystème.</span></span> et de tracer l’origine du Hg.
          			</p>

          			<p class="texteVolet">
          				Cette démarche originale a été initiée en 2012 dans le cadre de deux programmes de recherche (programme interrégional Aquitaine/Midi Pyrénées et programme ANR RIMNES) en Amazonie (Guyane Française), dans lequel l’équipe EA (UB/UMR EPOC 5805) intervient et dont les résultats en cours sont très prometteurs.
          			</p>

					<!--
					<p class="texteVolet">
						Pour créer un nouveau paragraphe à la partie objectif, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
					</p>
					-->


					<h3>Équipe de recherche</h3>
					<p class="equipeVolet">
						Université de Pau et des Pays de l'Adour - IPREM - UMR CNRS 5254 Équipe LCABIE
						<br/>
						Mathilde Monperrus et Zoyne Pedrero Zayas
					</p>


					<div class="galerie">
				        <!-- <img src="../IMG/inserer ici le nom de l'image que vous souhaitez faire apparaitre dans la galerie (cette image devra être placer dans le dossier IMG)" et supprimer le <!- - du début et le - -> de la fin/> -->
					</div>


					<a class="btn_details" onclick="enSavoirPlus('details3');" href="#details3">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details3">
						<p>
							À l’échelle globale, les sources anthropiques du mercure (Hg) atmosphérique dominent largement les sources naturelles avec une contribution d’environ 50-75% du Hg total. À l’échelle locale, les différentes sources potentielles anthropiques du Hg engendrent des contaminations locales des systèmes aquatiques. Néanmoins, même s’il est possible de mettre en évidence la contamination liée au Hg dans un échantillon ou un écosystème en analysant sa concentration en Hg total, il n’est pas possible de déterminer précisément l’origine de ce Hg. Les systèmes aquatiques étant un lieu privilégié pour les transformations bio-physico-chimiques (photoréduction, <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span>/<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du méthylmercure au mercure.</span></span>) du Hg ainsi que pour sa bioaccumulation dans les <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">réseaux trophiques<span class="definition cache">Ensemble de chaînes alimentaires reliées entre elles au sein d'un écosystème.</span></span>, plusieurs études se sont intéressées à la composition isotopique du Hg dans la faune des écosystèmes aquatiques. Ces études montrent que la signature isotopique du Hg est préservée dans les poissons et apportent des informations précieuses sur les mécanismes d’accumulation dans les <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">réseaux trophiques<span class="definition cache">Ensemble de chaînes alimentaires reliées entre elles au sein d'un écosystème.</span></span>.
						</p>

						<p>
							L’analyse combinée des isotopes stables du carbone et de l’azote (utilisés pour identifier la position d’un organisme au sein d’une chaîne alimentaire) et des isotopes stables du Hg s’avère être en effet un outil intéressant pour étudier les sources et le transfert du Hg au sein des <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">réseaux trophiques<span class="definition cache">Ensemble de chaînes alimentaires reliées entre elles au sein d'un écosystème.</span></span>. Aussi la plupart de ces récentes études ont été réalisées sur les concentrations totales en Hg à l’aide d’une analyse en multicollecteur ICP-MS mais le potentiel prometteur de cette approche est la mesure des rapports isotopiques des espèces de Hg individuels dans le même échantillon. Le couplage d'une chromatographie en phase gazeuse (GC) avec un multicollecteur ICP-MS (GC-MC-ICP-MS) a été utilisé avec succès dans plusieurs études récentes montrant que le Hg(II) et le MeHg peuvent ne pas avoir la même signature isotopique.
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
