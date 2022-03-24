<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>TrueArt | Artist List</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/Admin/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/table1.css')}}">
    <link rel="stylesheet" href="{{asset('css/Admin/cards.css')}}">
    <!-- <link rel="stylesheet" href="table.css"> -->



    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    @include("partials.adminSidebar")
    <section class="home-section">
        @include("partials.adminNavbar")
{{--        <x-adminNavbar :page="$page"></x-adminNavbar>--}}

        <div class="home-content">
            @yield('adminContent')
        </div>
    </section>

    <script src="{{asset('js/sideNavBtn.js')}}"></script>

</body>

</html>
