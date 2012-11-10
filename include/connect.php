<?php

define('HOST', "localhost");
define('USERNAME', "root");
define('PASSWORD', "");
define('DB', "cms");

mysql_connect(HOST,USERNAME,PASSWORD) or die(mysql_error());
mysql_select_db(DB) or die(mysql_error());
?>