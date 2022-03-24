{{--    @php--}}
{{--        $name = $page;--}}
{{--        if (empty($name)) {--}}
{{--            header('location:index.php?page=dashboard');--}}
{{--        }--}}
{{--        if ($name == 'dashboard') {--}}
{{--            $show = "Dashboard";--}}
{{--        } elseif ($name == 'artist') {--}}
{{--            $show = "Artist List";--}}
{{--        } elseif ($name == 'user') {--}}
{{--            $show = "Users List";--}}
{{--        } elseif ($name == 'report_art') {--}}
{{--            $show = "Reported Artists";--}}
{{--        } elseif ($name == "report_user") {--}}
{{--            $show = "Reported Users";--}}
{{--        } elseif ($name == "req") {--}}
{{--            $show = "Artist Req.";--}}
{{--        }--}}
{{--    @endphp--}}

    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">@yield('name')</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search'></i>
        </div>
        <div class="profile-details">
            <img src="{{asset('images/profile.jpg')}}" alt="">
            <span class="admin_name">Admin</span>
            <i class='bx bx-chevron-down'></i>
        </div>
    </nav>
