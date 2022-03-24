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
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVyc29ufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"
                alt="">
            <h3 class="name">Mira Rai</h3>
            <p class="post">Canvas Artist</p>
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
        <h1>I'M <span>Mira Rai</span></h1>
        <p> My art is a colorful web where solid shapes and varied lines interact to keep the viewer in a playful atmosphere of exploration and imagination.
        </p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> me </h1>

        <div class="row">

            <div class="info">
                <h3> <span> name : </span> Mira Rai </h3>
                <h3> <span> age : </span> 20 </h3>
                <h3> <span> Gender : </span> Female </h3>
                <h3> <span> specialization : </span> Sketch, Canvas, Abstract Painting </h3>
                <h3> <span> City : </span> Ahmedabad </h3>
                <a href="#contact"><button class="btn"> Connect with Me&nbsp;<i class="fas fa-envelope"></i>
                    </button></a>
            </div>

            <div class="counter">

                <div class="box">
                    <span>2+</span>
                    <h3>years of experience</h3>
                </div>

                <div class="box">
                    <span>30+</span>
                    <h3>Artworks</h3>
                </div>

                <div class="box">
                    <span>20+</span>
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
                <img src="\artwork\Nature painting by Mira Rai.jpg" alt="">
            </div>

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
                <img src="\artwork\Shooting Star by Mira Rai.jpg" alt="">
            </div>

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
                    <h3> <i class="fas fa-envelope"></i> mira20@gmail.com </h3>
                    <h3> <i class="fas fa-phone"></i> +(91) 7154-278360 </h3>
                    <h3> <i class="fas fa-phone"></i> +(91) 7154-632642 </h3>
                    <h3> <i class="fas fa-map-marker-alt"></i>Ahmedabad, India - 380104</h3>
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

    <a href="/artists" class="exit">
        <i class="fa fa-arrow-circle-left icon"></i>Go back
    </a>

</body>
</html>