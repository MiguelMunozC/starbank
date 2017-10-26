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
					<li><a href="ModificarCliente.php">Modificar</a></li>
					<li><a href="EliminarCliente.php">Eliminar</a></li>
					<li><a>Consultar Saldo</a></li>
				</ul>
				<!--          <p class="menu-label">-->
				<!--            Administration-->
				<!--          </p>-->
				<!--          <ul class="menu-list">-->
				<!--            <li><a>Team Settings</a></li>-->
				<!--            <li>-->
				<!--              <a>Manage Your Team</a>-->
				<!--              <ul>-->
				<!--                <li><a>Members</a></li>-->
				<!--                <li><a>Plugins</a></li>-->
				<!--                <li><a>Add a member</a></li>-->
				<!--              </ul>-->
				<!--            </li>-->
				<!--            <li><a>Invitations</a></li>-->
				<!--            <li><a>Cloud Storage Environment Settings</a></li>-->
				<!--            <li><a>Authentication</a></li>-->
				<!--          </ul>-->
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
			<!--        <nav class="breadcrumb" aria-label="breadcrumbs">-->
			<!--          <ul>-->
			<!--            <li><a href="../../">Bulma</a></li>-->
			<!--            <li><a href="../../">Templates</a></li>-->
			<!--            <li><a href="../../">Examples</a></li>-->
			<!--            <li class="is-active"><a href="#" aria-current="page">Admin</a></li>-->
			<!--          </ul>-->
			<!--        </nav>-->
			<section class="hero is-info welcome is-small">
				<div class="hero-body">
					<div class="container">
						<h1 class="title">
							Hola, Usuario.
						</h1>
						<h2 class="subtitle">
							I hope you are having a great day!
						</h2>
					</div>
				</div>
			</section>
			<section class="info-tiles">
				<div class="tile is-ancestor has-text-centered">
					<div class="tile is-parent">
						<article class="tile is-child box">
							<p class="title">2.000 CLP</p>
							<p class="subtitle">Saldo</p>
						</article>
					</div>
					<div class="tile is-parent">
						<article class="tile is-child box">
							<p class="title">59k</p>
							<p class="subtitle">Products</p>
						</article>
					</div>
					<div class="tile is-parent">
						<article class="tile is-child box">
							<p class="title">3.4k</p>
							<p class="subtitle">Open Orders</p>
						</article>
					</div>
					<div class="tile is-parent">
						<article class="tile is-child box">
							<p class="title">19</p>
							<p class="subtitle">Exceptions</p>
						</article>
					</div>
				</div>
			</section>
			<div class="columns">
				<div class="column is-6">
					<div class="card events-card">
						<header class="card-header">
							<p class="card-header-title">
								Events
							</p>
							<a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
							</a>
						</header>
						<div class="card-table">
							<div class="content">
								<table class="table is-fullwidth is-striped">
									<tbody>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									<tr>
										<td width="5%"><i class="fa fa-bell-o"></i></td>
										<td>Lorum ipsum dolem aire</td>
										<td><a class="button is-small is-primary" href="#">Action</a></td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<footer class="card-footer">
							<a href="#" class="card-footer-item">View All</a>
						</footer>
					</div>
				</div>
				<div class="column is-6">
					<div class="card">
						<header class="card-header">
							<p class="card-header-title">
								Inventory Search
							</p>
							<a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
							</a>
						</header>
						<div class="card-content">
							<div class="content">
								<div class="control has-icons-left has-icons-right">
									<input class="input is-large" type="text" placeholder="">
									<span class="icon is-medium is-left">
                      <i class="fa fa-search"></i>
                    </span>
									<span class="icon is-medium is-right">
                      <i class="fa fa-check"></i>
                    </span>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<header class="card-header">
							<p class="card-header-title">
								User Search
							</p>
							<a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
							</a>
						</header>
						<div class="card-content">
							<div class="content">
								<div class="control has-icons-left has-icons-right">
									<input class="input is-large" type="text" placeholder="">
									<span class="icon is-medium is-left">
                      <i class="fa fa-search"></i>
                    </span>
									<span class="icon is-medium is-right">
                      <i class="fa fa-check"></i>
                    </span>
								</div>
							</div>
						</div>
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
