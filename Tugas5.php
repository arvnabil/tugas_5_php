<?php
$nol = "0";
$satu = "1";
$false = "false";
$true = "true";

// Nilai False = Nol
// Nilai True = Satu
$and1 = ($nol and $nol);
$and2 = ($nol and $satu);
$and3 = ($satu and $nol);
$and4 = ($satu and $satu);
// Ambil Nilai 0 jika berangka 0
if($and1 == 0){
	$and1 = $nol;
}
if($and2 == 0){
	$and2 = $nol;
}
if($and3 == 0){
	$and3 = $nol;
}
if($and4 == 0){
	$and4 = $nol;
}

// Nilai False = Nol
// Nilai True = Satu
$or1 = ($nol or $nol);
$or2 = ($nol or $satu);
$or3 = ($satu or $nol);
$or4 = ($satu or $satu);
// Ambil Nilai 0 jika berangka 0
if($or1 == 0){
	$or1 = $nol;
}
if($or2 == 0){
	$or2 = $nol;
}
if($or3 == 0){
	$or3 = $nol;
}
if($or4 == 0){
	$or4 = $nol;
}
echo "
		<p>Tabel Logika 1111
		<table border='1'>
		<thead>
			<tr>
				<td>Input true</td>
				<td>Input 2</td>
				<td>AND</td>
				<td>OR</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>$false</td>
				<td>$false</td>
				<td>$and1</td>
				<td>$or1</td>
			</tr>
			<tr>
				<td>$false</td>
				<td>$true</td>
				<td>$and2</td>
				<td>$or2</td>
			</tr>
			<tr>
				<td>$true</td>
				<td>$false</td>
				<td>$and3</td>
				<td>$or3</td>
			</tr>
			<tr>
				<td>$true</td>
				<td>$true</td>
				<td>$and4</td>
				<td>$or4</td>
			</tr>
		</tbody>
	  </table>
	  </p>";

?>