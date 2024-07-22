<?php

// 1.連sql
// 2.整理data

// 1.連sql (xampp do => db0722 ,table students , insert data)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db0722";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM students";
$data =  $conn->query($sql)->fetch_all();
dd($data);
// $conn = null;

// 2.整理data
// ......

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
