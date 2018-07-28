<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //

    public function __construct()
    {
    	$this->middleware('guest',['except'=>'destroy']);
    }
	public function create()
	{
		return view('session.create');
	}

	public function store()
	{
		if (auth()->attempt(request(['email','password'])))
			{
				return redirect()->home();

			}
			return back()->withErrors([

					'messege' => 'please check'

				]);
			

			

	}

    public function destroy(){

    	auth()->logout();

    	return redirect()->home();
    }
}
