<?php
function GetData( $sql )
{
    $servername = "localhost";
    $username = "root";
    $password = "Gsm0488436796";
    $dbname = "steden";

    // Create and check connection
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $result = $conn->query( $sql );

    if ( $result->rowCount() > 0 )
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    else
    {
        return [];
    }

}