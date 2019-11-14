<?php 

$createtable2 ="CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hsh` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

require_once('baseclass.php');
require_once('login/model.php');
require_once('login/view.php');
require_once('login/control.php');

$db= new Database();

interface View{
	public function show();
	public function logoutlink();
}

interface Model{
	public function VarifyUser($postdata);
	public function LoginUser();
	public function IsLogin();
}
$classname="LoginController";
$obj=new $classname();





?>