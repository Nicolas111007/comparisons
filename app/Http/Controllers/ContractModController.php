<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Suppliers;
use App\Models\Contracts;
use App\Models\EnergyType;
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
        if (Auth::user()) {
            if (Auth::user()->is_admin==1) {
                $contracts=Contracts::all();
                $suppliers=Suppliers::all();
                $prices=Prices::all();

                return view('contractmod.create', [
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()) {
            if (Auth::user()->is_admin==1) {
                $validatedData = $request->validate([
                    'suppliers_id' => 'required',
                    'energy_type_id' => 'required',
                    'contract_name' => 'required',
                    'var_fix' => 'required',
                    'time_contract' => 'required',
                    'abbreviation' => 'required',
                    'active_contract' => 'required',
                ]);
                
                $i=0;
                foreach ($validatedData as $validatedData2) {
                    $validateddata[$i]=$validatedData2;
                    $i++;
                }
                
                if (null !== Suppliers::find($validateddata[0]) && !empty(Suppliers::find($validateddata[0])) && null !== EnergyType::find($validateddata[1]) && !empty(EnergyType::find($validateddata[1])) && ($validateddata[3]==0 || $validateddata[3]==1) && $validateddata[4]>0 && $validateddata[4]<61 && ($validateddata[6]==0 || $validateddata[6]==1)) {
                    Contracts::create($validatedData);
                } else {
                    return redirect('/contractmod');
                }

                return redirect('/contractmod');
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect(RouteServiceProvider::LOGIN);
        }
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
                
                $contracttomod=Contracts::find($id);
                
                if ($contracttomod) {
                    $contracts=Contracts::all();
                    $suppliers=Suppliers::all();
                    $prices=Prices::all();
                    
                    return view('contractmod.edit', compact('contracttomod'), [
                        'contracts'=>$contracts,
                        'suppliers'=>$suppliers,
                        'prices'=>$prices,
                    ]);
                } else {
                    return redirect('/contractmod');
                }
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
        if (Auth::user()) {
            if (Auth::user()->is_admin==1) {
                
                $validated = $request->validate([
                    'suppliers_id' => 'required',
                    'energy_type_id' => 'required',
                    'contract_name' => 'required',
                    'var_fix' => 'required',
                    'time_contract' => 'required',
                    'abbreviation' => 'required',
                    'active_contract' => 'required',
                ]);
                
                $contracttomod = Contracts::findOrFail($id);
                
                $i=0;
                foreach ($validated as $validated2) {
                    $validateddata[$i]=$validated2;
                    $i++;
                }
                
                if (null !== Suppliers::find($validateddata[0]) && !empty(Suppliers::find($validateddata[0])) && null !== EnergyType::find($validateddata[1]) && !empty(EnergyType::find($validateddata[1])) && ($validateddata[3]==0 || $validateddata[3]==1) && $validateddata[4]>0 && $validateddata[4]<61 && ($validateddata[6]==0 || $validateddata[6]==1)) {
                    $contracttomod->update($validated);
                } else {
                    return redirect('/contractmod');
                }
                
                return redirect('/contractmod');
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect(RouteServiceProvider::LOGIN);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if (Auth::user()) {
            if (Auth::user()->is_admin==1) {
                $validated = $request->validate([
                    'deleted' => 'required',
                ]);
                
                $contracttodel = Contracts::findOrFail($id);
                $contracttodel->update($validated);
            
                return redirect('/contractmod');
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect(RouteServiceProvider::LOGIN);
        }
    }
}
