<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Profile Page | TrueArt</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/profilePage.css">

    
    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/User/profilePage.css') }}">

    <!-- js link -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('js/profilePage.js')}}"></script>


</head>

<body>

    <!-- header section starts  -->
    <header>

        <div class="user">
            <img src="https://t3.ftcdn.net/jpg/02/22/85/16/360_F_222851624_jfoMGbJxwRi5AWGdPgXKSABMnzCQo9RN.jpg" alt="">
            <h3 class="name">Mark Smith</h3>
            <p class="post">Digital Artist</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">Portfolio</a></li>
                <li><a href="#about">about me</a></li>
                <li><a href="#portfolio">my artworks</a></li>
                <li><a href="#contact">contact me</a></li>
                <li><a href="/artists">Go Back</a></li>
            </ul>
        </nav>

    </header>

    <!-- header section ends -->

    <div id="menu" class="fas fa-bars"></div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <h3>HI THERE !</h3>
        <h1>I'M <span>Mark Smith</span></h1>
        <p> An imaginative realist painter! In my art, I explore what gives a thing its substance, its soul. As a lead artist at Cooperativa Creativa, I have been driven to reach a harmony of colours and shapes ever since I entered the industry.
        </p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> me </h1>

        <div class="row">

            <div class="info">
                <h3> <span> name : </span> Mark Smith </h3>
                <h3> <span> age : </span> 30 </h3>
                <h3> <span> Gender : </span> Male </h3>
                <h3> <span> specialization : </span> Digital Artwork </h3>
                <h3> <span> City : </span> Ahmedabad </h3>
                <a href="#contact"><button class="btn"> Connect with Me&nbsp;<i class="fas fa-envelope"></i>
                    </button></a>
            </div>

            <div class="counter">

                <div class="box">
                    <span>5+</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>20+</span>
                    <h3>Artworks</h3>
                </div>

                <div class="box">
                    <span>15+</span>
                    <h3>happy Customers</h3>
                </div>

                <div class="box">
                    <span>10+</span>
                    <h3>awards won</h3>
                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->


    <!-- portfolio section starts  -->

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> my <span>Artworks</span> </h1>

        <div class="box-container">

             <div class="box">
                <img src="\artwork\Digital River Landscape by Mark Smith.jpg" alt="">
            </div>
            <!--
            <div class="box">
                <img src="\artwork\Ronaldo Sketch by Mira Rai.jpg" alt="">
            </div>

            <div class="box">
                <img src="\artwork\Buddha Painting by Mira Rai.jpg" alt="">
            </div>

            <div class="box">
                <img src="\artwork\Time Apparatus by Mira Rai.jpg" alt="">
            </div>

            <div class="box">
                <img src="\artwork\Abstract Art by Mira Rai.jpg" alt="">
            </div>

            <div class="box">
                <img src="\artwork\Shooting Star by Mira Rai.jpg"
                    alt="">
            </div> -->

        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> me </h1>

        <div class="row">

            <div class="content">

                <h3 class="title">contact info</h3>

                <div class="info">
                    <h3> <i class="fas fa-envelope"></i> mark15@gmail.com </h3>
                    <h3> <i class="fas fa-phone"></i> +(91) 9879-879876 </h3>
                    <h3> <i class="fas fa-phone"></i> +(91) 9879-879877 </h3>
                    <h3> <i class="fas fa-map-marker-alt"></i>Ahmedabad, India - 380101</h3>
                </div>

            </div>

            <form action="">

                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="text" placeholder="project" class="box">
                <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
                <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <a href="index.php" class="exit">
        <i class="fa fa-arrow-circle-left icon"></i>Go back
    </a>

</body>
</html>