<?php

class Tools {
  function errorReport() {
    return 0;
  }
  
  function getSQLInfo() {
    $pdo = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '');
    return $pdo;
  }
  
    function isOnline() {
	  return true;
  }
}

?>
