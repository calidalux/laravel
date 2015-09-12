<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageController extends Controller {

	public function about()
	{
		$people = [];
	/*	$people = [
		'Roman', 'Efim', 'Anna'
		];
*/
		return view('pages.about', compact('people'));

	}

	public function contact()
	{
		return view('pages.contact');
	}

}
