<?php
include_once dirname( __FILE__ ).'/../classes/payment_class.php';
//ORDERS & PAYMENTS ------------------------------

function add_order_controller( $user_id, $invoice_no, $order_date, $order_status )
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->add_order( $user_id, $invoice_no, $order_date, $order_status );
}

function add_order_details_controller( $order_id, $product_id, $qty )
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->add_order_details( $order_id, $product_id, $qty );
}

function get_last_order_controller()
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->get_last_order();
}

function payment_cart_controller( $amount, $user_id, $order_id, $currency, $payment_date )
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->payment_cart( $amount, $user_id, $order_id, $currency, $payment_date );
}

//Get Order Details for User
function select_orderDetails_controller( $user_id )
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->select_orderDetails( $user_id );
}

function select_order_admin_controller()
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->select_order_admin();
}

function select_orderDetails_admin_controller()
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->select_orderDetails_admin();
}

function select_payment_admin_controller()
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->select_payment_admin();
}

function delete_order_controller( $order_id )
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->delete_order( $order_id );
}

function delete_payment_controller( $pay_id )
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->delete_payment( $pay_id );
}

function delete_order_customers_controller( $ord_id )
{
    //create instance of the Payment class
    $payment_instance = new Payment();
    //calls method from Payment class
    return $payment_instance->delete_order_customers( $ord_id );
}

function count_orders_controller()
{
    //create instance of the payment class
    $payment_instance = new Payment();
    //calls method from payment class
    return $payment_instance->count_orders();
}

function count_customer_controller()
{
    $payment_instance = new Payment();
    return $payment_instance->count_customer();
}


//Get Count of total Products
function count_products_controller()
{
    $payment_instance = new Payment();
    return $payment_instance->count_products();
}


function sum_revenue_controller()
{
    //create instance of the payment class
    $payment_instance = new Payment();
    //calls method from payment class
    return $payment_instance->sum_revenue();
}

?>