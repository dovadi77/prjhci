<?php
function conDB()
{
    $con = new mysqli("localhost", "root", "", "pos");
    // Check connection
    if ($con->connect_error) {
        $con = new mysqli("localhost", "hci", "ProjectHci@2020", "pos");
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
    }
    return $con;
}

function closeDB($con)
{
    $con->close();
}

function showDataMenu($con, $table, $tipe)
{
    $stmt = $con->prepare("SELECT * FROM $table where tipe = ? order by id ASC");
    $stmt->bind_param("s", $tipe);
    $stmt->execute();
    $data = $stmt->get_result();
    if ($data->num_rows === 0) exit('No Rows');
    return $data;
}

function toRupiah($nominal)
{
    return "Rp. " . number_format($nominal, 0, ',', '.');
}

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1, -4);
