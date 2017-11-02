<html>
<head>
<title>PRUEBA CONEXION</title>
</head>
<body>

	<center><h1>Prueba</h1></center>
	
	<form>
		<input type="submit" value="ejecutar" name="ejecutar">
	</form>
	<?php  
// Create connection to Oracle 
$conn = oci_connect("ROLEJO", "332200aa", "localhost/XE"); 
 
if (!$conn) {    
  $m = oci_error();    
  echo $m['message'], "n";    
  exit; 
} else {    
  echo "Conexión con éxito a Oracle!"; } 
 
// Close the Oracle connection 
oci_close($conn); 
?>

</body>
</html>