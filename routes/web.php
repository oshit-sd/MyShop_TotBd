<?php

Route::get('/', function () {
    return view('home.index');
});
Route::get('/BackVoucher', function () {
    return view('checkout.index');
});


Route::get('/MyShop', 'PublicHomeController@index');
Route::get('/Featured', 'PublicHomeController@Featured');
Route::get('/New', 'PublicHomeController@NewPro');
Route::get('/Popular', 'PublicHomeController@PopularPro');



Route::get('/Products/{id}/{cate}', 'ProductDetailsController@index');

Route::post('/AddShopCart/{id}', 'ShopCartController@store');
Route::get('/EditProduct/{id}', 'ShopCartController@EditProduct');
Route::post('/UpdateShopCart/{id}', 'ShopCartController@update');
Route::get('/RemoveProduct/{id}', 'ShopCartController@RemoveProduct');
Route::get('/checkoutStep1', 'ShopCartController@CheckoutStep1');


Route::get('/Shop', 'NavbarToShopController@ShopNow');
Route::get('/ItemProduct/{item}', 'NavbarToShopController@AllItemProduct');
Route::get('/CategoryProduct/{cate}', 'NavbarToShopController@AllCategoryProduct');


Route::get('/About-Us', 'AboutUsController@AboutUs');

Route::get('/Contact-Us', 'ContactUsController@ContactUs');
Route::post('/Send_message', function () {
    return view('contactus.send_message');
});

Route::get('/Search', 'SearchController@SearchPro');
Route::post('/SearchResult', 'SearchController@SearchResult');


Route::get('/ThisIsSecureRegForLogin', 'Auth\RegisterController@check' );
Route::post('/regFormForLoginTODashboard', 'Auth\RegisterController@regForm' );
Route::get('/regFormForLoginTODashboard', 'Auth\RegisterController@check' );
Route::post('/CreateUser', 'Auth\RegisterController@CreateUser');


Route::post('/CheckUser', 'CheckoutController@CheckUser');




Auth::routes();
/*Users FB And Google+ Login*/
Route::get('auth/facebook', ['as' => 'auth/facebook','uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback', ['as' => 'auth/facebook/callback','uses' => 'Auth\LoginController@handleProviderCallback']);

Route::get('auth/google', ['as' => 'auth/google','uses' => 'Auth\LoginController@redirectToGoogle']);
Route::get('auth/google/callback', ['as' => 'auth/google/callback','uses' => 'Auth\LoginController@handleGoogleCallback']);


/*User Home*/
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/MyOrders', 'MyShopUsersController@MyOrders');

Route::get('/checkoutStep2', 'CheckoutController@CheckoutStep2');
Route::post('/ShippingInfo', 'CheckoutController@ShippingInfo');

Route::get('/checkoutStep3', 'CheckoutController@CheckoutStep3');
Route::post('/PaymentInfo', 'CheckoutController@PaymentInfo');

Route::get('/checkoutStep4', 'CheckoutController@CheckoutStep4');
Route::get('/Voucher', 'CheckoutController@Voucher');






//Admin Panel
/*Admin Login*/
Route::prefix('admin')->group(function () {
    Route::get('/ThisIsSecureForLoginToDashboard', 'Auth\AdminLoginController@ShowLoginForm')
    ->name('admin.ThisIsSecureForLoginToDashboard');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

/*Show Users*/
Route::resource('Users', 'CreateUserController');


/*Add Item Info*/
Route::post('/Item/{id}', 'ItemController@update');
Route::resource('Item', 'ItemController');


/*Add Brand Info*/
Route::post('/Brand/{id}', 'BrandsController@update');
Route::resource('Brand', 'BrandsController');


/*Add Category Info*/
Route::post('/Category/{id}', 'CategoryController@update');
Route::resource('Category', 'CategoryController');


/*Add Slider Image*/
Route::post('/Slider/{id}', 'SliderController@update');
Route::resource('Slider', 'SliderController');


/*Add Product Info*/
Route::any('/SearchProduct', 'ProductController@SearchProduct');

Route::get('/CreateProduct',array('as'=>'CreateProduct', 'uses' => 'ProductController@create'));
Route::get('/CreateProduct/ajax/{id}',array('as' =>'CreateProduct.ajax', 'uses' => 'ProductController@createAjax'));


Route::post('/Product/{id}', 'ProductController@update');
Route::get('/Next', 'ProductController@next');
Route::resource('Product', 'ProductController');

Route::get('/DFeatured/{id}', 'ProductController@DeleteFeatured');
Route::get('/DNew/{id}', 'ProductController@DeleteNew');
Route::get('/DPopu/{id}', 'ProductController@DeletePopu');



// PendingOrders
Route::get('/PendingOrders', 'PendingOrdersController@PendingOrders');

Route::get('/CustomerInfo/{id}/{ses}', 'PendingOrdersController@View');


/*Confirm Oders*/
Route::get('/ConfirmOrders', 'PendingOrdersController@ConOrders');

Route::get('/ConfirmOrder/{id}/{ses}', 'PendingOrdersController@ConfirmOrder');

Route::get('/DeleteOrder/{id}/{ses}', 'PendingOrdersController@DeleteOrder');






