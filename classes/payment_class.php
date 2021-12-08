<?php
include_once dirname( __FILE__ ).'/../settings/db_class.php';

class Payment extends Connection
{
    //ORDERS & PAYMENTS --------------------------------
    //Add orders
    function add_order( $customer_id, $invoice_no, $order_date, $order_status )
    {
        return $this->query( "insert into orders (customer_id, invoice_no, order_date, order_status) values('$customer_id','$invoice_no', '$order_date', '$order_status')" );
    }

    //Add Order Details
    function add_order_details( $order_id, $product_id, $quantity )
    {
        return $this->query( "insert into orderdetails (order_id,product_id,	quantity) values('$order_id','$product_id', '$quantity')" );
    }

    //Count Number of Customers
    function count_customer()
    {
        return $this->fetchOne( "select count(*) as count from customer" );
    }

    //Count Number of Orders
    function count_orders()
    {
        return $this->fetchOne( "select count(*) as count from orders" );
    }

    //Count Number of Products
    function count_products()
    {
        return $this->fetchOne( "select count(*) as count from products" );
    }

    //delete orders
    function delete_order( $order_id )
    {
        return $this->query( "delete from orderDetails where order_id = '$order_id' " );
    }

    //delete customers
    function delete_order_customers( $ord_id )
    {
        return $this->query( "delete from orders where order_id = '$ord_id' " );
    }

    //delete payment
    function delete_payment( $pay_id )
    {
        return $this->query( "delete from payment where payment_id = '$pay_id' " );
    }

    //Get Last Order
    function get_last_order()
    {
        return $this->fetchOne( "select max(order_id) as currentOrder from orders" );
    }

    //Add payment
    function payment_cart( $amount, $customer_id, $order_id, $currency, $payment_date )
    {
        return $this->query( "insert into payment (amount,customer_id,order_id,currency,payment_date) values ('$amount','$customer_id','$order_id','$currency','$payment_date')" );
    }

    //Get Order Details for User
    function select_orderDetails( $customer_id )
    {
        return $this->fetch( "select products.product_title,products.product_image, products.product_price,  orders.order_id, orders.invoice_no, orders.order_date, orders.order_status, orderdetails.quantity from orderdetails join products on (orderdetails.product_id = products.product_id) join orders on (orderdetails.order_id = orders.order_id) where orders.customer_id = '$customer_id'" );
    }

    //Get Order Details for Admin
    function select_orderDetails_admin()
    {
        return $this->fetch( "select products.product_id, products.product_title,products.product_image, products.product_price, orders.order_id, orders.invoice_no, orders.order_date, orders.order_status, orderdetails.qty, orderdetails.qty * products.product_price as result from orderdetails join products on (orderdetails.product_id = products.product_id) join orders on (orderdetails.order_id = orders.order_id)" );
    }

    //Get Customer Orders for Admin
    function select_order_admin()
    {
        return $this->fetch( "select customer.customer_id, customer.customer_firstname, customer.customer_lastname, orders.order_id, orders.invoice_no, orders.order_date, orders.order_status from orders join customer on (customer.customer_id = orders.customer_id)" );
    }

    function select_payment_admin()
    {

        return $this->fetch( "select customer.customer_firstname, customer.customer_lastname, orders.order_id, orders.invoice_no, orders.order_date, orders.order_status, payment.amt, payment.currency, payment.payment_date, payment.pay_id from payment join orders on (orders.order_id = payment.order_id) join customer on (customer.customer_id = payment.customer_id) " );
    }

    //Count Revenue
    function sum_revenue()
    {
        return $this->fetchOne( "select SUM(amt) as result from payment" );
    }
}

?>