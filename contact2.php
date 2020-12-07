<!DOCTYPE html>
<html>
	<head>
		<title>Contacto | Celina Owen</title>
	<meta charset="utf-8">
	<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen and (min-width: 960px)"/>
	<link href="css/tablet.css" rel="stylesheet" type="text/css" media="handheld, screen and (min-width: 545px) and (max-width: 959px"/>
	<link href="css/celular.css" rel="stylesheet" type="text/css" media="handheld, screen and (max-width: 544px)"/>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/icons.png" />
	<link rel="stylesheet" type="text/css" href="css/loading-bar.css"/>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
<body>
	<header>
	<nav class="botonera">
			<ul>
				<div class="redes scale-up-tr">
					<a href="https://www.behance.com/celinaowen/" target="_blank"><img src="images/behance.png" class="red"></a>
					<a href="https://www.linkedin.com/in/celina-owen" target="_blank"><img src="images/linkedin.png" class="red"></a>
					<a href="https://www.instagram.com/celinaowen.design" target="_blank"><img src="images/insta.png" class="red"></a>
					<a href="https://www.youtube.com/channel/UCkr2ysz_ANdoNHyssAZ064A" target="_blank"><img src="images/youtube.png" class="red"></a>
					<a href="https://www.pinterest.es/celiowen/" target="_blank"><img src="images/pin.png" class="red"></a>
				</div>
				<div class="botonera2 scale-up-center">
				<li><a href="home.html" class="botones">Inicio</a></li>
				<li><a href="servicios.html" class="botones">Servicios</a></li>
				<li><a href="portfolio.html" class="botones">Portfolio</a></li>
				</div>
			</ul>
	</nav>
	</header>
	<section class="contacto">
	<article class="transparency">
	<div class="container">
		<h1>Hola!</h1>
		<h2>Amaría ayudarte en tu proyecto, escribime:</h2>
      <div class="progress-bar">
        <div class="step">
          <p>Nombre</p>
			<div class="bullet">
            	<span>1</span>
          	</div>
			<div class="check fas fa-check" aria-hidden="true"></div>
		</div>
			<div class="step">
			    <p>Contacto</p>
				<div class="bullet">
			        <span>2</span>
			    </div>
				<div class="check fas fa-check" aria-hidden="true"></div>
			</div>
			<div class="step">
			    <p>Identidad</p>
				<div class="bullet">
				    <span>3</span>
				</div>
				<div class="check fas fa-check" aria-hidden="true"></div>
			</div>
			<div class="step">
			    <p>Enviar</p>
				<div class="bullet">
				    <span>4</span>
				</div>
				<div class="check fas fa-check" aria-hidden="true"></div>
			</div>
		</div>
		<div class="form-outer">
			        <form method="POST" action="contact.php">
			<div class="page slide-page active">
			            <div class="title">Identificación:</div>
					<div class="field">
					    <div class="label">Nombre</div>
						<input name="nombre" type="text" id="nombre">
						<p class="textdanger" id="nombreError"></p>
					</div>
					<br>
					<div class="field">
					    <div class="label">Apellido</div>
						<input name="apellido" type="text" id="surname">
						<p class="textdanger" id="surnameError"></p>
					</div>
					<br><br>
					<div class="field">
					    <button class="firstNext first next">Next></button>
					</div>
			</div>
			<div class="page">
			        <div class="title">Contacto:</div>
				<div class="field">
				        <div class="label">Email</div>
						<input name="email" type="text" id="email" class="<?= $invalid_class_name  ?? "" ?>">
						<p class="textdanger" id="emailError"></p>
				</div>
				<br>
				<div class="field">
				        <div class="label">
				Número de teléfono (no obligatorio)</div>
				<input name="telefono" type="Number">
				</div>
				<br>
				<div class="field btns">
			        <button class="prev-1 button prev">Previous</button>
			        <button class="next-1 button next">Next</button>
				</div>
			</div>
			<div class="page">
				    <div class="title">Identidad:</div>
				<div class="field">
				    <div class="label">Miembro de:</div><br>
				<select name="member" required id="identidad">
					<option placeholder="Seleccionar"></option>
				    <option>Empresa</option>
				    <option>Marca</option>
				    <option>Emprendimiento</option>
				    <option>Autónomo</option>
				    <option>Otros</option>
				</select>
				</div>
				<br>
				<div class="field">
				    <div class="label">Estilo de consulta</div><br>
					<select required name="consulta">
					<option placeholder="Seleccionar"></option>
				    <option>Presupuesto</option>
				    <option>Proyecto propio</option>
				    <option>Trabajar conmigo</option>
				    <option>Otras consultas</option>
				</select>
				</div>
				<br>
				<div class="field btns">
				    <button class="prev-2 button prev">Previous</button>
				    <button class="next-2 button next">Next</button>
				</div>
				<br>
			</div>
			<br>
			<div class="page">
			            <div class="title">Consulta:</div>
				<div class="field">
				        <div class="label">Me encuentro a su disposición</div>
						<input name="explicacion" type="text" required id="consult" class="consulta" placeholder="¡Consultame sobre lo que necesites o tengas en mente!">
						<p class="textdanger" id="consultError"></p>
				</div>
				<br>
				<div class="field btns">
				            <button class="prev-3 button prev">Previous</button>
				            <button class="submit button" type="submit">Submit</button>
				</div>
			</div>
			</form>
		</div>
			</div>	
		</article>
	</section>
	<footer>
			<a href="micrositio.html" class="pie"><p class="parrafo">© 2020 · Celina Owen<br>Todos los derechos reservados.</p></a>
			<div class="redes2">
					<a href="mailto:celinaowenph@gmail.com" target="_blank"><img src="images/mail.png" class="red2"></a>
					<a href="https://www.behance.com/celinaowen/" target="_blank"><img src="images/behance.png" class="red2"></a>
					<a href="https://www.linkedin.com/in/celina-owen" target="_blank"><img src="images/linkedin.png" class="red2"></a>
					<a href="https://www.instagram.com/celinaowen.design" target="_blank"><img src="images/insta.png" class="red2"></a>
					<a href="https://www.youtube.com/channel/UCkr2ysz_ANdoNHyssAZ064A" target="_blank"><img src="images/youtube.png" class="red2"></a>
				</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="css/loading-bar.js"></script>
		<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
		<script src="js/check.js"></script>
	</body>
</html>
