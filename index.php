 <!doctype html>
 <html lang="es">
 <head>
	<meta charset="UTF-8">
	<title>JQuery tutorial</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css">
	<link type="text/css" rel="stylesheet" href="bootsrap/css/bootstrap.css">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	
</head>
 <body id="cuerpo">
 	<header id="header" class="text-center">
 		<h1 class="text-center">pagina principal de mi proyecto</h1>
 		<img id="img1" align=left src="img/flor1.jpg" alt="flor1" class="translate">
 		<img id="img2" align=middle src="img/flor2.jpg" alt="koala" class="rotate">
 		<img id="img3" align=middle src="img/medusa.jpg" alt="koala" class="scale">
 		<img id="img4" align=left src="img/fondo1.jpg" alt="koala" class="rotate-skew-scale-translate">
 	</header><!-- es el mensaje principal o  titulo de mi proyecto-->
 	<div id="big_wraper" class="table border">
 		hola como estas!!
 		<button type="button" id="mostrar">MOSTRAR AL KOALA</button>
 		<button type="button" id="ocultar">OCULTAR AL KOALA</button>
 		<button type="button" id="animate">ANIMA AL KOALA</button>
 	</div>
 	<script>
		$("#mostrar").on("click",function(e){
			/* Act on the event */			
			$("#img").show('fast');
		});
		$("#ocultar").on("click",function(e){
			/* Act on the event */
			$("#img").hide('fast');
		});

		$("#animate").on("click", function(e){
			$("#img1").animate({
				width: '200px',
				height: '200px',
				marginLeft: '10px',
				opacity: 0.2},2000, function(){
					$("#img2").animate({
						width: "200px",
						height: "200px",
						marginLeft: '1000px',
						opacity: 0.2},2000, function(){
							$("#img3").animate({
								width: "200px",
								height: "200px",
								marginLeft: '10px',
								opacity: 0.2
							},3000, function(){
								$("#img4").animate({
										width: "200px",
										height: "200px",
										marginLeft: '1000px',
										opacity: 0.2
								},4000)
							});
					});
				});
		});
	</script>
 	<div id="enlace">
 	    esto es un div para el footer de esta pagina
 	</div>
 	<footer>
 		este es el footer o pie depagina web
 	</footer>
 </body>
 </html>