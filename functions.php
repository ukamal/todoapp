
<?php 
	
	try {
		$conn = new PDO('mysql:host=127.0.0.1;dbname=todo', 'root', '');
	}catch( PDOException $e){
		echo 'very complex programming';
	}

	function insertTodo($data){
		global $conn;
		$sql = "INSERT INTO `works`(`name`) VALUES ('$title')";
		$stmt = $conn->prepare($sql);

		return $stmt->execute(array(
			':title' => $data
			));
	}


	function readData($table = 'works', $done = 0){
		global $conn;
		$where = '';

		if ( $done == 1) {
			$where = " WHERE done = $done";
		}

		$sql = "SELECT * RFOM $table WHERE done = $done";
		$res = $conn->query($sql);

		 // return $res->fetchAll();
	}
	
?>


