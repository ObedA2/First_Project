<?php 
	if (isset($users)) {
		foreach ($users as $key => $item) {

			echo 'Full name is'. $item['name'] . 'and Email is' . $item['email'];

			echo "<br>";
		}
	}
	else {

		echo "<h4>There is no data to display</h4>";
	}

 ?>