<?php

    $dbh = null;

    define('DB_NAME', 'php');
    define('DB_USER', 'admin');
    define('DB_PASSWORD', 'servidor2024');
    define('DB_HOST', 'database-php.cz3cjw4crh1n.us-east-1.rds.amazonaws.com'); //La IP del contenedor Mysql, y el puerto interno del contenedor

    try {
        $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e){
        echo $e->getMessage();
    }


    $stmt = $dbh->prepare("SELECT * FROM usuarios");
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Ejecutamos
    $stmt->execute();

    while($row = $stmt->fetch()){
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
    }
    

?>
