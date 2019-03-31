<?php
require_once("usuario.php");
logout();
header("Location: index.php?Logout=1");
die();