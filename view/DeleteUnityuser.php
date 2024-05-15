<?php
include $_SERVER["DOCUMENT_ROOT"] . '/vacation/controller/unityuserU.php';
$unityuser=new unityuserU();
$unityuser->DeleteUnityuser($_GET['id']);
header('location:/vacation/Admin/pages/samples/ListeUsers.php');

?>