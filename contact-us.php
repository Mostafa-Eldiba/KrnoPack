<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Description"
        content="was established in 1993 on an area of 500 m for the production of plastic table wares and straw pipes used in hotels, companies, factories.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mostafa Eldiba">

    <title>Contact Us</title>

    <!-- Section Contact Us -->
    <link rel="stylesheet" href="Css/sectionContactUs/sectionContactUs.css">
     <!-- Section Footer -->
    <link rel="stylesheet" href="Css/sectionFooter/sectionFooter.css">
    
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/all.min.css">
    <link rel="stylesheet" href="Css/styleKrnoPack.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">


    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    

    <!-- Start Include Header -->
    <?php  include ('header.php'); ?>
    <!-- End Include Header -->

    <!-- Start Include Navbar -->
    <?php  include ('navbar.php'); ?>
    <!-- End Include Navbar -->


    <section class="contact-us">
        <!-- Start Container -->
        <div class="container">
            <!-- Start Row -->
            <div class="row">

                <!-- Start Content Contact Us -->
                <div class="content-contact-us 
                d-flex justify-content-between align-items-center gap-5
                text-center pt-5 pb-5">

                    <!-- Fi1 Box -->
                    <div class="box">
                        <div><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <h3>Cell phone</h3>
                        <p class="text-primary">002-01129977020</p>
                    </div>
                    <!-- Fi1 Box -->

                    <!-- Sco2 Box -->
                    <div class="box">
                        <div><i class="fa-solid fa-message"></i></div>
                        <h3>support email</h3>
                        <p class="text-primary">Support@Krnopack.com</p>
                    </div>
                    <!-- Sco2 Box -->

                    <!-- Th3 Box -->
                    <div class="box">
                        <div><i class="fa-solid fa-location-dot"></i></div>
                        <h3>factory address</h3>
                        <p class="text-primary">abou rawash km28 - cairo</p>
                    </div>
                    <!-- Th3 Box -->

                </div>
                <!-- End Content Contact Us -->


            </div>
            <!-- End Row -->
            <hr>


            <!-- Start Form Message -->
            <div class="form-message d-flex justify-content-between align-items-center">
                <div class="con-container">
                    <p>Feel free to contact us</p>
                    <h2>Keep In Touch With Us</h2>
                    <p>Krno plastic Factory was established in 1993 on an area of 500 m for the production of plastic
                        table wares and straw pipes used in hotels, companies, factories. In 2003 was the opening of
                        second plant in the industrial zone in Abu Rawash on an area of 17000 m, that we added
                        production lines of foam trays and cups, since that time we considered the leaders in this area,
                        which makes us the first factory in this industry.</p>
                </div>
                <div class="con-container">
                    <h2>Contact Us</h2>
                    <form id="contactForm">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="email">Sbject:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="4" required></textarea>

                        <button type="button" id="submitBtn">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- End Form Message -->


        </div>
        <!-- End Container -->

        <!-- Start Map -->
        <h2 class="text-center p-5 ">My Location</h2>
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.3186567582516!2d31.038599423995!3d30.085058916644495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585b2a57c2ba3b%3A0xd3cb6830e10c454f!2sKRNO%20Pack!5e0!3m2!1sar!2seg!4v1702631546968!5m2!1sar!2seg"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <!-- End Map -->

    </section>

    
    <!-- Start Include Footer -->
    <?php  include ('footer.php'); ?>
    <!-- End Include Footer -->


    <!-- jquery -->
    <script src="Js/code.jquery.com_jquery-3.7.0.js"></script>
    <!-- Bootastrap -->
    <script src="Js/bootstrap.bundle.min.js "></script>
    <!-- Library Font Icone -->
    <script src="Js/all.min.js"></script>
    <!-- Main Js -->
    <script src="Js/main.js"></script>
</body>

</html>