<?php

include "../conexion/conexion.php";



$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$rut = $_POST['rut'];
$password = $_POST['password'];


$stid = oci_parse($conn, "SELECT DNI FROM USUARIO where DNI= :rut ");
			
			oci_bind_by_name($stid, ':rut', $rut);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$validacion=$row['DNI'];
			
				break;
			}
			if($validacion != null){


			$stid = oci_parse($conn, 'begin ACTUALIZAR_USUARIO(:rut, :nombre, :apellido, :password, :email); END;');

			oci_bind_by_name($stid, ':rut', $rut);
			oci_bind_by_name($stid, ':nombre', $nombre);
			oci_bind_by_name($stid, ':apellido', $apellido);
			oci_bind_by_name($stid, ':password', $password);
			oci_bind_by_name($stid, ':email', $email);

			oci_execute($stid);

			oci_free_statement($stid);
			oci_close($conn);
			print "<script>alert(\"Cambio Exitoso!\");window.location='../admin/ModificarCliente.php';</script>";
			}
			else{
				print "<script>alert(\"RUT NO EXISTE!\");window.location='../admin/ModificarCliente.php';</script>";
			}

?>