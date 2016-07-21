<?php 
function db_connect() {

    static $connection; 
    if(!isset($connection)) {
        $connection = mysqli_connect('localhost','root','', 'mojaproba');
        $connection->set_charset("utf8");
    }

    if($connection === false) {
        return mysqli_connect_error(); 
    }

    return $connection;
}

function db_query($query) {
    $connection = db_connect();

    $result = mysqli_query($connection,$query);
    return $result;

    
}

function db_select($query) {
    $rows = array();
    $result = db_query($query);

    if($result === false) {
        return false;
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function db_quote($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}

function db_connect2() {

    static $connection2; 

    if(!isset($connection2)) {
      $connection2 = mysqli_connect('localhost','root','', 'mojaproba');
        $connection2->set_charset("utf8");
    }

    if($connection2 === false) {
        return mysqli_connect_error(); 
    }

    return $connection2;
}

function db_query2($query) {
    
    $connection2 = db_connect2();

    $result2 = mysqli_query($connection2,$query);
    return $result2;

    
}

function db_select2($query) {
    $rows2 = array();
    $result2 = db_query2($query);

    if($result2 === false) {
        return false;
    }


    while ($row2 = mysqli_fetch_assoc($result2)) {
        $rows2[] = $row2;
    }
    return $rows2;
}

function db_quote2($value) {
    $connection2 = db_connect2();
    return "'" . mysqli_real_escape_string($connection2,$value) . "'";
}

?>