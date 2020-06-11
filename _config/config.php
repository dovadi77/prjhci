<?php
function conDB()
{
    $con = new mysqli("localhost", "root", "", "pos");
    // Check connection
    if ($con->connect_error) {
        $con = new mysqli("localhost", "hci", "ProjectHci@2020", "pos");
        if ($con->connect_error) {
            $con = new mysqli("localhost", "webbasecafe", "va7ezy9ys", "zadmin_webbasecafe");
            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
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

function showTransaction($con)
{
    $stmt = $con->prepare("SELECT * FROM `transaksi` inner join `login` on `transaksi`.`cashier_id` = `login`.`cashier_id` ORDER BY transaksi.`id`");
    if (!($stmt->execute())) {
        echo "<alert>ERROR</error>";
    }
    $data = $stmt->get_result();
    if ($data->num_rows === 0) echo ('No DATA');
    return $data;
}
function showTransactionDetail($con, $id)
{
    $stmt = $con->prepare("SELECT * FROM `transaksi_detail` inner join `transaksi` on `transaksi_detail`.`order_id` = `transaksi`.`id` INNER JOIN `menu` on transaksi_detail.menu_id = menu.id where transaksi_detail.order_id = '$id' ORDER BY transd_id ASC");
    if (!($stmt->execute())) {
        echo "<alert>ERROR</error>";
    }
    $data = $stmt->get_result();
    if ($data->num_rows === 0) echo ('No DATA');
    return $data;
}

function toRupiah($nominal)
{
    return "Rp. " . number_format($nominal, 0, ',', '.');
}

$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1, -4);
