<?php

//FAQ
Route::get('api/unionbank/faq/list', 'botbrosai\unionbank\controllers\FaqController@faqList');

//PROMO
Route::get('api/unionbank/promo/list', 'botbrosai\unionbank\controllers\PromoController@promoList');

//ZERO PROMO
Route::get('api/unionbank/zero-promo/list', 'botbrosai\unionbank\controllers\ZeroPromoController@zeroPromoList');

//ZERO PROMO CAR
Route::get('api/unionbank/zero-promo-car/list', 'botbrosai\unionbank\controllers\ZeroPromoCarController@zeroPromoCarList');
Route::get('api/unionbank/zero-promo-car/list/{zero_promo_id}', 'botbrosai\unionbank\controllers\ZeroPromoCarController@zeroPromoCarListSingle');

//REF NUM
Route::post('api/unionbank/prequalification-code', 'botbrosai\unionbank\controllers\ApplicantController@refNumCheck');

//OTP
Route::post('api/unionbank/otp', 'botbrosai\unionbank\controllers\ApplicantController@otpCheck');

//CAR MODEL
Route::get('api/unionbank/car/list', 'botbrosai\unionbank\controllers\CarMakeController@carList');

//INCREMENT CAR VIEW
Route::get('api/unionbank/car/view-increment/{id}', 'botbrosai\unionbank\controllers\CarMakeController@carViewIncrement');

?>

