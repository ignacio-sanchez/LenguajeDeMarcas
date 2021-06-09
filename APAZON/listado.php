<?php

$conex = pg_connect("user=postgres password=1234 host=localhost dbname=APAZON") or die("ERROR DE CONEXION".pg_last_error());

    $sql = "SELECT * FROM CLIENTES";

    $result = pg_query($sql);

    if (!$result) {
      echo "Ocurrió un error.\n";
      exit;
    }
    
    while ($row = pg_fetch_row($result)) {
      echo "NIF: $row[1]  Razon: $row[2]";
      echo "<br />\n";
    }


    while($row1=pg_fetch_array($result, null, PGSQL_ASSOC)){
        echo $row1["cod"]." - ".$row1["razon"];
    }




?>