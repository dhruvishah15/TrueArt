<?php 
use App\Http\Controllers\PaintingInfoController;
$total = PaintingInfoController::CartItem();
?>
<nav class="navbar">
    <div class="max-width">
        <div class="logo">
            <a href="/TrueArt-Website/index.php#home">True<span>Art.</span></a>
            <!-- <a href="index.php"><img src="../images/l2.png" alt="Logo"></a> -->
        </div>
        <ul class="menu">
            <li><a href="/" class="menu-btn">Home</a></li>
            <li><a href="/artworks" class="menu-btn">Artworks</a></li>
            <li><a href="/artists" class="menu-btn">Artists</a></li>
            <li><a href="/live" class="menu-btn">Live</a></li>
            @if(Session::has('login'))
            <li><a href="/aboutUs" class="menu-btn menu-icon" style="margin-right: 200px;">About Us</a></li>
            <li style="color: #fff;">{{ session('login') }}</li>
            <li><a href="/cart" class="menu-btn" id="icon_3"><i class="fas fa-shopping-cart icon"> ({{ $total }})</i></a></li>
            <li><a href="/logout" class="menu-btn" id="icon_4"><i class="fas fa-sign-out-alt icon"></i></a></li>
            @else
            <li><a href="/aboutUs" class="menu-btn menu-icon" style="margin-right: 420px;">About Us</a></li>
            <li><a href="/login" class="menu-btn" id="icon_2"><i class="fas fa-sign-in-alt icon"></i></a></li>
            @endif
        </ul>
        <div class="menu-btn bar">
            <i class="fas fa-bars"></i>
        </div>
    </div>
</nav>
