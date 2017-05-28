<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="Team10TableVert.css">
	<title>Team 10 Scheduler</title>
</head>

	<?php

	$servername = "localhost";
	$username = "root";
	$password = "St200001081!";
	$database = "profiler";

	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {
    	die('<p style="color:red">'."Database connection failed: " . $conn->connect_error);
	}
	
	$firstname = $_GET['Name'];

	$sql = "SELECT * FROM users WHERE firstname='$firstname'";
	$result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
        	if($row = $result->fetch_assoc()) {
        		$bgcolour = $row["bgcolour"];
        	}
        }
	echo '<body style="background-color:' . $bgcolour . ';">';
	echo '<h1 id="title">Welcome ' . $firstname . '</h1>';

	?>

	<div id="trash" ondrop="dropped(event)" ondragover="allowDrop(event)">
		<img id="garbage" src="garbagecan.png">
	</div>

	<div id="fileUpload">
        <h3 for="files">Select Images to Upload: </h3>
        <input id="files" type="file" multiple/>
        <output id="result" />
    </div>

    <script src="upload1.js"></script>

	<table id="scheduleTable">
		<tr>
			<th>Period:</th>
			<th>Activity</th>
		</tr>
		<tr>
			<th>Period 1</th>
			<td><div id="periodOne" ondrop="drop(event)" ondragover="allowDrop(event)"> </div></td>
		</tr>
		<tr>
			<th>Period 2</th>
			<td><div id="periodTwo" ondrop="drop(event)" ondragover="allowDrop(event)"> </div></td>
		</tr>
		<tr>
			<th>Lunch</th>
			<td><div id="lunch" ondrop="drop(event)" ondragover="allowDrop(event)"> </div></td>
		</tr>
		<tr>
			<th>Period 3</th>
			<td><div id="periodThree" ondrop="drop(event)" ondragover="allowDrop(event)"> </div></td>
		</tr>
		<tr>
			<th>Period 4</th>
			<td><div id="periodFour" ondrop="drop(event)" ondragover="allowDrop(event)"> </div></td>


		<div id="imageBank">
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop1" class="droppy" draggable="true" ondragstart="drag(event)" src="art.jpeg">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop2" class="droppy" draggable="true" ondragstart="drag(event)" src="basketball.png">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop3" class="droppy" draggable="true" ondragstart="drag(event)" src="books.jpg">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop4" class="droppy" draggable="true" ondragstart="drag(event)" src="catchUp.jpg">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop5" class="droppy" draggable="true" ondragstart="drag(event)" src="football.png">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop6" class="droppy" draggable="true" ondragstart="drag(event)" src="lunch.png">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop7" class="droppy" draggable="true" ondragstart="drag(event)" src="movie.jpeg">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop8" class="droppy" draggable="true" ondragstart="drag(event)" src="peerBuddies.jpg">
		</div>
		<div class="bankWrapper" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img id="dragDrop9" class="droppy" draggable="true" ondragstart="drag(event)" src="soccer.jpg">
		</div>
		</div>
		<script src="dragDrop1.js"></script>
</body>
</html>