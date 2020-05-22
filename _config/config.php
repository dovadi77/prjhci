<?php
$con = new mysqli("localhost", "root", "", "pos");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function toRupiah($nominal)
{
    return "Rp. " . number_format($nominal, 0, ',', '.');
}

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1, -4);
