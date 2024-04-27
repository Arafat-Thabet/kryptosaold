<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/comming-soon', function () {
    return view('soon');
});
Route::get('/signup', function () {
    return view('signup');
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
