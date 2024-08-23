<?php 
require_once("vendor/autoload.php");
use Src\Connect_me;
use Src\create_session;

$test = new Connect_me();

$qry = $test->conn->prepare("SELECT * FROM `payments` WHERE 1");
$qry->execute();
$row = $qry->fetch(PDO::FETCH_OBJ);
//echo $row->acnt_user_code;

$session  = new create_session();
$session->set('name', 'John');

if(isset($_SESSION['name']))
{
    echo $_SESSION['name'];
}