<?php 
	include 'header.php';
?>

<section id="news" class="row">
	<div class="container">
		<div class="titulo">
			<h1>CONTACTO</h1>
		</div>
		<div class="col l8 s12 m8">
			<h2>SEND A MESSAGE</h2>
			<div class="news contact-lp">
				<form>
					<div class="input-field col s12">
						<input id="name" name="nombre" type="text" class="validate">
						<label for="name">Name</label>
					</div>
					<div class="input-field col s12">
						<input id="Email" name="email" type="email" class="validate">
						<label for="Email">Email</label>
					</div>
					<div class="input-field col s12">
						<input id="phone" name="celular" type="number" class="validate">
						<label for="phone">Phone (optional)</label>
					</div>
					<div class="input-field col s12">
						<textarea id="mensaje" name="mensaje" class="materialize-textarea"></textarea>
						<label for="mensaje">Message</label>
					</div>
					<div class="col s12">
						<p class="right">
							<button class="btn waves waves-effect">
								SEND <span class="ga-send"></span>
							</button>
						</p>

					</div>
				</form>
				<h2>
					Follow Me
				</h2>
				<a class="redes_contact" href=""><span class="ga-facebook2"></span></a>
				<a class="redes_contact" href=""><span class="ga-instagram"></span></a>
			</div>

		</div>
		<div class="col l4 s12 m4">
			<section id="gics" class="row">
				<div class="container">
					<div class="titulo contact">
						<h1>UPCOMING GICS</h1>
					</div>
					<div id="owl-gics" class="gics v">
						<div class="cont">
							<div class="fecha col l2">
									<span class="day">10</span>
									<span class="mes">OCT</span>	
							</div>
							<div class="cont-img col l12">
								<img src="img/gics/gics.jpg">
							</div>
							<div class="cont-info col l12">
								<h1><span class="ga-room"></span> Barranco, Lima / La Noche</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ugiat nulla pariatur. Excepteur sint occaecat cupidatat cia deserunt mollit anim id est laborum.</p>
								<a href="detaller-gics.php" class="btn waves waves-effect">
									MORE INFO
									<span class="ga-add"></span>
								</a>
							
							</div>
						</div>
						<div class="cont">
							<div class="fecha col l2">
									<span class="day">10</span>
									<span class="mes">OCT</span>	
							</div>
							<div class="cont-img col l12">
								<img src="img/foto2.jpg">
							</div>
							<div class="cont-info col l12">
								<h1><span class="ga-room"></span> Barranco, Lima / La Noche</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ugiat nulla pariatur. Excepteur sint occaecat cupidatat cia deserunt mollit anim id est laborum.</p>
								<a href="detaller-gics.php" class="btn waves waves-effect">
									MORE INFO
									<span class="ga-add"></span>
								</a>
							
							</div>
						</div>
						<div class="cont">
							<div class="fecha col l2">
									<span class="day">10</span>
									<span class="mes">OCT</span>	
							</div>
							<div class="cont-img col l12">
								<img src="img/gics/gics.jpg">
							</div>
							<div class="cont-info col l12">
								<h1><span class="ga-room"></span> Barranco, Lima / La Noche</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ugiat nulla pariatur. Excepteur sint occaecat cupidatat cia deserunt mollit anim id est laborum.</p>
								<a href="detaller-gics.php" class="btn waves waves-effect">
									MORE INFO
									<span class="ga-add"></span>
								</a>
							
							</div>
						</div>
					</div>
				</div>
			</section>				
		</div>
	</div>
</section>


<?php 
	include 'footer-contac.php';
?>
 