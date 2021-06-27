<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactCtontroller extends Controller
{
    
	#index 
	public function index () {
		return view ('pages.contact.index');
	}
}
