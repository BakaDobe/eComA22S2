<html>
<head>
	<title>some title</title>
</head>
<body>
Here is a list of foods from our database
<table>

<?php
	$c= count($data);
	$i= 0;
foreach ($data as $key => $value){
	echo "<tr><td>$value</td></tr>";
}
?>
</table>
<form action='' method='post'>
	Input the new food to add to the list:
	<input type='text' name='new_food' /><br>
	<input type='submit' value='send' name="action"> 
</form>
<a href='/Main/index2'>go to Main/index2</a>
</body>
</html>
