<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PaintingInfoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User Routes

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', 
    [UserController::class,'exit']
);
Route::post('login', [UserController::class,'authenticate']);

Route::get('/registration', function () {
    return view('registration');
});
Route::post('/registration', [UserController::class,'store']);


Route::get('/artworks',[PaintingInfoController::class,'show']);

Route::get('cart',[PaintingInfoController::class,'cartList']);
Route::post('/cart', [PaintingInfoController::class,'addToCart']);

Route::get('removecart/{id}',[PaintingInfoController::class,'removeCart']);
Route::get('orderNow',[PaintingInfoController::class,'orderNow']);
Route::post('placeOrder',[PaintingInfoController::class,'placeOrder']);
Route::get('myOrders',[PaintingInfoController::class,'myOrders']);

Route::get('/live', function () {
    return view('User/live');
});

Route::get('/winnersOfPreviousEvents', function () {
    return view('User/winnersOfPreviousEvents');
});

Route::get('/aboutUs', function () {
    return view('User/aboutUs');
});
Route::get('/artists', function () {
    return view('User/artists');
});


Route::get('/artistRegistration', function () {
    return view('Artist/artistRegistration');
});
Route::post('/artistRegistration', [ArtistController::class,'store']);


// Mira Rai Artist Dashboard

Route::get('/Artist/Mira Rai/index',[PaintingInfoController::class,'artistOrders']);

// Route::get('/Artist/Mira Rai/contactAdmin', function () {
//     return view('Artist/Mira Rai/contactAdmin');
// });
// Route::get('/Artist/Mira Rai/editProfile', function () {
//     return view('/Artist/Mira Rai/editProfile');
// });
// Route::get('/Artist/Mira Rai/reportUser', function () {
//     return view('Artist/Mira Rai/reportUser');
// });
// Route::get('/Artist/Mira Rai/viewStatistics', function () {
//     return view('Artist/Mira Rai/viewStatistics');
// });

Route::get('/Artist/Mira Rai/uploadArtwork', function () {
    return view('Artist/Mira Rai/uploadArtwork');
});
Route::post('/Artist/Mira Rai/uploadArtwork', [PaintingInfoController::class,'store']);

Route::get('/Artist/Mira Rai/profilePage', function () {
    return view('Artist/Mira Rai/profilePage');
});

// Mark Smith Artist Dashboard

Route::get('/Artist/Mark Smith/index',[PaintingInfoController::class,'artistOrders']);

// Route::get('/Artist/Mark Smith/contactAdmin', function () {
//     return view('Artist/Mark Smith/contactAdmin');
// });
// Route::get('/Artist/Mark Smith/editProfile', function () {
//     return view('/Artist/Mark Smith/editProfile');
// });
// Route::get('/Artist/Mark Smith/reportUser', function () {
//     return view('Artist/Mark Smith/reportUser');
// });
// Route::get('/Artist/Mark Smith/viewStatistics', function () {
//     return view('Artist/Mark Smith/viewStatistics');
// });

Route::get('/Artist/Mark Smith/uploadArtwork', function () {
    return view('Artist/Mark Smith/uploadArtwork');
});
Route::post('/Artist/Mark Smith/uploadArtwork', [PaintingInfoController::class,'store']);

Route::get('/Artist/Mark Smith/profilePage', function () {
    return view('Artist/Mark Smith/profilePage');
});


//Admin Routes

Route::get('/admin/artist_list',[UserController::class,'showArtist']);

Route::get('/admin/artist_req',[ArtistController::class,'showArtistRequest']);

Route::get('/admin',function(){
    return view('Admin/index');
});

Route::get('admin/reported_artist',function(){
    return view('Admin/reported_artists');
});

Route::get('admin/reported_user',function(){
    return view('Admin/reported_users');
});

Route::get('admin/user_list',[UserController::class,'showUser']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('user', UserController::class);

Route::resource('artist', ArtistController::class);



