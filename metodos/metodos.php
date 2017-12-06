<?php


function SelectNombre($conn, $id){		
		
		$stid = oci_parse($conn, "SELECT NOMBRES FROM USUARIO where ID_USUARIO= :id");
			
			oci_bind_by_name($stid, ':id', $id);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$nombre=$row['NOMBRES'];
			
				break;
				}
		return $nombre;


}
function SelectCuentaCorriente($conn, $id){	
			
		
		$stid = oci_parse($conn, "SELECT * FROM PRODUCTO where ID_USUARIO=:id AND ID_TIPO_CUENTA=1");
			
			oci_bind_by_name($stid, ':id', $id);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$saldoCC=$row['SALDO'];
			
				break;
				}
		return $saldoCC;


}
function SelectLineaCredito($conn, $id){		
		
		$stid = oci_parse($conn, "SELECT SALDO FROM PRODUCTO where ID_USUARIO= :id AND ID_TIPO_CUENTA=2");
			
			oci_bind_by_name($stid, ':id', $id);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$saldoLC=$row['SALDO'];
			
				break;
				}
		return $saldoLC;


}function SelectTarjetaCredito($conn, $id){		
		
		$stid = oci_parse($conn, "SELECT SALDO FROM PRODUCTO where ID_USUARIO= :id AND ID_TIPO_CUENTA=3");
			
			oci_bind_by_name($stid, ':id', $id);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$saldoTC=$row['SALDO'];
			
				break;
				}
		return $saldoTC;


}

function CuentaCorriente($conn, $id){		
		
		$stid = oci_parse($conn, "SELECT ID_PRODUCTO FROM PRODUCTO where ID_USUARIO= :id AND ID_TIPO_CUENTA=1");
			
			oci_bind_by_name($stid, ':id', $id);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$idProducto=$row['ID_PRODUCTO'];
			
				break;
				}
		return $idProducto;


}
function LineaCredito($conn, $id){		
		
		$stid = oci_parse($conn, "SELECT ID_PRODUCTO FROM PRODUCTO where ID_USUARIO= :id AND ID_TIPO_CUENTA=2");
			
			oci_bind_by_name($stid, ':id', $id);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$idProducto=$row['ID_PRODUCTO'];
			
				break;
				}
		return $idProducto;


}
function TarjetaDeCredito($conn, $id){		
		
		$stid = oci_parse($conn, "SELECT ID_PRODUCTO FROM PRODUCTO where ID_USUARIO= :id AND ID_TIPO_CUENTA=3");
			
			oci_bind_by_name($stid, ':id', $id);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$idProducto=$row['ID_PRODUCTO'];
			
				break;
				}
		return $idProducto;


}


?>