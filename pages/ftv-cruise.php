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
        <section class="index1-section">
            <div class="container p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="index1-content">
                            <div class="index-heading">
                                <h1>F-CRUISE</h1>
                            </div>
                            <div class="index1-video1">
                                <video muted autoplay loop poster="../assets/media/images/poster.jpg">
                                    <source src="../assets/media/videos/5 video.mp4">
                                </video>
                            </div>
                            <div class="index1-video2">
                                <video muted autoplay loop poster="../assets/media/images/poster.jpg">
                                    <source src="../assets/media/videos/6 video.mp4">
                                </video>
                                <div class="index1-vid-text">
                                    <p>Welcome to FashionTV Cruise</p>
                                </div>
                            </div>
                            <div class="index1-video1">
                                <video muted autoplay loop poster="../assets/media/images/poster.jpg">
                                    <source src="../assets/media/videos/7 video.mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="fashion1-content">
                            <h1>Introduction</h1>
                            <p>Throw off the bowlines; sail away from the safe harbour; catch the winds in your sails. <span>
                                    EXPLORE. DREAM. DISCOVER WITH FTV CRUISE.</span>
                                A stunning creation of FashionTV, this new escapade is yet another milestone for the ever growing empire of the World’s Largest Fashion and Lifestyle Media Brand. FTV Cruise is a destination in itself which allows you to explore a plethora of sumptuous gourmet cuisines, enthralling activities & unique experiences whilst traversing through gorgeous seascapes and shores.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="fashiontv4-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-md-11 col-sm-12">
                        <div class="fashiontv4-content text-center">
                            <h1>Potential</h1>
                            <p>The global Cruise market is valued at 47480 million USD in 2020 is expected to reach 66610 million USD by the end of 2026, growing at a CAGR of 4.9%. Over the years, the prevalence of cruising amongst millennials has significantly increased. Rising per capita translates to an increase in luxury expenditure amongst the age bracket. In leading countries, millennials are the major earning population bracket. In India, the generation bracket is expected to accumulate 50% of the workforce by 2025. In the US, millennials accounted for a population of 71 million in 2016 and are expected to overtake baby boomers in forthcoming years.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="michel4-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="michel4-content">
                            <h1>Philosophy</h1>
                            <div class="michel4-heading">
                                <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators ma-indicators">
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="10000">
                                            <div class="carousel-ma">
                                                <h2>Vision</h2>
                                                <p>
                                                    We aspire to be India's most luxurious and exquisite cruises, providing ultimate leisure and catering to the demands and preferences of the nation’s elite.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item" data-bs-interval="2000">
                                            <div class="carousel-ma">
                                                <h2>Mission</h2>
                                                <p>
                                                    To revolutionise the Cruise Industry standards by offering incredible experiences through innovation and inspiration.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="carousel-ma">
                                                <h2>Aim</h2>
                                                <p>
                                                    We endeavour to deliver unparalleled standards of exquisiteness to our clients and ensure that they have a phenomenal voyage each and every time they board FTV Cruise.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>
</body>

</html>