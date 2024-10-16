<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}


$pid = $_GET['pid'];

include 'components/add_wishlist.php';
include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- box icon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
    <title>FloSun - flower website product detail page</title>
</head>

<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>product detail</h1>
            <p>Discover everything you need to know about our beautiful flower arrangements in the "Product Details"
                section.<br> Each product page provides a comprehensive overview of the item to help you make the
                perfect choice.<br>Make sure to check out our related products section to find other bouquets or
                arrangements that match your style and preferences! </p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>product detail</span>
        </div>
    </div>
    <!-----product detail section start------>
    <section class="view_page">
        <div class="heading">
            <h1>product detail</h1>
            <img src="image/separator.png">
        </div>
        <?php
        if (isset($_GET['pid'])) {
            $pid = $_GET['pid'];
            $select_product = $conn->prepare("SELECT * FROM `products` WHERE id = '$pid'");
            $select_product->execute();

            if ($select_product->rowCount() > 0) {
                while ($fetch_products = $select_product->fetch(PDO::FETCH_ASSOC)) {


                    ?>
        <form action="" method="post" class="box">
            <div class="img-box">
                <img src="uploaded_files/<?= $fetch_products['image']; ?>">
            </div>
            <div class="detail">
                <?php if ($fetch_products['stock'] > 9) { ?>
                <span class="stock" style="color: green;">In Stock</span>
                <?php } elseif ($fetch_products['stock'] == 0) { ?>
                <span class="stock" style="color: red;">out Stock</span>
                <?php } else { ?>
                <span class="stock" style="color: red;">Hurry Only <?= $fetch_products['stock'] ?> Left</span>
                <?php } ?>
                <p class="price">$ <?= $fetch_products['price']; ?> /-</p>
                <div class="name"><?= $fetch_products['name']; ?></div>
                <p class="product-detail"><?= $fetch_products['product_detail']; ?></p>
                <input type="hidden" name="product_id" value="<?= $fetch_products['id'] ?>">
                <div class="button">
                    <button type="submit" name="add_to_wishlist" class="btn">add to wishlist <i
                            class="bx bx-heart"></i></button>
                    <input type="hidden" name="qty" min="0" class="quantity">
                    <button type="submit" name="add_to_cart" class="btn">add to cart <i class="bx bx-cart"></i></button>

                </div>
            </div>
        </form>
        <?php
                }
            }
        } else {
            echo '
                    <div class="empty">
                        <p>no products added yet!</p>
                    </div>
                ';
        }
        ?>
    </section>
    <section class="products">
        <div class="heading">
            <h1>similar products</h1>
            <p>Lorem ipsum dolar sit amet, consectetur elit, sed do eiusmod <br>
                tempor incididunt ut labore et dolar magna aliqua. Ut emim ad minim veniam.</p>
            <img src="image/separator.png">
        </div>
        <?php include 'components/shop.php'; ?>
    </section>







    <?php include 'components/user_footer.php'; ?>
    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- custom js link -->
    <script type="text/javascript" src="js/user_script.js"></script>
    <!-- alert -->
    <?php include 'components/alert.php'; ?>
</body>

</html>