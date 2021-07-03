<?php use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backed\AdminProfileController;
use App\Http\Controllers\Backed\CountryController;
use App\Http\Controllers\Backed\CityController;
use App\Http\Controllers\Backed\SCBettingController;
use App\Http\Controllers\PhoneAuthController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\BetOnColorController;

use App\Http\Controllers\NotificationController;


Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);


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











Route::get('/', function () {
        return view('welcome');
    }

);

// admin area

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function() {
        Route::get('/login', [AdminController::class, 'loginForm'])->name('admin_login');
        Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
    }

);
/*------------------------ admin login*/
route::get("/admin/logout", [AdminController::class, 'destroy'])->name('admin.logout');
/*------------------------ admin logout*/



/*------------------------ admin profile--------------------------------------------------*/
route::get("/admin/profile", [AdminProfileController::class, 'index'])->name('admin.profile');
route::post("/admin/change_password", [AdminProfileController::class, 'change_password'])->name('change.password');
route::post("/admin/update_user", [AdminProfileController::class, 'create'])->name('update.username');
route::post("/admin/update_image", [AdminProfileController::class, 'edit'])->name('image.update');
/*------------------------ admin Profile End --------------------------------------------*/



/*------------------------ admin State--------------------------------------------------*/

Route::prefix('admin/state')->group(function() {
        route::get("/", [CountryController::class, 'index'])->name('admin.state');
        route::post("/create", [CountryController::class, 'create'])->name('state.create');
        route::get("/edit_state/{id}", [CountryController::class, 'store']);
        route::put("/update", [CountryController::class, 'show']);
        route::DELETE("/delete/{id}", [CountryController::class, 'destroy']);
    }

);

/*------------------------ admin State--------------------------------------------------*/

/*------------------------ admin City--------------------------------------------------*/

Route::prefix('admin/city')->group(function() {
        route::get("/", [CityController::class, 'index'])->name('admin.city');

        route::post("/create", [CityController::class, 'create'])->name('city.create');
        route::get("/edit/{id}", [CityController::class, 'store']);
        route::put("/update", [CityController::class, 'show']);
        route::DELETE("/delete/{id}", [CityController::class, 'destroy']);

    }

);

/*------------------------ admin City--------------------------------------------------*/

/*------------------------ Sevel Color Betting--------------------------------------------------*/

Route::prefix('sevenColor/betting')->group(function() {
        route::get("/", [SCBettingController::class, 'index'])->name('admin.betting');

        route::post("/create", [SCBettingController::class, 'create'])->name('newBedding.create');
        route::get("/view", [SCBettingController::class, 'show'])->name('admin.betting.view');
        route::get("/active/{id}", [SCBettingController::class, 'store']);
       route::get("/edit/{id}", [SCBettingController::class, 'edit']);
       route::delete("/delete/{id}",[SCBettingController::class, 'destroy']);
       route::post("/update", [SCBettingController::class, 'update'])->name('upadteBedding.create');
    }

);

/*------------------------ Sevel color Betting end--------------------------------------------------*/


/*------------------------ User Profile--------------------------------------------------*/
route::get("/profile/{id}", [UserProfileController::class, 'create']);
route::get("/profile/state/{id}", [CountryController::class, 'user_store']);

route::get("/profile/city/{id}", [CityController::class, 'user_store']);

route::post("profile/update", [UserProfileController::class, 'index'])->name('profile.update');
route::post("profile/update/pst", [UserProfileController::class, 'store'])->name('profile.upgrade');


/*------------------------ User Profile--------------------------------------------------*/
route::post('bet',[BetOnColorController::class,'index'])->name('bet_user');


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin/admin_dashboard');
    }

)->name('admin.dashboard');

// admin area end
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
        return view('dashboard');
    }

)->name('dashboard');


route::get('play/game',[SCBettingController::class, 'play']);
route::get('/time/{id}',[BetOnColorController::class, 'create']);
route::get('/hgfdsadf',[BetOnColorController::class, 'show']);


route::view('notification',"notification")->name('show.notification');