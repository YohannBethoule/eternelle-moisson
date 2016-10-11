<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Dofus - Quète éternelle moisson</title>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="style.min.css">

	</head>
	<body>
		<header>
			<h1>DofusTools</h1>
			<h2>L'éternelle moisson</h2>
			<nav>
				<ul>
					<li>Accueil</li>
					<li>Devblog</li>
					<li>Contact</li>
				</ul>
			</nav>
		</header>

		<div class="content">	
			<section>
				<article>
					<h1>L'ÉTERNELLE MOISSON</h1>
					<h2>Préambule</h2>
					<p>L'éternelle moisson est la quête permettant d'obtenir le Dofus Ocre, elle se lance auprès d'Otomaï qui se trouve dans le Tronc de l'arbre Hakam en [-55,15] (vous pouvez consultez le chemin vers Otomaï). Pour lancer la quête vous devrez avoir atteint le niveau 40 minimum et il vous faudra avoir effectué le donjon des Bulbes afin d'avoir le sort capture d’âmes.</p>	
				</article>		
			</section>

			<aside></aside>

			<section>
				<h3 class="title_progressBar">Progression global :</h3>
				<div id="barre_etape_all"></div>

				<div class="js-accordion" data-accordion-prefix-classes="animated-accordion">
				</div>
			</section>
		</div>


		<footer></footer>

		<!-- Script -->
			<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="generate_etapes.js"></script>
			<script src="module/jquery-accessible-accordion-aria/jquery-accessible-accordion-aria.js"></script>
			<script src="script.js"></script>
		<!--  -->

	</body>
</html>