<!DOCTYPE HTML>
<html>
	<head>
		<title>Practica 2</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a  class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Practica 2</span>
								</a>

							<!-- Nav -->
								

						</div>
					</header>
		
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Ingrese el codigo postal</a>.</h1>
							</header>
							<section>
								
								<form action="{{route('buscar.codigo')}}">
									<div class="fields">
										
										<div class="field">
											<input name="CP" placeholder="Buscar">
										</div>
									</div>
								
								</form>
							</section>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>