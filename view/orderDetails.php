<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controller/cart_controller.php';

if (isset($_SESSION['user_id'])) { //gets session of customer(logged in)
    $user_id = $_SESSION['user_id'];  //user_id is now session

    $total_checkout = total_checkout_lg_controller($user_id);
}

if (isset($_SESSION["user_id"]) && ($_SESSION["user_role"])) {
    if ($_SESSION["user_role"] === '2') {
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
        <title>Payment</title>
      </head>
      <body>
        <main>
          <div class="form-container">
              <div class="form-header">
                <h1>Add Payment</h1>
              </div>
              <div class="card">
                <div class="container">
                    <form id="form" method="POST" action="../actions/category_process.php" >
                        <div class="form-element">
                            <label for="">Enter Email</label>
                            <input type="text" placeholder="Enter Email" id="email-address" >
                            <small>Error</small>
                        </div>
                        <div class="form-element">
                            <label for="">Enter Phone</label>
                            <input type="text" placeholder="Enter Phone" id="phone" >
                            <small>Error</small>
                        </div>
                        <div class="form-btns">
                            <div>
                                <a href="./cart.php">Return</a>
                            </div>
                            <div>
                                <button id="pay" type="button" value="<?php echo $total_checkout['total']?>" onclick="payWithPaystack()">Pay&#8373;<?php echo $total_checkout['total']?></button>
                            </div>         
                        </div>
                    </form> 
                </div>
              </div>
          </div>
        </main>
         <!-- PAYSTACK INLINE SCRIPT -->
            <script src="https://js.paystack.co/v1/inline.js"></script>

            <script>
                const paymentForm = document.getElementById('paymentForm');
                paymentForm.addEventListener("submit", payWithPaystack, false);

                // PAYMENT FUNCTION
                function payWithPaystack() {

                    let handler = PaystackPop.setup({
                        key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
                        // key: 'pk_test_b28f7685fbbab527a165b02f5d271541fa8e95fa', // Replace with your public key
                        //pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd
                        email: document.getElementById("email-address").value,
                        phone: document.getElementById("phone").value,
                        amount: document.getElementById("pay").value * 100,
                        currency: 'GHS',
                        onClose: function() {
                            // window.location = "http://localhost/CodeX/index.php?transaction=cancel"
                            alert('Transaction Cancelled.');
                        },
                        callback: function(response) {

                            let message = "Payment Successful! Reference: " + response.reference;
                            alert(message);
                            window.location = "http://vivico1.ukwest.cloudapp.azure.com/payment_process.php?reference=" + response.reference;
                            
                        }
                    });
                    handler.openIframe();
                }
            </script>

      </body>
    </html>
    <?php
}
} else {
    echo "
        <script>
        alert('Not logged in');
        document.location.href='../index.php';
        </script>

        ";

}

