<?php
  @session_start();
  if(empty($_SESSION)){
    $_SESSION['flagid'] = 0;
  }
?>
<html>
<head>
  <title>Elite Routing</title>
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
</head>
<?php

  $flag = "HELLO_WORLD";

  echo substr($flag, $_SESSION['flagid'], 1);
  $_SESSION['flagid'] += 1;
  $serverHost = $_SERVER['HTTP_HOST'];
  if($_SESSION['flagid'] >= 67) $_SESSION['flagid'] = 0;
  echo "<meta http-equiv='refresh' content='1.0;url=http://$serverHost'>";
?>
