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
		?>
<br>
		<?php 
		$a = 10;
		$b = 20;

		printf("Giá trị %s nhân %s là: %s", $a, $b, $a * $b);
		?><br>
		<?php
		$array = array(1,2,3,4,5);
		print_r($array);
		?>
<br>
		<?php
		$giatri = 5000;
		$soluong = 100;
		$total = ($giatri * $soluong);
		printf(" %d", $total);
		?>
<br>
		<?php
		$name1 = "Quân";
		$name2 = "K14-CNTT3";
		$totalname = $name1.$name2;
		printf($totalname)
		?>
<br>
		<?php
		$n = 100;
		$arr1 = array($n);
		$arr2 = array(1,2,3,4,5);
		$arr3 = array();
		$arr4 = array("name" =>"Đỗ Quân",
		"quequan" => "Hà Nội",
		"tuoi" => 22,
		"IQ" => "không biết");

		print_r($arr4)
		?> <br>

		<?php
		for ($i = 1; $i <= 200; $i++) {
			if ($i % 2 == 0) {
				echo '<span style="color: red; font-weight: bold;">' . $i . '</span> ';
			} else {
				echo '<span style="color: blue; font-style: italic;">' . $i . '</span> ';
			}
		}
		?>
	</body>
</html>