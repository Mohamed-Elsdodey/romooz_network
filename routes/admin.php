<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {

    Config::set('auth.defines', 'admin');

    /*==================== Auth System  ==================*/

    Route::get('/', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@login')->name('admin.login.submit');

    /*==================== Admin Panel ==================*/

    Route::group(['middleware' => 'admin:admin'], function () {

        /*================LogOut===========*/
        Route::get('logout', 'AdminLoginController@logout')->name('admin.logout');


        Route::get('/home', 'AdminController@index')->name('admin.dashboard');
//        Route::get('calender', 'AdminController@calender')->name('admin.calender');


        //Profile
        Route::resource('profileControl', 'Profile\AdminProfileController');

        /*================Admin Setting control =========================*/

        Route::resource('settings', 'AdminSettingController');//setting

        /*================Admin Contact us control =========================*/

        /*================Admin Contact us control =========================*/

        Route::resource('contacts', 'AdminContactUsController');
        Route::get('deleteContact/{id}',[\App\Http\Controllers\Admin\AdminContactUsController::class,'delete'])->name('admin.deleteContact');

        /*================Admin send firebase control =========================*/

        Route::resource('firebaseNotification', 'AdminFirebaseNotificationController');

        /*================Admin Profile control =========================*/

        Route::resource('profile', 'AdminProfileController');

        /*================Admin Admin control =========================*/
        Route::resource('admins', 'AdminAdminController');
        Route::delete('admins/delete/bulk', 'AdminAdminController@delete_all')->name('admins.delete.bulk');

        #### aboutUs

        Route::resource('aboutUs', 'AdminAboutUsController');
        Route::post('aboutUs/update/byAdmin', 'AdminAboutUsController@updateByAdmin')
            ->name('aboutUs.updateByAdmin');


        #### maps
        Route::get('getMapAddress','AdminSettingController@getMapAddress')->name('setting.getMapAddress');
        Route::post('updateMapAddress','AdminSettingController@updateMapAddress')->name('setting.updateMapAddress');


       ////////////////////////////   steeps ///////////////////////////////////////////////////////////////////

        Route::get('getSteps','AdminStepsController@getSteps')->name('admin.getSteps');
        Route::post('updateSteps','AdminStepsController@updateSteps')->name('admin.updateSteps');


        /*====================Start CRUD==================*/

        Route::group(['namespace' => 'CRUD'], function () {

            //البانر
            Route::resource('sliders', 'AdminSlidersController');
            Route::delete('sliders/delete/bulk', 'AdminSlidersController@delete_all')
                ->name('sliders.delete.bulk');


            ## our work

            Route::resource('ourWorks', 'AdminOurWorksController');
            Route::delete('ourWorks/delete/bulk', 'AdminOurWorksController@delete_all')
                ->name('ourWorks.delete.bulk');

            ### ourService

            Route::resource('our-services', 'AdminOurServicesController');
            Route::delete('our-services/delete/bulk', 'AdminOurServicesController@delete_all')
                ->name('our-services.delete.bulk');

            # questions

            //الاسئلة الشائعة
            Route::resource('frequently-questions', 'AdminFrequentlyQuestionsController');
            Route::delete('frequently-questions/delete/bulk', 'AdminFrequentlyQuestionsController@delete_all')
                ->name('frequently-questions.delete.bulk');


            ### Reviews


            Route::resource('reviews', 'AdminReviewsController');
            Route::delete('reviews/delete/bulk', 'AdminReviewsController@delete_all')
                ->name('reviews.delete.bulk');

            ##statistics

            Route::resource('statistics', 'AdminStatisticsController');
            Route::delete('statistics/delete/bulk', 'AdminStatisticsController@delete_all')
                ->name('statistics.delete.bulk');


            ## types


            Route::resource('types', 'AdminTypeController');
            Route::delete('types/delete/bulk', 'AdminTypeController@delete_all')
                ->name('types.delete.bulk');





        });


        /*====================End Admin Panel==================*/


    });//end middleware admin


});
