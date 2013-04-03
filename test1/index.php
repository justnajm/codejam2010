<html><head></head><body>
<?php
function check($credit,$itemCount,$itemPrices,$case=1){
//	alert(credit + ", " + itemCount + ", " + itemPrices);
	
	$ar = array();
	$sum = 0;
	$exitMainLoop = false;
	
	for($i=0;$i<$itemCount;$i++){
	
		for($j=$i+1;$j<$itemCount;$j++){
		
			//alert(i + ", " + j);
			
			$sum = $itemPrices[$i] + $itemPrices[$j];
			
			//alert(sum);
			
			//return;
			
			if($sum==$credit){
				echo "Case #" . $case . ": ";
				echo ($i+1) . " " . ($j+1);
				echo "<br>";
//				echo "pos: " . ($i+1) . " + pos:" . ($j+1) . " => " . $itemPrices[$i] . " + " . $itemPrices[$j] . " = " . $sum . " == " . $credit . "<br>";
				
				$exitMainLoop = true;
				
				break;
				
			}
			
		}
		
		if($exitMainLoop) break;
	}
}
$file = file_get_contents("A-large-practice.in");
$ar = explode("\n",$file);

for($i=0;$i<count($ar);$i++){

	$credit = $ar[$i+1];
	$itemCount = $ar[$i+2];
	$itemPrices = explode(" ",$ar[$i+3]);
	$i = $i + 2;
	$case++;
	check($credit, $itemCount, $itemPrices, $case);
	
}
//check(100,3,new Array(5,75,25));
//check(200,7,new Array(150, 24, 79, 50, 88, 345, 3));
//check(8,8,new Array(2, 1, 9, 4, 4, 56, 90, 3));
?>
</body></html>