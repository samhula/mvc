<?php

class Home extends Controller
{
	public function index($params = ['']){
		$this->view("index");
	}

	public function edit($params = ['']){
		$this->view("edit");
	}
}