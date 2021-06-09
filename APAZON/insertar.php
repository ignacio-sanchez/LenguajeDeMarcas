<?php

    ini_set("display errors", "on");

    $conex = pg_connect("user=postgres password=1234 host=localhost dbname=APAZON") or die("ERROR DE CONEXION".pg_last_error());

    $sql = "SELECT * FROM CLIENTES";

    echo (pg_query($conex, $sql));

    $nif = $_POST['nif'];
    $razon = $_POST['razon'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $mpago = $_POST['mpago'];
    $observ = $_POST['observ'];

    $inserccion = pg_query("INSERT INTO CLIENTES 
                    (nif, razon, dir, email, mpago, observ) VALUES 
                    ('$nif', '$razon', '$direccion', '$email', '$mpago', '$observ')");

    if($inserccion==true){
        echo "GUCCI";

    }else{
        echo pg_last_error();
    }


    echo "<h2> LISTADO DE LOS NENES </h2>";
    


?>