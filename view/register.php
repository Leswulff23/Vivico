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
            <title>Vivi Eats| Register</title>
        </head>
        <body>
            <div class="cwrapper-form">
                <div class="form-l">
                    <div class="form-l-txt">
                        <a href="../index.php">Return Home</a>
                        <h1>Let's Get Started</h1>
                        <p>We are glad you could join the family</p>
                        
                    </div>
                </div>
                <div class="form-r">
                    <form id="form" method="POST" action="../actions/register_process.php" >
                        <div class="form-r-txt">
                            <div class="form-header">
                                <h1>Create Account</h1>
                            </div>
                            <div class="field-1">
                                <div class="form-element">
                                    <input type="text" placeholder="First Name" id="Firstname" name="Firstname">
                                    <small>Error</small>
                                </div>
                                <div class="form-element">
                                    <input type="text" placeholder="Last Name" id="Lastname" name="Lastname">
                                    <small>Error</small>
                                </div>
                            </div>
                            <div class="field-2">
                                <div class="form-element">
                                    <input type="text" placeholder="Email" id="Email" name="Email">
                                    <small>Error</small>
                                </div>
                                <div class="form-element">
                                    <input type="text" placeholder="Phone" id="Phone" name="Phone">
                                    <small>Error</small>
                                </div>
                            </div>
                            <div class="field-3">
                                <div class="form-element">
                                    <input type="password" placeholder="Password" id="Pass" name="Pass">
                                    <small>Error</small>
                                </div>
                                <div class="form-element">
                                    <input type="password" placeholder="Confirm Password" id="cPass" name="cPass">
                                    <small>Error</small>
                                </div>
                            </div> 
                            <!-- <div>
                                <div class="form-element img">
                                    <div class="form-element wrapper-img">
                                        <div>
                                            <label>Select Profile Picture</la>
                                        </div>
                                        <div>
                                            <input type="file" name="image" id="image" placeholder="Select Profile Picture">
                                        </div>
                                    </div>
                                    <small>Error</small>
                                </div>
                            </div> -->
                            <div class="form-element btn">
                                <button type="submit" id="submitForm" name="submitForm">Register</button>
                            </div>
                            <div class="form-element bottom">
                                <div class="form-element p">
                                    <p>Already a Member?</p>
                                </div>
                                <div>
                                    <a href="./login.php">Login</a>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
            <script src="../js/validate_register.js"></script>
        </body>
    </html>