<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserApi;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserApi::latest()->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UserApi $user)
    {
        // print_r($request->all());
        $data = $request->all();
        // UserApi::create($data);
        foreach ($data as $key => $value) {
            UserApi::create($value);
        }
        return $data;
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserApi  $userApi
     * @return \Illuminate\Http\Response
     */
    public function show(UserApi $userApi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserApi  $userApi
     * @return \Illuminate\Http\Response
     */
    public function edit(UserApi $userApi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserApi  $userApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserApi $userApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserApi  $userApi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = UserApi::find($id);
        $data->delete();
        return "Delete";
    }
}
