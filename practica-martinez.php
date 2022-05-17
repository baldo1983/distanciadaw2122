<?php
/**
  *  @author Profe-Alumno
  *  @version 2.0
*/

  /**
    * Función multiplica de dos números
    * @param int $num1
    * @param int $num2
    * @return float
    * @internal se ha añadido esta anotacion para desarrolladores
  */
 

  function multiplica ($num1, $num2) {
      $resultadosuma = $num1 * $num2;
      return $resultadosuma;

  }


$multi = multiplica (4,2);
echo "El resultado de cuatro por dos es  ";
echo $multi;

  /**
    * Función resta de dos números
    * @param int $num3
    * @param int $num4
    * @return float
  */
   function resta ($num3, $num4) {
      $resultadoresta = $num3 - $num4;
      return $resultadoresta;

  }


$resta = resta (46,44);
echo " y el resultado de la resta de 46 menos 44 es  ";
echo $resta;

?>
