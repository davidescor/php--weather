<?php
	include("core/config.php");
	include("core/api/search/api.php");

function getSearch($id,$name_country_search,$nivel1,$nivel2,$nivel3,$max){
	for ($i = 0; $i < $max; $i++) {

		echo '<a href="index.php?city='.$id[$i].'">'.$name_country_search[$i].'</a>';
		echo '<p>'.$nivel1[$i][0].' , '.$nivel2[$i][1].' , '.$nivel3[$i][2].'</p>';
		echo "<br>";
	}
}

?> 