<?php 
	//заголовок
	header("Content-Type: application/json");
	//переменные полей формы
	$name = $_POST['name-poject'];
	$upload = $_POST['upload'];
	$url = $_POST['url-project'];
	$txt = $_POST['description-project'];

	// эмуляция действий
	
	sleep(1); 
	$result = false;

	 //возврат данных
	echo json_encode(array(
		'status' => $result
		));

?>