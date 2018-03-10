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

		<div class="container">
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

				<div class="col-md-10 col-sm-10 col-xs-10">
					<h1> </h1>
					<p class="texteVolet">

          </p>

					<h2>Équipe de recherche en charge du volet 3 :</h2>
					<p class="equipeVolet">

						<br/>

					</p>

					<a href="javascript: enSavoirPlus('details3');">En savoir plus<b class="caret"></b></a>
					<div class="details" id="details3">

					</div>

				</div>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
