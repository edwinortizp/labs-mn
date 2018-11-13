<!DOCTYPE html>
<html lang="en">
<?php include "template/head.php";?>
<body>

	<?php include "template/page-loader.php";?>

	<?php include "template/top-menu.php";?>

	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Bisección</h2>
				<div class="page-links">
					<a href="#">Inicio</a>
					<span>Métodos</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->

	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<!-- <div class="post-thumbnail">
							<img src="img/blog/blog-1.jpg" alt="">
							<div class="post-date">
								<h2>13</h2>
								<h3>Nov 2018</h3>
							</div>
						</div>
 -->						<div class="post-content">
							<h2 class="post-title">Método de Bisección</h2>
							<div class="post-meta">
								<a href="">Alexander Ortiz</a>
								<a href="">2 Comentarios</a>
							</div>
							

<blockquote>
              <p align="justify" class="style10">Este método consiste en obtener una mejor aproximación de  la raíz a partir de un intervalo inicial (a,b) en el cual hay un cambio de signo en la función,  es decir: f(a)f(b)&lt;0.</p>
              <p align="justify" class="style10"> Se obtiene el  punto medio:</p>
              <blockquote>
                <p align="justify">
                  <span class="style10">
                  <img src="img/bisection/image1.gif" alt="a" width="71" height="41" v:shapes="_x0000_i1025">
                  </span></p>
              </blockquote>
              <p align="justify" class="style10">  xm es la  nueva aproximación a&nbsp; la raíz, y se  vuelve a tomar un intervalo, pero ahora mas pequeño, considerando que siga  existiendo un cambio de signo en la función, es decir, el nuevo intervalo queda  determinado por:</p>
              <p align="center" class="style10"><img src="img/bisection/image2.gif" alt="" width="379" height="244"></p>
              <p align="justify">
                <span class="style10">
              El método termina cuando se cumple con alguna condición de paro,  en este programa la condición es la tolerancia :</span></p>
              <blockquote>
                <p align="justify">
                  <span class="style10">
                  <img src="img/bisection/image3.gif" alt="f" width="81" height="27" v:shapes="_x0000_i1026">
                  </span></p>
              </blockquote>
              <p align="justify" class="style10">Este es un método “de encierro”, para aplicarlo se debe contar con un  intervalo inicial, en donde f(a)*f(b) &lt; 0. Este  método requiere de menos pasos en un programa, sin embargo converge mas lentamente que el de Newton-Raphson.</p>
              <p align="justify" class="style10">  Los pasos del método son los siguientes:&nbsp;</p>
              <blockquote>
                <p align="justify" class="style10">1.- Localizar un intervalo que  contenga al menos una raíz.</p>
                <p align="justify" class="style10">2.- Dividir el intervalo en dos  partes iguales reteniendo la mitad en donde f(x) cambia de signo, para  conservar al menos una raíz.</p>
                <p align="justify" class="style10">3.- Repetir el procesó varias  veces hasta cumplir con la tolerancia deseada.</p>
              </blockquote>
              <p align="justify" class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="img/bisection/image4.gif" alt="g" width="80" height="45" v:shapes="_x0000_i1027">
              </p>
              <p align="justify" class="style10">si:</p>
              <p align="justify" class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; f(m) f(b)&lt;0
                entonces
              conservar  (m,b) como el sem. intervalo que contiene al menos una raíz.</p>
              <p align="justify" class="style10">A cada paso se le llama  “iteración”&nbsp; y reduce el intervalo a la  mitad.</p>
              <p align="justify" class="style10">Después de cada iteración el  intervalo re reduce a la mitad, después de n iteraciones, el intervalo original  se había reducido 2<sup>n</sup><!--[endif]-->
                veces,  por lo tanto, si el intervalo original&nbsp;  es de tamaño “a” y el criterio de convergencia aplicado al valor  absoluto de la diferencia de dos Xm consecutivas es “
                <img src="img/bisection/image5.gif" alt="j" width="13" height="13" v:shapes="_x0000_i1030">
                ”,  entonces se requerían “n” iteraciones donde “n” se calcula con la igualdad de  la expresión:</p>
              <p align="justify" class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="img/bisection/image6.gif" alt="k" width="45" height="41" v:shapes="_x0000_i1031">
              </p>
              <p align="justify" class="style10">de  donde:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="img/bisection/image7.gif" alt="l" width="96" height="41" v:shapes="_x0000_i1032">
                <img src="img/bisection/image8.gif" alt="m" width="20" height="16" v:shapes="_x0000_i1033">
              iteraciones que se requieren.</p>
          </blockquote>




						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img  src="img/avatar/alexander.png" alt="" style="width: 30px">
							</div>
							<div class="author-info">
								<h2>Alexander Ortiz, <span>Autor</span></h2>
								<p>Estudiante de Ing. de Sistemas. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comentarios (2)</h2>
							<ul class="comment-list">
								<li>
									<div class="avatar">
										<img src="img/avatar/01.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 05 nov, 2018 | Responder</h3>
										<p>Genial! Muchas gracias por la explicación </p>
									</div>
								</li>
								<li>
									<div class="avatar">
										<img src="img/avatar/02.jpg" alt="">
									</div>
									<div class="commetn-text">
										<h3>Michael Smith | 04 nov, 2017 | Responder</h3>
										<p>Tengo la siguiente inquietud ¿Cómo podria aplicarlo a la ecuación (x*x)+2 - exp(x) </p>
									</div>
								</li>
							</ul>
						</div>
						<!-- Commert Form -->
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Deja tus comentarios e inquietudes</h2>
								<form class="form-class">
									<div class="row">
										<div class="col-sm-6">
											<input type="text" name="name" placeholder="Tu nombre">
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" placeholder="Tu email">
										</div>
										<div class="col-sm-12">
											<input type="text" name="subject" placeholder="Subject">
											<textarea name="message" placeholder="Mensaje"></textarea>
											<button class="site-btn">Enviar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>


				<div class="col-md-4 sidebar">
					<h2 class="widget-title">Desarrolla tu ejemplo</h2>
					<br><br>
					<p>Ingresa los datos que se solicitan a continuación para resolver el siguiente ejercicio</p>

					<form action="bisection.php" method="post" class="form-class">
						<div class="row">
							<div class="col-md-12">
								<select required="true" name="eq" id="eq">
									<option>Selecciona una ecuación</option>
									<option value="a">(x*x) + 2 - exp(x)</option>
									<option value="b">(x*x)-5</option>
									<option value="c">(x*x*x) - cos(x)</option>
								</select>
							</div>
							<div class="col-md-6">
								<input type="text" name="a" placeholder="Digita el extremo 'a'" required="true">
							</div>
							<div class="col-md-6">
								<input type="text" name="b" placeholder="Digita el extremo 'b'" required="true">
							</div>
							<div class="col-md-12">
								<input type="text" name="iteraciones" placeholder="Digita el número de iteraciones" required="true">
							</div>
						</div>
						<button class="site-btn">Enviar ecuación</button>
					</form>

				</div>
			</div>

		</div>
	</div>

	<?php include "template/footer.php";?>


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
