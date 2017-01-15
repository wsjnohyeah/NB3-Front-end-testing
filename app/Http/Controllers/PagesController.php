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
		$data['email'] = $email;
		$data['fullName'] = $fullName;
		return view('about')	->with('data',$data);
	}
	
	public function contact(){
		return view('contact');	
	}
	
	
}
