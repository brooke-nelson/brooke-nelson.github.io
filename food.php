<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
        <link rel="icon" href="images/favicon.ico">
        <title>Food</title>
    </head>
    <div id="wrapper">
        <body>
            <header>
                <div class="container">
                    <div class="logo">
                        <img src="images/bham_logo.png.PNG" alt="">
                    </div>
                    <nav class="navigation">
                        <label class="label" for="toggle">
                            <i class="fas fa-bars"></i>
                        </label>
                        <input type="checkbox" id="toggle">
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="explore.php">Explore</a>
                                <ul class="dropdown">
                                    <li class="list">
                                        <a href="food.php">Food</a>
                                    </li>
                                    <li class="list">
                                        <a href="events.php">Events</a>
                                    </li>
                                    <li class="list">
                                        <a href="local.php">Local Treasures</a>
                                    </li>
                                    <li class="list">
                                        <a href="spotlight.html">Weekly Spotlight</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="news.php">News</a>
                            </li>
                            <li>
                                <a href="wwu.php">WWU</a>
                            </li>
                            <li>
                                <a href="gallery.php">Gallery</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <section>
                <div class="container">
                    <div class="banner"></div>
                </div>
            </section>
            <div class="clearfix"></div>
            <main>
                <div class="container">
                    <div class="main-food">
                        <h1 class="titles">Best Food Around Town</h1>
                        <div class="grid">
                            <div class="restaurant">
                                <h3 class="food-title">AB Crepes</h3>
                                <p class="hometxt">
                                    AB Crepes is known for its unique savory crepes and located in a great spot in downtown Bellingham. The local go-to spot for anything crepe.
                                    <img class="imgg" src="images/DSCN2226.jpg" alt="">
                                    <img class="imgg" src="images/abcrepe.PNG" alt="">
                                </p>
                            </div>
                            <div class="restaurant">
                                <h3 class="food-title">Jalepenos</h3>
                                <p class="hometxt">
                                    Jalepenos is a great place to get Mexican food. Best known for its Taco Tuesday's deal on tacos and Big Mama Margaritas.
                                    <img class="imgg1" src="images/DSCN2257.jpg" alt="">
                                    <img class="imgg1" src="images/jalepenos.PNG" alt="">
                                </p>
                            </div>
                            <div class="restaurant">
                                <h3 class="food-title">Mallards</h3>
                                <p class="hometxt">
                                    Mallards is located downtown and is a Bellingham favorite. The endless and rotating flavors keeps customers coming back, along with the picture-worthy aesthetic.
                                    <img class="imgg2" src="images/mallard.PNG" alt="">
                                    <img class="imgg2" src="images/mallard2.PNG" alt="">
                                </p>
                            </div>
                            <div class="restaurant">
                                <h3 class="food-title">Mount Bakery</h3>
                                <p class="hometxt">
                                    Mount Bakery has 2 locations in Bellingham and is extremely popular for its delicious breakfast and sweet treats. Do yourself a favor and order the eggs benedict.
                                    <img class="imgg3" src="images/DSCN2238.jpg" alt="">
                                    <img class="imgg3" src="images/mb.PNG" alt="">
                                </p>
                            </div>
                            <div class="restaurant">
                                <h3 class="food-title">McKay's Taphouse</h3>
                                <p class="hometxt">
                                    McKay's Taphouse has the best pizza in town, with creative signature pizzas you can't find anywhere else. Come and grab a drink, hang with friends, and eat good!
                                    <img class="imgg4" src="images/DSCN2167.jpg" alt="">
                                    <img class="imgg4" src="images/mckay.PNG" alt="">
                                </p>
                            </div>
                            <div class="restaurant">
                                <h3 class="food-title">On Rice Thai Cuisine</h3>
                                <p class="hometxt">
                                    On Rice is a great local restaurant for your Thai food cravings. Great owners, great food, and an authentic Thai experience. 
                                    <img class="imgg5" src="images/DSCN2174.jpg" alt="">
                                    <img class="imgg5" src="images/onrice.PNG" alt="">
                                </p>
                            </div>
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
                            <p>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter-square"></i>
                            </p>
                        </div>
                        <div class="footer">
                            <h4 class="sub-heading">Contact Us!</h4>
                            <p>Have Questions or want to Add to our page?
                                <br>
                                <a href="contact.php">Click Here to Send Us a Message</a>
                            </p>
                        </div>
                    </div>
                    <div class="copyright"> &copy; Copyright 2019 All rights reserved | All photos in website are taken by owner | Brooke Nelson
                        <br>
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
            <script>
    w3.slideshow(".imgg",5000);
            </script>
            <script>
    w3.slideshow(".imgg1",5000);
            </script>
<script>
    w3.slideshow(".imgg2",5000);
</script>
<script>
    w3.slideshow(".imgg3",5000);
</script>
<script>
    w3.slideshow(".imgg4",5000);
</script>
<script>
    w3.slideshow(".imgg5",5000);
</script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.js "></script>
        </body>
    </div>
</html>