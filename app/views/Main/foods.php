<html>
<head>
	<title>some title</title>
</head>
<body>
Here is a list of foods from our database
<table>
	<tr><th>id</th><th>name</th><th>action</th></tr>
<?php
	$c= count($data);
	$i= 0;
foreach ($data as $food){
	echo "<tr>
			<td>$food->id</td>
			<td>$food->name</td>
			<td><a href='/Food/delete/$food->id'>delete</a></td>
		</tr>";
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
