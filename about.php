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

        <div class="about-box">
            <h1>About Us</h1>
        </div>
    </section>

    <section class="about-us">
        <div class="row">
            <div class="about-col">
                <h1>Few Things Of Our University</h1>
                <p>The Institute is being managed under the presidentship of Hon. Shri. Sharadchandraji Pawar, Ex. Minister for Agriculture, Govt. of India and Ex. Chief Minister of Maharashtra.

                    The Institute was established in the year 1990 under the auspices of Shivnagar Vidya Prasarak Mandal at Malegaon (Bk) Tal - Baramati, Dist - Pune. It is occupying the sprawling area of 20 hectares with independent RCC structures housing various educational, instructional, laboratory and workshop areas along with allied necessary structures like Boys and Girls hostels, eating houses, Gymnasiums, play fields etc.
                    
                    The College of Engineering was established in 1990 and has all the necessary infrastructure as per the norms of AICTE New Delhi, Pune University. The first batch obtained the degree of B.E. in 1994.</p>
                <a href="http://engg.svpm.org.in/" class="hero-btn-red">EXPLORE NOW</a>
            </div>

            <div class="about-col">
                <img src="images/about.jpg" alt="">
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


    <!---Javascript for toggole menu--->
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
