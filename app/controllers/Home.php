<?php

/**
 * Home controller class
 * 
 * @author Rajith Bhanuka
 *
 */
class Home extends Controller{
	
	public function __constructor(){
		
	}
	
	/**
	 * Default controller
	 */
	public function index(){
		$this->view('home/index');
		
	}
	
	/**
	 * Login controller
	 * Provides login functionality through get methods
	 * Adds a user to the App
	 */
	public function myHome(){
		App::getInstance()->retrieveUser();
		
		$user = App::getInstance()->getUsers()[0];
		
		$users = ["user" => $user];
		
		$json = json_encode($users);
		
		if($user->isLoggedIn()){
			$this->view('home/myHome', $json);
		}
		else{
			Redirect::to(Config::get("rewriteBase/public")."/home/login");
		}
	}
	
	
	public function login(){
		$this->view('home/login');
	}
	
	
	public function signUp(){
		$this->view("home/signUp");
	}
}
?>