<?php 

include('_connect.php');


if($_GET['type'] == 'tabel'){

	if($_GET['old'] || $_GET['new']){
		$old = $_GET['old'];
		$new = $_GET['new'];

		$sql = "RENAME TABLE $old TO $new";
		mysqli_query($con, $sql);


		$path = '../database.sql';
		$contents = file_get_contents($path);
		$contents = str_replace($old, $new,$contents);
		file_put_contents($path,$contents);

		echo "true";
	}
	
}

if($_GET['type'] == 'tblfield'){

}

if($_GET['type'] == 'tblrow'){

}