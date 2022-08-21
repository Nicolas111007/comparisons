<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Suppliers;
use App\Models\Contracts;

class SupplierModController extends Controller
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
                
                return view('suppliermod.index', [
                    'suppliers'=>$suppliers,
                    'contracts'=>$contracts,
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
                $suppliers=Suppliers::all();
                $contracts=Contracts::all();
                
                return view('suppliermod.create', [
                    'suppliers'=>$suppliers,
                    'contracts'=>$contracts,
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
                    'supplier_name' => 'required',
                    'active_supplier' => 'required',
                ]);
                
                $i=0;
                foreach ($validatedData as $validatedData2) {
                    $validateddata[$i]=$validatedData2;
                    $i++;
                }
                
                if ($validateddata[1]==0 || $validateddata[1]==1) {
                    Suppliers::create($validatedData);
                } else {
                    return redirect('/suppliermod');
                }

                return redirect('/suppliermod');
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
                
                $suppliertomod=Suppliers::find($id);
                
                if ($suppliertomod) {
                    $suppliers=Suppliers::all();
                    $contracts=Contracts::all();
                    return view('suppliermod.edit', compact('suppliertomod'), [
                        'suppliers'=>$suppliers,
                        'contracts'=>$contracts,
                    ]);
                } else {
                    return redirect('/suppliermod');
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
                    'supplier_name' => 'required',
                    'active_supplier' => 'required',
                ]);

                $suppliertomod = Suppliers::findOrFail($id);
                
                $i=0;
                foreach ($validated as $validated2) {
                    $validateddata[$i]=$validated2;
                    echo '<p>$validateddata[' . $i . ']: ' . $validateddata[$i] . '</p>';
                    $i++;
                }
                
                if ($validateddata[1]==0 || $validateddata[1]==1) {
                    $suppliertomod->update($validated);
                } else {
                    return redirect('/suppliermod');
                }
                
                return redirect('/suppliermod');
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
                
                $suppliertodel = Suppliers::findOrFail($id);
                $suppliertodel->update($validated);
            
                return redirect('/suppliermod');
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect(RouteServiceProvider::LOGIN);
        }
    }
}
