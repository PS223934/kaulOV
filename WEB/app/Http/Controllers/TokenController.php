<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Log;


class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $token = Auth::user()->tokens()->get()->pluck('token')->toArray();
        if(!$token) {
            $this->_navLog(__FUNCTION__); return redirect()->route('app-login.create');
        }
        $this->_navLog(__FUNCTION__); return view('app-login.index', ['token' => $token]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->_navLog(__FUNCTION__); return view('app-login.create');
    }

    public function generate(Request $request) {
        Auth::user()->tokens()->delete();

        $request->user()->createToken('DesktopAuth_'.$request->user()->name);
        $this->_navLog(__FUNCTION__); return redirect()->route('app-login.index');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function _navLog($data) {
        Log::channel('UserNavigationActivity')->info(\Auth::user()->name.'('.\Auth::id().', '.\Auth::user()->roles[0]->name.') accessed function '.static::class.'::'.$data);
    }
}
