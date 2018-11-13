
<html lang="en">
<?php include "template/head.php";?>
<body>

<?php include "template/top-menu.php";?>

<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Bisección</h2>
				<div class="page-links">
					<a href="bisection-form.php">Volver</a>
					<span>Métodos</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->

	<div id="plot"></div>

<!-- Código fuente -->

	<?php
	$a = $_POST['a'];
	$b = $_POST['b'];
	//x pasa a llamarse "c" para no confundir con los datos introducidos por el usuarios
	$c = ($a+$b)/2;

	if ($_POST['eq'] == 'a') {
		$fa = ($a*$a)+2-(exp($a));
		$fb = ($b*$b)+2-(exp($b));
		$fc = ($c*$c)+2-(exp($c));
		$equation = '(x*x) + 2 - exp(x)';
	}
	if ($_POST['eq'] == 'b') {
		$fa = ($a*$a)-5;
		$fb = ($b*$b)-5;
		$fc = ($c*$c)-5;
		$equation = '(x*x)-5';
	}
	if ($_POST['eq'] == 'c') {
		$fa = ($a*$a*$a)-cos($a);
		$fb = ($b*$b*$b)-cos($b);
		$fc = ($c*$c*$c)-cos($c);
		$equation = '(x*x*x) - cos(x)';
	}

//Variables (para el ejemplo se usa la funcion a^2+2 - e^a)

	
//error máximo y demás variables necesarias
	$emx = abs($b-$a)/2;
	$i=1;
	$iteraciones = $_POST['iteraciones'];
	
	
	echo '
	<table class="table">
		<thead>
			<th>a</th>
			<th>f(a)</th>
			<th>b</th>
			<th>f(b)</th>
			<th>x</th>
			<th>f(x)</th>
			<th>Em(x)</th>
			<th>Iteración</th>
		</thead>
		<tbody> '; 
		//primera fila
		echo '	<td>'.$a.'</td>
				<td>'.$fa .'</td>
				<td>'.$b.'</td>
				<td>'.$fb.'</td>
				<td>'.$c.'</td>
				<td>'.$fc.'</td>
				<td>'.$emx.'</td>
				<td>'.$i.'</td>
			</tr> ';

			//ciclo para hacer lo mismo que la segunda fila del excel

		for ($i=2; $i<=$iteraciones; $i++) {
			echo '<tr>' ;
			if ($fa*$fc>0) {
				$a=$c;
			}
			elseif ($fb*$fc>0) {
				$b=$c;
			}
			
				if ($_POST['eq'] == 'a') {
					$fa = ($a*$a)+2-(exp($a));
					$fb = ($b*$b)+2-(exp($b));
					$fc = ($c*$c)+2-(exp($c));
				}
				if ($_POST['eq'] == 'b') {
					$fa = ($a*$a)-5;
					$fb = ($b*$b)-5;
					$fc = ($c*$c)-5;
				}
				if ($_POST['eq'] == 'c') {
					$fa = ($a*$a*$a)-cos($a);
					$fb = ($b*$b*$b)-cos($b);
					$fc = ($c*$c*$c)-cos($c);
				}


			$c = ($a+$b)/2;
			$emx = abs($b-$a)/2;
			echo '
				<td>'.$a.'</td>
				<td>'.$fa.'</td>
				<td>'.$b.'</td>
				<td>'.$fb.'</td>
				<td>'.$c.'</td>
				<td>'.$fc.'</td>
				<td>'.$emx.'</td>
				<td>'.$i.'</td>
			</tr>';
 		}

		echo '</tbody></table>
	

	<form id="form">
  <label for="eq">Ecuación Gráficada:</label>
  <input type="text" id="eq" value="'.$equation.'" />
  <input type="submit" value="Graficar otra" />
</form>';
?>

<?php include "template/footer.php";?>


<!--Función para gráficar-->

<script>
  function draw() {
    try {
      // Compila la expresión
      const expression = document.getElementById('eq').value
      const expr = math.compile(expression)

      // evaluate the expression repeatedly for different values of x
      const xValues = math.range(-10, 10, 0.5).toArray()
      const yValues = xValues.map(function (x) {
        return expr.eval({x: x})
      })

      // render the plot using plotly
      const trace1 = {
        x: xValues,
        y: yValues,
        type: 'scatter'
      }
      const data = [trace1]
      Plotly.newPlot('plot', data)
    }
    catch (err) {
      console.error(err)
      alert(err)
    }
  }

  document.getElementById('form').onsubmit = function (event) {
    event.preventDefault()
    draw()
  }

  draw()
</script>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
