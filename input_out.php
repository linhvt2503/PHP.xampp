<html> 

<head>
	<title>Input/Ouput data</title>
</head>
<body>

	<form action="" name="myform" method="post">
		Your Name: <input type="text" name="Name" size=20 
					value="<?php if(isset($_POST['Name'])) echo $_POST['Name'];?>" />
		<br>
		<input type="submit" value="Submit">
	</form>
	<!-- //neu co truong name trong text thi chuyen Name xuong duoi -->
	<?php
		if (isset($_POST["Name"]))
			echo "Hello " . $_POST["Name"];
	?>
</body>
</html>