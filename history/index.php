<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Boss Coffee</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/661db8639e.js" crossorigin="anonymous"></script>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon" />
</head>

<body>
  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">History</span>
    <div class="brand_logo_container m-auto">
      <img src="../img/logo.png" class="brand_logo" alt="Logo" />
    </div>
  </h1>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Boss Coffee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="../index.html"><i class="fas fa-backspace"></i> Back
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="page-section clearfix">
    <div class="container-fluid">
      <div class="container">
        <div class="show-table">
          <table class="table table-responsive-sm">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Cashier</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Total</th>
                <th scope="col">Waktu</th>
              </tr>
            </thead>
            <tbody>
              <?php include "../_config/config.php";
              $con = conDB();
              $data = showTransaction($con);
              while ($row = $data->fetch_assoc()) {
              ?>
                <tr name="history" data-toggle="modal" data-target="#modal<?php echo $row['id'] ?>" style="cursor: pointer;">
                  <th scope="row"><?php echo $row['id']; ?></th>
                  <td><?php echo $row['nama']; ?></td>
                  <td class="text-uppercase"><?php echo $row['payment']; ?></td>
                  <td><?php echo $row['nominal_beli']; ?></td>
                  <td><?php
                      $newdate = new DateTime($row['waktu']);
                      echo date_format($newdate, "d-M-Y H:i:s")  ?></td>
                </tr>
              <?php }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <?php
    $data1 = showTransaction($con);
    while ($row1 = $data1->fetch_assoc()) {
    ?>
      <div id="modal<?php echo $row1['id']; ?>" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail</h4>
              <button type="button" class="close" data-dismiss="modal">
                &times;
              </button>
            </div>
            <div class="modal-body">
              <table class="table">
                <p>Transaction Details</p>
                <tr>
                  <td>
                    <p>Payment Method</p>
                  </td>
                  <td>
                    <p class="text-uppercase"><?php echo $row1['payment']; ?></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Transaction ID</p>
                  </td>
                  <td>
                    <p><?php echo $row1['id']; ?></p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Time Of Purchase</p>
                  </td>
                  <td>
                    <p><?php echo $row1['waktu']; ?></p>
                  </td>
                </tr>
                <table class="table">
                  <p>Items</p>
                  <tr>
                    <td>
                      Image
                    </td>
                    <td>
                      Menu
                    </td>
                    <td>
                      Qty
                    </td>
                    <td>
                      Price
                    </td>
                  </tr>
                  <?php
                  $data = showTransactionDetail($con, $row1['id']);
                  while ($row_add = $data->fetch_assoc()) {
                  ?>
                    <tr>
                      <td>
                        <img src="../img/<?php echo $row_add['nama'] ?>.png" alt="" class="img-display-thumb">
                      </td>
                      <td>
                        <p><?php echo $row_add['nama']; ?></p>
                      </td>
                      <td>
                        <p><?php echo $row_add['quantity']; ?></p>
                      </td>
                      <td>
                        <p><?php echo toRupiah($row_add['harga']); ?></p>
                      </td>
                    </tr>
                  <?php } ?>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <p>SubTotal:</p>
                    </td>
                    <td>
                      <p><?php echo $row1['nominal_beli']; ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <p>Pay:</p>
                    </td>
                    <td>
                      <p><?php echo $row1['nominal_bayar']; ?></p>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <p>Change:</p>
                    </td>
                    <td>
                      <p><?php echo toRupiah(0); ?></p>
                    </td>
                  </tr>
                </table>
              </table>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </section>
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Boss Coffee 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
<?php closeDB($con); ?>

</html>