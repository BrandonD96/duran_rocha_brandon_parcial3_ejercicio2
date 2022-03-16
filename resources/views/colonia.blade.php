<!DOCTYPE HTML>
<html>
	<head>
		<title>Practica 2</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="/search" class="logo">
									<span class="symbol"><img src="/images/logo.svg" alt="" /></span><span class="title">Regresar</span>
								</a>
						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Colonias</h1>
								<p>Elige la colonia</p>
							</header>
							<section class="tiles">
                                @foreach($codigo as $codigos)
								<article class="style2">
									<span class="image">
										<img src="/images/pic02.jpg" alt="" />
									</span>
									<a href="{{route('mostrarMunicipo.codigo',$codigos->id)}}">
										<h2>{{$codigos->asentamiento}}</h2>
									</a>
								</article>						
							@endforeach
							</section>
						</div>
					</div>


		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>