<?php
$connection = mysqli_connect("localhost", "root", "", "measurements");
if (isset($_POST["table"])) {

	$table_name = $_POST["table"];
	$first_column = $_POST["first"];
	$tpd = $_POST["tpd"];
	$len = $_POST["len"];
	//echo $table_name . " " . $first_column;
	$query = "ALTER TABLE `$table_name` ADD column `$first_column` VARCHAR(60)";
	$result = mysqli_query($connection, $query);
	if (!empty($result)) {
		echo 'Data Inserted';
	} else {
		echo 'Data not Inserted';
	}
}
