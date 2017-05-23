<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		return View('pages.index');
	}

	public function servicios()
	{
		return View('pages.servicios');
	}
	
	public function quienes_somos()
	{
		return View('pages.quienes-somos');
	}
	
	public function flotilla()
	{
		return View('pages.flotilla');
	}

	public function clientes()
	{
		return View('pages.clientes');
	}

	public function contacto()
	{
		return View('pages.contacto');
	}

}
