<?php
//connect to the user class

include_once dirname( __FILE__ ).'/../classes/customer_class.php';

/**
 *add new user function
 *takes the first name, last name,email, password, and contact
 */
function add_customer_controller( $fname, $lname,$contact,$email, $password )
{
    // create an instance of the user class
    $user_instance = new user_class();
    // call the method from the class
    return $user_instance->add_customer( $fname, $lname, $contact, $email , $password);
}

/**
 *edit a user function
 *takes the id, first name, last name,email, password, and contact
 */
function update_user_controller( $id, $fname, $lname, $email, $contact )
{
    // create an instance of the user class
    $user_instance = new user_class();
    // call the method from the class
    return $user_instance->update_one_user( $id, $fname, $lname, $email, $contact );
}

/**
 *delete a user function
 *takes the id
 */
function delete_user_controller( $id )
{
    // create an instance of the user class
    $user_instance = new user_class();
    // call the method from the class
    return $user_instance->delete_one_user( $id );
}

/**
 *select all customer function
 *
 */
function select_all_customer_controller()
{
    // create an instance of the user class
    $user_instance = new user_class();
    // call the method from the class
    return $user_instance->select_all_customer();
}

/**
 *select a user function
 *takes the id
 */
function select_one_user_controller( $id )
{
    // create an instance of the user class
    $user_instance = new user_class();
    // call the method from the class
    return $user_instance->select_one_user( $id );
}

/**
 *check if mail exists function
 *takes the email
 */
function verify_email( $email )
{
    //create an instance of the user class
    $user_instance = new user_class();
    return $user_instance->verify_email( $email );
}

/**
 *get login information function
 *takes the mail
 */
function get_login_controller( $email )
{
    $user_instance = new user_class();
    return $user_instance->verify_login( $email );
}

