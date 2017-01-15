<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
	
	public function index(){
		return view('welcome');
	}
	
	public function about(){
		$firstName = "Ethan";
		$lastName = "Hu";
		$fullName = $firstName.' '.$lastName;
		return view('about')	->with('fullName',$fullName);
	}
	
	public function contact(){
		return view('contact');	
	}
	
	
}
