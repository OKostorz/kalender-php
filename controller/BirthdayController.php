<?php
	require(ROOT . "model/BirthdayModel.php");

	function index(){
		$data = getDataList();
		
		render("birthday/index", array('datas' => $data));
	}

	function create(){
		render("birthday/create");
	}

	function createSave(){
		if (isset($_POST['person']) && isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {

			createBirthday($_POST['person'], $_POST['day'], $_POST['month'], ($_POST['year']));
			}

			header("Location:" . URL . "birthday/index");
	}

	function edit($id){
		render("birthday/edit", array(
			"data" => getBirthday($id)
			));
	}

	function editSave(){
		if (!editBirthday()) {

			header("Location:" . URL . "error/index");
			exit();
		}

			header("Location:" . URL . "birthday/index");
	}

	function error(){

	}

	function delete($id){
		if (!deleteBirthday($id)) {

			header("Location:" . URL . "error/index");
			exit();
		}

			header("Location:" . URL . "birthday/index");

	}	