<?php

function connectToDb()
{
    $host = 'ec2-99-81-177-233.eu-west-1.compute.amazonaws.com';
    $dbname = 'd7e7acgoltcb73';
    $username = 'hpaiicvwcjwvcs';
    $password = '6b04237ffc00985813eea3cbefe0975bdbf852aad51469158c95976d5853e802';
    return pg_connect("host=${host} dbname=${dbname} user=${username} password=${password}");
}
