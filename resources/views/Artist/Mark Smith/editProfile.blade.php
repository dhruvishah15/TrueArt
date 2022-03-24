<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Artist</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/Dashboard/style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        .body {
            height: 110vh;

            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            /* background : url('../../TrueArt-Website/images/bg1.png') no-repeat center; */
            /* background: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v880-kul-11.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=b2a0ea2be15471ece74e3ed9f9acf970') no-repeat center; */
            background-size: cover;
            background-attachment: fixed;
            /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
        }

        .container {
            max-width: 700px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0);
            padding: 25px 30px;
            margin-top: 60px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
        }

        .container .title {
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }

        .container .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
            background: crimson;
        }

        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }
        form .user-details .input-box1 input {
            height: 90px;
            width: 182%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            padding-bottom: 50px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        form .input-box1 span.details {
            /* display: block; */
            font-weight: 500;
            margin-bottom: 5px;
        }


        .user-details .input-box input {
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .user-details .input-box input:focus,
        .user-details .input-box input:valid {
            border-color: crimson;
        }

        form .gender-details .gender-title {
            font-size: 20px;
            font-weight: 500;
        }

        form .category {
            display: flex;
            width: 80%;
            margin: 14px 0;
            justify-content: space-between;
        }

        form .category label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        form .category label .dot {
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }

        #dot-1:checked~.category label .one,
        #dot-2:checked~.category label .two,
        #dot-3:checked~.category label .three {
            background: crimson;
            border-color: #d9d9d9;
        }

        form input[type="radio"] {
            display: none;
        }

        form .button {
            height: 45px;
            margin: 35px 0
        }

        form .button input {
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
            background: crimson;
            border-radius: 6px;
            border: 2px solid crimson;
            transition: all 0.3s ease;
        }

        form .button input:hover {
            /* transform: scale(0.99); */
            /* background: linear-gradient(-135deg, #71b7e6, #9b59b6); */
            color: crimson;
            background: none;
        }

        @media(max-width: 584px) {
            .body {
                height: 150vh;
            }

            .container {
                max-width: 100%;
                max-height: 920px;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: 100%;
            }

            form .category {
                width: 100%;
            }

            .content form .user-details {
                max-height: 300px;
                /* overflow-y: scroll; */
            }

            form .button {
                height: 45px;
                margin: 30px 0
            }

            .file-upload {
                margin-top: 50px;
            }

            /* .user-details::-webkit-scrollbar{
    width: 5px;
  } */
        }

        @media(max-width: 459px) {
            .container .content .category {
                flex-direction: column;
            }
        }

        /* Upload File */
        .body1 {
            width: 70%;
            margin: 20px auto;
        }

        .file-upload .file-upload-select {
            display: block;
            color: #1a242f;
            cursor: pointer;
            text-align: left;
            background: #dbdbdb;
            overflow: hidden;
            position: relative;
            border-radius: 6px;
        }

        .file-upload .file-upload-select .file-select-button {
            /* background: crimson; */
            background: #979797;
            color: black;
            padding: 10px;
            display: inline-block;
        }

        .file-upload .file-upload-select .file-select-name {
            display: inline-block;
            padding: 10px;
        }

        .file-upload .file-upload-select:hover .file-select-button {
            background: #000000;
            color: #ffffff;
            transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
        }

        .file-upload .file-upload-select input[type="file"] {
            display: none;
        }
    </style>
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    @include("Artist.Mark Smith.sideNavbar")

    <div class="main-content">
        @include("Artist.Mark Smith.topNavbar")
        
        <div class="body">
            <div class="container">
                <div class="title">Edit Profile</div>
                <div class="content">
                    <form action="#">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Email</span>
                                <input type="text" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Contact Number</span>
                                <input type="text" placeholder="Enter your contact number" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Specialization</span>
                                <input type="text" placeholder="Enter your domain" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Social Media Link</span>
                                <input type="number" placeholder="Enter your social media links" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Years of Experience</span>
                                <input type="text" placeholder="Enter years of experience" required>
                            </div>
                            <!-- <div class="input-box">
                                <span class="details">Orientation</span>
                                <input type="text" placeholder="Landscape/Potrait/Square" required>
                            </div> -->
                            
                            <div class="input-box1">
                                <span class="details">Artist Story / Bio </span>
                                <input type="text" placeholder="Enter the story behind your artwork" required>
                            </div>
                            
                            <!-- <textarea rows="4" cols="50" name="comment" form="usrform"></textarea> -->

                        </div>



                        <div class="body1">
                            <div class="file-upload">
                                <div class="file-upload-select">
                                    <div class="file-select-button">Choose File</div>
                                    <div class="file-select-name">No file chosen...</div>
                                    <input type="file" name="file-upload-input" id="file-upload-input">
                                </div>
                            </div>
                        </div>

                        <div class="button">
                            <input type="submit" value="Update">
                        </div>


                    </form>
                </div>
            </div>
        </div>
        

    </div>
    <script>
        let fileInput = document.getElementById("file-upload-input");
        let fileSelect = document.getElementsByClassName("file-upload-select")[0];
        fileSelect.onclick = function() {
            fileInput.click();
        }
        fileInput.onchange = function() {
            let filename = fileInput.files[0].name;
            let selectName = document.getElementsByClassName("file-select-name")[0];
            selectName.innerText = filename;
        }
    </script>
</body>

</html>