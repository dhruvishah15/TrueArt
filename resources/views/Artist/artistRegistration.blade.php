<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Registration | TrueArt</title>
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/navtop.css">
    <link rel="stylesheet" href="css/artistRegistration.css"> -->

   <!-- css link -->
   <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/navtop.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/Artist/artistRegistration.css') }}">

   <!-- js link -->
   <script src="{{asset('script.js')}}"></script>
   <script src="{{asset('js/footer.js')}}"></script>
   <script src="{{asset('js/searchbar.js')}}"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    @include("partials.navbar")

    <div class="body">
        <div class="container">
        @include("flash-message")
            <div class="title">Registration</div>
            <div class="content">
                <form action="/artistRegistration" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Username</span>
                            <input type="text" name="username" placeholder="Enter your username" required>
                        </div>
                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1" value="male">
                        <input type="radio" name="gender" id="dot-2" value="female">
                        <input type="radio" name="gender" id="dot-3" value="unknown">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">Prefer not to say</span>
                            </label>
                        </div>
                    </div>

                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Phone Number</span>
                            <input type="text" name="phone" placeholder="Enter your number" required>
                        </div>

                        <div class="input-box">
                            <span class="details">Password</span>
                            <input type="password"  name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input type="password" name="confirm_password" placeholder="Confirm your password" required>
                        </div>
                    </div>

                    <div class="body1">
                        <div class="file-upload">
                            <div class="file-upload-select">
                                <div class="file-select-button">Choose File</div>
                                <div class="file-select-name">Upload your portfolio/resume...</div>
                                <input type="file" name="portfolio" id="file-upload-input">
                            </div>
                        </div>
                    </div>

                    <div class="button">
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include("partials.footer")
    
    <script>
        let fileInput = document.getElementById("file-upload-input");
        let fileSelect = document.getElementsByClassName("file-upload-select")[0];
        fileSelect.onclick = function () {
            fileInput.click();
        }
        fileInput.onchange = function () {
            let filename = fileInput.files[0].name;
            let selectName = document.getElementsByClassName("file-select-name")[0];
            selectName.innerText = filename;
        }
    </script>
</body>

</html>