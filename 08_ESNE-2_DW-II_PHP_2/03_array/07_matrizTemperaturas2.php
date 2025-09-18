<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Temperaturas Semanales (Con formato)</title>
</head>
<body>
  <h1>Temperaturas semanales (Con formato)</h1>

  <?php 
    //Cargamos valores en array bidimensional
    $valores[1][0] = "Lunes";
    $valores[2][0] = "Martes";
    $valores[3][0] = "Miércoles";
    $valores[4][0] = "Jueves";
    $valores[5][0] = "Viernes";
    $valores[6][0] = "Sábado";
    $valores[7][0] = "Domingo";

    for ($dias=1; $dias <= 7; $dias++) { 
      for ($t=1; $t <= 4; $t++) { 
        $valores[$dias][$t] = rand(-10, 50);
      }
    }
    //print_r($valores);
   ?>

  <table border=1>
    <tr>
      <th></th>
      <th>T1</th>
      <th>T2</th>
      <th>T3</th>
      <th>T4</th>
    <tr/>

      <?php 
      //Mostramos valores del array
      for ($dias=1; $dias <= 7; $dias++) {
        echo "<tr>";
        for ($t=1; $t <= 4; $t++) {
          if($t == 0){
            echo "<th>" . $valores[$dias][$t] . "</th>";
          }else{
            echo "<td>" . $valores[$dias][$t] . "</td>";
          }
        }
        echo "</tr>";
      }
   
     ?>

  </table>

</body>
</html>
