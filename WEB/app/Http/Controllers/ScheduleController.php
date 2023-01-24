<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:reisgeschiedenis bekijken', ['only' => ['viewHistory']]);
        $this->middleware('permission:persoonlijk rooster bekijken', ['only' => ['viewRoster']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->_navLog(__FUNCTION__); return view('schedule.index');
    }

    public function viewHistory() {
        $this->_navLog(__FUNCTION__); return view('schedule.viewHistory');
    }

    public function viewRoster() {
        $this->_navLog(__FUNCTION__); return view('schedule.viewRoster');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->_navLog(__FUNCTION__); return view('schedule.create');
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
        $this->_navLog(__FUNCTION__); return view('schedule.edit');
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
