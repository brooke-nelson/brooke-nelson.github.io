<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.css">
<link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.css">
<link rel="icon" href="images/favicon.ico">


<title>Events</title>
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
                    <li><a href="index.html">Home</a></li>
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

    <section>
        <div class="container">
            <div class="event"></div>
        </div>
    </section>
    <div class="clearfix"></div>
<main>
    <div class="container">  
        <div class="testimonial-carousel owl-carousel owl-theme p-5">
            <div class="testimonial">
                    <div class="description">
                        <h2>Downtown Sounds</h2>
                        <hr>
                        <p>A 15 year tradition of bands gathering from all over to perform in downtown Bellingham during the summer. This local music festival will be the highlight of the summer for some, food, drinks, and great music!</p>
                    </div>
            </div>

            <div class="testimonial">
                <div class="description">
                    <h2>Downtown Art Walk</h2>
                    <hr>
                    <p>Walk around downtown Bellingham and see art from different galleries and museums and dozens of artists. It takes place on the first Friday of every month. Art, food, drinks, doesn't get better than that.</p>
                </div>
            </div>

            <div class="testimonial">
                <div class="description">
                    <h2>Bellingham Bay Marathon</h2>
                    <hr>
                    <p>The Bellingham Bay walk occurs every year in September, starting in downtown Bellingham and offering a 5k, 10k, half marathon and full marathon as well as a team full marathon relay.</p>
                </div>
            </div>

            <div class="testimonial">
                <div class="description">
                    <h2>Whatcom County Farm Tour</h2>
                    <hr>
                    <p>The 14th annual Whatcom county Farm tour in November will have you eating, drinking, and enjoying 12 of Whatcom County's family farm lands all over the county. </p>
                </div>
            </div>

            <div class="testimonial">
                <div class="description">
                    <h2>WWU Tours</h2>
                    <hr>
                    <p>It is no secret that WWU is one of the prettiest campus's in the country, so do yourself a favor, schedule a tour, and take in the beauty of the campus.</p>
                </div>
            </div>

            <div class="testimonial">
                <div class="description">
                    <h2>Farmer's Market</h2>
                    <hr>
                    <p>Bellingham's farmer's market is hard to beat. With dozens of vendors for art and food and more, you'll want to get downtown and check it out. Suspended currently due to covid.</p>
                </div>
            </div>


            

        </div>
    </div>

    
        
    <div class="clearfix"></div>

</main>
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
<script src="https://unpkg.com/scrollreveal"></script>
<script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.js"></script>
    <script>
        $('document').ready(function(){
            // $('.owl-carousel').owlCarousel();
            $('.owl-carousel').owlCarousel({
                margin:20,
                loop: true,
                autoplay: true,
                dotsEach: true,
                responsive:{
                    0: {items:1},
                    600: {items:2},
                    1000: {items: 3}
                }
            });
        });
    </script>
<script src="js/loader.js"></script> 
<script>
    //scroll reveal
$('document').ready(function(){
window.sr=ScrollReveal();

sr.reveal('.main',{
    duration:1000,
    origin:'bottom',
    delay:500,
    distance:'100px'
});
sr.reveal('.subhead',{
    duration:1000,
    origin:'bottom',
    delay:500,
    distance:'100px'
});
});
</script>


</body>
</div>
</html>