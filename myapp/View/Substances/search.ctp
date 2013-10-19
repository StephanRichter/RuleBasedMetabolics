<?php 
foreach ($substances as $sid => $names){
	foreach ($names as $name){
		echo '<option value="'.$sid.'">'.$name.'</option>';
	}
}
?>