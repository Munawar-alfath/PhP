<html>
<body>
<form  method="POST" >
  <br>
  <input type="number" name="nomor" value="<?php echo isset($_POST['nomor'])?$_POST['nomor']:""; ?>">
  <br>
  <input type="submit" name="number" value="loop">
<?php
if (isset($_POST['nomor'])?$_POST['nomor']:""){
	$nom = $_POST['nomor'];
	for ($a = 1; $a <= 5; $a++) {
for ($b =1;$b<=$a;$b++){echo"$nom";}
    echo "<br>";
} 
for ($c = 1; $c <= 5; $c++) {
for ($d =5;$d>$c;$d--){echo"$nom";}
    echo "<br>";
} }
?>
</form>
</body>
</html>
