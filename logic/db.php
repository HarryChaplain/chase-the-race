<?php
function getDB(){
  static $pdo;
  if (isset($pdo)){
      return $pdo;      
  }
  $host = 'us-cdbr-iron-east-05.cleardb.net';
  $db   = 'heroku_2a00e25f9fd5fde';
  $user = '853c9a50b3dae';
  $pass = '850596d0';

  $dsn = "mysql:host=$host;dbname=$db";
  $pdo = new PDO($dsn, $user, $pass);

  return $pdo;
}
?>
