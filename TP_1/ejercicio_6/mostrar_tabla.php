<?php  require './layout/doctype.php'?>

<?php
  // Validaciones
  if(empty($_GET['numero_maximo'])){echo "<p>Debe enviar un valor</p>"; return;}
  if($_GET['numero_maximo'] <= 0){echo "<p>Debe enviar un valor mayor a 0</p>"; return;}

  $numero_maximo = $_GET['numero_maximo'];

  ?> 
  <table>
    <tbody>
      <?php
      for($i=1;$i<=$numero_maximo;$i++){
        ?><tr><?php
        for($j=1;$j<=$numero_maximo;$j++){
          ?><td <?php if(($i == 1) || ($j == 1) || ($i == $j)){echo 'class="highlight"';}; ?>><?php echo($i * $j) ?></td><?php
        }
        ?></tr><?php
      }
      ?>        
    </tbody>
  </table>

<?php require './layout/end_doctype.php' ?>