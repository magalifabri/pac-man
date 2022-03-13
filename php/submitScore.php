<?php

function submitScore()
{
    require_once __DIR__ . '/connectToDb.php';
    connectToDb();

    session_start();

    $username = $_SESSION['username'];
    $score = $_GET['score'];

    $query = 'INSERT INTO scores (username, score, date)
    VALUES ($1, $2, NOW());';
    $stmtName = 'stmt';
    if (!pg_prepare($stmtName, $query)) {
        echo 'SQL failed';
    } else {
        pg_execute($stmtName, [$username, $score]);
    }

    pg_close();
}

submitScore();
