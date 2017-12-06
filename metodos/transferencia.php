<?php

include "../conexion/conexion.php";



$origen = $_POST['origen'];
$destino = $_POST['cuenta'];
$monto = $_POST['monto'];

			$stid = oci_parse($conn, "Select SALDO FROM PRODUCTO WHERE NUMERO_CUENTA = :destino ");
			
			oci_bind_by_name($stid, ':destino', $destino);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$validacion=$row['SALDO'];
			
				break;
			}
			if($validacion != null){
				
			$stid = oci_parse($conn, 'begin EntreCuenta(:origen, :destino ,:monto ,:exito); END;');

			oci_bind_by_name($stid, ':origen', $origen);
			oci_bind_by_name($stid, ':destino', $destino);
			oci_bind_by_name($stid, ':monto', $monto);
			oci_bind_by_name($stid, ':exito', $exito, 40);
			oci_execute($stid);
			
			oci_free_statement($stid);
				oci_close($conn);
			
			
			if($exito == "Exitoso"){
				
				print "<script>alert(\"Transferencia Exitosa!\");window.location='../admin/terceros.php';</script>";
			}else{
				
				print "<script>alert(\"Monto Insuficiente\");window.location='../admin/terceros.php';</script>";
			}


			
			}else{
				print "<script>alert(\"Cuneta No existente\");window.location='../admin/terceros.php';</script>";
			}
		
		
?>