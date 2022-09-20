<?php

$total=0;

for($i=1;$i<=10;$i++){
	$total+=$i;
	echo "<br>".$total;
}

for($i=1;$i<=10;$i++):
	$total+=$i;
	echo "<br>".$total;
endfor;

?>