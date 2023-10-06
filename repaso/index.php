<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
session_start();
?>
<body>
<h2>¿Cuando es tu cumple?</h2>
<form action="dos.php" method="get">
  <label for="dia">Dia</label>
  <select name="dia" id="dia">
      <option value="">Seleccion</option>
    <?php for ($i=1;$i<32;$i++){ ?>
    <option value="<?=$i?>"><?=$i?></option>
    <?php
    }
    ?>
  </select>

  <label for="mes">Mes</label>
  <select name="mes" id="mes">
      <option value="">Seleccion</option>
    <?php for ($i=1;$i<13;$i++){ ?>
    <option value="<?=$i?>"><?=$i?></option>
    <?php
    }
    ?>
  </select>

  <label for="ano">Año</label>
  <select name="ano" id="ano">
      <option value="">Seleccion</option>
    <?php for ($i=1985;$i<2031;$i++){ ?>
    <option value="<?=$i?>"><?=$i?></option>
    <?php
    }
    ?>
  </select>

  <label for="name">Nombre</label>
  <input type="text" name="name" id="name">

  <input type="submit" value="Enviar">
    <?php

    if (!empty($_SESSION["mensaje"])){
        foreach ($_SESSION["mensaje"] as $e){
            echo "<li>".$e."</li>";
        }
    }
    ?>
</form>
</body>
</html>