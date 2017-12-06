<!DOCTYPE html>

<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	header ("Location: ../login.php");	
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
                         <li><a href="TransferenciaEntreMisCuentas.php">Entre mis Cuentas</a></li>
                         <li><a href="terceros.php">A Terceros</a></li>
                    </ul>
               </aside>
          </div>
          <div class="column is-9 field has-addons has-addons-centered">
               <div class="column is-6 ">
                    <table class="table">
                         <thead>
                         <tr>
                              <th>Cuentas</th>
                              <th>Saldo</th>
                         </tr>

                         </thead>
                         <tfoot>
                         <tr>
                              <td>Cuenta Corriente</td>
                              <td><?php echo "$",SelectCuentaCorriente($conn, $_SESSION["user_id"]); ?></td>
                         </tr>
                         <tr>
                              <td>Linea de Credito</td>
                              <td><?php echo "$",SelectLineaCredito($conn, $_SESSION["user_id"]); ?></td>
                         </tr>
                         <tr>
                              <td>Tarjeta de Credito</td>
                              <td><?php echo "$",SelectTarjetaCredito($conn, $_SESSION["user_id"]); ?> USD</td>
                         </tr>


                         </tfoot>


                    </table>
                    <a class="button is-link is-inverted" href="logout.php">Salir</a>
               </div>
          </div>
     </div>
</div>
<script async type="text/javascript" src="../js/bulma.js"></script>


</body>
</html>
