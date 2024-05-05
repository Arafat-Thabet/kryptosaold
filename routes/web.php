<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::view('comming-soon','soon')->name('comming-soon');
Route::view('about','about');
Route::view('signup','signup');
Route::view('features','features');

// ar Routes
Route::group(['prefix' => 'ar'], function () {
    Route::view('','ar.home');
    Route::view('features','ar.features');
    Route::view('comming-soon','ar.soon');
    Route::view('about','ar.about');
    Route::view('signup','ar.signup');
});

Route::post('/signup', [RegisterController::class, 'store'])->name('signup');

Route::post('/contact', function (Request $request) {

    $data['to'] = env('MAIL_TO');
    $data['subject'] = $request->subject;
    $from = "From name : {$request->name} <br> From email : {$request->email} <br>";

    $data['message'] = $message = $from . $request->msg;

    $html_messages = '';
    $html_messages = '
        <html>
           <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            </head>
            <body>';
    $html_messages .= $message;

    $html_messages .= '</body></html>';
    Mail::html(
        $html_messages,
        function ($message) use ($data) {
            $message->to($data['to']);
            $message->subject($data['subject']);
        }
    );

    return response()->json(['success' => true, 'message' => 'Message sent successfully.']);
})->name('contact');
