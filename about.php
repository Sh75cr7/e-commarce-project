<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <section class="about">

        <div class="row">

            <div class="image">
                <img src="images/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>1.Unique Selling Proposition 2.Quality Products or Services 3Excellent Customer Service 4.Competitive
                    Pricing. 4.Positive Customer Reviews and Testimonials</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="heading">client's reviews</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/pic-1.png" alt="">
                    <p>My experience is great with this.all products are safe and afactive.please try it at least once a
                        time ..</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Md. Asraful Islam</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-2.png" alt="">
                    <p>The best online shopping experience for me. Price are so reasonable. Service is not bad. Courier
                        method is well. They need to improve the system to check quality of their vendor's products.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Ms.Afroza Sultana</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-3.png" alt="">
                    <p>been using it for 2 years i only ever got a bad item 1 times but they refunded it and they change
                        items back if u can give them proof so its a amazing website 10/10 reccomend</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Md Sulayman Hosen</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-4.png" alt="">
                    <p>Good eCommerce Site In Bangladesh. They Have So Many Items And They'll Be Shipped On Your Home
                        Location. And They Also Support Online Banks And Cash-On-Delivery. I'm Satisfied With Their
                        Service.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3> Ms.Ide Afroz</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-5.png" alt="">
                    <p>It is the one of the best online marketplace in Bangladesh.
                        Suddenly I visited in Bangladesh I ordered some products from this website and they are
                        unbillable awesome delivery response day give my product properly in two days so I recommended
                        this website to you Bangladeshi people</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Shakib Al Hasan</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-6.png" alt="">
                    <p>The customer care service is very helpful as well as there employees... Thank you very much for
                        your kind reply information and ensuring the customer with the process...</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Alia Jahan</h3>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>









    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
    var swiper = new Swiper(".reviews-slider", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
    </script>

</body>

</html>