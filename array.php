<?php
$predefinido = array("Audi <br>","Suzuki <br>","Ford <br>","Chevrolet <br>","Nissan <br>");
foreach ($predefinido as  $elementos)
{
	echo $elementos;
	print_r("<br>");
}


$Asignado = array("MejorMarca" => "Audi", "PeorMarca" => "Nissan") ;

foreach ($Asignado as $key => $elemento) 
	{
	echo $key." = ".$elemento."<br>";
}




?>