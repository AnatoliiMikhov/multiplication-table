<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lesson 8.8</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		/*$i = 1;
		while($i <= 10){
			echo $i . '<br>';
			$i++; // $i = $i + 1; $i += 1;
		}*/
		/*$i = 1;
		echo "<table border=\"1\">\n";
						while($i <= 15){
							echo "\t<tr>\n";
											$n = 1;
											while($n <= 5){
												echo "\t\t<td>Row $i | Col - $n</td>\n";
												$n++;
											}
							echo "\t</tr>\n";
							$i++;
						}
		echo '</table>';*/
						/*		$year = 1900;
		echo '<select>' . "\n";
							while($year <= 2019){
								echo "\t<option value='$year'>$year</option>\n";
								$year++;
							}
		echo '</select>';*/
		/*$i = 11;
		while($i <= 10){
			echo $i++ . '<br>';
		}*/
		// $i = 1;
		// do{
						// 	echo $i++ . '<br>';
		// }while($i <= 10);
		// My CODE.   The table.
						/*		$i = 1;
		echo "<table>" . "\n";
						while ($i <= 5) {
							echo "\t" . "\t" . "<tr>" . "\n";
												$td_counter = 1;
												while ($td_counter <= 8) {
													echo "\t" . "\t" . "\t" . "<td>" . "Row $i | Col $td_counter</td>" . "\n";
													$td_counter++;
												}
							echo "\t" . "\t" . "</tr>" . "\n";
							$i++;
						}
		echo "\t" . "\t" . "</table>" . "\n";*/

// My CODE.   The table. ***********************************************************

		echo "<table>\n";
		echo "\t\t<caption>Таблица умножения</caption>\n";
// table header
				$th = 0;
				echo "\t\t<tr>\n";
				while ($th <= 9) {
					echo "\t\t\t<th>" . $th . "</th>\n";
					$th++;
				}
// rows
				echo "\t\t</tr>\n";

				$tr_counter = 1;
				while ($tr_counter <= 9) {
					echo "\t\t<tr>" . "\n";

						$td_first = 0;
						if ($td_first == 0){
							echo "\t\t\t<td>" . $tr_counter . "</td>\n";
						}
// cols
						$td_counter = 1;
						while ($td_counter <= 9) {
							$res = ($tr_counter * $td_counter);
							echo "\t\t\t<td>" . "($tr_counter * $td_counter)" . " = " . $res . "</td>\n";
							$td_counter++;
						}

					echo "\t\t</tr>\n";
				$tr_counter++;
}
		echo "\t\t</table>\n";
		?>
	</body>
</html>