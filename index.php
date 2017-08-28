

<?php 
	require 'functions.php';

	$work = readData();
	$workCompleted = readData('work', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>ToDo Apps</title>
</head>
<body>


<div class="container">
	<div class="row">
		<div class="col-md-12" style="text-align: center">
			<h1>Todo Apps</h1>
			<p>This is cteation by php apps for diploma student in the RRF.</p>
		</div>
	</div><!--end of upper site -->
	<div class="row">
		<div class="col-sm-12" style="text-align: center">
			<form action="#" method="POST">
				<input type="text" name="title" id="">
				<button class="btn btn-md bg-primary">Add</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6" style="text-align: center">
			<h2>Todo List</h2>
			<ul class="todo" id="todoList">
                <?php
                   foreach( $works as $work ){
                      echo '<li id="id_'.$work['id'].'">'. $work['name'].'</li>';
                        }
                ?>
            </ul>
		</div>
		<div class="col-md-6" style="text-align: center">
			<h2>Completed Task</h2>
			<ul class="todo" id="todoList">
                <?php
                   foreach( $works as $work ){
                      echo '<li id="id_'.$work['id'].'">'. $work['name'].'</li>';
                        }
                ?>
            </ul>
		</div>
	</div><!--end of lower site -->
</div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

	
</body>

</html>