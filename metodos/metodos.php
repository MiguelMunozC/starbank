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

?>