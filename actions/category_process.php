<?php

include_once (dirname(__FILE__)) . '/../controller/product_controller.php';

if (isset($_POST['addCat'])) {
    $cat_name = $_POST['catname'];

    $check_category = check_category_controller($cat_name);
    if ($check_category) {
        echo "<script>alert('This Category already exists'); 
        window.history.back();
        </script>";
    } else {
        //add new category
        $addCat = add_category_controller($cat_name);
        if ($addCat) {
            echo "<script type='text/javascript'>
            window.location.href = '../Admin/Add_category.php';
            </script>";
        } else {
            echo "Failed";
        }
    }
} else {
    echo "<script type='text/javascript'> alert('Adding Category Failed');              
        window.history.back();
        </script>";
}
