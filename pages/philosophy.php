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
        <section class="michel1-section">
            <div class="container p-0">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="michel1-content">
                            <video muted autoplay loop poster="../assets/media/images/poster.jpg">
                                <source src="../assets/media/videos/Home page.mp4">
                            </video>
                            <div class="michel1-content_abs">
                                <h1> FEATURES </h1>
                                <p> Welcome to FashionTV Cruise </p>
                            </div>
                            <div class="bottom_link">
                                <a href="#sec2"><i class="fas fa-chevron-circle-down"></i></a>
                                <!-- <a href="#sec2"><i class="fas fa-caret-circle-down"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <div class="index2-div">
            <img src="../assets/media/images/01.png" alt="Cruise Image">
        </div>
        <section class="index2-section" id="sec2">
            <div class="bg1">
                <div class="water1"></div>
            </div>
            <svg>
                <filter id="turbulence" x="0" y="0" width="100%" height="100%">
                    <feTurbulence id="sea-filter" numOctaves="3" seed="2" baseFrequency="0.05 0.08"></feTurbulence>
                    <feDisplacementMap scale="20" in="SourceGraphic"></feDisplacementMap>
                    <animate xlink:href="#sea-filter" attributeName="baseFrequency" dur="60s" keyTimes="0;0.5;1" values="0.02 0.06;0.04 0.08;0.02 0.06" repeatCount="indefinite" />
                </filter>
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="index2-content">
                            <h1>BREATHTAKING AMBIENCE</h1>
                            <P>With its simplistic yet dynamic ambience and stunning architectural designs to create a breathtaking setting, FTV Cruise is the ideal space, either to have the most memorable time or or drift into the sea to forget all your worries </P>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-9 col-sm-12">
                        <div class="features5-image">
                            <img src="../assets/media/images/cruise1.png" alt="fashiontv Cruise">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="features1-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="features1-heading">
                            <h1>A PLACE OF FUN FILLED WITH JOY AND EXCITEMENT</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="features1-content">
                            <p>Explore a plethora of sumptuous dining options, enthralling activities & unique experiences including, arts & crafts, scavenger hunts, soothing spas, invigorating nightlife, karaoke & lot more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="features3-section">
            <div class="bg2">
                <div class="water2"></div>
            </div>
            <svg>
                <filter id="turbulence" x="0" y="0" width="100%" height="100%">
                    <feTurbulence id="sea-filter" numOctaves="3" seed="2" baseFrequency="0.05 0.08"></feTurbulence>
                    <feDisplacementMap scale="20" in="SourceGraphic"></feDisplacementMap>
                    <animate xlink:href="#sea-filter" attributeName="baseFrequency" dur="60s" keyTimes="0;0.5;1" values="0.02 0.06;0.04 0.08;0.02 0.06" repeatCount="indefinite" />
                </filter>
            </svg>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="features3-content">
                            <h1>Ingenuity at its best</h1>
                            <p>FashionTV believes ideas form the cornerstones of any successful venture. Long gone are the brick and mortar days, it's time to step into floating wonderland on water with FTV Cruise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <section class="features4-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="features4-image">
                            <img src="../assets/media/images/cruise-3.png" alt="Cruise Image">
                            <h1>Perfect Journey</h1>
                        </div>
                        <div class="features4-content">
                            <p>A perfect journey deserves a perfect destination. FTV Cruises takes you to some of the most gorgeous destinations, from the wild and unexplored beauty to some of the most popular beaches and stunning landscapes, every cruise destination has a story to tell.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include_once "../components/footer.php"; ?>

</body>

</html>