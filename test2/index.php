<html><head></head><body>
<?php
function check($words,$case=1){

	$words = array_reverse($words);
	//for($i=0;$i<count($words);$i++){
		echo "Case #{$case}: ". implode(" ",$words) . "<br>";
	//}
}
//$file = file_get_contents("B-small-practice.in");
$file = file_get_contents("B-large-practice.in");
$ar = explode("\n",$file);

for($i=1;$i<count($ar);$i++){

	$line = $ar[$i];
	$case++;
	if($line!='') check(explode(" ",$line), $case);
	
}
//check(100,3,new Array(5,75,25));
//check(200,7,new Array(150, 24, 79, 50, 88, 345, 3));
//check(8,8,new Array(2, 1, 9, 4, 4, 56, 90, 3));
?>
</body></html>