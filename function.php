<html>
<?php
function ulang($nilai, $baris){
	for ($i = 0; $i < $baris; $i++){
		for ($j=0; $j<=$i; $j++) {
		$k =$nilai+$j;
		if($k>=50 and$k<80){
		$kan ="c";
   }
   elseif ($k >=0 and $k < 50){
   $kan="d";
   }
   elseif ($k>=90 and $k <=100){
   $kan= "A";
   }
   elseif ($k>=80 and $k < 90){
   $kan= "B";
   }
	 echo "$k($kan)";
	 }
	 echo"<br>";
	 }
 }
  ulang(50,3);echo"<br>";
  ulang(60,5);echo"<br>";
  ulang(80,3);echo"<br>";
  
?>
</html>
