<?php

session_start();

$_SESSION["name"] = $_POST["name"];

header("Location: informacoes.php");