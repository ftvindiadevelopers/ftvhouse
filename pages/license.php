<!DOCTYPE html>
<html lang="en">
<?php include_once "../api/_config.php"; ?>

<head>

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/head.php";
    $meta["title"] = "FTV Cruise | FashionTV India"; ?>
    <meta property="og:title" content="<?php echo $meta["title"]; ?>">
    <meta property="og:image" content="">
    <title><?php echo $meta["title"]; ?></title>
    <meta property="og:description" content="">
    <meta property="twitter:title" content="FTV Cruise | FashionTV India">
    <meta property="twitter:description" content="">

</head>

<body>
    <?php include_once "../components/nav.php"; ?>
    <main class="home-page page_padding">
        <!--  -->
        <section class="license1-section">
            <div class="container p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="license1-content">
                            <img src="../assets/media/images/license.png" alt="Image">
                            <div class="license1-content_abs">
                                <h1>License </h1>
                                <p> Welcome to FashionTV Cruise </p>
                            </div>
                            <div class="bottom_link">
                                <a href="#sec2"><i class="fas fa-chevron-circle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="license2-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="license2-content">
                            <h1>CONCEPT BASIC REQUIREMENTS</h1>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="license2-slider">
                                            <h2>01</h2>
                                            <div class="license2-items">
                                                <h4>Location </h4>
                                                <p>FTV Cruise will explore the most scenic and exotic locations.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="license2-slider">
                                            <h2>02</h2>
                                            <div class="license2-items">
                                                <h4>Strong Financial Backings </h4>
                                                <p>All affiliates must be able to show strong financial backings to ensure the success of the business. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="license2-slider">
                                            <h2>03</h2>
                                            <div class="license2-items">
                                                <h4>License Industry Attraction </h4>
                                                <p> All affiliates must have attractions and likings towards the industry along with profound knowledge and expertise in the make and take of the business.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="license2-slider">
                                            <h2>04</h2>
                                            <div class="license2-items">
                                                <h4>Strong Desire to be more </h4>
                                                <p>Rich, Famous & Successful.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination custom__bullets"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="license3-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-11 col-sm-12">
                        <div class="license3-content2 text-center">
                            <h1>LICENSE KIT</h1>
                            <a href="#" download="FTV-Cruise-License-Kit" title="FTV Cruise License Kit" type="application/pdf">Download <i class="fas fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-11  col-sm-12">
                        <div class="license3-content text-center">
                            <h1>BRAND SUPPORT</h1>
                            <p>
                                FashionTV gives 360-degree support to all our partners. We help in all aspects ranging from location, architecture, staff recruitment to PR launch plan, social media marketing, auditing, cross marketing and more.
                                Strategic planning which is very important for the success of any business, is worked on extensively by our team and partners.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoHeight: true,
            spaceBetween: 20,
            // navigation: {
            //   nextEl: ".swiper-button-next",
            //   prevEl: ".swiper-button-prev",
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>