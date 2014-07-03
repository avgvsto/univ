<?php

class UsersController extends \BaseController {

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
            // validate
            $rules = array(
                'real_name' 	=> 'required',
                'student_file' 	=> 'required',
                'email' 		=> 'required',
                'password' 		=> 'required'
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                return Response::json(array('state' => 'not save - data error'));
            } else {
                // store
                $user = new User;
                $user->real_name = Input::get('real_name');
                $user->student_file = Input::get('student_file');
                $user->email = Input::get('email');
                $user->password = Hash::make( Input::get('password') );

                if( $user->save() ){
                    return Response::json(array('state' => 'saved OK'));	
                }
                else{
                	return Response::json(array('state' => 'not save - save error'));
                }
            }
        }
        else{
        	return Response::json(array('state' => 'not save - not ajax'));	
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
	public function destroy($id)
	{
		//
	}


}
