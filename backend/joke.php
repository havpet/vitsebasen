<?php

header("Access-Control-Allow-Origin: *");
header('Content-type: application/json; charset=utf-8');

include('../includes/headers.inc.php');

require_once('Models/Jokes.php');

$jokes = new Jokes();

$grov = htmlspecialchars($_GET['grovhet']);
$type = htmlspecialchars($_GET['type']);
$lengde = htmlspecialchars($_GET['lengde']);
$except = htmlspecialchars($_GET['except']);

$jokes->incrementNumberOfGens();

echo json_encode($jokes->getJoke($grov, $type, $lengde, $except));

 ?>
