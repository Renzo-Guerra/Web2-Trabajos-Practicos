<?php
  require_once 'db.php';

  function home(){
    ?>tabla()<?php
    // Faltaria el formulario y eso, pero na, ya está
  }

  function tabla(){?>
    <table>
      <thead>
        <tr>
          <td>Deudor</td>
          <td>Cuota pagada</td>
          <td>Monto</td>
          <td>Fecha del pago</td>
        </tr>
      </thead>
      <tbody><?php
      $filas = traerTodo();
      foreach ($filas as $fila) {?>
        <tr>
          <td><?php echo $fila->deudor ?></td>
          <td><?php echo $fila->cuota ?></td>
          <td><?php echo $fila->cuota_capital ?></td>
          <td><?php echo $fila->fecha_pago ?></td>
        </tr><?php
      }
      ?>
      </tbody>
    </table><?php
  }