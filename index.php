<?php
echo "Ingrese la cantidad de la matriz cuadrada ";
?>
<form action="#" method="GET">
    <input type="number" min="2" max="100" name="cantR1" required style="   ">
        <input type="submit" name="enviar">
</form>
<?php
if(isset($_REQUEST['enviar']) && !empty($_REQUEST['cantR1'])){
    $cantR1 = $_REQUEST['cantR1'];//Cantidad de elementos del vector matriz
    echo "<br>R1[".$cantR1."][".$cantR1."]<br><br><br>";

$ejeX = range( 1, $cantR1 );
$ejeY = range( 1, $cantR1 );

foreach ( $ejeY as $y ) {

  foreach ( $ejeX as $x ) {
    // Aquí creamos los ejes con un valor aleatorio
    $ejesYX[ $y ][ $x ] = rand( 0, 1 );
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
