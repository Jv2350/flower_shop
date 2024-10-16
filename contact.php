<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

if (isset($_POST['send_message'])) {

    if ($user_id != '') {
        $id = unique_id();

        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $subject = $_POST['subject'];
        $subject = filter_var($subject, FILTER_SANITIZE_STRING);

        $message = $_POST['message'];
        $message = filter_var($message, FILTER_SANITIZE_STRING);

        $verify_message = $conn->prepare("SELECT * FROM `message` WHERE user_id = ? AND name = ? AND email = ? AND subject = ? AND message = ?");
        $verify_message->execute([$user_id, $name, $email, $subject, $message]);

        if ($verify_message->rowCount() > 0) {
            $warning_msg[] = 'message already send';
        } else {
            $insert_message = $conn->prepare("INSERT INTO `message`(id, user_id, name, email, subject, message) VALUES(?,?,?,?,?,?)");
            $insert_message->execute([$id, $user_id, $name, $email, $subject, $message]);
            $success_msg[] = 'message send';
        }
    } else {
        $warning_msg[] = 'please login first';
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
    <link rel="stylesheet" type="text/css" href="css/user_style.css?v=<?php echo time(); ?>">
    <title>FloSun - flower website contact page</title>
</head>

<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>contact us</h1>
            <p>We’d love to hear from you! Whether you have a question, need help with an order,<br> or want to
                customize an
                arrangement, our team is here to assist you.</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>register</span>
        </div>
    </div>
    <div class="service">
        <div class="heading">
            <h1>our services</h1>
            <p>At FLoSun, we are committed to making your floral experience seamless and enjoyable. Here’s why our
                service stands out:</p>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/delivery.png">
                <div>
                    <h1>free shipping fast</h1>
                    <p>We provide free shipping on all orders, with fast delivery that ensures your flowers arrive fresh
                        and on time, no matter where you are.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/return.png">
                <div>
                    <h1>money back guarentee</h1>
                    <p>If you're not 100% satisfied with your flowers, we offer a money-back guarantee to ensure you
                        have a worry-free shopping experience.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/discount.png">
                <div>
                    <h1>online support 24/7</h1>
                    <p>We understand that questions can arise at any time. That’s why our 24/7 online support team is
                        always ready to assist you with any inquiries or concerns.

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-----service section end------>
    <div class="contact">
        <div class="heading">
            <h1>drop a line</h1>
            <p>We’d love to hear from you! Whether you have a question, feedback, or a special request, feel free to
                drop us a line.<br> Our team is always here to help and make your experience with FLoSun as seamless as
                possible.</p>
            <img src="image/separator.png">
        </div>
        <div class="form-container">
            <form action="" method="post" enctype="multipart/form-data" class="login">
                <div class="input-field">
                    <p>your name <span>*</span></p>
                    <input type="text" name="name" placeholder="enter your name" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>your email <span>*</span></p> <input type="email" name="email" placeholder="enter your email"
                        maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>subject <span>*</span></p>
                    <input type="text" name="subject" placeholder="enter your name" maxlength="50" required class="box">
                </div>
                <div class="input-field">
                    <p>message <span>*</span></p>
                    <textarea name="message" class="box"></textarea>
                </div>
                <button type="submit" name="send_message" class="btn">send message</button>
            </form>
        </div>
    </div>
    <!-----contact form section end------>
    <div class="address">
        <div class="heading">
            <h1>our contact details</h1>
            <p>Have a question or need assistance? We’re here to help! Get in touch with us using any of the contact
                methods below, and we’ll be happy to assist you with your floral needs.</p>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <i class="bx bxs-map-alt"></i>
                <div>
                    <h4>address</h4>
                    <p>1093 Maharashtra, Mumbai <br>Panvel, Raigad, 410208 </p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-phone-incoming"></i>
                <div>
                    <h4>phone number</h4>
                    <p>2345678910</p>
                    <p>3456789023</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-envelope"></i>
                <div>
                    <h4>email</h4>
                    <p>niki@gmail.com</p>
                    <p>niki46@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-----address section end------>







    <?php include 'components/user_footer.php'; ?>
    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- custom js link -->
    <script type="text/javascript" src="js/user_script.js"></script>
    <!-- alert -->
    <?php include 'components/alert.php'; ?>
</body>

</html>