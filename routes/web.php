<?php


/*  shows home page   */
Route::get('/', function () {
    return view('index');
});
/*  shows home page   */
Route::get('/index', function () {
    return view('index');
});


/*  shows wishlist page   */
Route::get('/wishlist', function () {
    return view('wishlist');
});


/*  shows checkout page   */
Route::get('/checkout', function () {
    return view('checkout');
});


/*  shows category page   */
Route::get('/category', function () {
    return view('category');
});


/*  shows product page   */
Route::get('/product', function () {
    return view('product');
});


// /*  shows login page   */
// Route::get('/login', function () {
//     return view('login');
// });


// /*  shows register page   */
// Route::get('/register', function () {
//     return view('register');
// });


/*  shows cart page   */
Route::get('/cart', function () {
    return view('cart');
});


/*  shows compare page   */
Route::get('/compare', function () {
    return view('compare');
});

/*  shows search page   */
Route::get('/search', function () {
    return view('search');
});


/*  shows about us page   */
Route::get('/about-us', function () {
    return view('about-us');
});

/*  shows contact us page   */
Route::get('/contact-us', function () {
    return view('contact-us');
});


/*  shows sitemap page   */
Route::get('/sitemap', function () {
    return view('sitemap');
});


/*  shows faq  page   */
Route::get('/faq', function () {
    return view('faq');
});

/*  shows sitemap  page   */
Route::get('/sitemap', function () {
    return view('sitemap');
});


/*  shows privatePolicy  page   */
Route::get('/privatePolicy', function () {
    return view('privatePolicy');
});




// /*  creating new user so go to UsersController and call register method */
// Route::post('/createNewUser', 'UsersController@register')->name('createNewUser');


// /* Go to login method of UsersController */
// Route::post('/userLogin', 'UsersController@login')->name('userLogin');


// /* Go to Profile page */
// Route::get('/profile', function () {
//     return view('profile');
// });


// /* Go to resetPassword page */
// Route::get('/resetPassword', function () {
//     return view('resetPassword');
// })->name('resetPassword');

// /* Go to login method of UsersController */
// Route::post('/resetPassMethod', 'UsersController@resetpassword')->name('resetPassMethod');






// //main routes
// Route::get('/deleteuser/{userid}', 'adminController@deleteUser')->name('deleteuser');

// Route::get('/edituser/{userid}', 'adminController@editUser')->name('edituser');

// Route::post('/updateuser/{userid}', 'adminController@updateUser')->name('updateuser');

// Route::get('/adduser', 'adminController@addUser')->name('adduser');
// Route::post('/createuser', 'adminController@createUser')->name('createuser');

//==================== New Routes ==================================//

//authentication routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* Go to admin panel */
Route::get('/admin', 'Admin\AdminsController@index')->name('admin');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', 'UsersController');
    Route::resource('products', 'ProductsController');
    Route::resource('categories', 'CategoriesController');
});
