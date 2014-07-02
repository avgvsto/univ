<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if ( Request::ajax() ) {
			
			$input = Input::all();
			
			$validator = Validator::make($input, User::$login_rules);
			if ( $validator->passes() ) {
				$user = DB::table('users')->where('email', $input['email'] )->first();
				$attempt = Auth::attempt([
					'email' => $input['email'],
					'password' => $input['password']
				]);
				if( $attempt ){
					return Response::json(array('login' => 'ok', 'user' => $user), 200 );
				}
				else{
					return Response::json(array('login' => 'fail', 'error' => 'auth-error'), 417);
				}
			}
			else{
				return Response::json(array('login' => 'fail', 'error' => 'data-error'), 417);				
			}
		}
		else{
			return Response::json(array('login' => 'fail', 'error' => 'method-error'), 417);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		if ( Request::ajax() ) {   
			Auth::logout();
			if ( ! Auth::check() ){
				return Response::json(array('logout' => 'ok'));
			}
		}
		return Response::json(array('logout' => 'fail'));
	}


}
