<?php
session_start();
unset($_SESSION['usuario']);
header("location: ../../../../proyectoGestion");
die();