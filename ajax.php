<?php
function Sum()
{
    $user = 'root';
    $password = 'root';
    $dbname = 'sberbank';
    $host = 'localhost';
    $table_name = 'table_data';

    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);

    $sql = $pdo->query("SELECT SUM(Count) as sum FROM $table_name");

    $query = $sql->fetch(PDO::FETCH_ASSOC);

    return json_encode($query);
}

print_r(Sum());
?>