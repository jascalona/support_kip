<?php

include "./CONTROLLER/conexion.php";


session_start();
session_destroy();
header("location: ./login.php")

?>