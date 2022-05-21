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

    <main id="enquirynow-page">
        <section class="enquiry-form-sec" id="enquiry-now" >
            <div class="container">
                <div class="row justify-content-center">
                    <h1>Enquire Now</h1>
                    <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="enquiry-form text-center">
                            <form action="api.php" method="post">
                                <input type="text" name="name" id="" placeholder="Your Name" />
                                <input type="number" name="mobile" id="" placeholder="Your Phone No." />
                                <input type="email" name="email" id="" placeholder="Your Email Id" />
                                <select>
                                    <option selected="true" disabled="">Select State</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Telangana">Telangana</option>
                                </select>
                                <input type="text" name="text" id="" placeholder="Enter your city Name" />
                                <select class="select-cls" name="investment_capacity">
                                    <option value="default">Investment Capacity</option>
                                    <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                </select>
                                <textarea name="message" type="text" placeholder="Message"></textarea>
                                <button type="submit" value="Submit" class="enq-btn-one">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once "../components/footer.php"; ?>

</body>

</html>