<?php

$sname = "localhost";
$unmae = "id22237777_elekstok";
$password = "3L3Kst@k";
$db_name = "id22237777_elekstok";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn)
{
    echo "Connection failed!";
}