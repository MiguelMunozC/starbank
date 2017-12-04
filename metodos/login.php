<?php

include "../conexion/conexion.php";

if(!empty($_POST)){
	if(isset($_POST["rut"]) &&isset($_POST["pass"])){
		if($_POST["rut"]!=""&&$_POST["pass"]!=""){
			
			
			$rut = $_POST["rut"];
			$pass= $_POST["pass"];
			$user_id=null;
			
			$stid = oci_parse($conn, "SELECT * FROM USUARIO where DNI= :rut AND PASSWORD=:pass");
			
			oci_bind_by_name($stid, ':rut', $rut);
			oci_bind_by_name($stid, ':pass', $pass);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$user_id=$row['ID_USUARIO'];
				ECHO $user_id;
				break;
				}
			
			if($user_id==null){
				//header ("Location: https://www.redtube.com");
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
						echo "funca";
						header ("Location: ../admin/admin.php");		
			}
		}
	}
}



?>