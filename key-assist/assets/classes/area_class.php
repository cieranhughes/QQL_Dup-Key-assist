<?php

class Area {
	public $name;
	public $longname;
	public $description;
	public $point_1;
	public $point_2;
	public $point_3;
	public $point_4;
	public $section_2_title;
	public $section_4_title;
	public $card_section = [];
	public $card_title = [];
	public $card_text = [];
	public $FAQ_question = [];
	public $FAQ_answer = [];
	public $bullet_text = [];

	function __construct($id)
	{
		//Connection File
		include('assets/config/db_connect.php');

		$sql = "SELECT * FROM Area";
		$stmt = mysqli_stmt_init($dbconnect);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_execute($stmt);
		$results = mysqli_stmt_get_result($stmt);
		while ($r = mysqli_fetch_array($results)) {
			$this->name = $r['name'];
			$this->longname = $r['longname'];
			$this->description = $r['description'];
			$this->point_1 = $r['point_1'];
			$this->point_2 = $r['point_2'];
			$this->point_3 = $r['point_3'];
			$this->point_4 = $r['point_4'];
			$this->section_2_title = $r['section_2_title'];
			$this->section_4_title = $r['section_4_title'];
		}
		mysqli_stmt_close($stmt);

		$sql = "SELECT card_section, title, text FROM Area_Cards WHERE area_id=?";
		$stmt = mysqli_stmt_init($dbconnect);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "i", $id);
		mysqli_stmt_execute($stmt);
		$results = mysqli_stmt_get_result($stmt);
		while ($r = mysqli_fetch_array($results)) {
			$this->card_section[] = $r['card_section'];
			$this->card_title[] = $r['title'];
			$this->card_text[] = $r['text'];
		}
		mysqli_stmt_close($stmt);

		mysqli_close($dbconnect);
	}
}
