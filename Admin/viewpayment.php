<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <title>Edit Payment | Eversummer Florist</title>
    </head>
    <body>
        <?php
        include './adminheader.php';
        include '../config/connect.php';
        ?>
        <div class="pageContent">
            <p>Home/Admin/</p></br>
            <p class="bold"><b>VIEW PAYMENT</b></p>
        </div>

        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <td>Product Name</td>
                        <td>Total Price</td>
                        <td>Quantity</td>
                        <td>Date</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <?php
                global $con;
                $query = "SELECT * from products";
                $result = mysqli_query($con, $query);
                $number = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $product_name = $row['product_name'];
                    $product_price = $row['product_price'];
                    $date = $row['date'];
                    $status = $row['status'];
                    $number++;
                    ?>

                    <tr>
                        <td><?php echo $product_name ?></td>
                        <td><?php echo $product_price ?></td>
                        <td><?php echo (isset($total_price)) ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $status ?></td>
                        <td><a class='btn' href='#' onclick='showConfirmation(<?php echo $product_id ?>)'>Delete</a>

                    </tr>
                    <?php
                }
                ?>

            </table>
        </div>
    </body>
    <script>
        function showConfirmation(productId) {
            if (confirm("Are you sure you want to delete this product?")) {
                // if the user clicks "OK" in the confirmation pop-up, redirect to the delete product page
                window.location.href = "deleteproduct.php?id=" + productId;
            } else {
                // if the user clicks "Cancel" in the confirmation pop-up, do nothing
            }
        }
    </script>
</html>
