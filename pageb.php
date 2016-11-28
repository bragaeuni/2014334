<?php

$name = $_POST['Eunice Braga de Morais'];
$sid = $_POST['2014334'];

// ------------ send to the database --------------

 try {
     $host = '127.0.0.1';
     $dbname = 'test';
     $user = 'root';
     $pass = '';
 # MySQL with PDO_MYSQL
 $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
 $sql = "INSERT INTO `logindetails` (`studentname`, `sid`) VALUES (?, ?);"; 
$sth = $DBH->prepare($sql); 

 $sth->bindParam(1, $name, PDO::PARAM_INT);
 $sth->bindParam(2, $sid, PDO::PARAM_INT);

 $sth->execute();

 
  echo $id = $DBH->lastInsertId();
 } catch(PDOException $e) {echo 'Error' . $e;} 


 
 

 
 
 
 
 
 
 
?>