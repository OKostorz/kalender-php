<?php

require(ROOT . "model/HomeModel.php");

function index()
{
	header("Location:" . URL . "birthday/index");	
}

function exampleOne()
{
	echo "Dit is het eerste voorbeeld";
}
