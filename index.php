<html>
	<head>	
		<!-- regular CSS for page -->	
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php
		?>
	</head>
	
	<body>
		<div id="header">
			<h1>Bearded Llama Brewing</h1>
				<?php
					$date=getdate(date("U"));
					print("$date[month] $date[mday], $date[year]");
				?>
		</div>
		<div id="content">
			<div id="ontap">
				<h2>Beers On Tap</h2>
			</div>
			<div id="bottlesandcans">
				<h2>Bottles & Cans</h2>
				<?php
					$con=mysqli_connect("localhost","mrbeer","","beer");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM singles");

while($row = mysqli_fetch_array($result))
  {
  echo $row['id'] . " " . $row['name'];
  echo "<br>";
  }

mysqli_close($con);
?>
			</div>
		</div>
	</body>
</html>
