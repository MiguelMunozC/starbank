<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='admin.php';</script>";
}
include "../metodos/metodos.php";
include "../conexion/conexion.php";

?>
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
            <li><a href="modificarCliente.php">Modificar</a></li>
              <li><a href="EliminarCliente.php">Eliminar</a></li>
              <li><a href="consultar.php">Consultar Saldo</a></li>
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
            <li><a >Entre mis Cuentas</a></li>
            <li><a href="terceros.php">A Terceros</a></li>
			<li><a class="button is-success" href="https://redtube.com">SALIR</a></li>
			
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
                Hola, <?php echo SelectNombre($conn, $_SESSION["user_id"]) ?>.
              </h1>
              <h2 class="subtitle">
                I hope you are having a great day!
              </h2>
            </div>
          </div>
        </section>
        <section class="info-tiles">
          <div class="tile is-ancestor has-text-centered">
           
          </div>
        </section>
        <div class="columns">
          <div class="column is-6">
           
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
