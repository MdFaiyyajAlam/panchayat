<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admin\AdminLoginController;
// use App\Http\Controllers\Admin\GeneralSettingsController;

// Route::fallback(function(){
//     return view('404');
// });

// Admin Routes
Route::name('admin.')->middleware('guest:admin')->group(function () {
    Route::get('/', [AdminLoginController::class, 'create'])->name('loginForm');
    Route::post('/login', [AdminLoginController::class, 'store'])->name('login');

    // password
    Route::name('password.')->group(function () {
        Route::get('/forgot-password', [App\Http\Controllers\Auth\Admin\PasswordResetLinkController::class, 'create'])->name('request');
        Route::post('/forgot-password', [App\Http\Controllers\Auth\Admin\PasswordResetLinkController::class, 'store'])->name('email');
        Route::get('/password-reset/{token}', [App\Http\Controllers\Auth\Admin\NewPasswordController::class, 'create'])->name('reset');
        Route::post('/password-reset', [App\Http\Controllers\Auth\Admin\NewPasswordController::class, 'store'])->name('update');
    });
});

Route::name('admin.')->middleware('auth:admin')->group(function(){
    // dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    // navigation
    Route::prefix('navigation')->name('navigation.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\NavigationController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\NavigationController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\NavigationController::class, 'store'])->name('store');
        // Route::get('/show/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'show'])->name('show');
        Route::get('/{type}/edit/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'edit'])->name('edit');
        Route::post('/update/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'update'])->name('update');
        Route::get('/status/{status}/{navigation}', [App\Http\Controllers\Admin\NavigationController::class, 'status'])->name('status');
    });
    // category
    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store');
        Route::get('/show/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('show');
        Route::get('/edit/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('delete');
        Route::get('/status/{status}/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'status'])->name('status');
    });
    // sub category
    Route::prefix('subcategories')->name('subcategory.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\SubcategoryController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\SubcategoryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\SubcategoryController::class, 'store'])->name('store');
        Route::get('/show/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'show'])->name('show');
        Route::get('/edit/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'update'])->name('update');
        Route::get('/delete/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'destroy'])->name('delete');
        Route::get('/status/{status}/{subcategory}', [App\Http\Controllers\Admin\SubcategoryController::class, 'status'])->name('status');
    });
    // post
    Route::prefix('post')->name('post.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('view');
        Route::get('/add-post', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('create');
        Route::get('/post-format', [App\Http\Controllers\Admin\PostController::class, 'postFormat'])->name('format');
        Route::post('/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('store');
        Route::get('/show/{post}', [App\Http\Controllers\Admin\PostController::class, 'show'])->name('show');
        Route::get('/edit/{post}', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('edit');
        Route::post('/update/{post}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('update');
        Route::post('/delete/{post}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('delete');
        Route::get('/status/{status}/{post}', [App\Http\Controllers\Admin\PostController::class, 'status'])->name('status');
        Route::get('/bulk-post-upload', [App\Http\Controllers\Admin\PostController::class, 'bulkPost'])->name('bulkPost');
        Route::post('/bulk-post-upload', [App\Http\Controllers\Admin\PostController::class, 'bulkPostUpload'])->name('bulkPostUpload');

    });
    // post gallery
    Route::prefix('post-gallery')->name('postGallery.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PostGalleryController::class, 'index'])->name('view');
        Route::get('/add-post', [App\Http\Controllers\Admin\PostGalleryController::class, 'create'])->name('create');
        Route::get('/post-format', [App\Http\Controllers\Admin\PostGalleryController::class, 'postFormat'])->name('format');
        Route::post('/store', [App\Http\Controllers\Admin\PostGalleryController::class, 'store'])->name('store');
        Route::get('/show/{postGallery}', [App\Http\Controllers\Admin\PostGalleryController::class, 'show'])->name('show');
        Route::get('/edit/{postGallery}', [App\Http\Controllers\Admin\PostGalleryController::class, 'edit'])->name('edit');
        Route::post('/update/{postGallery}', [App\Http\Controllers\Admin\PostGalleryController::class, 'update'])->name('update');
        Route::post('/delete/{postGallery}', [App\Http\Controllers\Admin\PostGalleryController::class, 'destroy'])->name('delete');

    });
    // widget
    Route::prefix('widget')->name('widget.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\WidgetController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\WidgetController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\WidgetController::class, 'store'])->name('store');
        Route::get('/show/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'show'])->name('show');
        Route::get('/edit/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'edit'])->name('edit');
        Route::post('/update/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'update'])->name('update');
        Route::post('/delete/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'delete'])->name('delete');
        Route::get('/status/{status/{widget}', [App\Http\Controllers\Admin\WidgetController::class, 'status'])->name('status');
    });
    // poll
    Route::prefix('poll')->name('poll.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PollController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\PollController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\PollController::class, 'store'])->name('store');
        Route::get('/show/{poll}', [App\Http\Controllers\Admin\PollController::class, 'show'])->name('show');
        Route::get('/edit/{poll}', [App\Http\Controllers\Admin\PollController::class, 'edit'])->name('edit');
        Route::post('/update/{poll}', [App\Http\Controllers\Admin\PollController::class, 'update'])->name('update');
        Route::post('/delete/{poll}', [App\Http\Controllers\Admin\PollController::class, 'delete'])->name('delete');
        Route::get('/status/{status/{poll}', [App\Http\Controllers\Admin\PollController::class, 'status'])->name('status');
    });
    // gallery
    Route::prefix('gallery')->name('gallery.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\GalleryController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('store');
        Route::get('/show/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'show'])->name('show');
        Route::get('/edit/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'edit'])->name('edit');
        Route::post('/update/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'update'])->name('update');
        Route::post('/delete/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'delete'])->name('delete');
        Route::get('/status/{status/{gallery}', [App\Http\Controllers\Admin\GalleryController::class, 'status'])->name('status');
    });
    // contact-message
    Route::prefix('contact-message')->name('contactMessage.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\ContactMessageController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\ContactMessageController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\ContactMessageController::class, 'store'])->name('store');
        Route::get('/show/{contactMessage}', [App\Http\Controllers\Admin\ContactMessageController::class, 'show'])->name('show');
        Route::get('/edit/{contactMessage}', [App\Http\Controllers\Admin\ContactMessageController::class, 'edit'])->name('edit');
        Route::post('/update/{contactMessage}', [App\Http\Controllers\Admin\ContactMessageController::class, 'update'])->name('update');
        Route::post('/delete/{contactMessage}', [App\Http\Controllers\Admin\ContactMessageController::class, 'delete'])->name('delete');
        Route::get('/status/{status/{contactMessage}', [App\Http\Controllers\Admin\ContactMessageController::class, 'status'])->name('status');
    });
    // comment
    Route::prefix('comment')->name('comment.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\CommentController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\CommentController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\CommentController::class, 'store'])->name('store');
        Route::get('/show/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'show'])->name('show');
        Route::get('/edit/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'edit'])->name('edit');
        Route::post('/update/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'update'])->name('update');
        Route::post('/delete/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'delete'])->name('delete');
        Route::get('/status/{status/{comment}', [App\Http\Controllers\Admin\CommentController::class, 'status'])->name('status');
    });
    // newsletter
    Route::prefix('newsletter')->name('newsletter.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\NewsletterController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\NewsletterController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\CommentController::class, 'store'])->name('store');
        Route::get('/show/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'show'])->name('show');
        Route::get('/edit/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'edit'])->name('edit');
        Route::post('/update/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'update'])->name('update');
        Route::post('/delete/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'delete'])->name('delete');
        Route::get('/status/{status/{newsletter}', [App\Http\Controllers\Admin\NewsletterController::class, 'status'])->name('status');
    });
    // role-permission
    Route::prefix('roles-permissions')->name('rolePermission.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\CommentController::class, 'index'])->name('view');
        Route::get('/create', [App\Http\Controllers\Admin\CommentController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\CommentController::class, 'store'])->name('store');
        Route::get('/show/{rolePermission}', [App\Http\Controllers\Admin\CommentController::class, 'show'])->name('show');
        Route::get('/edit/{rolePermission}', [App\Http\Controllers\Admin\CommentController::class, 'edit'])->name('edit');
        Route::post('/update/{rolePermission}', [App\Http\Controllers\Admin\CommentController::class, 'update'])->name('update');
        Route::post('/delete/{rolePermission}', [App\Http\Controllers\Admin\CommentController::class, 'delete'])->name('delete');
        Route::get('/status/{status/{rolePermission}', [App\Http\Controllers\Admin\CommentController::class, 'status'])->name('status');
    });

    /// settings controller route

    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/',[App\Http\Controllers\Admin\GeneralSettingController::class, 'index'])->name('index');
        Route::get('/create',[App\Http\Controllers\Admin\GeneralSettingController::class, 'create'])->name('create');
        Route::post('/store',[App\Http\Controllers\Admin\GeneralSettingController::class, 'store'])->name('store');

        // contact settings

        Route::post('/contact',[App\Http\Controllers\Admin\ContactSettingsController::class, 'store'])->name('store.contact');

        // Social Media Settings

        Route::post('/social-media-settings',[App\Http\Controllers\Admin\SocialMediaSettingsController::class, 'store'])->name('store.social');
        // Facebook Comments Plugin Code
        Route::post('/Facebook-Comments-Plugin-Code',[App\Http\Controllers\Admin\FacebookCommentsSettingsController::class, 'store'])->name('store.facebook.cps');
        // Show Cookies warning route
        Route::post('/cookies-warning',[App\Http\Controllers\Admin\CookiesWarnigSettingsController::class, 'store'])->name('store.cookies.warning');
        //custom css
        Route::post('/custom-css',[App\Http\Controllers\Admin\CustomCSSSettingsController::class, 'store'])->name('store.custom.css');
       // custom javascript
        Route::post('/custom-JavaScript',[App\Http\Controllers\Admin\CustomJsCodesController::class, 'store'])->name('store.custom.js');
        // google \
        Route::post('/GoogleReCAPTCHA',[App\Http\Controllers\Admin\GoogleReCAPTCHAController::class, 'store'])->name('store.GoogleReCAPTCHA');
       // maintenanceMode
        Route::post('/MaintenanceMode',[App\Http\Controllers\Admin\MaintenanceModeController::class, 'store'])->name('store.MaintenanceMode');


        // Language  Settings
        Route::get('/language-settings',[App\Http\Controllers\Admin\LanguageSettingController::class, 'index'])->name('language');
        Route::post('/language-settings',[App\Http\Controllers\Admin\LanguageSettingController::class, 'store'])->name('store.language');

        // edit language
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\LanguageSettingController::class, 'edit'])->name('edit.language');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\LanguageSettingController::class, 'update'])->name('update.language');
        // delete language
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\LanguageSettingController::class, 'destroy'])->name('delete.language');

        // font settings
        Route::get('/font-settings',[App\Http\Controllers\Admin\FontSettingController::class,'index'])->name('font');
        Route::post('/font-settings',[App\Http\Controllers\Admin\FontSettingController::class,'store'])->name('store.font');

        // site font settings
        Route::post('/site-font-settings',[App\Http\Controllers\Admin\SiteFontSettingController::class,'store'])->name('site.font');


        // edit font
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\FontSettingController::class, 'edit'])->name('edit.font');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\FontSettingController::class, 'update'])->name('update.font');
        // delete language
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\FontSettingController::class, 'destroy'])->name('delete.font');
    });


    Route::post('/logout', [AdminLoginController::class, 'destroy'])->name('logout');
});
