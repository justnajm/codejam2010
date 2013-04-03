<html><head></head><body>
<?php
function check($chars,$case=1){
	$charNums = array(
		"a"	=> "2",
		"b"	=> "22",
		"c" => "222",
		"d" => "3",
		"e"	=> "33",
		"f"	=> "333",
		"g"	=> "4",
		"h" => "44",
		"i" => "444",
		"j" => "5",
		"k" => "55",
		"l" => "555",
		"m" => "6",
		"n" => "66",
		"o" => "666",
		"p" => "7",
		"q" => "77",
		"r" => "777",
		"s" => "7777",
		"t" => "8",
		"u" => "88",
		"v" => "888",
		"w" => "9",
		"x" => "99",
		"y" => "999",
		"z" => "9999",
		" " => "0",
	);
	echo "Case #{$case}: ";
	for($i=0;$i<strlen($chars);$i++){
		if($prevChar == $charNums[$chars[$i]][0]) echo " ";
		echo $charNums[$chars[$i]];
		$prevChar = $charNums[$chars[$i]][0];
	}
	echo "<br>";
}
//$file = file_get_contents("C-small-practice.in");
$file = file_get_contents("C-large-practice.in");
$ar = explode("\n",$file);

for($i=1;$i<count($ar);$i++){

	$chars = $ar[$i];
	$case++;
	if($chars!='') check($chars, $case);
	
}
//check(100,3,new Array(5,75,25));
//check(200,7,new Array(150, 24, 79, 50, 88, 345, 3));
//check(8,8,new Array(2, 1, 9, 4, 4, 56, 90, 3));
?>
</body></html>