<?php namespace Harlo\ModularCM\Controllers;
use Illuminate\Routing\Controller;
use View, Config, Input, Auth, Redirect;


class SessionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('modular-cm::sessions.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('modular-cm::sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//TODO Validate input

		$input = Input::all();
		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password'],
		]);

		if($attempt) return Redirect::home();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}

}
