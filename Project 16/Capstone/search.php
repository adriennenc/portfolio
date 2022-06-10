<?php
	include 'db.php';
?>


<h1>Search page</h1>
<?php
	if (isset($_POST['submit'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM owner WHERE fname LIKE '%$search%' OR lname LIKE '%$search%' OR dob LIKE '%$search%' OR accountid LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		
		
		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<div>
			<h3>".$row['fname']."</h3>
			<h3>".$row['lname']."</h3>
			<h3>".$row['dob']."</h3>
			<h3>".$row['accountid']."</h3>
			</div>"
		
		} else {
			echo "There are no results matching your resarch!";
		}
	}
	
	?>