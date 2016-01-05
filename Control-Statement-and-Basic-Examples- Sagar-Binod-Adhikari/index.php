<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>php First day</title>
        <link href="effect.css" type="text/css" rel="stylesheet">
</head>
<body>
<div style="width:70%; margin-left:15%">
	<p><h4>Showing the difference between single(') and double(") quote</h4>
	    <?php
		    $price = 20;
			$pname="iphone 6s";
			$buyer ='harka prasad';
			$output1="$buyer purchased $pname in USD $price";
			$output2='$buyer purchased $pname in USD $price';
			echo $output1."<br/>";
			echo $output2;                  
        ?>              
    </p>
    <p><h4>checking boolean value i.e. TRUE(1) or FALSE(0) </h4>
    	<?php
			$x =false;
			if($x)
				echo "yes";
			else
				echo "no";
		?>
    </p>
    <p><h4>evaluation of == operator</h4>
    	<?php
			$x=150;
			$y='150';
			if($x==$y)
				echo "yes";
			else
				echo "no";
		?>
     </p>
	<p><h4>evaluation of === operator</h4>
		<?php
			$x=100;
			$x='100';
			if($x===$y)
				echo "yes";
			else
				echo "no";
		?>
	</p>
    <p><h4> string comparison using == operator for uppercase and lowercase letter </h4>
		<?php
			$a = "Ram";
			$a=strtolower($a);
			$b="ram";
			if($a==$b)
				echo "yes";
			else
				echo "no";
		?>
	</p>
    <p><h4> use of different arithmetic functions</h4>
    	<?php
    		$x=10.1;
			echo "use of floor function ".floor($x)."<br>";
			echo "use of ceil function" .ceil($x)."<br>";
			echo "use of round() function".round($x)."<br>";
			echo "use of abs() function".abs(-10)."<br>";
			echo "use of min() function".min(5,6,7,8,9,10)."<br>";
			echo "use of max() function".max(5,6,7,8,9,10)."<br>";
			echo "use of rand() function".rand()."<br>";
			echo "use of rand() function with parameter".rand(100,150)."<br>";
		?>
    </p>
    <p><h4> use of string operator and function</h4>
    	<?php
			$first="Today is";
			$second="Friday";
			$whitespace="    string with whitespace    ";
			echo "use of . operator ".$first." ".$second."<br>";
			echo 'use of $str{4} for extracting single character i.e when $str=Today '.$first{4}."<br>";
			echo 'use of strlen() function'.strlen($first)."<br>";
			echo 'use of strcmp() function  '.strcmp("SAGAR","sagar")."<br>";
			echo 'use of strcmp() function  '.strcmp("sagar","SAGAR")."<br>";
			echo 'use of strcmp() function   '.strcmp("binee","binee")."<br>";
			echo 'use of strpos() function   '.strpos($first,"y")."<br>";
			echo 'use of substr() function   '.substr($first,6,2)."<br>";
			echo 'use of strtolower() function '.strtolower($first)."<br>";
			echo 'use of strtoupper() function '.strtoupper($first)."<br>";
			echo "string with whitespace ".$whitespace." ".$first."<br>";
			echo "removing right side whitespace with chop() function".chop($whitespace)." ".$first."<br>";
			echo "removing left side whitespace with ltrim() function".ltrim($whitespace)." ".$first."<br>";
			echo "removing whitespace from both ends with trim() function".trim($whitespace)." ".$first."<br>";
		?>
    </p>
    <h3>Control Statements</h3>
    <p><h4> IF..ELSE IF..ELSE </h4>
    	<?php
			$x=5;$y=10;
			if ($x > $y)
				echo "x is bigger than y";
			elseif ($x == $y)
				echo "x is equal to y";
			else
				echo "x is smaller than y";
		?>
    </p>
    <p><h4>While Loop</h4>
    	<?php
			$i=0;
			while ($i <= 10) 
				{ // Output values from 0 to 10
					echo "The number is ".$i."<br />";
					$i++;
				}
		?>
	</p>
    <p><h4>Do While Loop</h4>
    	<?php
			$i = 0;
				do {
					echo "The number is ".$i."<br/>";
					$i++;
				}
				while ($i <= 10);
		?>
	</p>
    <p><h4>For Loop</h4>
    	<?php
			for ($i=0; $i <= 10; $i++)
				{
					echo "The number is ".$i."<br />";
				}
		?>
     </p>
	<p><h4>Generation of multiplication table using nested for loop</h4>
    	<?php
			echo "<table border=2 width=50%";
				for ($i = 1; $i <= 9; $i++ ) { //this is the outer loop
					echo "<tr>";
					echo "<td>".$i."</td>";
				for ( $j = 2; $j <= 9; $j++ ) { // inner loop
					echo "<td>".$i * $j."</td>";
					}
				echo "</tr>";
					}
				echo "</table>";
		?>
    </p>
    <p><h4> For Each loop </h4>
    	<?php
			$email = array('john.smith@example.com', 'alex@example.com');
			foreach ($email as $value) {
					echo "Processing ".$value."<br />";
				}
		?>
    </p>
    <p><h4> Alternate form of Foreach loop which give access to current key</h4>
    	<?php
			$person = array('name' => 'Andrew', 'age' => 21, 'address' => '77, Lincoln st.');
			foreach ($person as $key => $value) {
				echo $key." is ".$value."<br />";
			}
		?>
    </p>
    <p><h4>Example of using break statement</h4>
    <?php
		for ($i=0; $i<=10; $i++) {
			if ($i==3){break;}
			echo "The number is ".$i;
			echo "<br />";
			}
	echo "<h4>One more example of using the Break statement:</h4>";
		$i = 0;
		$j = 0;
		while ($i < 10) {
		while ($j < 10) {
			if ($j == 5) {break 2;} // breaks out of two while loops
			$j++;
			}
			$i++;
		}
		echo "The first number is ".$i."<br />";
		echo "The second number is ".$j."<br />";
	?>
    </p>
    <p><h4>Example of using continue statement</h4>
    	<?php
			for ($i=0; $i<=10; $i++) {
			if ($i==3){continue;}
			echo "The number is ".$i;
			echo "<br />";
			}
		?>
    </p>
</div>
</body>
</html>


