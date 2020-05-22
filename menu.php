<?php require "header.php";
$stmt = $con->prepare("SELECT * FROM menu where tipe = ? order by id ASC");
$stmt->bind_param("s", $tipe);
$tipe = "coffee";
$stmt->execute();
$data = $stmt->get_result();
if ($data->num_rows === 0) exit('No Rows');
?>


<section id="allMenu">
    <div class="content" id="coffee">
        <h2 class="text-capitalize">Coffee</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <?php while ($row = $data->fetch_assoc()) { ?>
                <li id="<?php echo $row['id']; ?>" class="col-6 col-lg-3 mt-3 pt-2" data-value="<?php echo $row['harga']; ?>" onclick="calculateTotal('<?php echo $row['id']; ?>')">
                    <img src="img/<?php echo $row['nama']; ?>.png" alt="<?php echo $row['nama']; ?>" class="img-menu size-img">
                    <p><?php echo $row['nama']; ?></p> <?php echo toRupiah($row['harga']); ?>
                    <div class="quantity">
                        <a href="#" class="quantity__minus"><span>-</span></a>
                        <input name="quantity" type="text" class="quantity__input" value="1">
                        <a href="#" class="quantity__plus"><span>+</span></a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>

    <div class="content" id="noncoffee">
        <h2 class="text-capitalize">Non Coffee</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <li id="c1" class="col-6 col-lg-3 mt-3 pt-2" data-value=20000 onclick="calculateTotal('c1')">
                <img src="img/Affogato.png" alt="Affogato" class="img-menu size-img">
                <p>Affogato</p> Rp. 20.000
            </li>
            <li id="c2" class="col-6 col-lg-3 mt-3 pt-2" data-value=25000 onclick="calculateTotal('c2')">
                <img src="img/Cappucino.png" alt="Affogato" class="img-menu size-img">
                <p>Cappucino</p> Rp. 25.000
            </li>
            <li id="c3" class="col-6 col-lg-3 mt-3 pt-2" data-value=27000 onclick="calculateTotal('c3')">
                <img src="img/Flat White.png" alt="Affogato" class="img-menu size-img">
                <p>Flat White</p> Rp. 27.000
            </li>
            <li id="c4" class="col-6 col-lg-3 mt-3 pt-2" data-value=22000 onclick="calculateTotal('c4')">
                <img src="img/Espresso.png" alt="Affogato" class="img-menu size-img">
                <p>Espresso</p> Rp. 22.000
            </li>
            <li id="c5" class="col-6 col-lg-3 mt-3 pt-2" data-value=23000 onclick="calculateTotal('c5')">
                <img src="img/Americano.png" alt="Affogato" class="img-menu size-img">
                <p>Americano</p> Rp. 23.000
            </li>
            <li id="c6" class="col-6 col-lg-3 mt-3 pt-2" data-value=29000 onclick="calculateTotal('c6')">
                <img src="img/Mocha.png" alt="Affogato" class="img-menu size-img">
                <p>Mocha</p> Rp. 29.000
            </li>
            <li id="c7" class="col-6 col-lg-3 mt-3 pt-2" data-value=28000 onclick="calculateTotal('c7')">
                <img src="img/Ristretto.png" alt="Affogato" class="img-menu size-img">
                <p>Ristretto</p> Rp. 28.000
            </li>
        </ul>
    </div>



    <div class="content" id="lmeal">
        <h2 class="text-capitalize">Light Meal</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <li id="c1" class="col-6 col-lg-3 mt-3 pt-2" data-value=20000 onclick="calculateTotal('c1')">
                <img src="img/Affogato.png" alt="Affogato" class="img-menu size-img">
                <p>Affogato</p> Rp. 20.000
            </li>
            <li id="c2" class="col-6 col-lg-3 mt-3 pt-2" data-value=25000 onclick="calculateTotal('c2')">
                <img src="img/Cappucino.png" alt="Affogato" class="img-menu size-img">
                <p>Cappucino</p> Rp. 25.000
            </li>
            <li id="c3" class="col-6 col-lg-3 mt-3 pt-2" data-value=27000 onclick="calculateTotal('c3')">
                <img src="img/Flat White.png" alt="Affogato" class="img-menu size-img">
                <p>Flat White</p> Rp. 27.000
            </li>
            <li id="c4" class="col-6 col-lg-3 mt-3 pt-2" data-value=22000 onclick="calculateTotal('c4')">
                <img src="img/Espresso.png" alt="Affogato" class="img-menu size-img">
                <p>Espresso</p> Rp. 22.000
            </li>
            <li id="c5" class="col-6 col-lg-3 mt-3 pt-2" data-value=23000 onclick="calculateTotal('c5')">
                <img src="img/Americano.png" alt="Affogato" class="img-menu size-img">
                <p>Americano</p> Rp. 23.000
            </li>
            <li id="c6" class="col-6 col-lg-3 mt-3 pt-2" data-value=29000 onclick="calculateTotal('c6')">
                <img src="img/Mocha.png" alt="Affogato" class="img-menu size-img">
                <p>Mocha</p> Rp. 29.000
            </li>
            <li id="c7" class="col-6 col-lg-3 mt-3 pt-2" data-value=28000 onclick="calculateTotal('c7')">
                <img src="img/Ristretto.png" alt="Affogato" class="img-menu size-img">
                <p>Ristretto</p> Rp. 28.000
            </li>
        </ul>
    </div>

    <div class="content" id="hmeal">
        <h2 class="text-capitalize">Heavy Meal</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <li id="c1" class="col-6 col-lg-3 mt-3 pt-2" data-value=20000 onclick="calculateTotal('c1')">
                <img src="img/Affogato.png" alt="Affogato" class="img-menu size-img">
                <p>Affogato</p> Rp. 20.000
            </li>
            <li id="c2" class="col-6 col-lg-3 mt-3 pt-2" data-value=25000 onclick="calculateTotal('c2')">
                <img src="img/Cappucino.png" alt="Affogato" class="img-menu size-img">
                <p>Cappucino</p> Rp. 25.000
            </li>
            <li id="c3" class="col-6 col-lg-3 mt-3 pt-2" data-value=27000 onclick="calculateTotal('c3')">
                <img src="img/Flat White.png" alt="Affogato" class="img-menu size-img">
                <p>Flat White</p> Rp. 27.000
            </li>
            <li id="c4" class="col-6 col-lg-3 mt-3 pt-2" data-value=22000 onclick="calculateTotal('c4')">
                <img src="img/Espresso.png" alt="Affogato" class="img-menu size-img">
                <p>Espresso</p> Rp. 22.000
            </li>
            <li id="c5" class="col-6 col-lg-3 mt-3 pt-2" data-value=23000 onclick="calculateTotal('c5')">
                <img src="img/Americano.png" alt="Affogato" class="img-menu size-img">
                <p>Americano</p> Rp. 23.000
            </li>
            <li id="c6" class="col-6 col-lg-3 mt-3 pt-2" data-value=29000 onclick="calculateTotal('c6')">
                <img src="img/Mocha.png" alt="Affogato" class="img-menu size-img">
                <p>Mocha</p> Rp. 29.000
            </li>
            <li id="c7" class="col-6 col-lg-3 mt-3 pt-2" data-value=28000 onclick="calculateTotal('c7')">
                <img src="img/Ristretto.png" alt="Affogato" class="img-menu size-img">
                <p>Ristretto</p> Rp. 28.000
            </li>
        </ul>
    </div>


    <?php
    $stmt->close();
    $stmt = $con->prepare("SELECT * FROM menu where tipe = ? order by id ASC");
    $stmt->bind_param("s", $tipe);
    $tipe = "dessert";
    $stmt->execute();
    $data = $stmt->get_result();
    if ($data->num_rows === 0) exit('No Rows');
    ?>

    <div class="content" id="dessert">
        <h2 class="text-capitalize">Dessert</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <?php while ($row = $data->fetch_assoc()) { ?>
                <li id="<?php echo $row['id']; ?>" class="col-6 col-lg-3 mt-3 pt-2" data-value="<?php echo $row['harga']; ?>" onclick="calculateTotal('<?php echo $row['id']; ?>')">
                    <img src="img/<?php echo $row['nama']; ?>.png" alt="<?php echo $row['nama']; ?>" class="img-menu size-img">
                    <p><?php echo $row['nama']; ?></p> <?php echo toRupiah($row['harga']);
                                                    } ?>
                </li>
        </ul>
    </div>
</section>
<?php
$stmt->close();
require "footer.php"; ?>