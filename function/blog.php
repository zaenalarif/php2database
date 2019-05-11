<?php

require_once('db.php');

function pilihDb($db){
    global $conn1;
    global $conn2;
    if($db == 1){
        return $conn1;
    }else 
        if($db == 2){
            return $conn2;
        }
}

function tambahblog($judul, $desc, $db)
{
    global $conn1;
    global $conn2;
    pilihDb($db);
    // var_dump(pilihDb(1));
    // die();
    $query = "INSERT INTO blog (judul, deskripsi) VALUES ('$judul', '$desc')";

    if(mysqli_query(pilihDb($db), $query)){
        return true;
    }else{
        return false;
    }
}

function tampildata($db)
{
    global $conn1;
    global $conn2;
    pilihDb($db);

    $query  = "SELECT * FROM blog";
    $result = mysqli_query(pilihDb($db), $query);

    return $result;
}
?>