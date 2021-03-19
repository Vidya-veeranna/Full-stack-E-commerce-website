<?php 
include_once 'config.php';

if (isset($_POST['state_name'])) {
		$s=$_POST['state_name'];
	$q = "SELECT state_id FROM `state` where state_name= '$s'";
	$r = $db->query($q);
	while ($row = $r->fetch_assoc()) {
		$query = "SELECT * FROM `city` where state_id= $row[state_id]";
		$result = $db->query($query);
	}
	if ($result->num_rows > 0 ) {
			echo '<option value="">Select State</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['city_name'].'>'.$row['city_name'].'</option>';
		 }
	}else{
		echo '<option>No city Found!</option>';
	}

}

?>