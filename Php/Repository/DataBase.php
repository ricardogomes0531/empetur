<?php
class DataBase
{
private $hostName;
private $user;
private $password;
private $database;
function __construct()
{
$this->hostName = "162.241.61.189";
$this->user = "pernam70_empetur";
$this->password = "Casa2121!@#";
$this->database = "pernam70_empetur";
}

function connect()
{
$databaseConnect = mysqli_connect($this->hostName, $this->user, $this->password, $this->database);
return $databaseConnect;
}
}
?>