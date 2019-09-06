<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 
[
    'uses'=>'FrontEndController@home',
    'as'=>'home'
]);


Route::post('/order/store', [

    'uses' => 'OrdersController@store',
    'as' => 'order.store'
]);

Route::get('send' , 'MailController@send');

Auth::routes();

Route::get('/appointment/delete/{id}', 
    [
        'uses'=>'AppointmentsController@destroy',
        'as'=>'appointment.delete'
    ]);


    Route::get('/donation-eligibility', 
    [
        'uses'=>'FrontEndController@eligible',
        'as'=>'donation-eligibility'
    ]);

    Route::get('/hospitals', 
    [
        'uses'=>'FrontEndController@hospital',
        'as'=>'donation-hospital'
    ]);


    Route::get('/donation-overview', 
    [
        'uses'=>'FrontEndController@donation',
        'as'=>'donation-donation'
    ]);

    Route::get('/about-bloodcare', 
    [
        'uses'=>'FrontEndController@about',
        'as'=>'donation-about'
    ]);

Route::group(['prefix'=>'admin' , 'middleware'=>'auth'],function(){

    Route::get('/dashboard', 'HomeController@index')->name('home');

    
    Route::get('/user/profile', 
    [
        'uses'=>'ProfilesController@index',
        'as'=>'user.profile'
    ]);

    Route::post('/user/profile/update', 
    [
        'uses'=>'ProfilesController@update',
        'as'=>'user.profile.update'
    ]);
    Route::get('/users', 
    [
        'uses'=>'AdminController@index',
        'as'=>'users'
    ]);

    Route::get('/user/delete/{id}', 
    [
        'uses'=>'AdminController@destroy',
        'as'=>'user.delete'
    ]);


    Route::get('/user/admin/{id}', 
        [
        'uses'=>'AdminController@admin',
        'as'=>'user.admin'
        
    ]);

    Route::get('/user/not_admin/{id}', 
    [
        'uses'=>'AdminController@not_admin',
        'as'=>'user.not.admin'
    ]);



    Route::get('/donor/download', 
    [
        'uses'=>'DonorsController@export',
        'as'=>'donor.download'
    ]);
    Route::get('/donor', [

        'uses' => 'DonorsController@index',
        'as' => 'donor'
    ]);

    Route::get('/donor/create', [

        'uses' => 'DonorsController@create',
        'as' => 'donor.create'
    ]);

    Route::post('/donor/store', [

        'uses' => 'DonorsController@store',
        'as' => 'donors.store'
    ]);

    Route::get('/donor/edit/{id}', [

        'uses' => 'DonorsController@edit',
        'as' => 'donor.edit'
    ]);

    Route::post('/donor/update/{id}', 
    [
        'uses'=>'DonorsController@update',
        'as'=>'donor.update'
    ]);

    Route::get('/donor/delete/{id}', 
    [
        'uses'=>'DonorsController@destroy',
        'as'=>'donor.delete'
    ]);

    Route::get('/donor/trashed', 
    [
        'uses'=>'DonorsController@trash',
        'as'=>'donor.trash'
    ]);

    Route::get('/donor/kill/{id}', 
    [
        'uses'=>'DonorsController@kill',
        'as'=>'donor.kill'
    ]);

    Route::get('/donor/restore/{id}', 
    [
        'uses'=>'DonorsController@restore',
        'as'=>'donor.restore'
    ]);

    Route::get('/donor/admin/{id}', 
        [
        'uses'=>'DonorsController@donor',
        'as'=>'user.donor'
        
    ]);

    Route::get('/donor/not_admin/{id}', 
    [
        'uses'=>'DonorsController@not_donor',
        'as'=>'user.not.donor'
    ]);






    Route::get('/blood', [

        'uses' => 'BloodsController@index',
        'as' => 'blood'
    ]);

    Route::post('/blood/store', [

        'uses' => 'BloodsController@store',
        'as' => 'blood.store'
    ]);

    Route::get('/blood/create', [

        'uses' => 'BloodsController@create',
        'as' => 'blood.create'
    ]);

    Route::get('/blood/edit/{id}', [

        'uses' => 'BloodsController@edit',
        'as' => 'blood.edit'
    ]);

    Route::post('/blood/update/{id}', 
    [
        'uses'=>'BloodsController@update',
        'as'=>'blood.update'
    ]);

    Route::get('/blood/delete/{id}', 
    [
        'uses'=>'BloodsController@destroy',
        'as'=>'blood.delete'
    ]);






    Route::get('/status', [

        'uses' => 'StatusController@index',
        'as' => 'status'
    ]);

    Route::post('/status/store', [

        'uses' => 'StatusController@store',
        'as' => 'status.store'
    ]);

    Route::get('/status/create', [

        'uses' => 'StatusController@create',
        'as' => 'status.create'
    ]);

    Route::get('/status/edit/{id}', [

        'uses' => 'StatusController@edit',
        'as' => 'status.edit'
    ]);

    Route::post('/status/update/{id}', 
    [
        'uses'=>'StatusController@update',
        'as'=>'status.update'
    ]);

    Route::get('/status/delete/{id}', 
    [
        'uses'=>'StatusController@destroy',
        'as'=>'status.delete'
    ]);


    Route::get('/record/download', 
    [
        'uses'=>'RecordsController@export',
        'as'=>'record.download'
    ]);
    Route::get('/donation/record', [

        'uses' => 'RecordsController@index',
        'as' => 'record'
    ]);

    Route::post('/record/store', [

        'uses' => 'RecordsController@store',
        'as' => 'record.store'
    ]);

    Route::get('/record/create', [

        'uses' => 'RecordsController@create',
        'as' => 'record.create'
    ]);

    Route::get('/record/edit/{id}', [

        'uses' => 'RecordsController@edit',
        'as' => 'record.edit'
    ]);

    Route::post('/record/update/{id}', 
    [
        'uses'=>'RecordsController@update',
        'as'=>'record.update'
    ]);

    Route::get('/record/delete/{id}', 
    [
        'uses'=>'RecordsController@destroy',
        'as'=>'record.delete'
    ]);




    Route::get('/stock', [

        'uses' => 'StocksController@index',
        'as' => 'stocks'
    ]);

    Route::post('/stock/store', [

        'uses' => 'StocksController@store',
        'as' => 'stock.store'
    ]);

    Route::get('/stock/create', [

        'uses' => 'StocksController@create',
        'as' => 'stock.create'
    ]);

    Route::get('/stock/edit/{id}', [

        'uses' => 'StocksController@edit',
        'as' => 'stock.edit'
    ]);

    Route::post('/stock/update/{id}', 
    [
        'uses'=>'StocksController@update',
        'as'=>'stock.update'
    ]);

    Route::get('/stock/delete/{id}', 
    [
        'uses'=>'StocksController@destroy',
        'as'=>'stock.delete'
    ]);








    Route::get('/post/create', 
    [
        'uses'=>'PostController@create',
        'as'=>'post.create'
    ]);
    Route::post('/post/store', 
    [
        'uses'=>'PostController@store',
        'as'=>'post.store'
    ]);

    Route::get('/post/edit/{id}', 
    [
        'uses'=>'PostController@edit',
        'as'=>'post.edit'
    ]);

    Route::post('/post/update/{id}', 
    [
        'uses'=>'PostController@update',
        'as'=>'post.update'
    ]);

    Route::get('/post/delete/{id}', 
    [
        'uses'=>'PostController@destroy',
        'as'=>'post.delete'
    ]);

    Route::get('/posts', 
    [
        'uses'=>'PostController@index',
        'as'=>'posts'
    ]);






    Route::get('/about/create', 
    [
        'uses'=>'AboutController@create',
        'as'=>'about.create'
    ]);
    Route::post('/about/store', 
    [
        'uses'=>'AboutController@store',
        'as'=>'about.store'
    ]);

    Route::get('/about/edit/{id}', 
    [
        'uses'=>'AboutController@edit',
        'as'=>'about.edit'
    ]);

    Route::post('/about/update/{id}', 
    [
        'uses'=>'AboutController@update',
        'as'=>'about.update'
    ]);

    Route::get('/about/delete/{id}', 
    [
        'uses'=>'AboutController@destroy',
        'as'=>'about.delete'
    ]);

    Route::get('/about', 
    [
        'uses'=>'AboutController@index',
        'as'=>'about'
    ]);







    Route::get('/donation/create', 
    [
        'uses'=>'DonationPostController@create',
        'as'=>'donation.create'
    ]);
    Route::post('/donation/store', 
    [
        'uses'=>'DonationPostController@store',
        'as'=>'donation.store'
    ]);

    Route::get('/donation/edit/{id}', 
    [
        'uses'=>'DonationPostController@edit',
        'as'=>'donation.edit'
    ]);

    Route::post('/donation/update/{id}', 
    [
        'uses'=>'DonationPostController@update',
        'as'=>'donation.update'
    ]);

    Route::get('/donation/delete/{id}', 
    [
        'uses'=>'DonationPostController@destroy',
        'as'=>'donation.delete'
    ]);

    Route::get('/donation', 
    [
        'uses'=>'DonationPostController@index',
        'as'=>'donation'
    ]);




    Route::get('/eligible/create', 
    [
        'uses'=>'EligibleController@create',
        'as'=>'eligible.create'
    ]);
    Route::post('/eligible/store', 
    [
        'uses'=>'EligibleController@store',
        'as'=>'eligible.store'
    ]);

    Route::get('/eligible/edit/{id}', 
    [
        'uses'=>'EligibleController@edit',
        'as'=>'eligible.edit'
    ]);

    Route::post('/eligible/update/{id}', 
    [
        'uses'=>'EligibleController@update',
        'as'=>'eligible.update'
    ]);

    Route::get('/eligible/delete/{id}', 
    [
        'uses'=>'EligibleController@destroy',
        'as'=>'eligible.delete'
    ]);

    Route::get('/eligible', 
    [
        'uses'=>'EligibleController@index',
        'as'=>'eligible'
    ]);





    Route::get('/hospital/create', 
    [
        'uses'=>'HospitalController@create',
        'as'=>'hospital.create'
    ]);
    Route::post('/hospital/store', 
    [
        'uses'=>'HospitalController@store',
        'as'=>'hospital.store'
    ]);

    Route::get('/hospital/edit/{id}', 
    [
        'uses'=>'HospitalController@edit',
        'as'=>'hospital.edit'
    ]);

    Route::post('/hospital/update/{id}', 
    [
        'uses'=>'HospitalController@update',
        'as'=>'hospital.update'
    ]);

    Route::get('/hospital/delete/{id}', 
    [
        'uses'=>'HospitalController@destroy',
        'as'=>'hospital.delete'
    ]);

    Route::get('/hospital', 
    [
        'uses'=>'HospitalController@index',
        'as'=>'hospital'
    ]);
   





    Route::get('/appointments', [

        'uses' => 'AppointmentsController@index',
        'as' => 'appointments'
    ]);

    Route::post('/appointment/store', [

        'uses' => 'AppointmentsController@store',
        'as' => 'appointment.store'
    ]);

    

    Route::get('/appointment/edit/{id}', [

        'uses' => 'AppointmentsController@edit',
        'as' => 'appointment.edit'
    ]);

    Route::post('/appointment/update/{id}', 
    [
        'uses'=>'AppointmentsController@update',
        'as'=>'appointment.update'
    ]);

    Route::get('/appointment/delete/{id}', 
    [
        'uses'=>'AppointmentsController@destroy',
        'as'=>'appointment.delete'
    ]);




    Route::get('/order', [

        'uses' => 'OrdersController@index',
        'as' => 'orders'
    ]);

   

    Route::get('/order/create', [

        'uses' => 'OrdersController@create',
        'as' => 'order.create'
    ]);

    Route::get('/order/edit/{id}', [

        'uses' => 'OrdersController@edit',
        'as' => 'order.edit'
    ]);

    Route::post('/order/update/{id}', 
    [
        'uses'=>'OrdersController@update',
        'as'=>'order.update'
    ]);

    Route::get('/order/delete/{id}', 
    [
        'uses'=>'OrdersController@destroy',
        'as'=>'order.delete'
    ]);


    

    Route::post('/settings/update', 
    [
        'uses'=>'SettingsController@update',
        'as'=>'settings.update'
    ]);

    Route::get('/settings', 
    [
        'uses'=>'SettingsController@index',
        'as'=>'settings'
    ]);

    


});


Route::group(['prefix'=>'donor' ], function() {

    Route::get('/profile', 
    [
        'uses'=>'DonorProfileController@index',
        'as'=>'donor.profile'
    ]);
    Route::get('/records', 
    [
        'uses'=>'DonorsController@fetch',
        'as'=>'donor.fetch'
    ]);

    Route::get('/appointment/create', [

        'uses' => 'AppointmentsController@create',
        'as' => 'appointment.create'
    ]);

    Route::post('/appointment/store', [

        'uses' => 'AppointmentsController@store',
        'as' => 'appointment.store'
    ]);

    Route::get('/appointment', [

        'uses' => 'AppointmentsController@appointment',
        'as' => 'appointment'
    ]);

    Route::get('/appointment/delete/{id}', 
    [
        'uses'=>'AppointmentsController@donordelete',
        'as'=>'appoint.delete'
    ]);

    Route::post('/profile/update', 
    [
        'uses'=>'DonorProfileController@update',
        'as'=>'donor.profile.update'
    ]);

    // Login Routes...
        Route::get('login', ['as' => 'donor.login', 'uses' => 'DonorAuth\LoginController@showLoginForm']);
        Route::post('login', ['as' => 'login.post', 'uses' => 'DonorAuth\LoginController@login']);
        Route::post('logout', ['as' => 'donor.logout', 'uses' => 'DonorAuth\LoginController@logout']);

    // Registration Routes...
        Route::get('register', ['as' => 'donor.register', 'uses' => 'DonorAuth\RegisterController@showRegistrationForm']);
        Route::post('register', [ 'uses' => 'DonorAuth\RegisterController@register']);
    
    // Password Reset Routes...
        Route::get('password/reset', ['as' => 'donor.password.reset', 'uses' => 'DonorAuth\ForgotPasswordController@showLinkRequestForms']);
        Route::post('password/email', ['as' => 'donor.password.email', 'uses' => 'DonorAuth\ForgotPasswordController@sendResetLinkEmail']);
        Route::get('password/reset/{token}', ['as' => 'donor.password.reset.token', 'uses' => 'DonorAuth\ResetPasswordController@showResetForms']);
        Route::post('password/reset', [ 'uses' => 'DonorAuth\ResetPasswordController@reset']);
    });

    //Route::view('/donor/home', 'donor-home')->middleware('donor');
 //   Route::get('/donor/home', ['as' => 'donor-home', 'uses' => 'DonorHomeController@index']);

    Route::get('/donor/verify/{token}', 'DonorAuth\RegisterController@userActivation');
    Route::get('/donor/home' , function(){
       

        return view('donor-home');
                          
})->middleware('donor');