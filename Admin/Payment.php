<?php

include_once dirname( __FILE__ ).'/../settings/core.php';
include_once dirname( __FILE__ ).'/../controller/payment_controller.php';

$paymentAdmin = select_payment_admin_controller();

if ( isset( $_SESSION["user_id"] ) && ( $_SESSION["user_role"] ) ) {
    if ( $_SESSION["user_role"] === '1' ) {
        ?>

<!DOCTYPE html>
  <html>

    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <!-- FONTS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <!-- CUSTOM CSS -->
      <link rel="stylesheet" href="../css/admin.css" />
      <link rel="stylesheet" href="../css/footer.css" />
      <title>Admin | Dashboard</title>
    </head>

    <!--Admin Navigation-->
    <header>
      <div class="wrapper">
        <div class="navbar-left">
          <div>
            <h2>Vivi Eats</h2>
          </div>
          <ul class="nav">
            <div class="nav_1">
              <div>
                <img src="../assets/icons/radix-icons_dashboard.svg" alt="">
              </div>
              <div>
                <li><a href="./Dashboard.php">Dashboard</a></li>
              </div>
            </div>
            <div class="nav_2">
              <div>
                <img src="../assets/icons/icon-park-outline_health-products.svg" alt="">
              </div>
              <div>
                <li><a href="./Products.php">Products</a></li>
              </div>
            </div>
            <div class="nav_3">
              <div>
                <img src="../assets/icons/heroicons-outline_user-group.svg" alt="">
              </div>
              <div>
                <li><a href="./Customers.php">Customers</a></li>
              </div>
            </div>
            <div class="nav_4">
              <div>
                <img src="../assets/icons/fluent_task-list-add-20-filled.svg" alt="">
              </div>
              <div>
                <li><a href="./Orders.php">Orders</a></li>
              </div>
            </div>
            <div class="nav_5">
              <div>
                <img src="../assets/icons/bi_cash-coin.svg" alt="">
              </div>
              <div>
                <li><a class="active" href="./Payment.php">Payment</a></li>
              </div>
            </div>

          </ul>
        </div>
      </div>
    </header>
    <body>
      <main>
        <div class="main-content">
          <div class="top">
              <div>
                <h2>Payment</h2>
              </div>
              <div class="dropdown">
                <div class="nav_icon">
                    <img src="../assets/icons/bx_bx-user-black.svg" alt="">
                </div>
                <div class="dropdown-content">
                <a href="../settings/logout.php">Logout</a>
                </div>
              </div>
            </div>
          <div style="margin-bottom: 20px;">
            <p><?php echo date( 'D, M j Y' ); ?></p>
          </div>
        </div>
        <div>
          <form>
            <input type="text" name="search" placeholder="Search..">
          </form>
        </div>
        <div class="order-data p">
          <div>
            <h4>Payment Transactions</h4>
          </div>

          <table>
            <thead>
              <tr>
                <th>Invoice</th>
                <th>Customer</th>
                <th>Currency</th>
                <th>Amount Paid</th>
                <th>Payment Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="pay-loop">
              <tr>
                <?php
foreach ( $paymentAdmin as $payment ) {
            ?>
                <td>&#35;<?php echo $payment['invoice_no']; ?></td>
                <td><?php echo $payment['user_fname']." ".$payment['user_lname']; ?></td>
                <td><?php echo $payment['amount']?></td>
                <td>&#8373;<?php echo $payment['currency']; ?></td>
                <td><?php echo $payment['payment_date']; ?></td>
                <td>
                  <div class="act_img"><img src="../assets/icons/bytesize_trash.svg" alt=""></div>
                </td>
                <?php
}
        ?>

              </tr>
            </tbody>
          </table>
            <nav aria-label=...>
              <ul class="pagination pay">
                  <li id="previous-page"><a class='page-link' href="javascript:void(0)" aria-label=Previous>Prev</a></li>
              </ul>
            </nav>
        </div>
      </main>
          <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
          <script src="../js/pagination.js"></script>
    </body>
  </html>
<?php
}
} else {
    echo "
        <script>
        alert('Administrator not logged in');
        document.location.href='../index.php';
        </script>

        ";

}
