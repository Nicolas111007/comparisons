<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Suppliers;
use App\Models\Contracts;
use App\Models\Prices;

class ContractModController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            if (Auth::user()->is_admin==1) {
                $suppliers=Suppliers::all();
                $contracts=Contracts::all();
                $prices=Prices::all();
                
                return view('contractmod.index', [
                    'suppliers'=>$suppliers,
                    'contracts'=>$contracts,
                    'prices'=>$prices,
                ]);
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect(RouteServiceProvider::LOGIN);
        }
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
        if (Auth::user()) {
            if (Auth::user()->is_admin==1) {
                $contracts=Contracts::all();
                $contracttomod=Contracts::findOrFail($id);
                $suppliers=Suppliers::all();
                $prices=Prices::all();
                
                return view('contractmod.edit', compact('contracttomod'), [
                    'contracts'=>$contracts,
                    'suppliers'=>$suppliers,
                    'prices'=>$prices,
                ]);
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect(RouteServiceProvider::LOGIN);
        }
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
        //Validation des données du formulaire
        $validated = $request->validate([
            'energy_type_id' => 'required',
            'contract_name' => 'required',
            'var_fix' => 'required',
            'time_contract' => 'required',
            'abbreviation' => 'required',
            'active_contract' => 'required',
        ]);

        //Le formulaire a été validé, nous récupérons le fournisseur à modifier
        $contracttomod = Contracts::findOrFail($id);
        
	    //Mise à jour des données modifiées et sauvegarde dans la base de données
        $contracttomod->update($validated);

        return redirect('/contractmod');
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
