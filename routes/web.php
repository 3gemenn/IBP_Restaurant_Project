<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AnnouncemetsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home/menu');
});

Route::get('/admin', function () {
    return redirect('/user/list');
});

Route::get('/chat/message', function () {
    return view('chat.message');
});




Route::get('/menu/list', [MenuController::class, 'list']);
Route::get('/user/list', [UsersController::class, 'list']);
Route::get('/comment/list', [CommentsController::class, 'list']);
Route::get('/message/list', [MessageController::class, 'list']);
Route::get('/slider/list', [SliderController::class, 'list']);
Route::get('/home/menu', [HomeController::class, 'list']);
//Route::get('/', [HomeController::class, 'list'])->name('list');;
Route::get('/announcement/list', [AnnouncemetsController::class, 'list']);

Route::get('/account/register', [AccountController::class, 'register']);
Route::post('/account/registerPost', [AccountController::class, 'registerPost'])->name('registerPost');
Route::get ("/account/profile/{id}",[AccountController::class,'profile']);
Route::post ("/userEdit",[AccountController::class,'userEdit'])            ->name('userEdit');
Route::get('/account/login', [AccountController::class, 'login']);
Route::post('/account/login_check', [AccountController::class, 'login_check'])->name('login_check');
Route::get('/logout', [AccountController::class, 'logout'])->name('logout');


//Menu
Route::get("/menu/list",[MenuController::class,'list'])               ->name('admin_menu');
Route::get("/menu/create",[MenuController::class,'create'])      ->name('admin_menu_create');
Route::post("/createMenu",[MenuController::class,'createMenu'])      ->name('createMenu');
Route::post("/menu/list/update/{id}",[MenuController::class,'update']) ->name('admin_menu_update');
Route::get("/menu/edit/{id}",[MenuController::class,'edit'])      ->name('admin_menu_edit');
Route::post("/editMenu",[MenuController::class,'editMenu'])      ->name('editMenu');
Route::get("/menu/list/delete/{id}",[MenuController::class,'destroy']) ->name('admin_menu_delete');
Route::get("/menu/list/show",[MenuController::class,'show'])           ->name('admin_menu_show');

//Comment
Route::get ("/comment/list",[CommentsController::class,'list'])                 ->name('admin_comment');
Route::get("/comment/create",[HomeController::class,'create'])       ->name('admin_comment_create');
Route::post("/createComment/{id}",[HomeController::class,'createComment'])       ->name('createComment');
Route::post("/comment/list/update/{id}",[CommentsController::class,'update'])  ->name('admin_comment_update');
Route::get ("/comment/edit/{id}",[CommentsController::class,'edit'])            ->name('admin_comment_edit');
Route::get ("/comment/list/delete/{id}",[CommentsController::class,'destroy'])  ->name('admin_comment_delete');
Route::get ("/comment/list/show",[CommentsController::class,'show'])            ->name('admin_comment_show');


//Message
Route::get ("/message/list",[MessageController::class,'list'])                 ->name('admin_message');
Route::get("/message/create/{id}/{messageId}",[MessageController::class,'create'])       ->name('admin_message_create');
Route::post ("/adminChatPost/{id}",[MessageController::class,'adminChatPost'])                ->name('adminChatPost');
Route::post("/message/list/update/{id}",[MessageController::class,'update'])  ->name('admin_message_update');
Route::get ("/message/edit/{id}",[MessageController::class,'edit'])            ->name('admin_message_edit');
Route::get ("/message/list/delete/{id}",[MessageController::class,'destroy'])  ->name('admin_message_delete');
Route::get ("/message/list/show",[MessageController::class,'show'])            ->name('admin_message_show');


//Slider
Route::get ("/slider/list",[SliderController::class,'list'])                 ->name('admin_slider');
Route::get("/slider /create",[SliderController::class,'create'])       ->name('admin_slider_create');
Route::post("/createSlider",[SliderController::class,'createSlider'])       ->name('createSlider');
Route::post("/slider/list/update/{id}",[SliderController::class,'update'])  ->name('admin_slider_update');
Route::get ("/slider/edit/{id}",[SliderController::class,'edit'])            ->name('admin_slider_edit');
Route::post ("/editSlider",[SliderController::class,'editSlider'])            ->name('editSlider');
Route::get ("/slider/list/delete/{id}",[SliderController::class,'destroy'])  ->name('admin_slider_delete');
Route::get ("/slider/list/show",[SliderController::class,'show'])            ->name('admin_slider_show');


//User
Route::get ("/,/list",[UsersController::class,'list'])                 ->name('admin_user');
Route::get("/user/create",[UsersController::class,'create'])       ->name('admin_user_create');
Route::post("/createUser",[UsersController::class,'createUser'])       ->name('createUser');
Route::post("/user/list/update/{id}",[UsersController::class,'update'])  ->name('admin_user_update');
Route::get ("/user/edit/{id}",[UsersController::class,'edit'])            ->name('admin_user_edit');
Route::post ("/editUser",[UsersController::class,'editUser'])            ->name('editUser');
Route::get ("/user/list/delete/{id}",[UsersController::class,'destroy'])  ->name('admin_user_delete');
Route::get ("/user/list/show",[UsersController::class,'show'])            ->name('admin_user_show');

//Announcement
Route::get ("/announcement/list",[AnnouncemetsController::class,'list'])                ->name('admin_announcement');
Route::get("/announcement/create",[AnnouncemetsController::class,'create'])       ->name('admin_announcement_create');
Route::post("/createAnnouncement",[AnnouncemetsController::class,'createAnnouncement'])       ->name('createAnnouncement');
Route::post("/announcement/list/update/{id}",[AnnouncemetsController::class,'update'])  ->name('admin_announcement_update');
Route::get ("/announcement/edit/{id}",[AnnouncemetsController::class,'edit'])           ->name('admin_announcement_edit');
Route::post ("/editAnnouncement",[AnnouncemetsController::class,'editAnnouncement'])           ->name('editAnnouncement');
Route::get ("/announcement/list/delete/{id}",[AnnouncemetsController::class,'destroy']) ->name('admin_announcement_delete');
Route::get ("/announcement/list/show",[AnnouncemetsController::class,'show'])           ->name('admin_announcement_show');

//Chat
Route::post ("/chatPost",[HomeController::class,'chatPost'])                ->name('chatPost');
Route::get ("/chat/message",[HomeController::class,'chats'])                ->name('chats,');




//Route::get('/account/login', [HomeController::class, 'list']);



