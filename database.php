<?php

require_once("config.php");

function execQuery($sql) {

    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    $conn->close();

    return $result;
}

function select(){

    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * from confirm");

    $rows = array();

    while($row = $result->fetch_array())
    {
        $rows[] = $row;
    }

    $conn->close();

    return $rows;
}

function count_yes(){
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT COUNT(*) from confirm WHERE resposta='CONFIRMO'");

    $row = $result->fetch_row();

    return $row[0];
}

function count_not(){
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT COUNT(*) from confirm WHERE resposta='NÃO PODEREI IR'");

    $row = $result->fetch_row();

    return $row[0];
}

function count_dontknow(){
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT COUNT(*) from confirm WHERE resposta='AINDA NÃO SEI'");

    $row = $result->fetch_row();

    return $row[0];
}