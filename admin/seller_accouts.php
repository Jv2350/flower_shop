<?php
include '../components/connect.php';

if (isset($_COOKIE['seller_id'])) {
    $seller_id = $_COOKIE['seller_id'];
} else {
    $seller_id = '';
    header('location:login.php');
}

//delete message from database

if (isset($_POST['delete'])) {

    $delete_id = $_POST['delete_id'];
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

    $verify_delete = $conn->prepare("SELECT * FROM `message` WHERE id = ?");
    $verify_delete->execute([$delete_id]);

    if ($verify_delete->rowCount() > 0) {

        $delete_message = $conn->prepare("DELETE FROM `message` WHERE id = ?");
        $delete_message->execute([$delete_id]);

        $success_msg[] = 'message deleted';
    } else {
        $warning_msg[] = 'message already deleted';
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- box icon cdn link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css?v=<?php echo time(); ?>">
    <title>FloSun - flower website registered seller page</title>
</head>

<body>
    <?php include '../components/admin_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>registered seller</h1>
            <p>Welcome to the FLoSun family! As a registered seller, you get access to exclusive<br> features and
                benefits
                that make your flower shopping experience even more enjoyable.<br>Log in now to enjoy the full FLoSun
                experience and make the most of your shopping journey with us!</p>
            <span><a href="dashboard.php">admin</a><i class="bx bx-right-arrow-alt"></i>registered seller</span>
        </div>
    </div>

    <section class="user-container">
        <div class="heading">
            <h1>registered seller</h1>
            <img src="../image/separator.png">
        </div>
        <div class="box-container">
            <?php
            $select_users = $conn->prepare("SELECT * FROM `sellers`");
            $select_users->execute();

            if ($select_users->rowCount() > 0) {
                while ($fetch_users = $select_users->fetch(PDO::FETCH_ASSOC)) {
                    $user_id = $fetch_users['id'];


                    ?>
            <div class="box">
                <img src="../uploaded_files/<?= $fetch_users['image']; ?>">
                <div class="detail">
                    <p>user id: <span> <?= $user_id; ?></span></p>
                    <p>user name: <span> <?= $fetch_users['name']; ?></span></p>
                    <p>user email: <span> <?= $fetch_users['email']; ?></span></p>
                </div>
            </div>
            <?php
                }
            } else {
                echo '
						<div class="empty" style="margin: 2rem auto;">
							<p>seller registered yet</p>
						</div>

					';
            }
            ?>
        </div>
    </section>







    <?php include '../components/admin_footer.php'; ?>

    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- custom js link -->
    <script type="text/javascript" src="../js/Admin_script.js"></script>
    <!-- alert -->
    <?php include '../components/alert.php'; ?>
</body>

</html>