<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 1/1/2019
 * Time: 9:37 PM
 */

require "database_connection.php";
function getCat(){
    global $connect;
    $getCatQuery = "select * from categories";
    $getcatResult = mysqli_query($connect,$getCatQuery);

    while($row = mysqli_fetch_assoc($getcatResult))
    {
        $id = $row['cat_id'];
        $title = $row['cat-title'];
        echo " <li>
                        <a class=\"nav-link\"  href=\"#\">$title</a>";
    }
}
?>

