<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.ico">


<title>Contact</title>
</head>
<div id="wrapper">
<body>
<header>
        <div class="container">
            <div class="logo"><img src="images/bham_logo.png.PNG" alt=""></div>
            <nav class="navigation">
                <label class="label" for="toggle"><i class="fas fa-bars"></i></label>
                <input type="checkbox" id="toggle">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="explore.php">Explore</a>
                        <ul class="dropdown">
                            <li class="list"><a href="food.php">Food</a></li>
                            <li class="list"><a href="events.php">Events</a></li>
                            <li class="list"><a href="local.php">Local Treasures</a></li>
                            <li class="list"><a href="spotlight.html">Weekly Spotlight</a></li>
                        </ul>
                    </li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="wwu.php">WWU</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
<br><br><br>
<main>
    <div class="container">
        <div class="contact">
                <div class="left">
                    <form action="form.php" class="contactform" method="POST" autocomplete>
                        <label for="name">Name</label><br>
                        <input type="text" id="name" name="name"><br>
    
                        <label for="phone">Subject</label><br>
                        <input type="text" name="subject" id="subject"><br>
    
                        <label for="email">Email</label><br>
                        <input type="text" name="email" id="email"><br>
    
                        <label for="message">Write Message</label><br>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea><br>
    
                        <input class="btn btn-success" type="submit" value="Send Message" class="button">
                    </form>
                    
    
                </div>
    
                <div class="right" >
                    <h2 class="title">Contact Us</h2>
                    <p class="hometxt">If you have more questions about Bellingham or our website, send us a message through this form. Want something added or your own photos added to our gallery? Send us a message! Want to let us know about an event coming up? Send us a message! Want your local business as a weekly spotlight? Message Us!<img class="img" src="images/DSCN2232.jpg" alt="">
                    </p>
                    
                </div>
        </div>
    </div>      

</main>
<div class="clearfix"></div>
<div class="container">
    <div class="break"></div>
</div>
    <footer>
        <div class="container">
            <div class="main-footer">
                <div class="footer">
                    <h4 class="sub-heading">Follow Us!</h4>
                        <p>Follow our Social Media accounts</p>
                        <p><i class="fab fa-instagram"></i>     <i class="fab fa-facebook"></i>     <i class="fab fa-twitter-square"></i></p>
                </div>
                <div class="footer">
                    <h4 class="sub-heading">Contact Us!</h4>
                    <p>Have Questions or want to Add to our page? <br> <a href="contact.php">Click Here to Send Us a Message</a></p>
                </div>
            </div>
                <div class="copyright"> &copy; Copyright 2019 All rights reserved | All photos in website are taken by owner | Brooke Nelson <br> 
                    <!-- <script>
                        var date= document.lastModified;
                        document.write(date);
                    </script> -->
                </div>
                <div class="clearfix"></div>
            
        </div>
        
    </footer>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.js "> </script>

</body>
</div>
</html>
