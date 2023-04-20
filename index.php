<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="/code/style.css">
    <title>Document</title>

</head>

<body>
    <section id="HOME" class="header">
        <nav>
            <a href="index.html"><img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/logo.png" alt="logo"></a>
            <div class="nav-links" id="navLinks">


                <ul>
                    <li><a href="#HOME">HOME</a></li>
                    <li><a href="#SERVICES">SERVICES</a></li>
                    <li><a href="#PORTFOLIO">PORTFOLIO</a></li>
                    <li><a href="#CONTACT">CONTACT</a></li>
                </ul>
            </div>

        </nav>
        <div class="text-box">
            <h1>Lorem ipsum dolor sit amet consectetur</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo mollitia obcaecati eum corporis et
                repellendus unde itaque vero ipsam quis ab at commodi illum, eaque fuga illo excepturi enim ullam!</p>
            <a href="#CONTACT" class="btn-contact">CONTACT US</a>
        </div>

    </section>

    <!----------- about ----------->

    <section id="SERVICES" class="services">
        <h1>OUR SERVICES</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil est nesciunt obcaecati iure cum distinctio? Et
            iusto quia, facere consectetur veritatis, veniam animi quaerat aliquid sapiente, tempora obcaecati fuga
            dolorem.</p>
        <div class="row">
            <div class="servi-list">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/train portrait.jpg" alt="">
                <div class="layer">
                    <h3>PORTRAITS</h3>
                </div>
            </div>
            <div class="servi-list">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/road pic.jpg" alt="">
                <div class="layer">
                    <h3>PORTRAITS</h3>
                </div>
            </div>
            <div class="servi-list">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/train portrait.jpg" alt="">
                <div class="layer">
                    <h3>PORTRAITS</h3>
                </div>
            </div>

        </div>
    </section>



    <section id="PORTFOLIO" class="portfolio">

        <h1>PORTFOLIO</h1>
        <div class="pics">
            <div class="big-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/coin flip.jpg" alt="">
            </div>

            <div class="v-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/train portrait.jpg" alt="">
            </div>

            <div class="big-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/car interior.jpg" alt="">
            </div>

            <div class="w-1">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/bike pic.jpg" alt="">
            </div>

            <div class="v-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/portrait 3.jpg" alt="">
            </div>

            <div class="v-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/sunset 3.jpg" alt="">
            </div>

            <div class="h-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/road pic.jpg" alt="">
            </div>

            <div class="h-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/mountain.jpg" alt="">
            </div>

            <div class="h-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/sunrise 1.jpg" alt="">
            </div>

            <div class="w-1">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/sunrise.jpg" alt="">
            </div>

            <div class="v-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/sunset 1.jpg" alt="">
            </div>

            <div class="w-1">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/sunset 2.jpg" alt="">
            </div>



            <div class="w-1">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/sunset 4.jpg" alt="">
            </div>

            <div class="h-stretch">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/train track 1.webp" alt="">
            </div>

            <div class="w-1">
                <img src="https://raw.githubusercontent.com/Amine-Boumaza/photography/master/images/backround.jpg" alt="">
            </div>

            <!-- <div class="big-stretch">
                <img src="" alt="">
            </div>

            <div class="w-1">
                <img src="" alt="">
            </div>

            <div class="w-1">
                <img src="" alt="">
            </div> -->
        </div>
    </section>

    <section id="clients" class="clients">

        <div class="img-row">
            <?php
            // Connect to database
            include "D:\my codes\photography website\code\connect.php";

            // Fetch images from database
            $sql = "SELECT * FROM images ORDER BY RAND() LIMIT 3";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {

                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <div class='<?php echo "card " . $count; ?>'>
                        <img src='<?php echo $row["url"]; ?>' alt='<?php echo $row["name"]; ?>'>
                        <div class='caption'>
                            <h4><?php echo $row["name"]; ?></h4>
                            <p><?php echo $row["story"]; ?></p>
                        </div>
                    </div>

            <?php
                    $count++;
                }
            } else {
                echo "No images found.";
            }

            // Close database connection
            mysqli_close($conn);
            ?>
        </div>

        <a href="/code/form.html">Add Image</a>

    </section>

    <section id="CONTACT" class="contact">
        <h1>CONTACT US</h1>
        <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/xpzeyapn" method="post">

            <label for="full-name">Full Name</label>
            <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
            <label for="email-address">Email Address</label>
            <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" required="">
            <label for="message">Message</label>
            <textarea rows="5" name="message" id="message" placeholder="Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla nullam quis risus." required=""></textarea>
            <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">

            <button type="submit" value="Submit">submit message</button>
        </form>
        </div>
    </section>



    <!-- toogle the menu bar -->

    <script src="script.js"></script>


</body>

</html>