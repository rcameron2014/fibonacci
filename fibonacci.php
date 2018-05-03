<?php
/* Creating a Fibonacci series. Every number after the first two is the sum of the two preceding ones. */
/*
Author: Robert Cameron
*/
$a = 1;
$b = 1;
$c;

// seed the array
$series = array($a, $b);


for ($counter = 1; $counter <= 10; $counter++)
{
	$pos = count($series);
	$c = $series[$pos-2] + $series[$pos-1];
	array_push($series, $c);
}

$str = "";
foreach ($series as $val)
{
	$str .= $val . ", ";
}
$str = substr($str, 0, -2);


$code = "";
$code .= <<<END
<?php
\$a = 1;
\$b = 1;
\$c;

\$series = array(\$a, \$b);


for (\$counter = 1; \$counter <= 10; \$counter++)
{
	\$pos = count(\$series);
	\$c = \$series[\$pos-2] + \$series[\$pos-1];
	array_push(\$series, \$c);
}

\$str = "";
foreach (\$series as \$val)
{
	\$str .= \$val . ", ";
}
\$str = substr(\$str, 0, -2);
?>
END;
?>
<html>
<body>
<h1>Fibonnacci Series Created in PHP</h1>

<?php
echo $str;
?>

<h2>The code:</h2>
<?php
highlight_string($code);
?>

</body>
</html>
