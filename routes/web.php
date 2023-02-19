<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderControlller;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\DataController;
use App\Http\Controllers\Home\BlogController;
use App\Http\Controllers\Home\CategoryController;
use App\Http\Controllers\Home\FooterController;
use App\Http\Controllers\Home\ContactController;
use App\Http\Controllers\Home\GalleyController;
use App\Http\Controllers\Home\TestimonialController;
use App\Models\Testimonial;
use GuzzleHttp\Middleware;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });
//Admin All Route
Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/change/password', 'ChangePassword')->name('change.password')
            ->middleware('auth');
        Route::post('/update/password', 'UpdatePassword')->name('update.password');
    });
});
Route::controller(HomeSliderControlller::class)->group(function () {
    Route::get('/home/side', 'HomeSlider')->name('home.side')->middleware(['auth']);
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
    Route::get('/', 'HomeMain')->name('home');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/update/about', 'UpdateAbout')->name('update.about');
    Route::get('/about', 'HomeAbout')->name('home.about')->middleware(['auth']);
    Route::get('/about/multi/logo', 'AboutMultiLogo')->name('about.multi.logo')->middleware(['auth']);
    Route::post('/store/multiimage', 'StoreMultiImage')->name('store.multilogo');
    Route::get('/all/multi/image', 'AllMultiImage')->name('all.multi.image')->middleware(['auth']);
    Route::get('/edit/multi/image/{id}', 'EditMultiImage')->name('edit.multi.image');
    Route::post('/update/multi/image/', 'UpdatetMultiImage')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'DeleteMultiImage')->name('delete.multi.image');
});
Route::controller(DataController::class)->group(function () {
    Route::get('/all/data', 'AllData')->name('all.data')->middleware(['auth']);
    Route::get('/add/data', 'AddData')->name('add.data');
    Route::post('/store/dataform', 'StoreDataform')->name('store.dataform');
    Route::get('/edit/data/{id}', 'Editdata')->name('edit.data');
    Route::post('/update/data', 'UpdateData')->name('update.data');
    Route::get('/delete/data/{id}', 'DeleteData')->name('delete.data');
});
Route::controller(BlogController::class)->group(function () {
    Route::get('/all/blog', 'AllBlog')->name('all.blog')->middleware(['auth']);
    Route::get('/blog/add', 'BlogAdd')->name('blog.add');
    Route::post('/blog/store', 'BlogStore')->name('blog.store');
    Route::get('/blog/edit/{id}', 'BlogEdit')->name('blog.edit');
    Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
    Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');
    Route::get('/frontend/home_all/blog/', 'Blog')->name('frontend.home_all.blog');
    Route::get('/blog/details/{id}', 'BlogDetails')->name('blog.details');
});
Route::controller(CategoryController::class)->group(function () {
    Route::get('/all/category', 'AllCategory')->name('all.category')->middleware(['auth']);
    Route::get('/add/category', 'AddCategory')->name('add.category');
    Route::post('/store/blog', 'StoreBlog')->name('store.blog');
    Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
    Route::post('update/category/', 'UpdateCategory')->name('update.category');
    Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
});
Route::controller(FooterController::class)->group(function () {
    Route::get('/footer/setup', 'FooterSetup')->name('footer.setup')->middleware(['auth']);
    Route::post('/update/footer', 'UpdateFooter')->name('update.footer');
});
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact/me', 'ContactMe')->name('contact.me');
    Route::post('/store/message', 'StoreMessage')->name('store.message');
    Route::get('/contact/message', 'ContactMessage')->name('contact.message')->middleware(['auth']);
    Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    Route::get('/delete/message/{id}', 'DeleteMessage')->name('delete.message');
});
Route::controller(GalleyController::class)->group(function () {
    Route::get('/gallery/image', 'GalleryImage')->name('gallery.image');
    Route::get('/gallery/setup', 'GallerySetup')->name('gallery.setup')->middleware(['auth']);
    Route::get('/gallery/add', 'GalleryAdd')->name('gallery.add');
    Route::post('/gallery/store', 'GalleryStore')->name('gallery.store');
    Route::get('/gallery/edit/{id}', 'GalleryEdit')->name('gallery.edit');
    Route::post('/gallery/update', 'GalleryUpdate')->name('gallery.update');
    Route::get('/gallery/delete/{id}', 'GalleryDelete')->name('gallery.delete');
});
Route::controller(TestimonialController::class)->group(function () {
    Route::get('/testimonial/setup', 'TestimonialSetup')->name('testimonial.setup')->middleware(['auth']);
    Route::get('/testimonail/add', 'TestimonailAdd')->name('testimonail.add');
    Route::post('/testimonail/store', 'TestimonialStore')->name('testimonail.store');
    Route::get('/testimonial/edit/{id}', 'TestimonialEdit')->name('testimonial.edit');
    Route::post('/testimonial/update', 'TestimonialUpdate')->name('testimonial.update');
    Route::get('/testimonial/delete/{id}', 'TestimonialDelete')->name('testimonial.delete');
});
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
