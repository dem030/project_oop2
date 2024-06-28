
<?php

include("../backend/user_info.php");
include("../backend/connect.php");
$sql=  "SELECT codice_conto FROM users";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Bar</title>
</head>
<body>
  <form action="search_results.php" method="GET">
    <input type="text" name="search" placeholder="Search...">
    <input type="submit" value="Search">
  </form>
  <div class="box">
    <h1>Bentornato</h1>
    <h2> 
        <?php
            if ($result) {
                $num_rows = mysqli_num_rows($result);
                echo "Sono stati aperti: " . $num_rows, "conti";
            } else {
                echo "Errore nella query: " . mysqli_error($conn);
            } ?>  </h2>    
    </div>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
    <title>Conti</title>
    <style>
        .box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>   
    <h1>Conti</h1>
    
    <div id="contenitore-conti">
        <!-- Qui verranno inseriti i box con i dati dei conti -->
    </div>
    
    <div class="box">
        <h2>Altro contenuto della pagina</h2>
        <p>Questa è una parte della pagina aggiuntiva.</p>
    </div>
    
    <script src="script.js"></script>
</body>
</html>