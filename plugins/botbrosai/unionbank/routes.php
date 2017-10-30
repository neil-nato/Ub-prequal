<?php

//FAQ
Route::get('api/ub-cms/faq', 'botbrosai\unionbank\controllers\FaqController@faqList');

//PROMO
Route::get('api/unionbank/promo/list', 'botbrosai\unionbank\controllers\PromoController@promoList');

//ZERO PROMO
Route::get('api/ub-cms/zero-promo/', 'botbrosai\unionbank\controllers\ZeroPromoController@zeroPromoList');

//ZERO PROMO CAR
Route::get('api/unionbank/zero-promo-car/list', 'botbrosai\unionbank\controllers\ZeroPromoCarController@zeroPromoCarList');
Route::get('api/unionbank/zero-promo-car/list/{zero_promo_id}', 'botbrosai\unionbank\controllers\ZeroPromoCarController@zeroPromoCarListSingle');

//REF NUM
Route::post('api/unionbank/prequalification-code', 'botbrosai\unionbank\controllers\ApplicantController@refNumCheck');

//OTP
Route::post('api/unionbank/otp', 'botbrosai\unionbank\controllers\ApplicantController@otpCheck');

//INCREMENT CAR VIEW
Route::get('api/unionbank/car/view-increment/{id}', 'botbrosai\unionbank\controllers\CarMakeController@carViewIncrement');

// CAR LIST
Route::get('/api/data', 'botbrosai\unionbank\controllers\GuzzleController@getRemoteData');
Route::get('/api/ammort','botbrosai\unionbank\controllers\GuzzleController@calculateAmmort');

Route::get('/api/ammort','botbrosai\unionbank\controllers\GuzzleController@calculateAmmort');

Route::get('/ajax/mail','botbrosai\unionbank\controllers\ContactUsController@sendAction');
Route::post('/ajax/mail','botbrosai\unionbank\controllers\ContactUsController@sendAction');

//CHATTLE MORTGAGE
Route::get('/data/cmf', function() {
    return response()->file('plugins/botbrosai/unionbank/data/cmf.json');
})
?>
