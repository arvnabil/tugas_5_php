<?php
$string1 = "Ayo";
$string2 = "Belajar";
$string12 = $string1." ".$string2;

$string3 = "Bersama";
$string4 = "Niomic";
$string34 = $string3." ".$string4;

$gabungan = $string1." ".$string2." ".$string3." ".$string4;
echo "
		<h1>Operator String</h1>
		<table border='1'>
		<thead>
			<tr>
				<td>Input 1</td>
				<td>Input 2</td>
				<td>Hasil</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>$string1</td>
				<td>$string2</td>
				<td>$string12</td>
			</tr>
			<tr>
				<td>$string3</td>
				<td>$string4</td>
				<td>$string34</td>
			</tr>
		</tbody>
	  </table>
	  <p>Gabungan : $gabungan :)</p>";
?>