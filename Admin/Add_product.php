<?php

include_once dirname( __FILE__ ).'/../settings/core.php';
include_once dirname( __FILE__ ).'/../controller/product_controller.php';

$allproducts = select_all_products_controller();
$Allcategory = select_all_categories_controller();

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
        <title>Admin | Add Product</title>
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
          <div class="form-container">
              <div class="form-header">
                <h1>Add Product</h1>
              </div>
              <div class="card">
                <div class="container">
                    <form id="form" method="POST" action="../actions/product_process.php" enctype="multipart/form-data">
                        <div class="form-element">
                            <label>Product Category</label>
                            <select name="category" id="category">
                                <option selected disabled hidden>Select Product Category</option>
                            <?php
foreach ( $Allcategory as $x )
        {?>
                            <option value="<?php echo $x['cat_id']; ?>"><?php echo $x['cat_name']; ?></option>
                            <?php
}
        ?>
                            </select>
                            <small>Error message</small>
                          </div>
                        <div class="form-element">
                            <label for="">Enter Product Title</label>
                            <input type="text" placeholder="Enter Product Name" id="productname" name="productName">
                            <small>Error</small>
                        </div>
                        <div class="form-element">
                            <label for="">Enter Product Price</label>
                            <input type="text" placeholder="Enter Product Price" id="productprice" name="productPrice">
                            <small>Error</small>
                        </div>
                        <div class="form-element">
                            <label for="">Enter Product Ingredients</label>
                            <textarea name="productDesc" id="description"></textarea>
                            <small>Error</small>
                        </div>
                        <div class="form-element">
                            <label>Select Image to upload</label>
                            <input type="file" name="prod_image" id="prod_image">
                            <small>Error message</small>
                        </div>
                        <div class="form-element">
                            <label for="">Enter Product Keyword</label>
                            <input type="text" placeholder="Enter Product Keyword" id="productkey" name="productKey">
                            <small>Error</small>
                        </div>
                        <div class="form-element">
                            <label for="">Enter Product Quantity</label>
                            <input type="text" placeholder="Enter Product Quantity" id="productqty" name="productQuantity">
                            <small>Error</small>
                        </div>
                        <div class="form-btns">
                            <div>
                                <a href="./Products.php">Return</a>
                            </div>
                            <div>
                                <button id="add" type="submit" name="addProduct">Add Product</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
          </div>
        </main>
        <script src="../js/validate_cat_prod.js"></script>
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


