<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<link rel="stylesheet" href="estilos.css">
	<title>Ventana Emergente Animada</title>
</head>
<body> 	<div class="contenedor">
		<?php
		echo "Ingrese la cantidad de la matriz cuadrada ";
		?>
		<form action="#" method="GET">
			<input type="number" min="2" max="100" name="cantR1" required style="   ">
				<input type="submit" name="enviar">
				<?php
		if(isset($_REQUEST['enviar']) && !empty($_REQUEST['cantR1'])){
			$cantR1 = $_REQUEST['cantR1'];//Cantidad de elementos del vector matriz
			echo "<br>R1[".$cantR1."][".$cantR1."]<br><br><br>";

		$contador=0;
		$contador2=0;
		$contador3=0;
		$ejeX = range( 1, $cantR1 );
		$ejeY = range( 1, $cantR1 );
		
		foreach ( $ejeY as $y ) {
		
		  foreach ( $ejeX as $x ) {
			// Aquí creamos los ejes con un valor aleatorio
			$ejesYX[ $y ][ $x ] = rand( 0, 1 );
			if($y==$x)
			{
				if($ejesYX[ $y ][ $x ]==1)
				{
					$contador++;
				}
			}
		  }
		}


if($contador==$cantR1)
{
	$ref=true;
}
else{
	$ref=false;
}










	for( $i=1; $i<=$cantR1; $i++ ){
		for( $j=1; $j<=$cantR1; $j++){

			if($ejesYX[$j][$i]==$ejesYX[$i][$j]){

				$contador2++;
			}
			
		}
	}
	if($contador2==($cantR1*$cantR1)){
		$sim=true;
	}else{
		$sim=false;
	}



	for( $i=1; $i<=$cantR1; $i++ ){
		for( $j=1; $j<=$cantR1; $j++){

			if($ejesYX[$j][$i]==($ejesYX[$i][$j]*-1)){

				$contador3++;
			}
			
		}
	}
	if($contador3==($cantR1*$cantR1)){
		$anti=true;
	}else{
		$anti=false;
	}
	
	

		for($i=1; $i<=$cantR1; $i++ ){
			for($j=1; $j<$cantR1; $j++){
				$R2[$i][$j]=$ejesYX[$j][$i];	
			}
		}
		for($i=1;$i<=$cantR1;$i++){//FILAS DE R1
			for( $j=1;$j<=$cantR1;$j++){//FILAS DE R2
				for( $y=1;$y<=$cantR1;$y++){//COLUMNAS DE R1 Y R2
					if($R1[$i][$y]==1 && $R1[$i][$y]==$R2[$j][$y]){
						$R3[$i][$j]=1;
						$y=$cantR1;
					}else{
						$R3[$i]$[$j]=0;
						
					}
				}			
			}		
		}

		// Creamos la tabla
		$html = '<table border style="text-align: center;">';
		$html .= '<th style="width:20px; background: teal; "></th>';
		
		// Para crear las columnas X ( $ejeX = 1 a 10 )
		foreach ( $ejeX as $col_X ) {
		
		  $html .= '<th style="width:20px; background: teal; opacity: 0.5;">'.$col_X.'</th>';
		}
		
		foreach ( $ejesYX as $col_Y => $valores ) {
		
		  $html .= '<tr  style="width:20px;">';
		  // Para crear las columnas Y ( $ejeY = 1 a 10 )
		  $html .= '<td  style="width:20px; background: teal; opacity: 0.5;"><b>'.$col_Y.'</b></td>';
		
		  foreach ( $valores as $val ) {
			// Creamos los campos de los valores
			$html .= '<td  style="width:20px;">'.$val.'</td>';
		  }
		
		  $html .= '</tr>';
		}
		
		$html .= '</table>';
		
		echo $html;
		
		}
		?>
		<button value="Nueva Matriz" onclick="window.location.reload();">Nueva Matriz</button>
		
		</form>
		
			</DIV>

		
	<div class="contenedor">
		<article>

			<button id="btn-abrir-popup" class="btn-abrir-popup">Caracteristicas de esta matriz</button>

		</article>

		<div class="overlay" id="overlay">
			<div class="popup" id="popup">
				<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
				<h3>RELACIONES</h3>
				<?php
				if($ref==true){
					Echo " <h4>-Reflexiva</h4>";

				}
				if($sim==true){
					Echo "<h4>-Simetrica</h4>";

				}
				if($anti==true){
					Echo "<h4>-Antisimetrica</h4>";

				}
				if($tran==true){
					Echo "<h4>-Transitiva</h4>";

				}






				

		?>
				<form action="">
					<div class="contenedor-inputs">

					
			
				</form>
			</div>
		</div>
	</div>
	

	<script src="popup.js"></script>
</body>
</html>