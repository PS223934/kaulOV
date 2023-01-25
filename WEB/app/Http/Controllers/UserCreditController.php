<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserCredit;
use App\Models\Vendor;
use App\Models\Transaction_type;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Log;
use App\Traits\TransactionTrait;

class UserCreditController extends Controller
{
    use TransactionTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->_navLog(__FUNCTION__); return view('usercredit.index', ['vendors' => Vendor::all()]);
    }

    public function a2bal(Request $request) {
        $amount = (int)$request->amount;
        $vendor = (int)$request->vendor;

        if(gettype($amount) == 'integer') {
            if($amount >= 5) {
                $this->procPayment(\Auth::id(), $amount, $vendor);
                $this->_navLog(__FUNCTION__); return redirect()->route('topup.success');
            }
        }
        $this->_navLog(__FUNCTION__); return redirect()->route('topup.failed');
    }

    public function a2success() {
        $this->_navLog(__FUNCTION__); return view('usercredit.success');
    }

    public function a2failed() {
        $this->_navLog(__FUNCTION__); return view('usercredit.failed');
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

    public function procPayment($walletid, $amount, $vendor) {
        $c = UserCredit::all()->where('id', $walletid)->value('credit');
        $this->newTransaction($vendor, 1, $amount*100, $walletid);
    }

    public function _navLog($data) {
        Log::channel('UserNavigationActivity')->info(\Auth::user()->name.'('.\Auth::id().', '.\Auth::user()->roles[0]->name.') accessed function '.static::class.'::'.$data);
    }
}
