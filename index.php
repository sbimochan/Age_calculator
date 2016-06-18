<!--php version >=5.3-->
<?php
$a=date("Y-m-d");
$date1 = date_create($a);
$date2 = date_create("1994-09-12");// yeah this is static value. you gotta put your date of birth
$diff=date_diff($date1,$date2);
//echo $diff->format("%Y years %m months %d days"); //this goes to the part where you wanna implement
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Age Calculator</title>
	<!--some jhilkey css-->
	<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>
</head>
<body>
	<article>
		<h1>Hello! This is server-side based Age Calculator</h1>
		<div>
			<p>
				This calculator was built by awesome man and he is <?php echo $diff->format("%Y years %m months %d days"); ?> old. Thats it.
			</p>

		</div>
	</article>
</body>
</html>