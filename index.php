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
