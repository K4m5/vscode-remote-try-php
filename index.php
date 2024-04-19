<?php

function sayHello($name) {
	echo "Hello $name!";
}

?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
		
		sayHello('20010879');
					
		?>
		<?php
		echo '<p> Hello world</p>' 
		?>

		<?php
		$Name1 = "PHP";
		$Name2 =  "ASP.NET";

		echo $Name1, " và ", $Name2, " là ngôn  ngữ Websever";
		?><br>
		<?php 
		$a = 10;
		$b = 20;

		printf("Giá trị %s nhân %s là: %s", $a, $b, $a * $b);
		?>
	</body>
</html>