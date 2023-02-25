<?php

use App\Http\Controllers\Testprep\PagesController;
use App\Http\Controllers\Testprep\CourseDetailsController;
use App\Http\Controllers\Testprep\ExamsController;
use App\Http\Controllers\Testprep\TestprepAjaxController;

/* Test prep Route */
// Route::group(['namespace' => '\Testprep', 'prefix' => 'testprep'], function () {

  Route::group(['prefix' => 'testprep'], function () {

    Route::get('/', [PagesController::class, 'index_v2'])->name('testprep.v2.index');

    Route::get('/v1', [PagesController::class, 'index_v1'])->name('testprep.v1.index');

    Route::get('/terms-and-conditions', [PagesController::class, 'terms_and_conditions'])->name('testprep.terms_and_conditions');

     Route::get('/disclaimer', [PagesController::class, 'disclaimer'])->name('testprep.terms_and_conditions');

      Route::get('/privacy-policy', [PagesController::class, 'privacy_policy'])->name('testprep.privacy_policy');

      Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('testprep.contact_us');

    Route::post('/demoform', [PagesController::class, 'demoform']);



    Route::get('/routes', [PagesController::class, 'routes']);
    //Route::get('/thank-you', [PagesController::class, 'routes']);


    Route::get('/exams/{type}/{alias?}', [ExamsController::class, 'index'])->name('testprep.exams');

    Route::get('/course-detail/{alias}', [CourseDetailsController::class, 'index']);

    Route::post('store-testprep-data', [TestprepAjaxController::class, 'leadFormSubmit'])->name('testprep.ajax.store-testprep-data');

    Route::post('/paymentpopup', [TestprepAjaxController::class, 'paymentpopup'])->name('testprep.ajax.store-testprep-data');

    Route::post('/course_payment', [TestprepAjaxController::class, 'course_payment'])->name('testprep.ajax.course_payment');

    Route::post('commone-otp-form-submit', [TestprepAjaxController::class, 'commonOtpFormSubmit']);

    Route::post('commone-resend', [TestprepAjaxController::class, 'commonResendOtp']);

    Route::post('send-otp', [TestprepAjaxController::class, 'sendOtp']);
 });
