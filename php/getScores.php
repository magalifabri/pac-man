<?php

function getScores()
{
    require_once __DIR__ . '/connectToDb.php';
    connectToDb();

    session_start();

    $query =
        'SELECT *
        FROM scores
        ORDER BY score DESC;';
    $stmtName = 'stmt';
    if (!pg_prepare($stmtName, $query)) {
        echo 'SQL failed';
        return;
    }
    $result = pg_execute($stmtName, []);
    $rows = pg_fetch_all($result);
    echo json_encode($rows);

    pg_close();
}
getScores();
