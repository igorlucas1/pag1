<?php

session_start();
session_destroy();
echo "finalizando Sistema!!!";
header("refresh: 2; url=index.html");

?>