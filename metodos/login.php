<?php

include "../conexion/conexion.php";

if(!empty($_POST)){
	if(isset($_POST["rut"]) &&isset($_POST["pass"])){
		if($_POST["rut"]!=""&&$_POST["pass"]!=""){
			
			
			$rut = $_POST["rut"];
			$pass= $_POST["pass"];
			$user_id=null;
			
			$stid = oci_parse($conn, "SELECT * FROM USUARIO where DNI= :rut AND PASSWORD=:pass AND ACTIVO = 'Y'");
			
			oci_bind_by_name($stid, ':rut', $rut);
			oci_bind_by_name($stid, ':pass', $pass);
			oci_execute($stid);
			
			while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
				$user_id=$row['ID_USUARIO'];
				ECHO $user_id;
				break;
				}
			
			if($user_id==null){
				print "<script>alert(\"Datos Erroneos!\");window.location='../Login.php';</script>";
				
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
						echo "funca";
						header ("Location: ../admin/admin.php");		
			}
		}else{
		print "<script>alert(\"Datos Erroneos!\");window.location='../Login.php';</script>";
	}
	}else{
		print "<script>alert(\"Datos Erroneos!\");window.location='../Login.php';</script>";
	}
}else{
		print "<script>alert(\"Datos Erroneos!\");window.location='../Login.php';</script>";
	}



?>