<?php

namespace App\Http\Controllers\Testprep;

use Illuminate\Http\Request;
use App\Models\Testprep\DemoForm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


//use App\Traits\BlogTrait;
use Illuminate\Support\Facades\Route;


class HomeController extends Controller
{
    //private static $apiContext = '';
   // use BlogTrait;

    public function index()
    {
        //$routes = Route::getRoutes();

       // $blog_section =  $this->getAllLatestArticles(20); //latest events 
       
        //dd( $blog_section );
        return view('testprep.index');
        //return view('testprep.index',['blog_section'=> $blog_section]);
    }
    public function demoform(Request $request)
    {
        $request->validate(['name'=> 'required','email'=>'required|email','phone'=>'required|digits_between:10,12','city'=>'required','course'=>'required'] );

        $request->merge(['university' => '']);

        DemoForm::create($request->all());

        return view('testprep.thank-you');

        //return redirect('/testprep');
    }
    public function routes(Request $request)
    {
        $routes = Route::getRoutes();


        return view('testprep.routesList', compact('routes'));



    }
}
