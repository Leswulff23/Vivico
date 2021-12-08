<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>

                <!-- FONTS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

            <!-- CUSTOM CSS -->
            <link rel="stylesheet" href="../css/register_login.css"/>
            <link rel="stylesheet" href="../css/footer.css" />
            <title>Vivi Eats| Login</title>
        </head>
        <body class="body-lg">
            <div class="cwrapper-form">
                <div class="form-l">
                    <div class="form-l-txt">
                        <a href="../index.php">Return Home</a>
                        <h1>Let's Sign you in</h1>
                        <p>Welcome back. You've been missed</p>
                    </div>
                </div>
                <div class="form-r lg">
                    <form id="form" method="POST" action="../actions/login_process.php">
                        <div class="form-r-txt lg">
                            <div class="form-header">
                                <h1>Sign In</h1>
                            </div>
                            <div class="form-element lg">
                                <input type="text" placeholder="Email" id="Email" name="Email">
                                <small>Error</small>
                            </div>
                            <div class="form-element lg">
                                <input type="password" placeholder="Password" id="Pass" name="Pass">
                                <small>Error</small>
                            </div>
                            <div class="form-element btn lg">
                                <button type="submit" id="submitForm" name="submitForm">Login</button>
                            </div>
                            <div class="form-element bottom lg">
                                <div class="form-element p">
                                    <p>Don't have an Account?</p>
                                </div>
                                <div>
                                    <a href="./register.php">Register</a>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
            <script src="../js/validate_login.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        </body>
    </html>