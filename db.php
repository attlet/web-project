<?php


  header('Contnet-Type: text/html; charset-utf-8'); //한글 깨짐 방

  $db = new mysqli("localhost", "root", "1234", "project");
  $db->set_charset("utf8");

  function mq($sql)
  	{
  		global $db;
  		return $db->query($sql);
  	}

?>
