<?php

function connectToDb()
{
    $dbParams = parse_url(getenv("DATABASE_URL"));

    $host = $dbParams['host'];
    $user = $dbParams['user'];
    $password = $dbParams['pass'];
    $dbname = ltrim($dbParams["path"], "/");

    return pg_connect("host=${host} dbname=${dbname} user=${user} password=${password}");
}
