<?php 

include('_connect.php');

if($_GET['type'] == 'addrow'){

	$tbl = $_GET['tbl'];

	$sql = "INSERT INTO $tbl VALUES('', '".implode("','", $_POST)."')";

	mysqli_query($con, $sql);

}