<?php

include_once dirname( __FILE__ ).'/../settings/db_class.php';

// inherit the methods from Connection
class user_class extends Connection
{
    function add_customer( $fname, $lname, $contact, $email, $password)
    {
        // return true or false
        return $this->query( "insert into customer(customer_firstname,customer_lastname,customer_contact,customer_email, customer_pass)
		 values('$fname','$lname', '$contact','$email', '$password')" );
    }


    function delete_one_user( $id )
    {
        // return true or false
        return $this->query( "delete from customer where customer_id = '$id'" );
    }

    function select_all_customer()
    {
        // return array or false
        return $this->fetch( "select * from customer" );
    }

    function select_one_user( $id )
    {
        // return associative array or false
        return $this->fetchOne( "select * from customer where customer_id='$id'" );
    }

    function update_one_user( $id, $fname, $lname, $email, $contact )
    {
        // return true or false
        return $this->query( "update customer set customer_firstname='$fname', customer_lastname ='$lname',customer_email='$email',
		  customer_contact='$contact' where customer_id = '$id'" );
    }

    function verify_email( $email )
    {
        return $this->fetchOne( "select user_email from customer WHERE customer_email = '$email'" );
    }

    function verify_login( $email )
    {
        return $this->fetchOne( "select * from customer WHERE customer_email = '$email' " );
    }
}
