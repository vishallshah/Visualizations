<?php
function calcstart($x,$start,$end){

// Normalize (start,end) to (0,1). Since the end is still going to be 1, we just have to calculate the new start (final_val)
$final_val = ((1-0)*($x - $start))/($end - $start);
return $final_val;
}
calcstart(150,100,200);

// This code has been designed to create a heatmap of any size (assuming background color is white)
$number_of_vals = rand(10,20);			// Generate number of values for the heatmap
$rows = ceil(sqrt($number_of_vals));		// Calculate the rows for the heatmap
$cols = ceil($number_of_vals / $rows);		// Calculate the cols for the heatmap
$i = 0; $j = 0;	$count = 1;			// i --> row counter, j --> col counter, count --> value counter

echo "<table border='1' width='".($cols*100)."'>";

for ($i = 0; $i < $rows; $i++)
{
	echo "<tr>";
	for($j = 0; $j < $cols; $j++)
	{
		if($count<=$number_of_vals)
		{
			$val = rand(100,200);
			$new_val = calcstart($val,100,200);
			$g_val = round((1-$new_val)*255,0);
			echo "<td style='background-color:rgb(255,".$g_val.",0);'>".$val."</td>";
		}
		else
		{
			echo "<td style='background-color:rgb(255,255,255);'></td>";
		}
		$count++;
	}
	echo "</tr>";
}

echo "</table>";
?>
