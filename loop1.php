<?php
$alfabet = array_merge(range(chr(65), chr(90)));
for ($h= 6; $h >=0; $h--){
for ($h1=0; $h1<= 6; $h1++){
if  ($h1<6){
if ($h1<=$h){
echo $alfabet[$h1];
}else{
echo"&nbsp;&nbsp;";
}

}else{
for ($h2= 6; $h2 >= 0; $h2--) {
if ($h2 <= $h){
echo $alfabet[$h2];
}else{
echo "&nbsp;&nbsp;&nbsp;";
}
}
}
}
echo "<br>";
}
?>
