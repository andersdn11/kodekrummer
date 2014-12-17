<?php 

include('_connect.php');

if($_GET['type'] == 'tabel'){

	if($_GET['tbl']){
		$tbl = $_GET['tbl'];

		$sql = 'DROP TABLE '.$tbl;
		mysqli_query($con, $sql);

		echo "true";
	} else {
		echo "false";
	}
	
}