<?php
    $host = "azuresqlserverrifki01.database.windows.net";
    $user = "rifki";
    $pass = "Ahmad2709";
    $db = "azureSqlServerRifki01";
    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }
?>