<?php
    const SERVER = "mysql220.phy.lolipop.lan";
    const DBNAME = "LAA1517441-fainal";
    const USER = "LAA1517441";
    const PASS = "Pass1118";
    const DBINFO = 'mysql:host='.SERVER.';dbname='.DBNAME.';charset=utf8';                
    $db = new PDO(DBINFO, USER, PASS);

	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>