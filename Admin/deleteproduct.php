<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete Products | Eversummer Florist</title>
    </head>
    <body>
        <?php
        include './adminheader.php';
        include '../config/connect.php';

        if (isset($_GET['id'])) {
            $delete_id = $_GET['id'];

            //delete query
            $delete_product = "Delete from products where product_id=$delete_id";
            $result_product = mysqli_query($con, $delete_product);
            if ($result_product) {
                echo "<script>alert('Product deleted successfully')</script>";
                echo "<script>window.open('./viewproduct.php','_self')</script>";
            }
        }
        ?>


    </body>
</html>
