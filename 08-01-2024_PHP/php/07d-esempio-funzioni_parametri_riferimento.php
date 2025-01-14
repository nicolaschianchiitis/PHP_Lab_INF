<html>
<body>

<?php
	function inverti(&$x,&$y)
	{
		$temp=$x;
		$x=$y;
		$y=$temp;
	}
	$a=3;
	$b=5;
	inverti($a,$b);
	echo "$a $b";
?>

</body>
</html> 