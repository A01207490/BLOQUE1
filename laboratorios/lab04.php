<html>

<head>

	<?php include '_head.html'; ?>
	<title><?php echo basename(__DIR__); ?></title>
</head>

<body>
	<?php include '_sidebar.html'; ?>
	<!-- MAIN -->
	<div id="main">
		<!--------------------------------------------------------------------------------------->

		<!-- TOP NAVBAR -->
		<nav class="navbar navbar-expand-lg bg-primary border-bottom" id="navbar">
			<!-- Toogle Sidebar Button -->
			<button class="btn btn-green" onclick="openSideBar()"><i class="material-icons text-primary">menu</i></button>
			<!-- End Toogle Sidebar Button -->
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="funciones-tab" data-toggle="tab" href="#funciones" role="tab" aria-controls="funciones" aria-selected="true">Funciones</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="cuestionario-tab" data-toggle="tab" href="#cuestionario" role="tab" aria-controls="cuestionario" aria-selected="false">Cuestionario</a>
				</li>
			</ul>
			<!-- End Nav tabs -->
		</nav>
		<!-- END TOP NAVBAR -->

		<!--------------------------------------------------------------------------------------->

		<!-- PAGE CONTENT -->
		<div class="container bg-info content">
			<!-- Contenido de las tabs -->
			<div class="tab-content">
				<!-- Funciones -->
				<div class="tab-pane active" id="funciones" role="tabpanel" aria-labelledby="funciones-tab">
					<div class="container">
						<!-- Funcion 1 -->
						<div class="row">
							<div class="col-sm">
								<h5>
									Función 1
								</h5>
								<p>
									Entrada: un número pedido con un prompt. Salida: Una tabla con los números del 1 al número dado con sus cuadrados y cubos. Utiliza document.write para producir la salida
								</p>
							</div>
							<div class="col-sm">
								<button class="btn btn-purple text-primary" id="launch" onclick="fun1()">
									<i class="material-icons">
										launch
									</i>
								</button>
								<p id="myTable"></p>
							</div>
						</div>
						<!-- End Funcion 1 -->
						<!-- Funcion 2 -->
						<div class="row">
							<div class="col-sm">
								<h5>
									Función 2
								</h5>
								<p>
									Entrada: Usando un prompt se pide el resultado de la suma de 2 números generados de manera aleatoria. Salida: La página debe indicar si el resultado fue correcto o incorrecto, y el tiempo que tardó el usuario en escribir la respuesta.
								</p>
							</div>
							<div class="col-sm">
								<button class="btn btn-purple text-primary" id="launch" onclick="fun2()">
									<i class="material-icons">
										launch
									</i>
								</button>
							</div>
						</div>
						<!-- End Funcion 2 -->
						<!-- Funcion 3 -->
						<div class="row">
							<div class="col-sm">
								<h5>
									Función 3
								</h5>
								<p>
									Función: contador. Parámetros: Un arreglo de números. Regresa: La cantidad de números negativos en el arreglo, la cantidad de 0's, y la cantidad de valores mayores a 0 en el arreglo.
								</p>
							</div>
							<div class="col-sm">
								<button class="btn btn-purple text-primary" id="launch" onclick="fun3()">
									<i class="material-icons">
										launch
									</i>
								</button>
							</div>
						</div>
						<!-- End Funcion 3 -->
						<!-- Funcion 4 -->
						<div class="row">
							<div class="col-sm">
								<h5>
									Función 4
								</h5>
								<p>
									Función: promedios. Parámetros: Un arreglo de arreglos de números. Regresa: Un arreglo con los promedios de cada uno de los renglones de la matriz.
								</p>
							</div>
							<div class="col-sm">
								<button class="btn btn-purple text-primary" id="launch" onclick="fun4()">
									<i class="material-icons">
										launch
									</i>
								</button>
							</div>
						</div>
						<!-- End Funcion 4 -->
						<!-- Funcion 5 -->
						<div class="row">
							<div class="col-sm">
								<h5>
									Función 5
								</h5>
								<p>
									Función: inverso. Parámetros: Un número. Regresa: El número con sus dígitos en orden inverso.
								</p>
							</div>
							<div class="col-sm">
								<button class="btn btn-purple text-primary" id="launch" onclick="fun5()">
									<i class="material-icons">
										launch
									</i>
								</button>
							</div>
						</div>
						<!-- End Funcion 5 -->
						<!-- Funcion 6 -->
						<div class="row">
							<div class="col-sm-6">
								<h5>
									Función 6
								</h5>
								<p>
									Para los siguientes laboratorios y proyecto, realicé los siguientes dos botones para aumentar o disminuir la cantidad de algún concepto.
								</p>
							</div>

							<div class="col-sm">
								<div class="d-flex flex-row justify-content-end align-items-center">
									<div class="p-2">
										<button class="btn btn-purple text-primary" id="launch" onclick="slowDown()">
											<i class="material-icons">
												remove
											</i>
										</button>
									</div>
									<div class="p-2" max-lenght="3">
										<div id="carSpeed">
											80
										</div>
									</div>
									<div class="p-2">
										<button class="btn btn-purple text-primary" id="launch" onclick="accelerate()">
											<i class="material-icons">
												add
											</i>
										</button>
									</div>
								</div>
							</div>

						</div>
						<!-- End Funcion 6 -->
					</div>
				</div>
				<!-- End Funciones -->
				<!-- Preguntas -->
				<div class="tab-pane" id="cuestionario" role="tabpanel" aria-labelledby="cuestionario-tab">
					<h5>
						¿Qué diferencias y semejanzas hay entre Java y JavaScript?
					</h5>
					<p>
						Semejanzas: lenguajes de programación que tienen nombre similar.
					</p>
					A continuación se presentan algunas de sus diferencias.
					<table class="table table-dark table-striped">
						<tr>
							<th>Java</th>
							<th>JavaScript</th>
						</tr>
						<tr>
							<td>Strongly typed</td>
							<td>Weakly typed</td>
						</tr>
						<tr>
							<td>Lenguaje compilado</td>
							<td>Lenguaje interpretado</td>
						</tr>
					</table>
					<br>
					<h5>
						¿Qué métodos tiene el objeto Date? (Menciona al menos 5*)
					</h5>

					<table class="table table-dark table-striped">
						<tr>
							<th>Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td>getFullYear()</td>
							<td>Get the year as a four digit number (yyyy)</td>
						</tr>
						<tr>
							<td>getMonth()</td>
							<td>Get the month as a number (0-11)</td>
						</tr>
						<tr>
							<td>getDate()</td>
							<td>Get the day as a number (1-31)</td>
						</tr>
						<tr>
							<td>getHours()</td>
							<td>Get the hour (0-23)</td>
						</tr>
						<tr>
							<td>getMinutes()</td>
							<td>Get the minute (0-59)</td>
						</tr>
					</table>
					<br>
					<h5>
						¿Qué métodos tienen los arreglos? (Menciona al menos 5*)
					</h5>
					<table class="table table-dark table-striped">
						<tr>
							<th>Method</th>
							<th>Description</th>
						</tr>
						<tr>
							<td>concat()</td>
							<td>Joins two or more arrays, and returns a copy of the joined arrays</td>
						</tr>
						<tr>
							<td>join()</td>
							<td> Joins all elements of an array into a string</td>
						</tr>
						<tr>
							<td>push()</td>
							<td>Adds new elements to the end of an array, and returns the new length</td>
						</tr>
						<tr>
							<td>reverse()</td>
							<td>Reverses the order of the elements in an array</td>
						</tr>
						<tr>
							<td>toString()</td>
							<td>Converts an array to a string, and returns the result</td>
						</tr>
					</table>
					<br>
					<h5>
						¿Cómo se declara una variable con alcance local dentro de una función?
					</h5>
					<p>
						Para declarar una variable de alcance local se antecede el nombre de la variable con la palabra reservada "var".
					</p>
					<br>
					<h5>
						¿Qué implicaciones tiene utilizar variables globales dentro de funciones?
					</h5>
					<p>
						Implica que todos lo scripts y funciones de la página web pueden consultar o modificar el valor de dicha variable.
					</p>
					<br>
					<h5>
						¿Qué método de String se puede utilizar para buscar patrones con expresiones regulares?¿Para qué podrías utilizar esto en una aplicación web?
					</h5>
					<p>
						Para buscar patrones en un string se puede utilizar el método match(). Este método sería útil en una plicación web para devolver resultados a partir de una busqueda de una palabra clave.
					</p>
					<br>
					<h5>
						Referencias
					</h5>
					<ul>
						<li>
							https://www.geeksforgeeks.org/difference-between-java-and-javascript/
						</li>
						<li>
							https://www.w3schools.com/js/js_date_methods.asp
						</li>
						<li>
							https://www.w3schools.com/jsref/jsref_obj_array.asp
						</li>
						<li>
							https://www.w3schools.com/js/js_scope.asp
						</li>
						<li>
							https://www.w3schools.com/jsref/jsref_match.asp
						</li>

					</ul>
				</div>
				<!-- End Preguntas -->
			</div>
			<!-- End de las tabs -->
		</div>
		<!-- END PAGE CONTENT -->


		<!--------------------------------------------------------------------------------------->
	</div>
	<!-- END MAIN -->

	<?php include '_footer.html'; ?>
</body>


</html>