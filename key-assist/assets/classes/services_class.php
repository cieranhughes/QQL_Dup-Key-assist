<?php

class Services
{
	public $name;
	public $longname;
	public $tagline;
	public $description;
	public $point_1;
	public $point_2;
	public $point_3;
	public $point_4;
	public $section_2_title;
	public $section_3_title;
	public $section_3_text_top;
	public $section_3_text_bottom;
	public $card_title = [];
	public $card_text = [];
	public $FAQ_question = [];
	public $FAQ_answer = [];
	public $bullet_text = [];

	function __construct($id)
	{
		//Connection File
		include('assets/config/db_connect.php');

		$sql = "SELECT * FROM Services WHERE service_id=?";
		$stmt = mysqli_stmt_init($dbconnect);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
		$results = mysqli_stmt_get_result($stmt);
		while ($r = mysqli_fetch_array($results)) {
			$this->name = $r['name'];
			$this->longname = $r['longname'];
			$this->tagline = $r['tagline'];
			$this->description = $r['description'];
			$this->point_1 = $r['point_1'];
			$this->point_2 = $r['point_2'];
			$this->point_3 = $r['point_3'];
			$this->point_4 = $r['point_4'];
			$this->section_2_title = $r['section_2_title'];
			$this->section_3_title = $r['section_3_title'];
			$this->section_3_text_top = $r['section_3_text_top'];
			$this->section_3_text_bottom = $r['section_3_text_bottom'];
		}
		mysqli_stmt_close($stmt);

		$sql = "SELECT title, text FROM Services_Cards WHERE service_id=?";
		$stmt = mysqli_stmt_init($dbconnect);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
		$results = mysqli_stmt_get_result($stmt);
		while ($r = mysqli_fetch_array($results)) {
			$this->card_title[] = $r['title'];
			$this->card_text[] = $r['text'];
		}
		mysqli_stmt_close($stmt);

		$sql = "SELECT question, answer FROM Services_FAQ WHERE service_id=?";
		$stmt = mysqli_stmt_init($dbconnect);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
		$results = mysqli_stmt_get_result($stmt);
		while ($r = mysqli_fetch_array($results)) {
			$this->FAQ_question[] = $r['question'];
			$this->FAQ_answer[] = $r['answer'];
		}
		mysqli_stmt_close($stmt);

		$sql = "SELECT bullet_text FROM Services_Section_Bullets WHERE service_id=?";
		$stmt = mysqli_stmt_init($dbconnect);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
		$results = mysqli_stmt_get_result($stmt);
		while ($r = mysqli_fetch_array($results)) {
			$this->bullet_text[] = $r['bullet_text'];
		}
		mysqli_stmt_close($stmt);

		mysqli_close($dbconnect);
	}
}