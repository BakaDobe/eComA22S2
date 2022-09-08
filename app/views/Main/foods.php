<html>
<head>
	<title>some title</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(
			function(){
				$.getJSON("/Main/foodsJSON", 
					function(obj){
						output = "";
						for(const item of obj){
							output = output + item.name + " has the id " + item.id + "<br>"
						}
						$('#foods').html(output);
					}
				)	
			}
		);
		
	</script>
</head>
<body>
Here is a list of foods from our database
<div id="foods">
	
</div>

<!-- table>
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
<a href='/Main/index2'>go to Main/index2</a> -->
</body>
</html>
