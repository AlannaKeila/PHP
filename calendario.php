<h1><?php echo "Calendario 3C"; ?></h1>
<?php date_default_timezone_set('America/Sao_Paulo');
//exibir hora atual
echo "<br> Agora são " . date('H:i:s') . "<br>";
//exibir frase de acordo com a hora
$hora = date('H');
	if ($hora >= 5 && $hora <=12){
		echo "Bom dia!";
	}
	if ($hora > 12 && $hora <=17){
		echo "Boa tarde!";
	}	
	if ($hora > 17 && $hora <5){
		echo "Boa noite!";
	}
	
?>

<?php function linha($semana){
  echo "<tr>";
  for ($i = 0; $i <= 6; $i++) {
	//data atual em negrito
	if ((isset($semana[$i])) && ($semana[$i] == date('d'))){
		echo "<td><b>{$semana[$i]}</b></td>";
	}
	//exibir domingos na cor vermelha
	else if ((isset($semana[$i])) && ($semana[$i] == $semana['0'])){
		echo "<td><font color='red'>{$semana[$i]}</font></td>";
	//exibir sábados em negrito 
	}else if ((isset($semana['6'])) && ($semana[$i] == $semana['6'])){
		echo "<td><b>{$semana[$i]}</b></td>";
    }else if (isset($semana[$i])) {
    echo "<td>{$semana[$i]}</td>";
   } else {
   echo "<td></td>";
  } 
}
}
function calendario()
{
	$dia = 1;
	$semana = array();
	while ($dia <= 31) {
		array_push($semana, $dia);
		if (count($semana) == 7) {
			linha($semana);
			$semana = array();
		}
		$dia++;
	}
	linha($semana);
	
	}
?>

<table border="1">
	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sáb</th>
	</tr>
	
	<?php calendario(); ?>
</table>
