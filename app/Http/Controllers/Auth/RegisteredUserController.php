<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Civility;
use App\Models\PcLocality;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users=User::all();
        $civility=Civility::all();
        $locality=PcLocality::all();
        
        return view('auth.register',[
            'users'=> $users,
            'civility'=> $civility,
            'locality'=> $locality,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'civility_id' => ['required', 'int', 'max:20'],
            'pc_locality_id' => ['required', 'int', 'max:20'],
            'area_id' => ['int', 'max:20'],
            'name' => ['required', 'string', 'max:100'],
            'first_name' => ['required', 'string', 'max:100'],
            'birth_date' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:254', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            //'housephone' => ['string', 'max:9'],
            //'mobilephone' => ['string', 'max:10'],
            'unique_id' => ['string', 'max:32'],
            'active' => ['int', 'max:1'],
            'subscriber' => ['int', 'max:1'],
        ]);

        $user = User::create([
            'civility_id' => $request->civility_id,
            'pc_locality_id' => $request->pc_locality_id,
            'area_id' => "1",
            'name' => $request->name,
            'first_name' => $request->first_name,
            'birth_date' => $request->birth_date,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            //'housephone' => $request->housephone,
            //'mobilephone' => $request->mobilephone,
            'unique_id' => md5(uniqid()),
            'active' => "1",
            'subscriber' => "0",
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
