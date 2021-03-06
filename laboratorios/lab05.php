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
					<a class="nav-link" id="contraseña-tab" data-toggle="tab" href="#contraseña" role="tab" aria-controls="contraseña" aria-selected="true">Contraseña</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="productos-tab" data-toggle="tab" href="#productos" role="tab" aria-controls="productos" aria-selected="false">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="writer-tab" data-toggle="tab" href="#writer" role="tab" aria-controls="writer" aria-selected="false">Writer</a>
				</li>

				<li class="nav-item">
					<a class="nav-link active" id="preguntas-tab" data-toggle="tab" href="#preguntas" role="tab" aria-controls="preguntas" aria-selected="false">Preguntas</a>
				</li>


			</ul>
			<!-- End Nav tabs -->
		</nav>
		<!-- END TOP NAVBAR -->

		<!--------------------------------------------------------------------------------------->

		<!-- PAGE CONTENT -->
		<div class="container-fluid bg-info content">
			<!-- Contenido de las tabs -->
			<div class="tab-content">
				<!-- Contraseña -->
				<div class="tab-pane" id="contraseña" role="tabpanel" aria-labelledby="contraseña-tab">
					<div class="container">
						<div class="row">
							<div class="col-sm">
								<div class="d-flex flex-row justify-content-center align-items-center">
									<div class="p-2">
										<form>
											<div class="form-group">
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
												<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="password" class="form-control" id="inputPassword" placeholder="Password" value="FakePSW">
											</div>
											<div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">Check me out</label>
											</div>
											<button type="button" class="btn btn-primary" onclick="validatePassword()">Submit</button>
											<div>
												<p id="requisitoMayuscula">

												</p>
												<p id="requisitoMinuscula">

												</p>
												<p id="requisitoDigito">

												</p>
												<p id="requisitoLongitud">

												</p>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Contraseña -->
				<!-- Productos -->
				<div class="tab-pane" id="productos" role="tabpanel" aria-labelledby="productos-tab">
					<!-- Container -->
					<div class="container">
						<!-- Table -->
						<table class="table text-center text-white ">
							<!-- Header -->
							<thead class="thead-dark">
								<tr>
									<th>Potion</th>
									<th>Price</th>
									<th>Quantity</th>
								</tr>
							</thead>
							<!-- End Header -->
							<!-- Red Potion -->
							<tr>
								<td>Red Potion</td>
								<td>$80</td>
								<td>
									<div class="d-flex flex-row justify-content-center align-items-center">
										<div class="p-2">
											<button class="btn btn-purple text-primary" id="substractRed">
												<i class="material-icons">
													remove
												</i>
											</button>
										</div>
										<div class="p-2" max-lenght="3">
											<div id="redPotion">
												0
											</div>
										</div>
										<div class="p-2">
											<button class="btn btn-purple text-primary" id="addRed">
												<i class="material-icons">
													add
												</i>
											</button>
										</div>
									</div>
								</td>
							</tr>
							<!-- End Red Potion -->
							<!-- Green Potion -->
							<tr>
								<td>Green Potion</td>
								<td>$20</td>
								<td>
									<div class="d-flex flex-row justify-content-center align-items-center">
										<div class="p-2">
											<button class="btn btn-purple text-primary" id="substractGreen">
												<i class="material-icons">
													remove
												</i>
											</button>
										</div>
										<div class="p-2" max-lenght="3">
											<div id="greenPotion">
												0
											</div>
										</div>
										<div class="p-2">
											<button class="btn btn-purple text-primary" id="addGreen">
												<i class="material-icons">
													add
												</i>
											</button>
										</div>
									</div>
								</td>
							</tr>
							<!-- End Green Potion -->
							<!-- Blue Potion -->
							<tr>
								<td>Blue Potion</td>
								<td>$60</td>
								<td>
									<div class="d-flex flex-row justify-content-center align-items-center">
										<div class="p-2">
											<button class="btn btn-purple text-primary" id="substractBlue">
												<i class="material-icons">
													remove
												</i>
											</button>
										</div>
										<div class="p-2" max-lenght="3">
											<div id="bluePotion">
												0
											</div>
										</div>
										<div class="p-2">
											<button class="btn btn-purple text-primary" id="addBlue">
												<i class="material-icons">
													add
												</i>
											</button>
										</div>
									</div>
								</td>
							</tr>
							<!-- End Blue Potion -->
							<!-- Subtotal -->
							<tr>
								<th class="text-right" colspan="2">Subtotal</th>
								<th id="subtotal">0</th>
							</tr>
							<!-- End Subtotal -->
							<!-- IVA -->
							<tr>
								<th class="text-right" colspan="2">IVA</th>
								<th id="iva">0</th>
							</tr>
							<!-- End IVA -->
							<!-- Total -->
							<tr>
								<th class="text-right" colspan="2">Subtotal</th>
								<th id="total">0</th>
							</tr>
							<!-- End Total -->
						</table>
						<!-- End Table -->
					</div>
					<!-- Container -->
				</div>
				<!-- End Productos -->



				<!-- Writer -->
				<div class="tab-pane" id="writer" role="tabpanel" aria-labelledby="writer-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<label for="enterWord" id="word">Word</label>
								<input type="text" class="form-control" id="enterWord" placeholder="Enter word" size="3" value="">
							</div>
						</form>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Writer -->

				<!-- Preguntas -->
				<div class="tab-pane active" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<h5>
									¿Por qué es una buena práctica usar JavaScript para checar que sean válidos los inputs de las formas antes de enviar los datos al servidor?
								</h5>
								<p>
									<ul>
										<li>
											Para asegurarse de que se están llenando todos los campos mandatorios.[1]
										</li>
										<li>
											Para revisar que los valores de los campos sean del tipo correcto. [1]
										</li>
									</ul>
								</p>

								<h5>
									¿Cómo puedes saltarte la seguridad de validaciones hechas con JavaScript?
								</h5>
								<p>
									Se puede utilizar software como Burp para realizar esto; se puede ingresar un valor benévolo en el input del browser, interceptar la forma con tu proxy, y modificar la información al valor deseado. [2]
								</p>

								<h5>
									Si te puedes saltar la seguridad de las validaciones de JavaScript, entonces ¿por qué la primera pregunta dice que es una buena práctica?

								</h5>
								<p>
									Para evitar conflitos de información con usuarios cuya intención no es comprometer el sistema.
								</p>

								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://www.tutorialspoint.com/javascript/javascript_form_validations.htm
										</li>
										<li>
											[2] https://portswigger.net/support/using-burp-to-bypass-client-side-javascript-validation
										</li>
									</ul>
								</p>
							</div>
						</form>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Preguntas -->


			</div>
			<!-- End de las tabs -->
		</div>
		<!-- END PAGE CONTENT -->

		<!--------------------------------------------------------------------------------------->


		<!--------------------------------------------------------------------------------------->
	</div>
	<!-- END MAIN -->

	<?php include '_footer.html'; ?>
</body>


</html>