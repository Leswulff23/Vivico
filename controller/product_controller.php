<?php
//connect to the brand class
include_once dirname( __FILE__ ).'/../classes/product_class.php';

//categories functions

//add new category function
function add_category_controller( $cname )
{
// create an instance of the product class
    $category_instance = new product_class();
    // call the method from the class
    return $category_instance->add_category( $cname );
}

//check duplicate category function
function check_category_controller( $cname )
{
// create an instance of the product class
    $category_instance = new product_class();
    // call the method from the class
    return $category_instance->check_category( $cname );
}

//edit a category function
function update_category_controller( $id, $cname )
{
// create an instance of the product class
    $category_instance = new product_class();
    // call the method from the class
    return $category_instance->update_one_category( $id, $cname );
}

//delete a category function
function delete_category_controller( $id )
{
// create an instance of the product class
    $category_instance = new product_class();
    // call the method from the class
    return $category_instance->delete_one_category( $id );
}

//select all category function
function select_all_categories_controller()
{
// create an instance of the product class
    $category_instance = new product_class();
    // call the method from the class
    return $category_instance->select_all_categories();
}

//select a category function
function select_one_category_controller( $id )
{
// create an instance of the product class
    $category_instance = new product_class();
    // call the method from the class
    return $category_instance->select_one_category( $id );
}

//products

//add new product function
function add_product_controller( $prod_cat, $prod_title, $prod_price, $prod_desc, $prod_img, $prod_key, $prod_qty )
{
// create an instance of the product class
    $product_instance = new product_class();
    // call the method from the class
    return $product_instance->add_product( $prod_cat, $prod_title, $prod_price, $prod_desc, $prod_img, $prod_key, $prod_qty );
}

function check_product_controller( $prod_title )
{
// create an instance of the product class
    $product_instance = new product_class();
    // call the method from the class
    return $product_instance->check_product( $prod_title );
}

//edit a product function
function update_product_controller( $id, $prod_cat, $prod_brand, $prod_title, $prod_price, $prod_desc, $prod_img, $prod_key, $stock )
{
// create an instance of the product class
    $product_instance = new product_class();
    // call the method from the class
    return $product_instance->update_one_product( $id, $prod_cat, $prod_brand, $prod_title, $prod_price, $prod_desc, $prod_img, $prod_key, $stock );
}

//delete a product function
function delete_product_controller( $id )
{
// create an instance of the product class
    $product_instance = new product_class();
    // call the method from the class
    return $product_instance->delete_one_product( $id );
}

//select all product function
function select_all_products_controller()
{
// create an instance of the product class
    $product_instance = new product_class();
    // call the method from the class
    return $product_instance->select_all_products();
}

//select one product function
function select_a_product_controller( $id )
{
    $product_instance = new product_class();
    return $product_instance->select_a_product( $id );
}

//search for a product controller
function search_for_product( $searchTerm )
{
    $product_instance = new product_class();
    return $product_instance->search_for_product( $searchTerm );
}

//Select best sellers
function get_best_controller()
{
    $product_instance = new product_class();
    return $product_instance->get_best_seller();
}

//Select featured products
function featured_products_controller()
{
    $product_instance = new product_class();
    return $product_instance->featured_products();
}

//Select hottest products
function hottest_selling_controller()
{
    $product_instance = new product_class();
    return $product_instance->hottest_selling();
}

//Add Product Reviews
function add_order_reviews_controller( $user_id, $product_id, $desc, $p_date )
{
    $product_instance = new product_class();
    return $product_instance->add_order_reviews( $user_id, $product_id, $desc, $p_date );
}

//Get Product Reviews
function select_order_reviews_controller( $product_id )
{
    $product_instance = new product_class();
    return $product_instance->select_order_reviews( $product_id );
}


