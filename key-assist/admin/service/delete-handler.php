<?php

//DB Connect
include('../assets/config/db_connect.php');

$sql = "DELETE FROM Services_Section_Bullets WHERE service_id=?;";
$stmt = mysqli_stmt_init($dbconnect);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $_GET['id']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if (mysqli_affected_rows($dbconnect) >= 0) {
	$success = 'success';
} else {
	$success = 'error';
	header('Location: /admin/service/edit.php?success=' . $success);
}

$sql = "DELETE FROM Services_Cards WHERE service_id=?;";
$stmt = mysqli_stmt_init($dbconnect);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $_GET['id']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if (mysqli_affected_rows($dbconnect) >= 0) {
	$success = 'success';
} else {
	$success = 'error';
	header('Location: /admin/service/edit.php?success=' . $success);
}

$sql = "DELETE FROM Services_FAQ WHERE service_id=?;";
$stmt = mysqli_stmt_init($dbconnect);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $_GET['id']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

if (mysqli_affected_rows($dbconnect) >= 0) {
	$success = 'success';
} else {
	$success = 'error';
	header('Location: /admin/service/edit.php?success=' . $success);
}

$sql = "DELETE FROM Services WHERE service_id=?;";
$stmt = mysqli_stmt_init($dbconnect);
mysqli_stmt_prepare($stmt, $sql);
mysqli_stmt_bind_param($stmt, "s", $_GET['id']);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);



if (mysqli_affected_rows($dbconnect) >= 0) {
	$success = 'success';
	header('Location: /admin/service/edit.php?success=' . $success);
} else {
	$success = 'error';
	header('Location: /admin/service/edit.php?success=' . $success);
}
