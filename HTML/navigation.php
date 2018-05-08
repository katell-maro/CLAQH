<?php include(dirname(__FILE__) . '/../Utilitaires/fonctions.php'); ?>

<nav class="navbar navbar-default navbar-fixed-top " role="navigation" id="navbar" >       
    <div class="container-fluid"> 
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
            </button>
            <a href=<?= getRoot()."index.php" ?> class="navbar-brand-left visible-xs visible-sm"><img src=<?= getRoot()."/IMG/logoTransparent.png" ?> width="15%"></a>
        </div>
		
        <div class="collapse navbar-collapse" id="navbar-collapse-target">
            <div class="container" id="nav-container">
				<div class="row">
					<div class="col-md-5">
						<ul class="nav navbar-nav">
							<li role="presentation" class="dropdown itemMenu">
								<a href="#" class="dropdown-toggle tab" data-toggle="dropdown" id="projet">Projet <span class="caret"></span></a>
								<ul class="dropdown-menu"> 
									<li><a href=<?= getHtmlFolder()."historique.php" ?>>Historique</a></li>
									<li><a href=<?= getHtmlFolder()."enjeux.php" ?>>Enjeux</a></li>
									<li><a href=<?= getHtmlFolder()."volet_1.php" ?>>Volet</a></li>
								</ul>
							</li> 
							<li role="presentation" class="dropdown itemMenu"><a href="#" class="dropdown-toggle tab" data-toggle="dropdown" id="lacs">Lacs <span class="caret"></span></a>
								<ul class="dropdown-menu"> 
									<li><a href=<?= getHtmlFolder()."lacCH.php" ?>>Lac de Carcans-Hourtin</a></li>
									<li><a href=<?= getHtmlFolder()."lacL.php" ?>>Lac de Lacanau</a></li>
									<li><a href=<?= getHtmlFolder()."lacS.php" ?>>Lac de Cazaux-Sanguinet</a></li>
									<li><a href=<?= getHtmlFolder()."lac.php" ?>>Lac de Biscarosse-Parentis</a></li>
								</ul>
							</li>
						</ul>
					</div>
				
					<div class="centerLogo col-md-2">
						<ul class="nav navbar-nav" id="logonav">     
							<a href=<?= getRoot()."index.php" ?> class="navbar-brand-center hidden-xs hidden-sm">
								<img src=<?= getRoot()."/IMG/logoTransparent.png" ?> style="max-width:100px; margin-top:0px;" class="d-inline-block align-top">
							</a>
						</ul>
					</div>
					
					<div class="col-md-5">
						<ul class="nav navbar-nav">
							<li id="partenaire" class="itemMenu"><a class="tab" href=<?= getHtmlFolder()."partenaires.php" ?>>Partenaires</a></li>
							<li id="contact" class="itemMenu"><a class="tab" href=<?= getHtmlFolder()."contact.php" ?>>Contact</a></li>
						</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
</nav>
