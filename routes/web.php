<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Back\ProfileWebController;
use App\Http\Controllers\Back\AchievementController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\ProjectController;
use App\Http\Controllers\Back\TeamController;
// use App\Http\Controllers\Back\DivisionController;
// use App\Http\Controllers\Back\SubDivisionController;
use App\Http\Controllers\Back\EventController;
use App\Http\Controllers\Back\BannerController;
use App\Http\Controllers\Back\ContactController;
use App\Http\Controllers\Back\RoleController;
use App\Http\Controllers\Back\PermissionController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class,'home'])->name('home');
Route::get('profile', [FrontController::class,'profile'])->name('profile');
Route::get('member', [FrontController::class,'member'])->name('member');
Route::get('project', [FrontController::class,'project'])->name('project');
Route::get('event', [FrontController::class,'event'])->name('event');
Route::get('achievement', [FrontController::class,'achievement'])->name('achievement');
Route::get('contact', [FrontController::class,'contact'])->name('contact');
Route::get('reload-captcha', [FrontController::class, 'reloadCaptcha']);

Route::post('contact-store', [FrontController::class,'storeContact'])->name('contact.store');

Route::group(['middleware' => ['guest']], function () {

Route::resource('login', LoginController::class);
});
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('profile', [LoginController::class, 'profile'])->name('profile');
    Route::post('profile/update/{user}', [LoginController::class, 'profileUpdate'])->name('profile.update');
    Route::post('profile/check-profile-username', [LoginController::class, 'checkProfileUsername'])->name('checkProfileUsername');
    Route::post('profile/check-profile-email', [LoginController::class, 'checkProfileEmail'])->name('checkProfileEmail');


    Route::resource('dashboard', DashboardController::class);

    Route::resource('achievements', AchievementController::class);
    Route::post('product/destroy-all', [AchievementController::class, 'destroyAll'])->name('achievements.destroyAll');
    Route::post('achievement/check-achievement-name', [AchievementController::class, 'checkAchievementName'])->name('checkAchievementName');
    Route::post('achievement/search-achievement', [AchievementController::class, 'achievementSearch'])->name('achievementSearch');
    Route::post('achievement/pagination', [AchievementController::class, 'achievementPagination'])->name('achievementPagination');

    Route::resource('profile-web', ProfileWebController::class);

    Route::resource('products', ProductController::class);
    Route::post('products/destroy-all', [ProductController::class, 'destroyAll'])->name('products.destroyAll');
    Route::post('products/check-product-name', [ProductController::class, 'checkProductName'])->name('checkProductName');
    Route::post('product/search-product', [ProductController::class, 'productSearch'])->name('productSearch');
    Route::post('product/pagination', [ProductController::class, 'productPagination'])->name('productPagination');

    Route::resource('projects', ProjectController::class);
    Route::post('projects/destroy-all', [ProjectController::class, 'destroyAll'])->name('projects.destroyAll');
    Route::post('projects/check-project-name', [ProjectController::class, 'checkProjectName'])->name('checkProjectName');
    Route::post('project/search-project', [ProjectController::class, 'searchProject'])->name('searchProject');
    Route::post('project/pagination', [ProjectController::class, 'projectPagination'])->name('projectPagination');

    Route::resource('teams', TeamController::class);
    Route::post('teams/destroy-all', [TeamController::class, 'destroyAll'])->name('teams.destroyAll');

    // Route::resource('divisions', DivisionController::class);
    // Route::post('divisions/destroy-all', [DivisionController::class, 'destroyAll'])->name('divisions.destroyAll');
    // Route::post('divisions/check-division-name', [DivisionController::class, 'checkDivisionName'])->name('checkDivisionName');

    // Route::resource('sub-divisions', SubDivisionController::class);
    // Route::post('sub-divisions/destroy-all', [SubDivisionController::class, 'destroyAll'])->name('sub-divisions.destroyAll');
    // Route::post('sub-divisions/check-sub-division-name', [SubDivisionController::class, 'checkSubDivisionName'])->name('checkSubDivisionName');

    Route::resource('events', EventController::class);
    Route::post('events/destroy-all', [EventController::class, 'destroyAll'])->name('events.destroyAll');
    Route::post('events/check-event-name', [EventController::class, 'checkEventName'])->name('checkEventName');
    Route::post('event/search-event', [EventController::class, 'eventSearch'])->name('eventSearch');
    Route::post('event/pagination', [EventController::class, 'eventPagination'])->name('eventPagination');

    Route::resource('banners', BannerController::class);
    Route::post('banners/destroy-all', [BannerController::class, 'destroyAll'])->name('banners.destroyAll');

    Route::get('/contacts',[ContactController::class, 'index'])->name('contacts.index');
    Route::delete('/contacts/{id}',[ContactController::class, 'destroy'])->name('contacts.destroy');

    // Route::resource('roles', RoleController::class);
    // Route::post('roles/destroy-all', [RoleController::class, 'destroyAll'])->name('roles.destroyAll');
    // Route::post('roles/check-roles-name', [RoleController::class, 'checkRoleName'])->name('checkRoleName');

    // Route::resource('permissions', PermissionController::class);
    // Route::post('permissions/destroy-all', [PermissionController::class, 'destroyAll'])->name('permissions.destroyAll');
    // Route::post('permissions/check-permission-name', [PermissionController::class, 'checkPermissionName'])->name('checkPermissionName');

});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
