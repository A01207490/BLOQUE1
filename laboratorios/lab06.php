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
					<a class="nav-link active" id="watermark-tab" data-toggle="tab" href="#watermark" role="tab" aria-controls="watermark" aria-selected="true">Watermark</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="estilo-tab" data-toggle="tab" href="#estilo" role="tab" aria-controls="estilo" aria-selected="false">Style</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " id="helpbtn-tab" data-toggle="tab" href="#helpbtn" role="tab" aria-controls="helpbtn" aria-selected="false">Dynamic Help Btn</a>
				</li>

				<li class="nav-item">
					<a class="nav-link " id="timer-tab" data-toggle="tab" href="#timer" role="tab" aria-controls="timer" aria-selected="false">Writer with timer</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="drag-tab" data-toggle="tab" href="#drag" role="tab" aria-controls="drag" aria-selected="false">Drag and Drop</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" id="preguntas-tab" data-toggle="tab" href="#preguntas" role="tab" aria-controls="preguntas" aria-selected="false">Preguntas</a>
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

				<!-- Watermark -->
				<div class="tab-pane active" id="watermark" role="tabpanel" aria-labelledby="watermark-tab">
					<div class="container">
						<div class="row">
							<div class="col-sm">
								<div class="d-flex flex-row justify-content-center align-items-center">
									<div class="p-2 myContainer">

										<div id="carousel" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" src="resources/images/zelda.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="resources/images/metroid.png">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="resources/images/super_mario.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="resources/images/brothers.jpg">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src="resources/images/final_fantasy_xv_noctis_luna.jpg">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
										<p id="text">
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Watermark -->

				<!--------------------------------------------------------------------------------------->

				<!-- Estilo -->
				<div class="tab-pane" id="estilo" role="tabpanel" aria-labelledby="estilo-tab">
					<!-- Container -->
					<div class="container">
						<div class="row">
							<div class="col-sm">
								<div class="d-flex flex-row justify-content-center align-items-end" style="height:250px">
									<div class="p-2">
										<h1 onmouseover="spooky(this)" onmouseout="normal(this)">Glide the mouse over!</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Container -->
				</div>
				<!-- End Estilo -->

				<!--------------------------------------------------------------------------------------->

				<!-- Writer with help button -->
				<div class="tab-pane" id="helpbtn" role="tabpanel" aria-labelledby="helpbtn-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<!-- Word and Help button -->
								<div class="row">
									<div class="col-sm">
										<div class="d-flex flex-row justify-content-start align-items-end">
											<div class="p-2">
												<label for="enterWord" id="">word</label>
											</div>
											<div class="p-2">
												<a data-toggle="tooltip" title="Write the word asap" data-placement="right">
													<i class="material-icons">
														help
													</i>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- End Word and Help button -->
								<!-- Input Word -->
								<div class="row">
									<div class="col-sm">
										<div class="d-flex flex-row justify-content-start align-items-end">
											<div class="p-2">
												<input type="text" class="form-control" id="" placeholder="Enter word" size="20" value="">
											</div>
										</div>
									</div>
								</div>
								<!-- End Input Word -->
							</div>
						</form>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Writer with help button -->

				<!--------------------------------------------------------------------------------------->

				<!-- Writer with timer -->
				<div class="tab-pane " id="timer" role="tabpanel" aria-labelledby="timer-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<!-- Word, Timer and Help button -->
								<div class="row">
									<div class="col-sm">
										<div class="d-flex flex-row justify-content-start align-items-center" style="height: 30px">

											<div class="p-2">
												<label for="enterWord" id="word">word</label>
											</div>



											<div class="p-2">
												<a data-toggle="tooltip" title="Write the word before the time ends" data-placement="right">
													<i class="material-icons">
														help
													</i>
												</a>
											</div>

											<div class="p-2">
												<p id="demo">

												</p>
											</div>

										</div>
									</div>
								</div>
								<!-- End Word and Help button -->
								<!-- Input Word -->
								<div class="row">
									<div class="col-sm">
										<div class="d-flex flex-row justify-content-start align-items-center">
											<div class="p-2">
												<input type="text" class="form-control" id="enterWord" placeholder="Enter word" size="20" value="">
											</div>
										</div>
									</div>
								</div>
								<!-- End Input Word -->
							</div>
						</form>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Writer with timer -->

				<!--------------------------------------------------------------------------------------->

				<!-- Drag -->
				<div class="tab-pane" id="drag" role="tabpanel" aria-labelledby="drag-tab">
					<!-- Container -->
					<div class="container">

						<div class="row">
							<div class="col-sm">
								<div class="d-flex flex-row justify-content-center align-items-center" style="height: 60px">

									<div class="m-0">
										<h5>Drag the character into the correct background</h5>
									</div>

								</div>
							</div>
						</div>

						<div class="row" style="height: 180px">
							<div class="col-sm">
								<div class="d-flex flex-row justify-content-around align-items-center">
									<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event, this)">
									</div>
									<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event, this)">
									</div>
									<div id="div3" ondrop="drop(event)" ondragover="allowDrop(event, this)">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								<div class="d-flex flex-row justify-content-around align-items-center ">

									<div class="p-3">
										<img id="drag1" src="resources/images/samus2.png" draggable="true" ondragstart="drag(event)" height="180">
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- End Container -->
				</div>
				<!-- End Drag -->

				<!--------------------------------------------------------------------------------------->

				<!-- Preguntas -->
				<div class="tab-pane" id="preguntas" role="tabpanel" aria-labelledby="preguntas-tab">
					<!-- Container -->
					<div class="container">
						<form>
							<div class="form-group">
								<h5>
									¿Cuáles son las diferencias entre los posibles valores de la propiedad position?
								</h5>
								<p>
									<table class="table text-white ">
										<!-- Header -->
										<thead class="thead-dark">
											<tr>
												<th>Position</th>
												<th>Description</th>
											</tr>
										</thead>
										<!-- End Header -->
										<!-- Static -->
										<tr>
											<td>static</td>
											<td>
												The element is not positioned in any special way; it is always positioned according to the normal flow of the page.
											</td>

										</tr>
										<!-- End Static -->
										<!-- Relative -->
										<tr>
											<td>relative</td>
											<td>
												The element is positioned relative to its normal position.
											</td>

										</tr>
										<!-- End Relative -->
										<!-- Fixed -->
										<tr>
											<td>fixed</td>
											<td>
												The element is positioned is positioned relative to the viewport, which means it always stays in the same place even if the page is scrolled.
											</td>

										</tr>
										<!-- End Fixed -->
										<!-- Absolute -->
										<tr>
											<td>absolute</td>
											<td>The element is positioned relative to the nearest positioned ancestor (instead of positioned relative to the viewport, like fixed).</td>

										</tr>
										<!-- End Absolute -->

									</table>
									<!-- End Table -->
									[1]
								</p>

								<h5>
									¿Cuáles son los valores estándar para la propiedad visibility?
								</h5>
								<p>
									<table class="table text-white ">
										<!-- Header -->
										<thead class="thead-dark">
											<tr>
												<th>Value</th>
												<th>Description</th>
											</tr>
										</thead>
										<!-- End Header -->
										<!-- Static -->
										<tr>
											<td>visible</td>
											<td>
												The element is visible.
											</td>

										</tr>
										<!-- End Static -->
										<!-- Relative -->
										<tr>
											<td>hidden</td>
											<td>
												The element is hidden (but still takes up space)
											</td>

										</tr>
										<!-- End Relative -->
										<!-- Fixed -->
										<tr>
											<td>collapse</td>
											<td>
												This value removes a row or column, but it does not affect the table layout.
											</td>

										</tr>
										<!-- End Fixed -->
										<!-- Absolute -->
										<tr>
											<td>initial</td>
											<td>
												Sets this property to its default value.
											</td>

										</tr>
										<!-- End Absolute -->
										<!-- Absolute -->
										<tr>
											<td>inherit</td>
											<td>
												Inherits this property from its parent element.
											</td>

										</tr>
										<!-- End Absolute -->

									</table>
									<!-- End Table -->
									[2]
								</p>

								<h5>
									¿Qué es el zIndex y para qué sirve?

								</h5>
								<p>
									The z-index property specifies the stack order of an element. An element with greater stack order is always in front of an element with a lower stack order. [3]
								</p>

								<h5>
									Referencias.
								</h5>
								<p>
									<ul>
										<li>
											[1] https://www.w3schools.com/css/css_positioning.asp
										</li>
										<li>
											[2] https://www.w3schools.com/cssref/pr_class_visibility.asp
										</li>
										<li>
											[3] https://www.w3schools.com/cssref/pr_pos_z-index.asp
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