<?php 
   $host = "localhost";
   $user = "root";
   $password = "";
   $db = "duan1";
   $con = null;
   try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$password);
   } catch (PDOException $e) {
       echo $e->getMessage();
   }
   function action($sql){
    global $conn;
    $conn->exec($sql);
    return $result;
   }
   function query1($sql){
    global $conn;
    $result = $conn->query($sql);
    return $result;
   }
   function selectDb($sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
   }
   function total($sql){
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result;
   }
?>