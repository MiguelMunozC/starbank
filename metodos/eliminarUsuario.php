<?php

include "../conexion/conexion.php";

$rut = $_POST['rut'];

echo $rut;

$stid = oci_parse($conn, 'begin ELIMINAR_USUARIO(:rut); END;');


oci_bind_by_name($stid, ':rut', $rut);

oci_execute($stid);

oci_free_statement($stid);
oci_close($conn);

?>