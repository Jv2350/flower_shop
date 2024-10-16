<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- box icon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
    <title>FloSun - flower website shop page</title>
</head>

<body>

    <div class="box-container">
        <?php
        $select_products = $conn->prepare("SELECT * FROM `products` WHERE status = ? LIMIT 6");
        $select_products->execute(['active']);
        if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {


                ?>
        <form action="" method="post" class="box" <?php if ($fetch_products['stock'] == 0) {
                    echo 'disabled';
                } ?>>
            <img src="uploaded_files/<?= $fetch_products['image']; ?>" class="image">
            <?php if ($fetch_products['stock'] > 9) { ?>
            <span class="stock" style="color: green;">In Stock</span>
            <?php } elseif ($fetch_products['stock'] == 0) { ?>
            <span class="stock" style="color: red;">Out Of Stock</span>
            <?php } else { ?>
            <span class="stock" style="color: red;">Hurrey Only <?= $fetch_products['stock']; ?> Left</span>
            <?php } ?>
            <p class="price">Price <?= $fetch_products['price']; ?>/-</p>
            <div class="content">
                <div class="button">
                    <div>
                        <h3><?= $fetch_products['name']; ?></h3>
                    </div>
                    <div>
                        <!--<button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button> -->
                        <button type="submit" name="add_to_wishlist"><i class="bx bx-heart"></i></button>
                        <a href="view_page.php?pid=<?= $fetch_products['id']; ?>" class="bx bxs-show"></a>
                    </div>
                </div>
                <input type="hidden" name="product_id" value="<?= $fetch_products['id']; ?>">
                <div class="flex-btn">
                    <button name="add_to_cart" class=" btn">buy now</button>
                    <input type="number" name="qty" required min="1" value="1" max="99" maxlength="2" class="qty">
                </div>
            </div>
        </form>
        <?php
            }
        } else {
            echo '
            <div class="empty">
            <p>no products added yet!</p>
            </div>
			';
        }
        ?>
    </div>
    <div class="more">
        <a href="menu.php" class="btn">load more</a>
    </div>
</body>