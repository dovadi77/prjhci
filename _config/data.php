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
    $payment = $_POST['payment'];
    $nom = toRupiah($pay);
    addTransaction($con, 1, $payment, $nom, $nom);
    $data = mysqli_query($con, "SELECT * from transaksi");
    $id = mysqli_num_rows($data);
    for ($i = 0; $i < count($menu); $i++) {
        addTransactionMenu($con, $id, $menu[$i], $variant[$i], $add[$i], $qty[$i], $sales[$i]);
    }
} else {
    echo "error";
}
