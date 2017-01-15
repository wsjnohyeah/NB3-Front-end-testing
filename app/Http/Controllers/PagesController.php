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
		$email = "ethan.hqc@icloud.com";
		return view('about')	->with('email',$email)->with('fullName',$fullName);
	}
	
	public function contact(){
		return view('contact');	
	}
	
	
}
