<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - StarBank</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	      integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<!-- Bulma Version 0.6.0 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css"
	      integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous"/>
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>
<body>

<!-- START NAV -->
<nav class="navbar is-white">
	<div class="container">
		<div class="navbar-brand">
			<a class="navbar-item brand-text" href="admin.php">
				<i class="fa fa-star" aria-hidden="true"></i>
				StarBank
			</a>
			<div class="navbar-burger burger" data-target="navMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</nav>
<!-- END NAV -->
<div class="container">
	<div class="columns">
		<div class="column is-3">
			<aside class="menu">
				<p class="menu-label">
					Cliente
				</p>
				<ul class="menu-list">
					<li><a href="Crear.php">Crear</a></li>
<<<<<<< HEAD:admin/modificarCliente.php
					<li><a href="modificarCliente.php">Modificar</a></li>
					<li><a>Eliminar</a></li>
					<li><a href="consultar.php">Consultar Saldo</a></li>
=======
					<li><a href="ModificarCliente.php">Modificar</a></li>
					<li><a href="EliminarCliente.php">Eliminar</a></li>
					<li><a>Consultar Saldo</a></li>
>>>>>>> 0f17da70fc5851948aa75de8b1670c242390c96a:admin/ModificarCliente.php
				</ul>
				<p class="menu-label">
					Transacciones
				</p>
				<ul class="menu-list">
					<li><a>Entre mis Cuentas</a></li>
					<li><a>A Terceros</a></li>
				</ul>
			</aside>
		</div>


		<div class="column is-9">

			<div class="colums is-8 field has-addons has-addons-centered">
				<div class="column is-9">
					<div class="card is-primary">
						<header class="card-header">
							<p class="card-header-title">
								Modificar Cliente
							</p>
						</header>
						<div class="card-content">
							<div class="content">
								<div class="field ">
									<div class="label is-normal">
										<label class="label">Rut</label>
									</div>
									<div class="field-body">
										<div class="field">
											<div class="control">
												<input class="input" type="text" placeholder="Rut">
											</div>
										</div>
									</div>
								</div>

								<div class="field ">
									<div class="label is-normal">
										<label class="label">Nombre</label>
									</div>
									<div class="field-body">
										<div class="field">
											<div class="control">
												<input class="input" type="text" placeholder="Nombre">
											</div>
										</div>
									</div>
								</div>

								<div class="field ">
									<div class="label is-normal">
										<label class="label">Apellidos</label>
									</div>
									<div class="field-body">
										<div class="field">
											<div class="control">
												<input class="input" type="text" placeholder="Apellidos">
											</div>
										</div>
									</div>
								</div>

								<div class="field ">
									<div class="label is-normal">
										<label class="label">Password</label>
									</div>
									<div class="field-body">
										<div class="field">
											<div class="control">
												<input class="input" type="password" placeholder="Password">
											</div>
										</div>
									</div>
								</div>

								<div class="field ">
									<div class="label is-normal">
										<label class="label">E-mail</label>
									</div>
									<div class="field-body">
										<div class="field">
											<div class="control">
												<input class="input" type="email" placeholder="E-mail">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<footer class="card-footer">
							<a href="#" class="card-footer-item">Modificar</a>
							<a href="#" class="card-footer-item">Salir</a>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script async type="text/javascript" src="../js/bulma.js"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>

<script>

</script>

</body>
</html>
