<?php

//DB Connect
include('../assets/config/db_connect.php');

if (isset($_POST['submit'])) {
	$sql = "INSERT INTO Services(name, longname, tagline, description, point_1, point_2, point_3, point_4, section_2_title, section_3_title, section_3_text_top, section_3_text_bottom) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "ssssssssssss", $_POST['name'], $_POST['longname'], $_POST['tagline'], $_POST['description'], $_POST['point_1'], $_POST['point_2'], $_POST['point_3'], $_POST['point_4'], $_POST['section_2_title'], $_POST['section_3_title'], $_POST['s_3_top'], $_POST['s_3_bottom']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}

	$sql = "SELECT service_id FROM Services WHERE name=?";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "s", $_POST['name']);
	mysqli_stmt_execute($stmt);
	$results = mysqli_stmt_get_result($stmt);
	while ($r = mysqli_fetch_array($results)) {
		$current_id = $r['service_id'];
	}
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}

	$sql = "INSERT INTO Services_Cards(service_id, title, text) VALUES(?,?,?)";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $current_id, $_POST['card_title_1'], $_POST['card_text_1']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}

	$sql = "INSERT INTO Services_Cards(service_id, title, text) VALUES(?,?,?)";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $current_id, $_POST['card_title_2'], $_POST['card_text_2']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}

	$sql = "INSERT INTO Services_Cards(service_id, title, text) VALUES(?,?,?)";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $current_id, $_POST['card_title_3'], $_POST['card_text_3']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}

	$sql = "INSERT INTO Services_FAQ(service_id, question, answer) VALUES(?,?,?)";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $current_id, $_POST['question-1'], $_POST['answer-1']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}

	$sql = "INSERT INTO Services_FAQ(service_id, question, answer) VALUES(?,?,?)";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $current_id, $_POST['question-2'], $_POST['answer-3']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}

	$sql = "INSERT INTO Services_FAQ(service_id, question, answer) VALUES(?,?,?)";
	$stmt = mysqli_stmt_init($dbconnect);
	mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "iss", $current_id, $_POST['question-3'], $_POST['answer-3']);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	if (mysqli_affected_rows($dbconnect) >= 0) {
		$success = 'success';
	} else {
		$success = 'error';
		header('Location: /admin/service/add.php?success=' . $success);
	}
	
	mysqli_close($dbconnect);

	header('Location: /admin/service/add.php?success=' . $success);

}
