<?php

class Welcome extends Controller
{
	public function index(){
		$this->view("welcome");
	}

	public function ooga(){
		$this->view('ooga');
	}
}