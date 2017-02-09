<?php

namespace App\Http\Controllers;

class PagesController extends Controller{
	
	public function index(){
		//return view('pages.welcome');
		return view('nbtest.selection');
	}
	
	public function about(){
		$firstName = "Ethan";
		$lastName = "Hu";
		$fullName = $firstName.' '.$lastName;
		$email = "ethan.hqc@icloud.com";
		return view('pages.about')	->with('email',$email)->with('fullName',$fullName);
	}
	
	public function contact(){
		return view('pages.contact');	
	}
	
	#for NB testing purposes
	public function nbIndex(){
		return view('nbtest.index');
	}
	
	
}
