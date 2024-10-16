<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

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
    <title>FloSun - flower website home page</title>
</head>

<body>
    <?php include 'components/user_header.php'; ?>

    <!-----home slider section start------>
    <div class="slider-container">
        <div class="container">
            <div class="slider-item active">
                <img src="image/slider.jpg">
            </div>
            <div class="slider-item">
                <img src="image/slider.avif">
            </div>
            <div class="slider-item">
                <img src="image/slider0.avif">
            </div>
            <div class="slider-item">
                <img src="image/slider1.jpg">
            </div>
            <div class="slider-item">
                <img src="image/slider2.jpg">
            </div>
        </div>
        <div class="left-arrow" onclick="nextSlide()"><i class="bx bx-left-arrow-alt"></i></div>
        <div class="right-arrow" onclick="prevSlide()"><i class="bx bx-right-arrow-alt"></i></div>
    </div>
    <!-----home slider section end------>

    <div class="services">
        <div class="box-container">
            <div class="box">
                <div class="icon">
                    <img src="image/service.png">
                </div>
                <div class="detail">
                    <h4>online shopping</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <img src="image/services2.png">
                </div>
                <div class="detail">
                    <h4>quality products</h4>
                    <span>100% secure</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <img src="image/services.png">
                </div>
                <div class="detail">
                    <h4>delivery</h4>
                    <span>24 * 7 hours</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <img src="image/services0.png">
                </div>
                <div class="detail">
                    <h4>customer services</h4>
                    <span>support girt services</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <img src="image/service.png">
                </div>
                <div class="detail">
                    <h4>well organized</h4>
                    <span>24 * 7 free returns</span>
                </div>
            </div>
            <div class="box">
                <div class="icon">
                    <img src="image/services1.png">
                </div>
                <div class="detail">
                    <h4>much more</h4>
                    <span>100% secure</span>
                </div>
            </div>
        </div>
    </div>
    <!-----service section end------>
    <img src="image/sub-banner0.jpg" class="sub-banner">

    <div class="frame-container">
        <div class="box-container">
            <div class="frame">
                <div class="detail">
                    <span>shop seasonal</span>
                    <h2>50% off</h2>
                    <h1>all seasonal flowers</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <div class="box-detail">
                    <img src="image/frame.avif" class="img">
                    <div class="img-detail">
                        <span>wide range</span>
                        <h1>fresh organic flowers</h1>
                        <a href="menu.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box-detail">
                    <img src="image/frame2.webp" class="img">
                    <div class="img-detail">
                        <span>wide range</span>
                        <h1>fresh organic flowers</h1>
                        <a href="menu.php" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-----frame section end------>
    <div class="about-us">
        <div class="box-container">
            <div class="img-box">
                <img src="image/about.jpg" class="img">
                <img src="image/about0.jpg" class="img1">
                <div class="play"><i class="bx bx-play"></i></div>
            </div>
            <div class="box">
                <div class="heading">
                    <span>why choose us</span>
                    <h1>why flosun flower website</h1>
                    <img src="image/separator.png">
                    <p>At FLoSun, we believe that every bouquet tells a story. Whether you’re celebrating a special
                        moment or simply brightening someone’s day, our flowers convey heartfelt emotions with elegance
                        and beauty.Here's why FLoSun should be your go-to flower shop: Freshness Guaranteed, Expert
                        Craftsmanship, Exceptional Customer Service, Eco-Friendly Practices, Convenient Online
                        Ordering,Competitive Pricing.Choose FLoSun for flowers that express more than words and service
                        that delights at every step. Let us help you celebrate life’s precious moments with the perfect
                        bloom!</p>
                    <a href="about.php" class="btn">know more</a>
                    <a href="contact.php" class="btn">contact us</a>
                </div>
            </div>
        </div>
    </div>

    <!-----about section end------>
    <div class="sub-banner">
        <div class="box-container">
            <img src="image/sub-banner.png">
            <img src="image/sub-banner.jpg" height="85%">
        </div>
    </div>
    <!-----sub-banner section end------>
    <div class="categories">
        <div class="heading">
            <h1>categories features</h1>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/features4.avif">
                <div class="detail">
                    <span>fresh from farm</span>
                    <h1>bouquets</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="image/features2.avif">
                <div class="detail">
                    <span>fresh from farm</span>
                    <h1>green plants</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="image/features0.jpg">
                <div class="detail">
                    <span>fresh from farm</span>
                    <h1>wedding bouquets</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="image/features3.avif">
                <div class="detail">
                    <span>fresh from farm</span>
                    <h1>green feijoas</h1>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <!-----categories section end------>
    <div class="sub-banner">
        <div class="box-container">
            <img src="image/sub-banner2.avif">
            <img src="image/sub-banner3.avif">
        </div>
    </div>
    <!-----sub-banner section end------>
    <div class="offer">
        <div class="heading">
            <span>fresh from farm</span>
            <h1>Buy any products from green organic @ get One free</h1>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <div class="detail">
                    <h1>fresh tulips</h1>
                    <p>Delicate yet bold, our tulips are a symbol of love, renewal, and grace.</p>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <img src="image/categories.avif">
            </div>
            <div class="box">
                <div class="detail">
                    <h1>fresh roses</h1>
                    <p>Nothing says love like roses, and at FLoSun, we offer only the freshest, most exquisite blooms.
                    </p>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <img src="image/categories.jpg">
            </div>
            <div class="box">
                <div class="detail">
                    <h1>fresh sunflower</h1>
                    <p>Bright, cheerful, and full of life, our sunflowers are picked at the peak of freshness to bring a
                        sunny warmth to your home or event.</p>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <img src="image/categories2.jpg">
            </div>
            <div class="box">
                <div class="detail">
                    <h1>fresh levender</h1>
                    <p>Known for its calming fragrance and soothing properties, our fresh lavender is carefully farmed
                        to bring you the finest, most aromatic stems.</p>
                    <a href="menu.php" class="btn">shop now</a>
                </div>
                <img src="image/categories1.avif">
            </div>
        </div>
    </div>
    <!-----offer section end------>
    <div class="offer-1">
        <div class="detail">
            <h1>special discount for all <br> flowers products</h1>
            <p>At FLoSun, we believe that beautiful flowers should be accessible to everyone, whether you’re celebrating
                a special occasion or simply brightening up your day. That’s why we’re excited to offer exclusive
                discounts across our entire collection of fresh, farm-to-door flowers! Don’t miss out on these amazing
                deals: Get 15% Off Your First Purchase!, Buy More, Save More!,Seasonal Flower Specials,Free Delivery on,
                Orders Over $50,Exclusive Subscription Discounts,Limited Time Offers!
                These offers won’t last forever! Be sure to take advantage of our special discounts while they’re
                available and make someone’s day a little brighter with fresh flowers from FLoSun.Shop today and enjoy
                high-quality, fresh-from-the-farm flowers at unbeatable prices!
            </p>
            <div class="container">
                <div id="countdown" style="color:#fff;">Exclusive Subscription Discounts
                    <ul>
                        <li><span id="days"></span>days</li>
                        <li><span id="hours"></span>hours</li>
                        <li><span id="minutes"></span>minutes</li>
                        <li><span id="seconds"></span>seconds</li>
                    </ul>
                </div>
            </div>
            <a href="menu.php" class="btn">buy now</a>
        </div>
    </div>

    <!-----offer-1 section end------>
    <div class="products">
        <div class="heading">
            <h1>our latest products</h1>
            <img src="image/separator.png">
        </div>
        <?php include 'components/shop.php'; ?>
    </div>
    <!-----products section end------>
    <div class="offer-2">
        <div class="detail">
            <h1>We Pride Ourselves On <br> Exceptional Flowers design.</h1>
            <p>At FLoSun, we believe that every bouquet is more than just a collection of flowers—it's a work of art.
                Our skilled florists take great pride in crafting unique, stunning designs that capture the essence of
                beauty and emotion. Whether it’s a single arrangement or an entire event, our flower designs are
                tailored to perfection.At FLoSun, we take pride in our ability to transform flowers into extraordinary
                designs that make every moment more memorable. Whether you’re celebrating life’s big events or simply
                adding a touch of beauty to your home, our floral creations are designed to inspire and delight</p>
            <a href="menu.php" class="btn">shop now</a>
        </div>
    </div>
    <!-----offer-2 section end------>
    <div class="gurantee">
        <div class="heading">
            <h1>our gurantee</h1>
            <p>At FLoSun, we are committed to delivering exceptional service and stunning flowers that exceed your
                expectations. Whether you’re planning an event, decorating your space, or celebrating life’s milestones,
                our guarantee ensures you’ll receive only the finest blooms and personalized service, every time.</p>
            <img src="image/separator.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/service0.jpg">
                <div class="detail">
                    <h1>events</h1>
                    <p>From intimate gatherings to grand celebrations, FLoSun guarantees breathtaking floral
                        arrangements that elevate any event.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/service.avif" style="height: 18rem;">
                <div class="detail">
                    <h1>delivery</h1>
                    <p>We understand that timely delivery is crucial, whether you’re sending flowers to a loved one or
                        preparing for an event.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/service3.avif">
                <div class="detail">
                    <h1>interior florist</h1>
                    <p>Transform your living or working space with our interior floral designs. We ensure that each
                        arrangement complements your style and enhances your environment, bringing nature’s beauty
                        indoors.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/service1.avif">
                <div class="detail">
                    <h1>exterior florist</h1>
                    <p>Our exterior floral services are designed to make your outdoor spaces bloom with life. From
                        garden installations to we guarantee fresh, lush, and long-lasting
                        arrangements that will leave a lasting impression.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/service.jpg">
                <div class="detail">
                    <h1>hospitality</h1>
                    <p>We cater to hotels, restaurants, and venues, providing floral arrangements that reflect the
                        ambiance and elegance of your space.</p>
                </div>
            </div>
            <div class="box">
                <img src="image/service2.jpg">
                <div class="detail">
                    <h1>wedding planner</h1>
                    <p>FLoSun’s expert florists work closely with you to craft floral designs that capture your
                        vision,ensuring that every bouquet and centerpiece is memorable, unique, and flawless.</p>
                </div>
            </div>
        </div>
    </div>





    <!-----gurentee section end------>







    <?php include 'components/user_footer.php'; ?>
    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- custom js link -->
    <script type="text/javascript" src="js/user_script.js"></script>
    <!-- alert -->
    <?php include 'components/alert.php'; ?>
</body>

</html>