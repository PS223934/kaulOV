<?php

namespace App\Http\Controllers;

use App\Models\UserCredit;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Log;
class UserCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->_navLog(__FUNCTION__); return view('usercredit.index');
    }

    public function a2bal(Request $request) {
        $amount = (int)$request->amount;
        dd(gettype($amount));
        if(gettype($amount) != 'integer') {
            $this->_navLog(__FUNCTION__); return view('usercredit.failed');
        }

        $this->_navLog(__FUNCTION__); return view('usercredit.success');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCredit  $userCredit
     * @return \Illuminate\Http\Response
     */
    public function show(UserCredit $userCredit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCredit  $userCredit
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCredit $userCredit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCredit  $userCredit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCredit $userCredit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCredit  $userCredit
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCredit $userCredit)
    {
        //
    }

    public function _navLog($data) {
        Log::channel('UserNavigationActivity')->info(\Auth::user()->name.'('.\Auth::id().', '.\Auth::user()->roles[0]->name.') accessed function '.static::class.'::'.$data);
    }
}
