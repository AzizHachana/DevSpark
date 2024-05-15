<?php
session_start();
require_once __DIR__ . "/unityuserU.php";
$reset=new unityuserU();
$reset->reset($_SESSION["mail"],$_POST["password"]);
header("Location: http://localhost/vacation/Admin/pages/samples/login.php");

