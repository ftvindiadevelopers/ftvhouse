<!DOCTYPE html>
<html lang="en">
<?php include_once "../api/_config.php"; ?>

<head>

    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "../components/head.php";
    $meta["title"] = "FTV Personal Care | FashionTV India"; ?>
    <meta property="og:title" content="<?php echo $meta["title"]; ?>">
    <meta property="og:image" content="">
    <title><?php echo $meta["title"]; ?></title>
    <meta property="og:description" content="">
    <meta property="twitter:title" content="FTV Personal Care | FashionTV India">
    <meta property="twitter:description" content="">

</head>

<body>
    <?php include_once "../components/nav.php"; ?>
    <main class="home-page">
        <section class="pc1-section">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="pc1-content">
                            <h2>
                                Personal <br> Care
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="pc2-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="pc2-content">
                            <h1>Introduction</h1>
                            <p> <span> Our bodies are our gardens, to the which our wills are gardeners.</span>
                                As of late, work has become an integral part of our life. Amidst the hustle and bustle, self care and hygiene is often not cared for. To cater to this crucial need, FashionTV presents its exclusive range of premium self care products designed with a tough grind and passion for quality. Whether you are looking for the latest skin care routine or a new bathroom kit, FTV has it all for you. Our array of phenomenal products range from skin care, hair care, oral hygiene products to deodorants, fragrances and makeup. Our high quality personal care products are developed using the finest materials to make you look appealing and radiate with unshakeable confidence. </p>

                        </div>
                        <div class="pc2-image">
                            <video loop="true" autoplay="autoplay" muted="" poster="../assets/media/images/poster.jpg">
                                <source src="../assets/media/videos/3 video.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--  -->
        <section class="pc3-section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="pc3-image">
                            <img src="../assets/media/images/pc-12.png" alt="Personal Care">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="pc3-content">
                            <h1>Potential</h1>
                            <p>India’s beauty and personal care market is thriving and one of the fastest growing consumer markets. Currently, it stands at a valuation of $26 billion dollars and projected to grow at a CAGR of 8.1% to reach a massive $32.3 billion dollars by 2023. Fuelled by deep internet penetration among the millennials, consumers are increasingly discovering a plethora of new brands and personal care products online and more than willing to experiment, boosting the growth opportunities of brands. Rising disposable income, improving quality of life, apparent positive effects of personal care leading to high self esteem, better social interactions and gradual shift of consumer perspective towards premium and luxury cosmetic brands are a few factors propelling the market growth in this space.</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="ma3-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="ma3-content">
                            <div class="ma3-tabs">
                                <h2 class="tabs is-active">Vission</h2>
                                <h2 class="tabs">Mission</h2>
                                <h2 class="tabs">Aim</h2>
                            </div>
                            <div class="ma3-tab_content">
                                <p class="contents is-active"> To nurture the flaming desire in individuals for self care and self love through our exceptional personal care products.
                                </p>
                                <p class="contents">To be recognised as the unrivaled cosmetics brand with our all-encompassing phenomenal beauty products.

                                </p>
                                <p class="contents"> to make people feel delightful about themselves through an extensive range of personal care practices.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="pc4-section">
            <div class="pc4-video">
                <video loop="true" autoplay="autoplay" muted="" poster="../assets/media/images/poster.jpg">
                    <source src="../assets/media/videos/ftv home page.mp4" type="video/mp4">
                </video>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>

</body>

</html>