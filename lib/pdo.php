<?php
function GetConnection()
{
    $dsn = "mysql:host=185.115.218.166;dbname=wdev_nicole";
    $user = "wdev_nicole";
    $passwd = "ywD2eP3ePn9p";

    $pdo = new PDO($dsn, $user, $passwd);
    return $pdo;
}

function GetData( $sql )
{
    $pdo = GetConnection();

    $stm = $pdo->prepare($sql);
    $stm->execute();

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function ExecuteSQL( $sql )
{
    $pdo = GetConnection();

    $stm = $pdo->prepare($sql);

    if ( $stm->execute() ) return true;
    else return false;
}

