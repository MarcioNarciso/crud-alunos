<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		helper('html');
		echo view('home');
	}

}
