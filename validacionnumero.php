<?php


//$num2 = "Dato";
//$array = array(3, 4, 5);
//$arreglox = 0;
//$y = 0;
//$v1a1 = 1;
/*$v2a1 = 2;
$v3a1 = 3;
$v1a2 = 6;
$v2a2 = 5;
$v3a2 = 4;
$valor1a1 = 0;
$valor2a1 = 0;
$valor3a1 = 0; 
$valor1a2 = 0;
$valor2a2 = 0;
$valor3a2 = 0;
$arreglo1 = array('v1a1' => $valor1a1, 'v2a1' => $valor2a1, 'v3a1' => $valor3a1 );
$arreglo2 = array('v1a2' => $valor1a2, 'v2a2' => $valor2a2, 'v3a2' => $valor3a2 );
$arregloglobal = array('arreglo1' => (array('v1a1' => $v1a1, 'v2a1' => $v2a1, 'v3a1' => $v3a1)), 
						'arreglo2' => (array('v1a2' => $v1a2, 'v2a2' => $v2a2, 'v3a2' => $v3a2)));

//echo $arregloglobal['arreglo1']['v1a1']." ".$arregloglobal['arreglo1']['v2a1']." ".$arregloglobal['arreglo1']['v3a1'];
//echo "<br>";
//echo $arregloglobal['arreglo2']['v1a2']." ".$arregloglobal['arreglo2']['v2a2']." ".$arregloglobal['arreglo2']['v3a2'];
//echo "<br>";
//print_r($arregloglobal);

//print_r($_POST);
//die();
//if ($numeroc == 3 || $numeroc == 4 || $numeroc == 5) {

		/*	for ($i=1; $i < $numc ; $i++) { 
				array_push($arregloglobal['arreglo1'], $v1a1);
				echo $arregloglobal['arreglo1']['v1a1'];
			};
*/

/*
for ($x=1; $x <= $numc; $x++) { 
	//$arreglo1 = array($x);
	array_push($arreglo1, $x);
	/*for ($i=5; $i < $numc ; $i++) { 
		array_push($arregloglobal, $i);
	}*/
/*}
print_r($arreglo1);
echo "<br>";
for ($z=1; $z <= $numc; $z++) { 
	array_push($arregloglobal, $arreglo1);
	echo "<br>";
}*/

/*Esto es lo que hace funcionar el cuadro dinámico*/

//print_r($arreglo1);

/*********************************************************************************/
/**********************Calculo de constante en cuadro mágico**********************/
/*********************************************************************************/


/*	echo "<br>";
	echo "<br>";
	echo "
	<table border= '1'>";
		for ($z=1; $z <= $numc; $z++) {
			echo "
			<tr>";
				for ($x=1; $x <= $numc; $x++) { 
					array_push($arreglo1, $x);
					echo "
					<td heigth='30' width='25'>".$count."</td>";
					$count++;
				}
			echo 
			"</tr>";
			//array_push($arregloglobal, $arreglo1);
		}
	echo "
	</table>";

	if ($const % 3 == 0) {

		
		}elseif ($const ) {
			# code...
		}{
			
		}
}else{
	
	echo "Ingresa un número mayor a 2 ";
	header("location:error1.php");
}
	


			echo "
			<tr>";
				while ($x <= $numc) {
					array_push($arreglo1, $count);					
					echo "
					<td>".$count."</td>";
					$x++;
				}
			array_push($arregloglobal, $arreglo1);
			echo "
			</tr>";		
			for ($i=0; $i < ($numc* $numc; $i++) { 
				array_push($arreglo1, $count++)
			}


*/
$numc = $_POST['numerocuadro'];
$const = ($numc * (($numc*$numc) + 1)) / 2;

if ($numc % 1 == 0) {
	echo "Bienvenido al cuadro mágico";
	echo "<br>";
	echo "Este cuadro mágico tiene una costante de: " .$const;
	echo "<br>";
	echo "<br>";
}else{ 
	echo "Esto no es un número impar";
}

//print_r($_POST);
$arregloglobal = array();
$w = 1;
$count = 0;
$count1 = 1;
$medio = $numc / 2;
$med = floor($medio);
$numcount = $numc * $numc;

if (($numc % 2) == 0 ){
	//echo "
	//<table border= '1'>";
	$count++;
	while ($w <= $numc) {
		$x =  1;
		$arreglo1 = array();
		//echo "
		//<tr>";
			while ($x <= $numc) {
				array_push($arreglo1, $count++);					
				//echo "
				//<td>".$count."</td>";
				$x++;
			}
		array_push($arregloglobal, $arreglo1);
		//echo "
		//</tr>";		
		$w++;
	}
	if ($numc > 2 ) {
		if ($numc == 4) {
			
		}else{

		}
	}else{
		echo "Ingresa un número mayor a 2";
	}
	//echo "
	//</table>";
}else{
	//echo "
	//<table border= '1'>";
		while ($w <= $numc) {
			$x = 1;
			$arreglo1 = array();
			//echo "
			//<tr>";
				while ($x <= $numc) {
					array_push($arreglo1, $count);					
					//echo "
					//<td>".$count."</td>";
					$x++;
				}
			array_push($arregloglobal, $arreglo1);
			//echo "
			//</tr>";		
			$w++;
		}
	//echo "
	//</table>";
	$mr = 0;
/*	echo "
	<table border='1'>";*/
//		echo "<tr>";
		$arregloglobal[$mr][$med] = $count1;
		/*echo "
			<tr>
				<td>
					".$arregloglobal[$mr][$med]. 
				"</td>
			</tr>
		";*/
		
		while ($count1 <= $numcount) {
		//	if ($arregloglobal[$mr][$med] > 0) {
				//for ($i=$med; $i == $med ; $i) { 				
//					echo "<br>";
			//print_r($count1);
			/*echo "
				<tr>
					<td>
						".$arregloglobal[$mr][$med]. 
					"</td>
				</tr>
			";*/
			$count1++;//6
			//echo "<br>mi count: ".$count1;
			$mr--;//-1
			//echo "<br>mi mr: ".$mr;
			$med++;//5
			//echo "<br>mi med: ".$med." Q ";
			if ($mr >= 0) { 
				if ($med < $numc) {
					if (isset($arregloglobal[$mr][$med]) ) {
						if ($arregloglobal[$mr][$med] == 0 ) {
							$arregloglobal[$mr][$med] = $count1;
						/*	echo "
							<tr>
								<td>
									".$arregloglobal[$mr][$med]. 
								"</td>
							</tr>
							";*/
						}else{
							$mr = $mr + 2;
							$med--;
							if ($mr <= $numc) {
								if ($mr >= 0) {
									if ($med <= $numc) {
										if ($med >= 0) {
											$arregloglobal[$mr][$med] = $count1;
											/*echo "
												<tr>
													<td>
														".$arregloglobal[$mr][$med]. 
												"</td>
												</tr>
												";*/	
										}else{
											$med = 0; 
											$arregloglobal[$mr][$med] = $count1;
											/*echo "
												<tr>
													<td>
														".$arregloglobal[$mr][$med]. 
												"</td>
												</tr>
												";	*/
										}
									}else{
										$med = $numc - 1;
										if ($med >= 0) {
											$arregloglobal[$mr][$med] = $count1;	
										}else{
											$med = 0; 
											$arregloglobal[$mr][$med] = $count1;
	
										}
									}
								//	$arregloglobal[$mr][$med] = $count1;
								}else{
									$mr = 0;
								}
							}else{
								echo "string";
							}
						}								
					}else{
						$mr = $mr + 2;
						$med--;
						if ($mr <= $numc) {
							if ($mr >= 0) {
								if ($med <= $numc) {
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}else{
									$med = $numc - 1;
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}
							//	$arregloglobal[$mr][$med] = $count1;
							}else{
								$mr = 0;
							}								
						}else{
							$mr = $numc - 1;
							if ($mr >= 0) {
								if ($med <= $numc) {
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}else{
									$med = $numc - 1;
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}
								$arregloglobal[$mr][$med] = $count1;
							}else{
								$mr = 0;
							}				
						 	
						}
					}	
				}else{
					$med = 0;
					if ($arregloglobal[$mr][$med] == 0 ) {
						$arregloglobal[$mr][$med] = $count1;
					}else{
						$mr = $mr + 2;
						$med--;
						if ($mr <= $numc) {
							if ($mr >= 0) {
								if ($med <= $numc) {
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}else{
									$med = $numc - 1;
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}
								$arregloglobal[$mr][$med] = $count1;
							}else{
								$mr = 0;
							}								
						}else{
							$mr = $numc - 1;
							if ($mr >= 0) {
								if ($med <= $numc) {
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}else{
									$med = $numc - 1;
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}
							}else{
								$mr = 0;
							}				
						 	
						}
					}
				}
			}else{
				$mr = $numc - 1;//4 
				if ($med < $numc) {
					if ($arregloglobal[$mr][$med] == 0 ) {
						$arregloglobal[$mr][$med] = $count1;
					}else{
						$med = $numc - 1;
						$mr = 1; 
						if ($arregloglobal[$mr][$med] == 0 ) {
							$arregloglobal[$mr][$med] = $count1;
						}else{
						 	echo "Hola amigo";
						}
					}	
				}else{
					$med = 0;
					if ($arregloglobal[$mr][$med] == 0 ) {
						$arregloglobal[$mr][$med] = $count1;
					}else{
						$med = $numc - 1;
						$mr = 1; 
						if ($arregloglobal[$mr][$med] == 0 ) {
							$arregloglobal[$mr][$med] = $count1;
						}else{
						/*	$mr = $numc - 1;
							if ($mr >= 0) {
								if ($med <= $numc) {
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}else{
									$med = $numc - 1;
									if ($med >= 0) {
										$arregloglobal[$mr][$med] = $count1;
									}else{
										$med = 0; 
										$arregloglobal[$mr][$med] = $count1;
									}
								}
								$arregloglobal[$mr][$med] = $count1;
							}else{
								$mr = 0;
							}				
						 	*/
						 	echo "Hola amigo";
													 	
						}
					}
				}		
			}
		}
}
echo "
<table border='1' width='15px' heigth='15px'>";
	for ($y=0; $y < $numc ; $y++) { 
		echo "<tr>";
		for ($u=0; $u < $numc ; $u++) { 
			echo "<td>".$arregloglobal[$y][$u]."</td>";
		}
		echo "</tr>";
	}

echo "</table>";


function getIp(){
	
	$ipaddress = ' ';
	$ipaddress = getenv('REMOTE_ADDR');
	echo $ipaddress;
}

getip();

?>

<!--	
<table border='1'>
	<tr>
		<td><?php /*echo $arregloglobal[0][0]; ?></td>
		<td><?php echo $arregloglobal[0][1]; ?></td>
		<td><?php echo $arregloglobal[0][2]; ?></td>
		<td><?php echo $arregloglobal[0][3]; ?></td>
		<td><?php echo $arregloglobal[0][4]; ?></td>
		<td><?php echo $arregloglobal[0][5]; ?></td>
		<td><?php echo $arregloglobal[0][6]; ?></td>
		<td><?php echo $arregloglobal[0][7]; ?></td>
		<td><?php echo $arregloglobal[0][8]; ?></td>

	</tr>
	<tr>
		<td><?php echo $arregloglobal[1][0]; ?></td>
		<td><?php echo $arregloglobal[1][1]; ?></td>
		<td><?php echo $arregloglobal[1][2]; ?></td>
		<td><?php echo $arregloglobal[1][3]; ?></td>
		<td><?php echo $arregloglobal[1][4]; ?></td>
		<td><?php echo $arregloglobal[1][5]; ?></td>
		<td><?php echo $arregloglobal[1][6]; ?></td>
		<td><?php echo $arregloglobal[1][7]; ?></td>
		<td><?php echo $arregloglobal[1][8]; ?></td>

	</tr>
	<tr>
		<td><?php echo $arregloglobal[2][0]; ?></td>
		<td><?php echo $arregloglobal[2][1]; ?></td>
		<td><?php echo $arregloglobal[2][2]; ?></td>
		<td><?php echo $arregloglobal[2][3]; ?></td>
		<td><?php echo $arregloglobal[2][4]; ?></td>
		<td><?php echo $arregloglobal[2][5]; ?></td>
		<td><?php echo $arregloglobal[2][6]; ?></td>
		<td><?php echo $arregloglobal[2][7]; ?></td>
		<td><?php echo $arregloglobal[2][8]; ?></td>
	</tr>
	<tr>
		<td><?php echo $arregloglobal[3][0]; ?></td>
		<td><?php echo $arregloglobal[3][1]; ?></td>
		<td><?php echo $arregloglobal[3][2]; ?></td>
		<td><?php echo $arregloglobal[3][3]; ?></td>
		<td><?php echo $arregloglobal[3][4]; ?></td>
		<td><?php echo $arregloglobal[3][5]; ?></td>
		<td><?php echo $arregloglobal[3][6]; ?></td>
		<td><?php echo $arregloglobal[3][7]; ?></td>
		<td><?php echo $arregloglobal[3][8]; ?></td>
	</tr>
	<tr>
		<td><?php echo $arregloglobal[4][0]; ?></td>
		<td><?php echo $arregloglobal[4][1]; ?></td>
		<td><?php echo $arregloglobal[4][2]; ?></td>
		<td><?php echo $arregloglobal[4][3]; ?></td>
		<td><?php echo $arregloglobal[4][4]; ?></td>
		<td><?php echo $arregloglobal[4][5]; ?></td>
		<td><?php echo $arregloglobal[4][6]; ?></td>
		<td><?php echo $arregloglobal[4][7]; ?></td>
		<td><?php echo $arregloglobal[4][8]; ?></td>
	</tr>
	<tr>
		<td><?php echo $arregloglobal[5][0]; ?></td>
		<td><?php echo $arregloglobal[5][1]; ?></td>
		<td><?php echo $arregloglobal[5][2]; ?></td>
		<td><?php echo $arregloglobal[5][3]; ?></td>
		<td><?php echo $arregloglobal[5][4]; ?></td>
		<td><?php echo $arregloglobal[5][5]; ?></td>
		<td><?php echo $arregloglobal[5][6]; ?></td>
		<td><?php echo $arregloglobal[5][7]; ?></td>
		<td><?php echo $arregloglobal[5][8]; ?></td>

	</tr>
	<tr>
		<td><?php echo $arregloglobal[6][0]; ?></td>
		<td><?php echo $arregloglobal[6][1]; ?></td>
		<td><?php echo $arregloglobal[6][2]; ?></td>
		<td><?php echo $arregloglobal[6][3]; ?></td>
		<td><?php echo $arregloglobal[6][4]; ?></td>
		<td><?php echo $arregloglobal[6][5]; ?></td>
		<td><?php echo $arregloglobal[6][6]; ?></td>
		<td><?php echo $arregloglobal[6][7]; ?></td>
		<td><?php echo $arregloglobal[6][8]; ?></td>
	</tr>
	<tr>
		<td><?php echo $arregloglobal[7][0]; ?></td>
		<td><?php echo $arregloglobal[7][1]; ?></td>
		<td><?php echo $arregloglobal[7][2]; ?></td>
		<td><?php echo $arregloglobal[7][3]; ?></td>
		<td><?php echo $arregloglobal[7][4]; ?></td>
		<td><?php echo $arregloglobal[7][5]; ?></td>
		<td><?php echo $arregloglobal[7][6]; ?></td>
		<td><?php echo $arregloglobal[7][7]; ?></td>
		<td><?php echo $arregloglobal[7][8]; ?></td>
	</tr>
	<tr>
		<td><?php echo $arregloglobal[8][0]; ?></td>
		<td><?php echo $arregloglobal[8][1]; ?></td>
		<td><?php echo $arregloglobal[8][2]; ?></td>
		<td><?php echo $arregloglobal[8][3]; ?></td>
		<td><?php echo $arregloglobal[8][4]; ?></td>
		<td><?php echo $arregloglobal[8][5]; ?></td>
		<td><?php echo $arregloglobal[8][6]; ?></td>
		<td><?php echo $arregloglobal[8][7]; ?></td>
		<td><?php echo $arregloglobal[8][8]; ?></td>
	</tr>

</table>*/

