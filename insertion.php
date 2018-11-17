<?php
require 'conn.php';


$idm = $_POST['idm'];
$what = $_POST['what'];
$how = $_POST['how'];
$when = $_POST['when'];
$time = $_POST["time"];
$session = $_POST["session"];
$sql = "INSERT INTO idea (what_about, how_it_works, when_it_works,member_id,time,session)
    VALUES ('$what', '$how', '$when','$idm','$time','$session')";

$result = $conn->exec($sql);

if($result){
    header('location:challenge.php');
}

