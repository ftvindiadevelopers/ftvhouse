<header class="pc_header">
    <nav class="pc_navbar" id="pc_navbar">
        <div class="pc_innerdiv">
            <div class="pc_logo">
                <a href="/index">
                    <img src="../assets/media/images/fhouse-logo.svg" alt="FTV House Logo">
                </a>
            </div>
            <div class="head_links container">
                <nav class="head_nav_links">
                    <div class="head_nav-link">
                        <ul class="">
                            <li>
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li >
                                <a href="">
                                    Board
                                </a>
                            </li>
                            <li>
                                <a href="/fashiontv">
                                    FashionTV
                                </a>
                            </li>
                            <li>
                                <a href="/ftv-house">
                                    FTV&nbsp;House
                                </a>
                            </li>
                            <li>
                                <a href="/philosophy">
                                    <!-- <span data-hover="Features">Features</span> -->
                                    Customer Portal
                                </a>
                            </li>
                           
    
                        </ul>
                    </div>
                    <div class="enquiry-btn">
                        <a href="/enquirenow">
                            Enquire&nbsp;Now
                        </a>
                    </div>
                </nav>
            </div>
            <div class=" hamburger" id="hamburger">
                <!-- <img src="../assets/media/images/hamburger.svg" alt="Menu"> -->
                <!-- <div class="wave"></div> -->
            </div>
        </div>
    </nav>
    <!--  -->
    <div class="pc_links-main" id="pc_link">
        <div class="bg">
        </div>
        <div class="pc_innerlink">
            <span class="btn-close btn-close-white" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="pc-links_nav">
                <!-- <img class="img-overlay" src="../assets/media/images/p-4.png" alt=""> -->
                <ul class="pc-links">
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="/michel-adam">
                            Michel&nbsp;Adam
                        </a>
                    </li>
                    <li>
                        <a href="/kashiff-khan">
                            Kashiff&nbsp;Khan
                        </a>
                    </li>
                    <li>
                        <a href="/fashiontv">
                            FashionTV
                        </a>
                    </li>
                    <li>
                        <a href="/channels">
                            Channels
                        </a>
                    </li>
                    <li>
                        <a href="/ftv-cruise">
                            FTV&nbsp;Cruise
                        </a>
                    </li>
                    <li>
                        <a href="/features">
                            <!-- <span data-hover="Features">Features</span> -->
                            Features
                        </a>
                    </li>

                    <li>
                        <a href="/license">
                            License
                        </a>
                    </li>
                    <li class="enquiry-btn">
                        <a href="/enquirenow">
                            Enquire&nbsp;Now
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</header>

<script>
    let hamburger = document.getElementById("hamburger");
    let menuLinks = document.getElementById("pc_link");
    let closeBtn = document.getElementById("btn_sideNavClose");
    closeBtn.addEventListener("click", () => {
        menuLinks.classList.add("inactive");
        menuLinks.classList.remove("active");
        console.log("removing")
    });
    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("hamburger-toggle");
        console.log("adding")
        menuLinks.classList.remove("inactive");
        menuLinks.classList.toggle("active");
    });
</script>