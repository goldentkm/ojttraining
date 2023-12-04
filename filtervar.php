<?php 
$c = 48;
if (filter_var($c, FILTER_VALIDATE_INT, array("options" => array("min_range"=>2,"max_range"=>15))) === true) {
echo "bad";
}else
{
	echo "good";
}
?>
