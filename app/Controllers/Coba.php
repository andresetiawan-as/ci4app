<?php namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		echo "Ini controller Coba method index $this->nama";
	}

	public function about($nama='')
	{
		echo "Hallo this is $nama";
	}

	//--------------------------------------------------------------------

}
