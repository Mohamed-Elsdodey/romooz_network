<?php


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {


    Route::get('changeLangFront',function (\Illuminate\Http\Request $request){
        $lang = $request->lang;
        $url = $request->url;
        app()->setLocale($lang);
        session()->put('locale', $lang);
        \LaravelLocalization::setLocale($lang);
        $url = \LaravelLocalization::getLocalizedURL(app()->getLocale(), \URL::previous());

        return redirect($url);
    })->name('changeLangFront');



    ####   home
    Route::get('/', [\App\Http\Controllers\Web\WebHomeController::class,'index'])->name('web.home');

    ####  contact us
    Route::get('ContactUs', [\App\Http\Controllers\Web\WebContactUsController::class,'index'])->name('web.contactUs');

    ### questions
    Route::get('questions', [\App\Http\Controllers\Web\WebQuestionsController::class,'index'])->name('web.questions');

    ### terms and condition
   Route::get('terms_condition',[\App\Http\Controllers\Web\WebTermsConditionController::class,'index'])->name('web.termsCondition');

   ####  application

    Route::get('ourWorks',[\App\Http\Controllers\Web\WebOurWorksController::class,'index'])->name('web.ourWorks');



    ### services

    Route::get('service/{id}',[\App\Http\Controllers\Web\WebServiceController::class,'show'])->name('web.showService');



    Route::get('android', function () {
        return view('web.android');
    });

    Route::get('web', function () {
        return view('web.web');
    });

    Route::get('ios', function () {
        return view('web.ios');
    });

    Route::get('contact', function () {
        return view('web.contact');
    });

    Route::get('design', function () {
        return view('web.design');
    });

    Route::get('domain-reservation', function () {
        return view('web.domain_reservation');
    });

    Route::get('faq', function () {
        return view('web.faq');
    });

    Route::get('marketing', function () {
        return view('web.marketing');
    });

    Route::get('marketing-service', function () {
        return view('web.marketing_service');
    });


    Route::get('offers', function () {
        return view('web.offers');
    });


    Route::get('portfolio', function () {
        return view('web.portfolio');
    });


    Route::get('portfolio-details', function () {
        return view('web.portfolio_details');
    });


    Route::get('terms-of-service', function () {
        return view('web.terms_of_service');
    });


    Route::post('contact_us', 'ContactController@contact_us')->name('contact.store');


});
