<?php
/**
  *  @author Profe-Alumno
  *  @version 2.1
*/

  /**
    * Función suma de dos números
    * @param int $num1
    * @param int $num2
    * @return float
    * @internal cambiamos a suma
  */
 

  function suma($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }


$multi = suma(4,2);
echo "El resultado de cuatro mas dos es  ";
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
