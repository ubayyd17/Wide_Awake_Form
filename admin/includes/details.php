<?php
include 'db_connection.php';
session_start();

$id = $_GET['id'];

$result = "SELECT * FROM `forms` WHERE `id` = $id";

?>