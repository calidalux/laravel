<?php
use App\Models\Product;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('/', function()
{
	return view('welcome');
});

Route::get('filter', function(){

	$products = Product::where( function($query){

		$min_price = Input::has('min_price') ? Input::get('min_price'):null;
		$max_price = Input::has('max_price') ? Input::get('max_price'):null;

			$brands = Input::has('brands') ? Input::get('brands'):[]; //blank array

			if(isset($min_price) && isset($max_price)){

				if(isset($brands)){
					foreach ($brands as $brand){
						$query->orWhere('price','>=', $min_price)
									->where('price','<=', $max_price)
									->where('brand_id','=', $brand);
					}	
				}

				$query->where('price','>=', $min_price)
							->where('price','<=', $max_price);

			}

		})->get();
   
    return View::make('index', compact(['products']));
    
});



Route::get('home', 'HomeController@index');

Route::get('contact', 'WelcomeController@contact');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
