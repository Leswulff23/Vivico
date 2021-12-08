<?php
include_once dirname( __FILE__ ).'/../controller/customer_controller.php';

if ( isset( $_POST['submitForm'] ) )
{$fname = $_POST['Firstname'];
    $lname = $_POST['Lastname'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $pass = $_POST['Pass'];
    // $pass1 = $_POST['cPass'];
    


    $password = password_hash( $pass, PASSWORD_DEFAULT );
    //check if email exists
    $verify_email = verify_email( $email );

    if ( $verify_email )
    {echo "<script type='text/javascript'> alert('Email already exists');
        window.history.back();
        </script>";
    }
    else
    {//add new user
        $addCustomer = add_customer_controller( $fname, $lname,$phone,$email, $password);
        if ( $addCustomer )
        {echo "<script type='text/javascript'> alert('Successfully Registered');
            window.location.href = '../view/login.php';
            </script>";
        }
        else
        {echo "Failed";
        }
    }
}
