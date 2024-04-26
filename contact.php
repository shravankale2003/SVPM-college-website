<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/0308e04451.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
    <title>SVPM - Best Engineering College</title>
</head>

<body>

    <!----Header---->
    <section class="sub-header">
        <nav>
            <a href="#"><img src="images/logo.png" alt="Logo"></a>

            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>

                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>

        </nav>

        <div class="blog-text-box">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!----Contact---->
    <section class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3791.524938528498!2d74.49551092592161!3d18.1397164806955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc3a0cd33c822f3%3A0xaed54077fcb25400!2sMalegaon%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1713911705687!5m2!1sen!2sin"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contact-us">
        <h2>Contact Us</h2>
        <p>We are always here to help you out please let us know if any query</p>
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>
                        <h3>Address</h3>
                        <p>Malegaon</p>
                    </span>
                </div>

                <div>
                    <i class="fas fa-phone"></i>
                    <span>
                        <h3>Phone</h3>
                        <p>123456789</p>
                    </span>
                </div>

                <div>
                    <i class="fas fa-envelope"></i>
                    <span>
                        <h3>Email</h3>
                        <p>svpmmalegaon@raseninfo.com</p>
                    </span>
                </div>
            </div>

            <div class="contact-col">

                <div class="contact-box">
                    <h3>Leave us a message</h3>
                    <form class="contact-form" action="process_contact_form.php" method="post">
                        <input type="text" name="name" placeholder="Enter Your Name">
                        <input type="email" name="email" placeholder="Enter Your Email">
                        <textarea rows="5" name="message" placeholder="Write a message..."></textarea>
                        <button type="submit" class="hero-btn-red">SUBMIT</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!----Footer---->
    <section class="footer">
        <h4>ABOUT US</h4>
        <p>We hope that you will visit our college for better understanding
            <br>Hope To See You Soon</p>

        <div class="icons">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitch" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-linkedin" aria-hidden="true"></i>
        </div>
        <p>Made with <i class="fa fa-heart" aria-hidden="true"></i> By <a href="#">Aditya Pol</a></p>
    </section>


    <!---Javascript for toggle menu--->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

</body>

</html>
