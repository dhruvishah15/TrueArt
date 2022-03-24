<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | TrueArt</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- css link -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/searchbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sideNavbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/btn.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navtop.css') }}">
    
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
        <div class="wrapper">
        @include("flash-message")
            <div class="title-text">
                <div class="title login">
                    Login Form</div>
                <div class="title signup">
                    Signup Form</div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab">
                    </div>
                </div>
                <div class="form-inner">
                    <form action="login" method="POST" class="login">
                    @csrf
                        <div class="field">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link">
                            <!-- <a href="#">Forgot password?</a> -->
                        </div>
                        <div class="field btn login1">
                            <div class="btn-layer">
                            </div>
                            <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="#signup">Signup now</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include("partials.footer")


    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
        document.querySelector("label.signup").onclick = function () {
            location.href = "http://127.0.0.1:8000/registration";
        };
        document.querySelector("label.login").onclick = function () {
            location.href = "http://127.0.0.1:8000/login";
        };
    </script>
</body>

</html>