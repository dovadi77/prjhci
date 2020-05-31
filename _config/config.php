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

function addTransaction($con, $cashier_id, $payment, $nominal_beli, $nominal_bayar)
{
    $stmt = $con->prepare("INSERT INTO transaksi (cashier_id, payment, nominal_beli, nominal_bayar, waktu) VALUES (?, ?, ?, ?, CURRENT_TIMESTAMP())");
    $stmt->bind_param("isss", $cashier_id, $payment, $nominal_beli, $nominal_bayar);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
}

function addTransactionMenu($con, $order_id, $menu_id, $variety, $add_info, $quantity, $sales)
{
    $stmt = $con->prepare("INSERT INTO transaksi_detail (order_id, menu_id, variety, add_info, quantity, sales) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssis", $order_id, $menu_id, $variety, $add_info, $quantity, $sales);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
}

function toRupiah($nominal)
{
    return "Rp. " . number_format($nominal, 0, ',', '.');
}

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1, -4);
