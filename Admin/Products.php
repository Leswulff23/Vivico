<?php

include_once dirname( __FILE__ ).'/../settings/core.php';
include_once dirname( __FILE__ ).'/../controller/product_controller.php';

$all_categories = select_all_categories_controller();
$all_products = select_all_products_controller();

if ( isset( $_SESSION["user_id"] ) && ( $_SESSION["user_role"] ) )
{if ( $_SESSION["user_role"] === '1' )
    {?>
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
                  <li><a class="active" href="./Products.php">Products</a></li>
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
                  <li><a href="./Payment.php">Payment</a></li>
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
                <h2>Products</h2>
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
            <div>
              <p><?php echo date( 'D, M j Y' ); ?></p>
            </div>
          </div>
          <div class="container-btn">
            <div class="cbtn">
              <a href="./Add_category.php">Add Category</a>
            </div>
            <div class="cbtn">
              <a href="./Add_product.php">Add Products</a>
            </div>
          </div>
          <div class="wrapper-products">
              <div class="products-cat">
                <div>
                  <h4>Food Category</h4>
                </div>

                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                    <tbody id="cat-loop">
                  <?php
foreach ( $all_categories as $category ) {
    ?>

                
                    <tr>
                      <td>&#35;<?php echo $category['cat_id']; ?></td>
                      <td><?php echo $category['cat_name']; ?></td>
                      <td>
                        <div class="actions">
                          <div class="act_img"><img src="../assets/icons/ph_pencil-line-light.svg" alt=""></div>
                          <div class="act_img"><img src="../assets/icons/bytesize_trash.svg" alt=""></div>
                        </div>
                      </td>
                    </tr>
               
                  <?php
}
?>
                   </tbody>
                </table>
                  <nav aria-label=...>
                    <ul class="pagination cat">
                        <li id="previous-page"><a class='page-link' href="javascript:void(0)" aria-label=Previous>Prev</a></li>
                    </ul>
                  </nav>
              </div>
              <div class="fd-products">
                <div>
                  <h4>Food Product</h4>
                </div>
                <table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody id="fd-loop">
                                      <?php
foreach ( $all_products as $product ) {
    ?>
                    <tr>
                      <td>&#35;<?php echo $product['product_id']; ?></td>
                      <td><?php echo $product['product_title']; ?></td>
                      <td>
                        <div class="fd-products-img"><img src="<?php echo $product['product_image'];?>" alt=""></div>
                      </td>
                      <td><?php echo $product['cat_name']; ?></td>
                      <td>&#8373;<?php echo $product['product_price']; ?></td>
                      <td><?php echo $product['product_qty']; ?></td>
                      <td>
                        <div class="actions">
                          <div class="act_img"><img src="../assets/icons/ph_pencil-line-light.svg" alt=""></div>
                          <div class="act_img"><img src="../assets/icons/bytesize_trash.svg" alt=""></div>
                        </div>
                      </td>
                    </tr>
                                      <?php
}
?>
                  </tbody>
                </table>
                <nav aria-label=...>
                    <ul class="pagination prod">
                        <li id="previous-page"><a class='page-link' href="javascript:void(0)" aria-label=Previous>Prev</a></li>
                    </ul>
                </nav>
            </div>
          </div>
        </main>
          <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
          <script src="../js/pagination.js"></script>
      </body>
    </html>

<?php
}
}
else{
  echo "
        <script>
        alert('Administrator not logged in');
        document.location.href='../index.php';
        </script>

        ";


}

