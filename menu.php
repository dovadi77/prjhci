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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sollicitudin, tellus ut fermentum pellentesque, magna arcu dapibus nulla, tristique dapibus lorem libero eu lectus. Phasellus mattis magna at orci pellentesque, vel finibus odio tempus. Curabitur sodales ac odio tempus dictum. Aliquam et laoreet erat, sed euismod lectus. Curabitur nunc nulla, suscipit eu risus ac, tincidunt luctus lacus. Etiam vel elementum risus. Praesent imperdiet non tortor vel rutrum. Donec id tortor diam. Sed eu rutrum lectus. Integer leo metus, luctus eget feugiat a, placerat sit amet eros. Cras finibus velit diam, ut aliquet nunc posuere eu. Praesent tempus tellus nisi, eu tincidunt metus imperdiet eu.

                                Vestibulum tempus, risus a ullamcorper vulputate, odio augue eleifend sapien, in pellentesque leo turpis nec erat. Nam sit amet ornare tortor. Nunc dolor enim, suscipit vitae libero at, auctor porttitor odio. Sed accumsan purus id sapien vestibulum, quis placerat urna dapibus. In lacinia, velit eu molestie aliquet, tortor purus vestibulum elit, vitae iaculis nisi enim sollicitudin lacus. Quisque turpis tellus, suscipit sed dignissim id, lobortis id justo. Pellentesque dapibus posuere suscipit. Vivamus tristique volutpat odio eget volutpat. Vivamus at placerat justo, sit amet elementum quam.

                                Etiam a nisi non velit tempus euismod. Praesent semper enim sapien, quis dapibus tortor iaculis et. Pellentesque venenatis odio turpis, at tempor purus vestibulum eget. Etiam vel rhoncus tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla varius enim in lacus auctor vulputate. Mauris elementum euismod diam, maximus eleifend diam porta semper. Maecenas nec est tristique, egestas eros sed, mattis nulla. In in semper lectus, at fringilla velit. Donec interdum, tellus a egestas vehicula, metus elit convallis mauris, quis facilisis lectus dolor at orci. Donec dui quam, pellentesque id lacus et, tempus tincidunt tellus.

                                Aenean nulla nisi, iaculis ut maximus eu, aliquet quis magna. Proin condimentum dapibus lorem, eget condimentum nisl facilisis at. Curabitur lobortis fermentum risus, in feugiat lorem congue lobortis. Suspendisse elementum, magna sed ultricies suscipit, tellus eros imperdiet lorem, in luctus orci urna quis tortor. Integer mollis lacus mauris, vel pellentesque lectus dictum sed. Morbi a porttitor nisl. Maecenas bibendum tempor finibus. Quisque at varius elit. Etiam eu sem quis ante cursus dapibus. Cras nec auctor felis, eu hendrerit velit.

                                Donec ac justo ligula. Sed rutrum interdum nunc id efficitur. Vivamus nec sapien sit amet magna sodales iaculis. Nunc eu sagittis ligula. In vitae sagittis ex. Maecenas sagittis nisi finibus tellus pellentesque commodo. Phasellus vehicula magna et urna porta, ut suscipit leo scelerisque. Integer molestie ut orci ac mattis. Mauris at scelerisque ipsum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tincidunt vehicula pellentesque. Cras lectus velit, tincidunt eu libero at, fermentum faucibus lectus. Duis sed mauris dolor. Sed tempor, mi non iaculis posuere, ante augue malesuada tellus, a convallis orci justo non lorem.

                                Fusce a enim malesuada, tempus massa sit amet, porta tortor. Fusce hendrerit, dui interdum feugiat dapibus, lorem risus fermentum massa, vel vulputate ligula enim quis nibh. Sed egestas sem feugiat, consectetur risus id, congue enim. Nulla facilisi. Maecenas posuere erat sed aliquam finibus. Sed malesuada tortor vitae est gravida, ut mollis neque mattis. Mauris et libero imperdiet, venenatis dolor vel, rhoncus quam. Aliquam fringilla lorem eget orci rhoncus, non commodo tellus imperdiet.

                                Curabitur tristique purus purus, at consequat risus porta sit amet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi convallis dolor elementum ultricies pulvinar. Quisque vitae imperdiet magna. Fusce lobortis purus suscipit augue egestas dignissim. Sed vel condimentum ligula. Mauris volutpat ligula eget volutpat imperdiet. Cras quis risus sed orci interdum consectetur. Donec eget elit vestibulum libero luctus luctus at in orci. Fusce ligula nibh, congue et faucibus pellentesque, lobortis nec ligula. Mauris augue dolor, feugiat id porttitor eget, sollicitudin at lorem. Morbi urna dui, dapibus sed aliquet nec, dapibus nec erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam pellentesque ante turpis, et pellentesque velit convallis sit amet. Quisque sed fermentum quam, in mollis nisl.

                                Ut sit amet egestas massa. Aliquam in magna vehicula, commodo nisi eu, fermentum justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat turpis, aliquam blandit viverra non, consectetur in est. Praesent ultrices sit amet lacus eu efficitur. Suspendisse aliquet neque et pharetra facilisis. Fusce eleifend magna fringilla quam auctor dignissim. Donec fringilla ornare elementum. Nunc lobortis felis id mi vestibulum, sit amet dignissim elit lacinia. Curabitur semper odio velit, et lobortis quam malesuada dictum. In lobortis sapien libero. Morbi pretium dui in leo egestas elementum. Aenean ultrices a quam eu pharetra. Aliquam id accumsan felis. Praesent non elit vel tortor dignissim iaculis.

                                Donec in varius mi. Etiam commodo elementum odio, et euismod neque molestie in. Donec sed imperdiet est. Vivamus ut consequat augue, at posuere risus. Ut hendrerit at nunc eget ultrices. Sed at lectus congue, accumsan mi non, lacinia ex. In molestie in nunc vel interdum. Morbi egestas nulla vitae est tempus aliquet. Nunc lacinia, nulla vel venenatis dapibus, nunc eros suscipit orci, eget sagittis elit mauris quis leo.

                                Ut varius blandit dignissim. Suspendisse potenti. Duis consequat elementum mi, eget faucibus lorem ultrices eu. Maecenas vel dictum nunc. Mauris enim elit, consequat sed accumsan sed, auctor in elit. Nunc nec enim hendrerit, venenatis libero vel, venenatis nisi. Praesent congue rhoncus velit, a pharetra orci semper eget. Vivamus sed commodo lectus. Curabitur quis mauris quis magna mollis consectetur eu suscipit nibh. Pellentesque eget consectetur dui. Vivamus vel elementum nisl, ac feugiat justo. Aliquam at justo lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus.

                            </p>
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