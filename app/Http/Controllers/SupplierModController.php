<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Suppliers;

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
                
                return view('suppliermod.index', [
                    'suppliers'=>$suppliers,
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
                
                return view('suppliermod.create', [
                    'suppliers'=>$suppliers,
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
        $validated = $request->validate([
            'supplier_name' => 'required', 
            'active_supplier' => 'required',
        ]);

        //Le formulaire a été validé
        $suppliers = new Suppliers();

        $suppliers->supplier_name = $validated['supplier_name'];
        $suppliers->active_supplier = $validated['active_supplier'];

        $suppliers->save();

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
                $suppliers=Suppliers::all();
                $supplierstomod=Suppliers::findOrFail($id);
                
                return view('suppliermod.edit', compact('supplierstomod'), [
                    'suppliers'=>$suppliers,
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
            'supplier_name' => 'required', 
            'active_supplier' => 'required', 
        ]);

        //Le formulaire a été validé, nous récupérons le fournisseur à modifier
        $supplierstomod = Suppliers::findOrFail($id);
        
	    //Mise à jour des données modifiées et sauvegarde dans la base de données
        $supplierstomod->update($validated);

        return redirect('/suppliermod');
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
