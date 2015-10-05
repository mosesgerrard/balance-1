<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Member;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $data = Member::with('person.contacts','person.files', 'person.education')->paginate(50);

       return view('admin.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AuthController $auth
     * @internal param Request $request
     * @return Response
     */
    public function store(AuthController $auth)
    {
        $data = \Input::all();

        $valid = $auth->validator($data);

        if( $valid->fails()){

            return redirect()->back()->withInput()->withErrors( $valid );
        }
        $user = $auth->create($data);

        \Auth::login($user);

        return redirect()->to('admin');
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
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
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
