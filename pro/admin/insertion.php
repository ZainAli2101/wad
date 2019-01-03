<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 1/3/2019
 * Time: 9:44 PM
 */
require "database_connection.php";

if(isset($_POST["submit"]))
{
    echo "not effed";
    $pro_title = $_POST['pro_title'];
    $pro_cat = $_POST['pro_cat'];
    $pro_brand = $_POST['pro_brand'];
    $pro_price = $_POST['pro_price'];
    $pro_desc = $_POST['pro_desc'];
    $pro_kw = $_POST['pro_kw'];
    $pro_img = $_POST['pro_img'];

    $insert = "insert into things(pro_title,pro_cat,pro_brand,pro_price,pro_desc,pro_kw,pro_images) VALUES('pro_title','pro_cat','pro_brand','pro_price','pro_desc','pro_kw','pro_images')";
    //$delete = "delete from products where pro_title=pro_title";
    if(!mysqli_query($connect,$insert))
    {
        echo " not inserted";
    }
    else
        echo"inserted";
}
?>