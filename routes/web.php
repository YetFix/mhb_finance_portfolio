<?php
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


Route::get('/seed', function () {
    Artisan::call("migrate:fresh --seed");
    Artisan::call("storage:link");
    return "Migration and Seed done!";
});
Route::get('/', function () {

    $sliders = Slider::all();
    return view('welcome',compact('sliders'));
})->name('home');

Route::get('/contact',function(){
    return view('frontend.contact');
})->name('contact');

Route::get('/about',function(){
    return view('frontend.about');
})->name('about');
Route::get('/services',function(){
    return view('frontend.services');
})->name('services');



Route::post('/send', function (Request $request) {
    $data = $request->validate([
        'name'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'service'=>'required',
        'message'=>'required',
    ]);
   Message::create($data);
   Toastr::info('Message has been sent!', 'Message', ["positionClass" => "toast-top-right"]);
   return back();

})->name('send');
Route::post('/subscribe', function (Request $request) {

    $request->validate([
       'email'=>'required | email',
   ]);

  Subscribe::create($request->input());
  Toastr::info('You have been subscribed!', 'Subscription', ["positionClass" => "toast-top-right"]);
  return back();

})->name('subscribe');

Route::get('/teams',function(){
    $teams = Team::all();
    return view('frontend.teams',compact('teams'));
})->name('teams');

Route::get('/terms-and-conditions',function(){
    return view('frontend.terms');
})->name('terms');

Route::get('/privacy-policy',function(){
    return view('frontend.privacy');
})->name('privacy');


