<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date("Y-m-d"); 
        $today=explode ('-', $today);
        $today[0]=$today[0]-1;
        $oneyearago=$today[0] . '-' . $today[1] . '-' . $today[2];
        $aboval=explode ('-', Auth::user()->sub_date);
        $aboval[0]=$aboval[0]+1;
        $aboval=$aboval[2] . '-' . $aboval[1] . '-' . $aboval[0];
        return view('subscribe.index', [
            'oneyearago'=>$oneyearago,
            'aboval'=>$aboval,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = date("Y-m-d"); 
        $today=explode ('-', $today);
        $today[0]=$today[0]-1;
        $oneyearago=$today[0] . '-' . $today[1] . '-' . $today[2];
        return view('subscribe.create', [
            'oneyearago'=>$oneyearago,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $authed_user = auth()->user();
        $amount = 6000;

        $authed_user->charge($amount, $request->payment_method);


        $validatedData=$request->validate([
            'subscriber' => 'required',
            'sub_date' => 'required',
        ]);

        echo '<p>$request[usr]' . $request['usr'] . '</p>';
        $usertoupdate=User::findOrFail($request['usr']);
        echo '<p>$usertoupdate' . $usertoupdate . '</p>';
        $usertoupdate->update($validatedData);

        return redirect()->back()->with(['success' => 'Vous êtes maintenant abonné pour une période d\'un an !']);
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
}
