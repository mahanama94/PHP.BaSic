<?php

/**
 * Home controller class
 * 
 * @author Rajith Bhanuka
 *
 */
class Home extends Controller{
	
	/**
	 * Default controller
	 */
	public function index(){
		$this->view('home/index');
		
	}
}
?>