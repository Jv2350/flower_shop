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
    <title>FloSun - flower website about us page</title>
</head>

<body>
    <?php include 'components/user_header.php'; ?>

    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>Welcome to FLoSun, where passion for flowers meets exceptional artistry! Established with a love for
                nature and creativity,<br>
                we are dedicated to providing stunning floral arrangements that bring joy and beauty to every occasion.
            </p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
        </div>
    </div>
    <!-----who we are section end------>
    <div class="who">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>who we are</span>
                    <h1>We are passionate about making beautiful more beautiful</h1>
                    <img src="image/separator.png">
                </div>
                <p>Maria is a ROman-born pastry chef who spent 15 years in his city Rome perfecting his craft and
                    exceptional creations. Vestibulum rhoncus ornare tincidunt. Etiam pretium metus sit amet est aliquet
                    vulputate. Fusce et cursus ligula. Sed accumsan dictum porta. Aliquam rutrum ullamcorper velit
                    hendrerit convallis.</p>
                <div class="flex-btn">
                    <a href="menu.php" class="btn">explore more menu</a>
                    <a href="menu.php" class="btn">visit our shop</a>
                </div>
            </div>
            <div class="img-box">
                <img src="image/who.jpg" class="img">
                <img src="image/shap.png" class="shape">
            </div>
        </div>
    </div>
    <div class="use">
        <div class="box-container">
            <div class="box">
                <img src="image/flowers.png" class="img">
            </div>
            <div class="box">
                <h1>Ready For Instant And Convenient Use</h1>
                <p>At FLoSun, we understand that life can be busy, and finding the perfect flowers should be effortless.
                    That’s why we’ve designed our services with your convenience in mind. Whether you need a last-minute
                    gift or a stunning arrangement for an event, we are here to help.</p>
                <div class="icon">
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use.png"></div>
                        <p>quality flowers</p>
                    </div>
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use0.png"></div>
                        <p>smooth & firm</p>
                    </div>
                </div>
                <div class="icon">
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use1.png"></div>
                        <p>organically grown</p>
                    </div>
                    <div class="icon-detail">
                        <div class="img-box"><img src="image/use2.png"></div>
                        <p>chemical free</p>
                    </div>
                </div>
                <div class="flex-btn">
                    <a href="shop.php" class="btn">shop now</a>
                    <a href="contact.php" class="btn">call us any time</a>
                </div>
            </div>
        </div>
    </div>
    <!-- cms banner section -->
    <div class="cms-banner">
        <div class="box-container">
            <div class="box">
                <img src="image/cms-banner.avif">
                <div class="detail">
                    <span>flat 35% discount</span>
                    <h1>fresh flowers & <br> plants</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="image/cms-banner.jpg">
                <div class="detail">
                    <span>flat 15% discount</span>
                    <h1>fresh flowers & <br> plants</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- story section -->
    <div class="story">
        <div class="box">
            <div class="heading">
                <span>fresh & healthy</span>
                <h1>Discount up to 30% for your <br> first purchase.</h1>
            </div>
            <p style="color: red; text-transform: uppercase; padding-bottom: .5rem;">get 20% extra</p>
            <p>Welcome to FLoSun! As a token of our appreciation for choosing us for your floral needs, we’re excited to
                offer you an exclusive discount of up to 30% off your first purchase.Don’t miss out on this limited-time
                offer! Sign up for our newsletter to stay informed about upcoming promotions, floral tips, and more.
                Experience the joy of flowers with FLoSun today!</p>
            <a href="" class="btn">our services</a>
        </div>
    </div>
    <!-- team section -->
    <div class="team">
        <div class="heading">
            <span>our team</span>
            <h1>Quality & Passion with our Services!</h1>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/team.avif" class="img">
                <div class="content">
                    <h2>Aishani Mehra</h2>
                    <p>florist</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team0.jpg" class="img">
                <div class="content">
                    <h2>Rupal Singhvi</h2>
                    <p>wedding planner</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team2.avif" class="img">
                <div class="content">
                    <h2>Rishita Menon</h2>
                    <p>wedding planner</p>
                </div>
            </div>
        </div>
    </div>
    <!-- about section -->
    <div class="about">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>About Company</span>
                    <h1>Organic & Healthy Flowers <br> Provider Farming</h1>
                </div>
                <p>At FLoSun, we believe that flowers should not only be beautiful but also grown in a way that respects
                    our planet and promotes health and well-being. As a dedicated provider of organic and healthy
                    flowers, we take pride in our sustainable farming practices and commitment to quality.</p>
            </div>
        </div>
    </div>
    <!-- why choose us section -->
    <div class="choose">
        <div class="box-container">
            <div class="img-box">
                <img src="image/about.jpg">
            </div>
            <div class="box">
                <div class="heading">
                    <span>why choose us</span>
                    <h1>Special Care For Our Every <br> Flower Lovers</h1>
                </div>
                <div class="box-detail">
                    <div class="detail">
                        <img src="image/discount.png">
                        <h2>discount options</h2>
                        <p>Enjoy exclusive discounts and deals on our beautiful floral arrangements.</p>
                        <span>1</span>
                    </div>
                    <div class="detail">
                        <img src="image/gift.png">
                        <h2>gift offers</h2>
                        <p>Special gift options and add-ons to make every order extra special.</p>
                        <span>2</span>
                    </div>
                    <div class="detail">
                        <img src="image/return.png">
                        <h2>best return policy</h2>
                        <p>Hassle-free returns for your peace of mind—your satisfaction is our priority.</p>
                        <span>3</span>
                    </div>
                    <div class="detail">
                        <img src="image/support.png">
                        <h2>online support</h2>
                        <p>Our team is available 24/7 to assist you with any inquiries or custom orders.</p>
                        <span>4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section -->
    <div class="testimonial-container">
        <div class="heading">
            <h1>testimonial</h1>
            <img src="image/separator.png">
        </div>
        <div class="container">
            <div class="testimonial-item active">
                <i class="bx bxs-qoute-right" id="quote"></i>
                <img src="image/ourteam.webp">
                <h1>Veer Jyotiraditya</h1>
                <p>"FLoSun transformed my wedding with their breathtaking floral arrangements! Every detail was perfect,
                    and the team truly captured my vision. I received so many compliments on the flowers!"</p>
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-qoute-right" id="qoute"></i>
                <img src="image/ourteam0.webp">
                <h1>Darvesh Kumar</h1>
                <p>"I ordered a custom bouquet for my partner's birthday, and it exceeded my expectations! The quality
                    and freshness of the flowers were outstanding. FLoSun is now my go-to florist!"</p>
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-qoute-right" id="quote"></i>
                <img src="image/ourteam1.webp">
                <h1>Rishita Menon</h1>
                <p>"The organic flowers from FLoSun are not only beautiful but also last much longer than I expected. I
                    appreciate their commitment to sustainability. Highly recommended!"</p>
            </div>
            <div class="testimonial-item">
                <i class="bx bxs-qoute-right" id="quote"></i>
                <img src="image/ourteam2.webp">
                <h1>Tarini Rao</h1>
                <p>"Shopping with FLoSun was a delightful experience! The website is user-friendly, and my order was
                    delivered on time. The arrangement was stunning and brightened up my home beautifully."</p>
            </div>
            <div class="left-arrow" onclick="rightSlide()"><i class="bx bx-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="leftSlide()"><i class="bx bx-right-arrow-alt"></i></div>
        </div>
    </div>
    <!-- our mission section -->
    <div class="mission">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>our mission</span>
                    <h1>Fresh flowers with the fresh smile</h1>
                    <img src="image/separator.png">
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/flower.png">
                    </div>
                    <div>
                        <h2>fresh flowers</h2>
                        <p>We handpick only the freshest, highest-quality flowers for our arrangements. Our blooms are
                            carefully sourced from trusted, organic farms, ensuring they arrive vibrant and full of
                            life.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/delivery.png">
                    </div>
                    <div>
                        <h2>delivery in 24 hours</h2>
                        <p>We understand the importance of timely delivery. That’s why we guarantee that your flowers
                            will arrive within 24 hours of your order, fresh and ready to brighten any occasion. </p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/app.png">
                    </div>
                    <div>
                        <h2>order online</h2>
                        <p>Our easy-to-use online store makes shopping for flowers a breeze. Browse our wide selection
                            of bouquets, centerpieces, and arrangements from the comfort of your home, and place your
                            order with just a few clicks.</p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/support.png">
                    </div>
                    <div>
                        <h2>24/7 support</h2>
                        <p>We're here for you around the clock. Whether you have a question, need assistance with your
                            order, or want to customize an arrangement, our customer support team is available 24/7 to
                            ensure you have a smooth and enjoyable experience with us.</p>
                    </div>
                </div>
            </div>
            <div class="box-img">
                <img src="image/mission-r.avif" class="img">
                <img src="image/mission-r0.jpg" class="img0">
            </div>
        </div>
    </div>
    <div class="about-banner">
        <div class="box-container">
            <div class="box">
                <img src="image/about-banner.avif">
            </div>
            <div class="box">
                <img src="image/about-banner.webp">
            </div>
        </div>
    </div>




    <?php include 'components/user_footer.php'; ?>
    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- custom js link -->
    <script type="text/javascript" src="js/user_script.js"></script>
    <!-- alert -->
    <?php include 'components/alert.php'; ?>
</body>

</html>