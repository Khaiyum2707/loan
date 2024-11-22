<?php
use App\Mail\Emails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [FormController::class, 'page']);
Route::post('/', [FormController::class, 'store'])->name('formSubmit');

/*Route::get('/test', function(){
    //try {
        //Mail::to('mohamad.khaiyum@idsb.com.my')->send(new Emails(null,null,null));
       // return redirect()->back()->with('success', 'Form submitted successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Form not submitted. Error: ' . $e->getMessage());
    }



});*/