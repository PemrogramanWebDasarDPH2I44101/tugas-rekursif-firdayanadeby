<form action="TugasRekursif.php" method="POST">
            Masukkan Angka : <input type="text" name="a" ><br>
                <input type="submit" name="submit" value="Hasil">
        </form>

<?php
if (isset($_POST ["submit"])) {

		$a = $_POST ["a"];
		bawah($a);
		

	echo "<br>";
	echo "- - - - - - - - - - - - - - - - - - - - - - - - - - -";
	echo "<br>";
}
function bawah ($a){
	if ($a >= 1) {
		samping($a);
		echo "<br>";
		$a--;
		bawah ($a);
	}
}
function samping ($bawah,$samping =1){
	echo "*";
	$samping++;
	if ($samping <=$bawah)
		samping ($bawah,$samping);
	
}
if (isset($_POST ["submit"])) {
	$a = $_POST["a"]; //10
	bawah2(1,$a);
}

function bawah2($permulaan, $tepi){
	samping2(1, $permulaan);
	echo "<br>";
	$permulaan++;
	if($permulaan <= $tepi)	
		bawah2($permulaan, $tepi);
}
function samping2($permulaan, $tepi){
	echo $permulaan;
	$permulaan++;
	if($permulaan <= $tepi)
		samping2($permulaan,$tepi);
}



?>
