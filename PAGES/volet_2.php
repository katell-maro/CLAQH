<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Volet 2</title>
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
						<a href="volet_2.php" class="active">Volet 2</a>
            			<a href="volet_3.php">Volet 3</a>
						<a href="volet_4.php">Volet 4</a>
						<a href="volet_5.php">Volet 5</a>
						<a href="volet_6.php">Volet 6</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1>Caractériser le lieu de la méthylation du mercure (Hg)</h1>

					<h2> Objectifs</h2>
					<p class="texteVolet">
						Le Hg tend à s'accumuler dans les sédiments dans lesquels certaines  <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">bactéries anaérobies <span class="definition cache">population bactérienne qui n’a pas besoin d’oxygène pour se développer. Les bactéries anaérobies sont typiques des milieux anoxiques (sol, sédiment, eau…), c’est-à-dire des milieux où il n'y a pas d’oxygène. </span></span>, principalement les microorganismes sulfato-réducteurs (MSR), le transforment en <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylmercure<span class="definition cache">Forme organique la plus toxique du mercure</span></span>  favorisant son passage dans les chaînes alimentaires. Certaines données récentes font également état de la présence de ces MSR au niveau des racines de plantes aquatiques dans la colonne d'eau. Récemment deux gènes, hgcA et hgcB, ont été identifiés comme intervenant dans la <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span> du Hg chez les MSR.
					</p>

					<p class="texteVolet">
						Le projet vise à utiliser ces deux gènes comme marqueur de la <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span> potentielle du Hg in situ. Il s’agit d’établir la cartographie de ces marqueurs dans les différents compartiments du milieu (sédiments, <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">périphytons<span class="definition cache">Mélange complexe d'algues, de bactéries, de champignons, de microbes et de détritus.</span></span> associés aux plantes, colonne d’eau, flore intestinale des poissons …) et d’effectuer de nombreuses analyses (extraction de l’ADN génomique et séquençage dans l’ensemble des compartiments). Ceci permettra de générer des données qualitatives, et de comparer la diversité de ces gènes aux mesures d’activités de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span>.
					</p>

					<p class="texteVolet">
						Enfin, une analyse quantitative peut être réalisée pour contribuer à l’estimation des activités de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span> microbienne en fonction des paramètres environnementaux.
					</p>

					<p class="texteVolet">
						Ces travaux vont permettre de comprendre d’où provient le <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylmercure<span class="definition cache">Forme organique la plus toxique du mercure</span></span>  présent dans la chair des poissons carnassiers et de le tracer sur son lieu de fabrication (<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">biofilm<span class="definition cache">Communauté multicellulaire plus ou moins complexe.</span></span>, interface eau-sédiment…).
					</p>

					<!--
					<p class="texteVolet">
						Pour créer un nouveau paragraphe à la partie objectif, insérer ici votre texte et supprimer le <!- - du début et le - -> de la fin
					</p>
					-->


					<h3>Équipe de recherche</h3>
					<p class="equipeVolet">
						Université de Pau et des Pays de l'Adour - IPREM - UMR CNRS 5254 équipe EEM
						<br/>
						Rémy Guyoneaud et Jérôme Gury
					</p>


					<div class="galerie">
				        <!-- <img src="../IMG/inserer ici le nom de l'image que vous souhaitez faire apparaitre dans la galerie (cette image devra être placer dans le dossier IMG)" et supprimer le <!- - du début et le - -> de la fin/> -->
					</div>


					<a class="btn_details" onclick="enSavoirPlus('details2');" href="#details2">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details2">
						<p>
							Le Hg tend à s'accumuler dans les sédiments par précipitation/<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">sorption<span class="definition cache">Fixation ou libération de molécules d'un gaz au contact de la surface d'un solide. </span></span>/<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">floculation<span class="definition cache">processus physico-chimique au cours duquel des matières en suspension dans un liquide s'agglomèrent pour former des particules plus grosses </span></span> puis sédimentation. Les sédiments constituent donc un réservoir de Hg dans lesquels certaines <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">bactéries anaérobies <span class="definition cache">population bactérienne qui n’a pas besoin d’oxygène pour se développer. Les bactéries anaérobies sont typiques des milieux anoxiques (sol, sédiment, eau…), c’est-à-dire des milieux où il n'y a pas d’oxygène. </span></span>, principalement les bactéries sulfato-réductrices, sont responsables de la production de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylmercure<span class="definition cache">Forme organique la plus toxique du mercure</span></span> . Une mise en suspension des sédiments par des phénomènes naturels (bioturbations, tempêtes) ou anthropiques va favoriser le passage de ce <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylmercure<span class="definition cache">Forme organique la plus toxique du mercure</span></span>  dans les chaînes alimentaires. Certaines données récentes font état de la présence de ces bactéries sulfato-réductrices au niveau des racines de plantes aquatiques dans la colonne d'eau où elles présenteraient de fortes activités de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span>, y compris au niveau des lacs Landais. Ces microenvironnements, riches en polymères organiques sont connus pour leur faculté à accumuler les éléments métalliques, dont le Hg inorganique. La présence de sulfato-réducteurs et leur activité de <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span> du Hg dans ces micro-écosystèmes (<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">périphyton<span class="definition cache">Mélange complexe d'algues, de bactéries, de champignons, de microbes et de détritus.</span></span> à la surface des racines) pourrait faciliter le transfert de ce métal vers les niveaux supérieurs de la chaîne trophique, par l'intermédiaire d'organismes périphytophages (qui consomment le <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">périphytons<span class="definition cache">Mélange complexe d'algues, de bactéries, de champignons, de microbes et de détritus.</span></span> et qui ne broutent pas les plantes). 
						</p>

						<p>
							Depuis 2009, nous conduisons une étude dans différents écosystèmes aquatiques de la zone côtière landaise (lac, courants, rivière et estuaire). Ces travaux ont pour objectif de réaliser un état des lieux de l’abondance en microorganismes sulfato-réducteurs (MSR), leur biodiversité et leur impact sur les transferts du Hg vers les réseaux trophiques supérieurs dont les poissons. Les prélèvements effectués lors de deux campagnes de terrain en Septembre 2009 et Septembre 2010 ont permis d’effectuer des analyses multiples. La caractérisation et la cartographie des MSR dans les sédiments, les racines de macrophytes aquatiques, et l’eau ont pu être réalisées. Les résultats obtenus ont permis de mettre en évidence le développement de MSR dans l’ensemble des compartiments étudiés, dont les racines de plantes aquatiques. Lors de la deuxième campagne terrain, des souches de sulfato-réducteurs ont été isolées en laboratoire du <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">périphytons<span class="definition cache">Mélange complexe d'algues, de bactéries, de champignons, de microbes et de détritus.</span></span> de plantes aquatiques puis identifiées. Certaines d’entre elles se sont révélées capables de méthyler le Hg à des taux variables. Récemment deux gènes, hgcA et hgcB, ont été identifiés comme intervenant dans la <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">méthylation<span class="definition cache">Ici fait de passer du mercure au méthylmercure.</span></span> du Hg aussi bien chez les MSR, que chez d’autres types de microorganismes comme les bactéries ferri-réductrices et les archées méthanogènes.
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
