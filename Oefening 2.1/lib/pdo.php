<?php
require_once "connection.php";

function GetData( $sql )
{
    global $conn;

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