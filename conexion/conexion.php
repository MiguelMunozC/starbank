<?php

$user = "ROLEJO";
$pswrd = "332200aa";
$db = "ROLEJO";

$conn = oci_connect($user, $pswrd, "localhost/XE");

if (!$conn) {
	$m = oci_error();
	echo $m['message'], "n";
	exit;
} else {
	
}

?>