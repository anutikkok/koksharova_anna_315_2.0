<?php

require_once 'core/config/db.php'; 

function cat1(){
	
$result = mysql_query("SELECT * FROM vse_tov WHERE id_cat = '1'");

mysql_close();

while($row = mysql_fetch_array($result))
{?>
<h1><?php echo $row['nazv_tov']; ?></h1>	
<h2>Описание: <?php  echo $row['opis_tov'];	?></h2>
<p>Цена: <?php  echo $row['cena'];	?> руб.</p>

<hr />

<?php } 
}




function cat2(){
	
$result = mysql_query("SELECT * FROM vse_tov WHERE id_cat = '2'");

mysql_close();

while($row = mysql_fetch_array($result))
{?>
<h1><?php echo $row['nazv_tov']; ?></h1>	
<h2>Описание: <?php  echo $row['opis_tov'];	?></h2>
<p>Цена: <?php  echo $row['cena'];	?> руб.</p>

<hr />

<?php } 
}




function cat3(){

$result = mysql_query("SELECT * FROM vse_tov WHERE id_cat = '3'");

mysql_close();

while($row = mysql_fetch_array($result))
{?>
<h1><?php echo $row['nazv_tov']; ?></h1>	
<h2>Описание: <?php  echo $row['opis_tov'];	?></h2>
<p>Цена: <?php  echo $row['cena'];	?> руб.</p>

<hr />

<?php } 
}


?>


