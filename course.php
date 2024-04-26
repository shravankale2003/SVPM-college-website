<?php 
// include 'header.php'; 
?>
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


    <section class="course-header">
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

        <div class="course-text-box">
            <h1>Our Courses</h1>
        </div>
    </section>

    <section class="course">
        <h1>Courses We Offer</h1>
        <p>We Offer The Best Education In All Sector Which Will Help Students To Grow Their Future Bright </p>
        <div class="row">
            <div class="course-col">
                <h3>Diploma</h3>
                <p>This Course Contains Of Three Years Time Which Will Make You A Intermidiate Of Given Sector</p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>This Course Contains Of Four Years Time Which Will Make You A Perfect Form Of Given Sector</p>
            </div>
            <div class="course-col">
                <h3>Post Graduate</h3>
                <p>This Course Contains Of Two TO Four Years Time Which Will Make You A Perfect Well Being Of Given Sector.</p>
            </div>
        </div>
    </section>

    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>We Provide The Best Facility Which Student Required For Thier Future</p>
        <div class="row">
            <div class="facilities-col">
                <img src="images/library.jpg" alt="Library">
                <h3>World Class Library</h3>
                <p>WE Provide Every Books And Dictionarys For Our Children
                </p>
            </div>

            <div class="facilities-col">
                <img src="images/basketball.jpg" alt="Play Ground">
                <h3>Largest Play Ground</h3>
                <p>We Provide Basketball, Football as well as Volleyball Grounds
                </p>
            </div>

            <div class="facilities-col">
                <img src="images/cafetaria.jpeg" alt="Cafeteria">
                <h3>Tasty And Healthy</h3>
                <p>We Provide Proper Healthy Food and Sustainable Diet to Our Students
                </p>
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
