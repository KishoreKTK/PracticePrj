<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;

Route::get('/email',function(){
    return new WelcomeMail();
});

Route::get('/samplecrud','Samplecontroller@index');

Route::post('/statepost','Samplecontroller@storestate');

Route::get('/updatepost/{id}','Samplecontroller@edit');

Route::post('/updatepost/{id}','Samplecontroller@updatepost');

Route::delete('deletestate/{id}','Samplecontroller@deletestate');
