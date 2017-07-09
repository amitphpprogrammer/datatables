<?php

Route::any('/datatables','HomeController@datatables');
Route::post('/getColumnViews','HomeController@getColumnViews');
Route::any('/updateColumnViews','HomeController@updateColumnViews');