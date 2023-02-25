<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Testprep Controllers
use Illuminate\Support\Facades\Artisan;
// use App\Http\Controllers\Testprep\HomeController;
// use App\Http\Controllers\Testprep\ExamsController;
// use App\Http\Controllers\Testprep\TestprepAjaxController;
// use App\Http\Controllers\Testprep\CourseDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('home.index');


// Route::get('/', function () {
//      return view('home.index');
//  })->name('home.index');



// Route::get('/contact', function () {
//     return view('home.contact');
// })->name('home.contact');

Route::view('/','home.index');
Route::view('/contact','home.contact');

// Route::get('/posts/{id}',function($id){
// return 'Blog Post  '.$id; 
// }
// )
// //->where(['id'=>'[0-9]+'])
// ->name('posts.show');

// Route::get('/posts/{$days_ago?}',function($days_ago = 20){
//     return 'Blog Post days ago '.$days_ago; 
//     }
// )->name('posts.recent.index');


// $posts = [
//     1 => [
//         'title' => 'Intro to Laravel',
//         'content' => 'This is a short intro to Laravel',
//         'is_new' => true
//     ],x`
//     2 => [
//         'title' => 'Intro to PHP',
//         'content' => 'This is a short intro to PHP',
//         'is_new' => false
//     ]
// ];


// Route::get('/posts', function () use ($posts)  {
    
//     //dd(request()->all());
//     //data centeral form / json / param 
//     //dd(request()->input('param',1));

//     //only to param in url or query parameters
//   //  dd(request()->query('param',1));

//     return view('posts.index',['posts'=> $posts]);
//    // return 'Blog Post '.$id;
// })->name('posts.index');

// //pass content to template
// Route::get('/posts/{id?}', function  ( $id = 1 ) use ($posts) {

//     abort_if(!isset($posts[$id]),404);
//     return view('posts.show',['post'=> $posts[$id]]);
//    // return 'Blog Post '.$id;
// })->name('posts.show');


// Route::get('/recent-postes/{days_ago?}', function ( $days_ago=20 ) {
//     return 'Post From  '.$days_ago;
// })->name('posts.recent.index');



// Route::prefix('/fun')->name('fun.')->group(function() use($posts){

// //returning response other that html 
// //specifying header
// //Setting Cookies
// Route::get('response',function() use ($posts){
//     //object
// return response($posts,201)->header('Content-Type','application/json')->cookie('MY_COOKIE','alok kumar',3600);

// })->name('response');
// //returnning json 
// Route::get('json',function() use ($posts){
// return response()->json($posts);
// })->name('json');

// Route::get('redirect',function(){
// //object
// return redirect('/contact');

// })->name('redirect');

// Route::get('back',function(){
// //object
// return back();
// })->name('show');
// //Redirect to another url 
// //pass id = 1 
// Route::get('named-route',function(){
// //object
// return redirect('posts.show',['id'=>1]);
// })->name('named-route');

// //Redirect to another url  not locally 
// //pass id = 1 
// Route::get('away',function(){
// //object
// return redirect()->away('https//google.com');
// })->name('away');


// Route::get('download',function(){
// //object
// return response()->download(public_path('download.png','mydownload.png'));
// })->name('download');
// });




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/route-cache', function() {
     $exitCode = Artisan::call('route:clear');
     return 'Routes cache cleared';
 });
// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

 // Route::group(['prefix' => 'testprep'], function () {
 //    Route::get('/', [HomeController::class, 'index'])->name('testprep.index');

 //    Route::post('/demoform', [HomeController::class, 'demoform']);



 //    Route::get('/routes', [HomeController::class, 'routes']);
 //    //Route::get('/thank-you', [HomeController::class, 'routes']);


 //    Route::get('/exams/{type}/{alias?}', [ExamsController::class, 'index'])->name('testprep.exams');

 //    Route::get('/course-detail', [CourseDetailsController::class, 'index']);

 //    Route::post('store-testprep-data', [TestprepAjaxController::class, 'leadFormSubmit']);

 //    Route::post('commone-otp-form-submit', [TestprepAjaxController::class, 'commonOtpFormSubmit']);

 //        Route::post('commone-resend', [TestprepAjaxController::class, 'commonResendOtp']);
        
 //        Route::post('send-otp', [TestprepAjaxController::class, 'sendOtp']);
 // });

include_once('testprepweb.php');