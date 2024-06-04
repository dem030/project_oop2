<?php
session_start();
include("connect.php");
include("user_info.php");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width = device-width, initial-scale = 1.0">
         <title>Il mio profilo</title>
        <link rel="stylesheet" href="il_mio_profilo.css">
</head>
<body>
        <div class= "box">
        <h2> Anagrafica </h2>
        <p>Nome cliente: <?php echo "$firstName" ?></p>
        <p> Cognome cliente:<?php echo "  ", "$lastName" ?></p>
        <p>email cliente: <?php echo "  ","$email" ?></p>
        <P>Numero Conto:<?php echo "  ","$codice_conto" ?></P>
        <p> Saldo Totale: <?php echo "  ", "$saldo" ?></p>
        </div>
    </body>
</html>