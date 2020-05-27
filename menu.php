<?php require "header.php";
$con = conDB();
$data = showDataMenu($con, "menu", "coffee");
?>
<section id="allMenu">
    <div class="content" id="coffee">
        <h2 class="text-capitalize">Coffee</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <?php while ($row = $data->fetch_assoc()) { ?>
                <li id="<?php echo $row['id']; ?>" class="col-6 col-lg-3 mt-3 pt-2" data-value="<?php echo $row['harga']; ?>"">
                    <img src=" img/<?php echo $row['nama']; ?>.png" alt="<?php echo $row['nama']; ?>" class="img-menu size-img">
                    <p><?php echo $row['nama']; ?></p> <?php echo toRupiah($row['harga']); ?>
                </li>
                <div id="myModal<?php echo $row['id']; ?>" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2><?php echo $row['nama']; ?></h2>
                            <span class="close" id="closex">&times;</span>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the Modal Body</p>
                            <p>Some other text...</p>
                        </div>
                        <div class="modal-footer">
                            <h3>Modal Footer</h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </div>
    <?php
    $data = showDataMenu($con, "menu", "noncoffee");
    ?>
    <div class="content" id="noncoffee">
        <h2 class="text-capitalize">Non Coffee</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <?php while ($row = $data->fetch_assoc()) { ?>
                <li id="<?php echo $row['id']; ?>" class="col-6 col-lg-3 mt-3 pt-2" data-value="<?php echo $row['harga']; ?>"">
                    <img src=" img/<?php echo $row['nama']; ?>.png" alt="<?php echo $row['nama']; ?>" class="img-menu size-img">
                    <p><?php echo $row['nama']; ?></p> <?php echo toRupiah($row['harga']); ?>
                </li>
                <div id="myModal<?php echo $row['id']; ?>" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2><?php echo $row['nama']; ?></h2>
                            <span class="close" id="closex">&times;</span>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the Modal Body</p>
                            <p>Some other text...</p>
                        </div>
                        <div class="modal-footer">
                            <h3>Modal Footer</h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </div>


    <?php
    $data = showDataMenu($con, "menu", "light");
    ?>
    <div class="content" id="lmeal">
        <h2 class="text-capitalize">Light Meal</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <?php while ($row = $data->fetch_assoc()) { ?>
                <li id="<?php echo $row['id']; ?>" class="col-6 col-lg-3 mt-3 pt-2" data-value="<?php echo $row['harga']; ?>"">
                    <img src=" img/<?php echo $row['nama']; ?>.png" alt="<?php echo $row['nama']; ?>" class="img-menu size-img">
                    <p><?php echo $row['nama']; ?></p> <?php echo toRupiah($row['harga']); ?>

                </li>
                <div id="myModal<?php echo $row['id']; ?>" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2><?php echo $row['nama']; ?></h2>
                            <span class="close" id="closex">&times;</span>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the Modal Body</p>
                            <p>Some other text...</p>
                        </div>
                        <div class="modal-footer">
                            <h3>Modal Footer</h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </div>
    <?php
    $data = showDataMenu($con, "menu", "heavy");
    ?>
    <div class="content" id="hmeal">
        <h2 class="text-capitalize">Heavy Meal</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <?php while ($row = $data->fetch_assoc()) { ?>
                <li id="<?php echo $row['id']; ?>" class="col-6 col-lg-3 mt-3 pt-2" data-value="<?php echo $row['harga']; ?>"">
                    <img src=" img/<?php echo $row['nama']; ?>.png" alt="<?php echo $row['nama']; ?>" class="img-menu size-img">
                    <p><?php echo $row['nama']; ?></p> <?php echo toRupiah($row['harga']); ?>
                </li>
                <div id="myModal<?php echo $row['id']; ?>" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2><?php echo $row['nama']; ?></h2>
                            <span class="close" id="closex">&times;</span>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the Modal Body</p>
                            <p>Some other text...</p>
                        </div>
                        <div class="modal-footer">
                            <h3>Modal Footer</h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </div>


    <?php
    $data = showDataMenu($con, "menu", "dessert");
    ?>

    <div class="content" id="dessert">
        <h2 class="text-capitalize">Dessert</h2>
        <ul id="stateList" class="row text-center list-unstyled">
            <?php while ($row = $data->fetch_assoc()) { ?>
                <li id="<?php echo $row['id']; ?>" class="col-6 col-lg-3 mt-3 pt-2" data-value="<?php echo $row['harga']; ?>">
                    <img src="img/<?php echo $row['nama']; ?>.png" alt="<?php echo $row['nama']; ?>" class="img-menu size-img">
                    <p><?php echo $row['nama']; ?></p> <?php echo toRupiah($row['harga']); ?>
                </li>
                <div id="myModal<?php echo $row['id']; ?>" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2><?php echo $row['nama']; ?></h2>
                            <span class="close" id="closex">&times;</span>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the Modal Body</p>
                            <p>Some other text...</p>
                        </div>
                        <div class="modal-footer">
                            <h3>Modal Footer</h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </ul>
    </div>
</section>
<?php
closeDB($con);
require "footer.php"; ?>