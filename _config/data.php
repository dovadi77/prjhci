<?php include "config.php";
$con = conDB();
if (isset($_POST['menu'])) {
    $menu = $_POST['menu'];
    $variant = $_POST['variant'];
    $sales = $_POST['sales'];
    $add = $_POST['add'];
    $qty = $_POST['qty'];
    $val = $_POST['val'];
    $pay = $_POST['pay'];
    $nom = toRupiah($pay);
    addTransaction($con, 1, "cash", $nom, $nom);
} else {
    echo "error";
}
