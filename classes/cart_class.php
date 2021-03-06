<?php
include_once(dirname(__FILE__)).'/../settings/db_class.php';


class Cart extends Connection{

    //Customer logged in: Add to cart
    function add_cart_lg($p_id, $c_id, $quantity){
        return $this->query("insert into cart(p_id, ip_add, c_id, qty) values ('$p_id', ' ', '$c_id','$quantity')");
    }

    //Guest: Add to cart
    function add_cart_gst($p_id,$ip_add,$quantity){
        return $this->query("insert into cart(p_id, ip_add, qty) values ('$p_id','$ip_add','$quantity')");
    } 

    //Customer logged in: Check duplicates in cart
    function check_cart_lg($p_id, $c_id){
        return $this->fetch("select p_id, c_id from cart where p_id='$p_id' and c_id='$c_id'");
    }

    //Guest: Check duplicates in cart item
    function check_cart_gst($p_id, $ip_add){
        return $this->fetch("select p_id, ip_add from cart where p_id='$p_id' and ip_add='$ip_add' ");
    }

    //Customer logged in: Updates cart
    function update_cart_lg($qty,$p_id, $c_id){
        return $this->query("update cart set qty='$qty' where p_id='$p_id' and c_id='$c_id'");
    }

    //Guest: Updates cart
    function update_cart_gst($qty,$p_id,$ip_add ){
        return $this->query("update cart set qty='$qty' where p_id='$p_id' and ip_add='$ip_add'");
    }

    //Customer logged in: Delete from cart
    function delete_cart_lg($p_id,$c_id){
        return $this->query("delete from cart where c_id = '$c_id' and p_id = '$p_id'");
    }

    //Guest: Delete from cart
    function delete_cart_gst($p_id,$ip_add){
        return $this->query("delete from cart where ip_add = '$ip_add' and p_id = '$p_id'");
    } 

    //Customer logged in: Count items in cart
    function count_cart_lg($c_id){
        return $this->fetchOne("select count(c_id) as count from cart where c_id = '$c_id'");
    }

    //Guest: Count items in cart
    function count_cart_gst($ip_add){
        return $this->fetchOne("select count(ip_add) as count from cart where ip_add = '$ip_add'");
    }

    //Customer logged in: Select one item in cart
    public function select_one_cart_lg($p_id, $c_id){
        return $this->fetch("select * from cart where p_id='$p_id' and c_id='$c_id'");
    }

    //Guest: Select one item in cart
    public function select_one_cart_gst($p_id, $ip_add){
        return $this->fetch("select * from cart where p_id='$p_id' and ip_add='$ip_add'");
    }

    //Customer logged in: Select all items in cart
    function select_all_cart_lg($c_id){
        return $this->fetch("select products.product_id, products.product_title, products.product_price, products.product_image, cart.p_id, cart.c_id, cart.qty from cart join products on (products.product_id = cart.p_id) where cart.c_id = '$c_id'");
    }

    //Guest: Select all items in cart
    function select_all_cart_gst($ip_add){
        return $this->fetch("select products.product_id, products.product_cat, products.product_title, products.product_price, products.product_desc, products.product_image, cart.p_id, cart.ip_add, cart.qty from cart join products on (products.product_id = cart.p_id) where cart.ip_add = '$ip_add'");
    }

    //Customer logged in: Sum of cart
    function sum_amount_lg($c_id){
        return $this->fetchOne("select sum(products.product_price * cart.qty) as result from cart join products on (products.product_id = cart.p_id) where cart.c_id = '$c_id'");
    }

    //Guest: Sum of cart
    function sum_amount_gst($ip_address){
        return $this->fetchOne("select sum(products.product_price * cart.qty) as result from cart join products on (products.product_id = cart.p_id) where cart.ip_add = '$ip_address'");
    }

    //Get stock of products
    function get_stock($product_id){
        return $this->fetchOne("select product_qty from products where product_id = '$product_id'");
    }

    //update stock
    function update_stock($stock,$product_id){
        return $this->query("update products set product_qty='$stock' where product_id='$product_id'");
    }


    //Customer logged in: Checkout Total 
    function total_checkout_lg($c_id){

        return $this->fetchOne("select sum(products.product_price * cart.qty) as total from cart join products on (products.product_id = cart.p_id) where cart.c_id = '$c_id' ");
    }

    //Clear cart
    function clear_cart($user_id){
        return $this->query("delete from cart where c_id ='$user_id'");
    }
}

?>