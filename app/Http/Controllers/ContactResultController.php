<?php

namespace App\Http\Controllers;
use App\Models\ContactMessage;

use Illuminate\Http\Request;

class ContactResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $civility_id=$_POST['civility_id'];
        $name=$_POST['name'];
        $first_name=$_POST['first_name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $mobilephone=$_POST['mobilephone'];
        $messobject=$_POST['messobject'];
        $message=$_POST['message'];
        $identify=$_POST['identify'];
        
        $request->validate([
            'civility_id' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required',
            'phone',
            'mobilephone',
            'messobject' => 'required',
            'message' => 'required',
            'identify' => ['required', 'unique:contact_message'],
        ]);
        
        ContactMessage::create($request->all());
        
        return view('/contactresult', [ContactResultController::class, 'index'], [
            'civility_id' => $civility_id,
            'name' => $name,
            'first_name' => $first_name,
            'email' => $email,
            'phone' => $phone,
            'mobilephone' => $mobilephone,
            'messobject' => $messobject,
            'message' => $message,
            'identify' => $identify,
            ])->with(['success' => 'Votre inscription est bien envoyée !']);
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
