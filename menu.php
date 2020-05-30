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
                            <h3><?php echo $row['nama']; ?></h3>
                            <span class="close" name="close" id="<?php echo $row['id'] ?>">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <h3>Varieties</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="hot" value="hot" hidden>HOT
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="ice" value="ice" hidden>ICE
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Quantity</h3>
                                <div class="row">
                                    <div class="m-auto">
                                        <span><button type="button" class="btn square inc-dec" onclick="less('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">-</button></span>
                                        <span id="quantity<?php echo $row['id']; ?>" class="m-4">0</span>
                                        <span><button type="button" class="btn square inc-dec" onclick="add('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">+</button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Sales Type</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="dinein" hidden>DINE IN
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="takeaway" hidden>TAKE AWAY
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Note</h3>
                                <textarea rows="8" cols="40" class="t-area" id="<?php echo $row['id']; ?>"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span class="add">ADD</span>
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
                            <h3><?php echo $row['nama']; ?></h3>
                            <span class="close" name="close" id="<?php echo $row['id'] ?>">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <h3>Varieties</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="hot" value="hot" hidden>HOT
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="ice" value="ice" hidden>ICE
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Quantity</h3>
                                <div class="row">
                                    <div class="m-auto">
                                        <span><button type="button" class="btn square inc-dec" onclick="less('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">-</button></span>
                                        <span id="quantity<?php echo $row['id']; ?>" class="m-4">0</span>
                                        <span><button type="button" class="btn square inc-dec" onclick="add('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">+</button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Sales Type</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="dinein" hidden>DINE IN
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="takeaway" hidden>TAKE AWAY
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Note</h3>
                                <textarea rows="8" cols="40" class="t-area" id="<?php echo $row['id']; ?>"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span class="add">ADD</span>
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
                            <h3><?php echo $row['nama']; ?></h3>
                            <span class="close" name="close" id="<?php echo $row['id'] ?>">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="container" hidden>
                                <h3>Varieties</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="hot" value="hot" hidden>HOT
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="ice" value="ice" hidden>ICE
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Quantity</h3>
                                <div class="row">
                                    <div class="m-auto">
                                        <span><button type="button" class="btn square inc-dec" onclick="less('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">-</button></span>
                                        <span id="quantity<?php echo $row['id']; ?>" class="m-4">0</span>
                                        <span><button type="button" class="btn square inc-dec" onclick="add('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">+</button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Sales Type</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="dinein" hidden>DINE IN
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="takeaway" hidden>TAKE AWAY
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Note</h3>
                                <textarea rows="8" cols="40" class="t-area" id="<?php echo $row['id']; ?>"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span class="add">ADD</span>
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
                            <h3><?php echo $row['nama']; ?></h3>
                            <span class="close" name="close" id="<?php echo $row['id'] ?>">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="container" hidden>
                                <h3>Varieties</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="hot" value="hot" hidden>HOT
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="ice" value="ice" hidden>ICE
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Quantity</h3>
                                <div class="row">
                                    <div class="m-auto">
                                        <span><button type="button" class="btn square inc-dec" onclick="less('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">-</button></span>
                                        <span id="quantity<?php echo $row['id']; ?>" class="m-4">0</span>
                                        <span><button type="button" class="btn square inc-dec" onclick="add('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">+</button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Sales Type</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="dinein" hidden>DINE IN
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="takeaway" hidden>TAKE AWAY
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Note</h3>
                                <textarea rows="8" cols="40" class="t-area" id="<?php echo $row['id']; ?>"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span class="add">ADD</span>
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
                            <h3><?php echo $row['nama']; ?></h3>
                            <span class="close" name="close" id="<?php echo $row['id'] ?>">&times;</span>
                        </div>
                        <div class="modal-body">
                            <div class="container" hidden>
                                <h3>Varieties</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="hot" value="hot" hidden>HOT
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="variant" id="ice" value="ice" hidden>ICE
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Quantity</h3>
                                <div class="row">
                                    <div class="m-auto">
                                        <span><button type="button" class="btn square inc-dec" onclick="less('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">-</button></span>
                                        <span id="quantity<?php echo $row['id']; ?>" class="m-4">0</span>
                                        <span><button type="button" class="btn square inc-dec" onclick="add('<?php echo $row['id']; ?>', '<?php echo $row['harga']; ?>')">+</button></span>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Sales Type</h3>
                                <div class="row">
                                    <div class="btn-group m-auto" data-toggle="buttons">
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="dinein" hidden>DINE IN
                                        </label>
                                        <label class="btn btn-primary btn-lg square">
                                            <input type="radio" name="sales" value="takeaway" hidden>TAKE AWAY
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h3>Note</h3>
                                <textarea rows="8" cols="40" class="t-area" id="<?php echo $row['id']; ?>"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <span class="add">ADD</span>
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