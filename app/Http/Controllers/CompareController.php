<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PcLocality;
use App\Models\Area;
use App\Models\Contracts;
use App\Models\Suppliers;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locality=PcLocality::all();
        $area=Area::all();
        $contracts=Contracts::all();
        $contracts2=Contracts::where('energy_type_id', '1')->get();
        $contracts_en1_supp1=Contracts::where([['energy_type_id', '1'],['suppliers_id', '1'],['active_contract', '1']])->get();
        $contracts_en1_supp2=Contracts::where([['energy_type_id', '1'],['suppliers_id', '2'],['active_contract', '1']])->get();
        $contracts_en1_supp3=Contracts::where([['energy_type_id', '1'],['suppliers_id', '3'],['active_contract', '1']])->get();
        $contracts_en1_supp4=Contracts::where([['energy_type_id', '1'],['suppliers_id', '4'],['active_contract', '1']])->get();
        $contracts_en1_supp5=Contracts::where([['energy_type_id', '1'],['suppliers_id', '5'],['active_contract', '1']])->get();
        $contracts_en1_supp6=Contracts::where([['energy_type_id', '1'],['suppliers_id', '6'],['active_contract', '1']])->get();
        $contracts_en1_supp7=Contracts::where([['energy_type_id', '1'],['suppliers_id', '7'],['active_contract', '1']])->get();
        $contracts_en1_supp8=Contracts::where([['energy_type_id', '1'],['suppliers_id', '8'],['active_contract', '1']])->get();
        $contracts_en1_supp9=Contracts::where([['energy_type_id', '1'],['suppliers_id', '9'],['active_contract', '1']])->get();
        $contracts_en1_supp10=Contracts::where([['energy_type_id', '1'],['suppliers_id', '10'],['active_contract', '1']])->get();
        $contracts_en1_supp11=Contracts::where([['energy_type_id', '1'],['suppliers_id', '11'],['active_contract', '1']])->get();
        $contracts_en1_supp12=Contracts::where([['energy_type_id', '1'],['suppliers_id', '12'],['active_contract', '1']])->get();
        $contracts_en2_supp1=Contracts::where([['energy_type_id', '2'],['suppliers_id', '1'],['active_contract', '1']])->get();
        $contracts_en2_supp2=Contracts::where([['energy_type_id', '2'],['suppliers_id', '2'],['active_contract', '1']])->get();
        $contracts_en2_supp3=Contracts::where([['energy_type_id', '2'],['suppliers_id', '3'],['active_contract', '1']])->get();
        $contracts_en2_supp4=Contracts::where([['energy_type_id', '2'],['suppliers_id', '4'],['active_contract', '1']])->get();
        $contracts_en2_supp5=Contracts::where([['energy_type_id', '2'],['suppliers_id', '5'],['active_contract', '1']])->get();
        $contracts_en2_supp6=Contracts::where([['energy_type_id', '2'],['suppliers_id', '6'],['active_contract', '1']])->get();
        $contracts_en2_supp7=Contracts::where([['energy_type_id', '2'],['suppliers_id', '7'],['active_contract', '1']])->get();
        $contracts_en2_supp8=Contracts::where([['energy_type_id', '2'],['suppliers_id', '8'],['active_contract', '1']])->get();
        $contracts_en2_supp9=Contracts::where([['energy_type_id', '2'],['suppliers_id', '9'],['active_contract', '1']])->get();
        $contracts_en2_supp10=Contracts::where([['energy_type_id', '2'],['suppliers_id', '10'],['active_contract', '1']])->get();
        $contracts_en2_supp11=Contracts::where([['energy_type_id', '2'],['suppliers_id', '11'],['active_contract', '1']])->get();
        $contracts_en2_supp12=Contracts::where([['energy_type_id', '2'],['suppliers_id', '12'],['active_contract', '1']])->get();
        $contracts_2=Contracts::where('energy_type_id', '2')->get();
        $suppliers=Suppliers::where ('active_supplier', '1')->orderBy('supplier_name', 'ASC')->get();
        $suppliersgas=Suppliers::where ('active_supplier', '1')->orderBy('supplier_name', 'ASC')->get();
        
        return view('compare.compare',[
            'area' => $area,
            'locality' => $locality,
            'contracts_2'=>$contracts_2,
            'suppliers'=>$suppliers,
            'suppliersgas'=>$suppliersgas,
            'contracts'=>$contracts,
            'contracts2'=>$contracts2,
            'contracts_en1_supp1'=>$contracts_en1_supp1,
            'contracts_en1_supp2'=>$contracts_en1_supp2,
            'contracts_en1_supp3'=>$contracts_en1_supp3,
            'contracts_en1_supp4'=>$contracts_en1_supp4,
            'contracts_en1_supp5'=>$contracts_en1_supp5,
            'contracts_en1_supp6'=>$contracts_en1_supp6,
            'contracts_en1_supp7'=>$contracts_en1_supp7,
            'contracts_en1_supp8'=>$contracts_en1_supp8,
            'contracts_en1_supp9'=>$contracts_en1_supp9,
            'contracts_en1_supp10'=>$contracts_en1_supp10,
            'contracts_en1_supp11'=>$contracts_en1_supp11,
            'contracts_en1_supp12'=>$contracts_en1_supp12,
            'contracts_en2_supp1'=>$contracts_en2_supp1,
            'contracts_en2_supp2'=>$contracts_en2_supp2,
            'contracts_en2_supp3'=>$contracts_en2_supp3,
            'contracts_en2_supp4'=>$contracts_en2_supp4,
            'contracts_en2_supp5'=>$contracts_en2_supp5,
            'contracts_en2_supp6'=>$contracts_en2_supp6,
            'contracts_en2_supp7'=>$contracts_en2_supp7,
            'contracts_en2_supp8'=>$contracts_en2_supp8,
            'contracts_en2_supp9'=>$contracts_en2_supp9,
            'contracts_en2_supp10'=>$contracts_en2_supp10,
            'contracts_en2_supp11'=>$contracts_en2_supp11,
            'contracts_en2_supp12'=>$contracts_en2_supp12,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locality=PcLocality::all();
        $area=Area::all();
        $contracts=Contracts::all();
        $contracts2=Contracts::where('energy_type_id', '1')->get();
        $contracts_en1_supp1=Contracts::where([['energy_type_id', '1'],['suppliers_id', '1'],['active_contract', '1']])->get();
        $contracts_en1_supp2=Contracts::where([['energy_type_id', '1'],['suppliers_id', '2'],['active_contract', '1']])->get();
        $contracts_en1_supp3=Contracts::where([['energy_type_id', '1'],['suppliers_id', '3'],['active_contract', '1']])->get();
        $contracts_en1_supp4=Contracts::where([['energy_type_id', '1'],['suppliers_id', '4'],['active_contract', '1']])->get();
        $contracts_en1_supp5=Contracts::where([['energy_type_id', '1'],['suppliers_id', '5'],['active_contract', '1']])->get();
        $contracts_en1_supp6=Contracts::where([['energy_type_id', '1'],['suppliers_id', '6'],['active_contract', '1']])->get();
        $contracts_en1_supp7=Contracts::where([['energy_type_id', '1'],['suppliers_id', '7'],['active_contract', '1']])->get();
        $contracts_en1_supp8=Contracts::where([['energy_type_id', '1'],['suppliers_id', '8'],['active_contract', '1']])->get();
        $contracts_en1_supp9=Contracts::where([['energy_type_id', '1'],['suppliers_id', '9'],['active_contract', '1']])->get();
        $contracts_en1_supp10=Contracts::where([['energy_type_id', '1'],['suppliers_id', '10'],['active_contract', '1']])->get();
        $contracts_en1_supp11=Contracts::where([['energy_type_id', '1'],['suppliers_id', '11'],['active_contract', '1']])->get();
        $contracts_en1_supp12=Contracts::where([['energy_type_id', '1'],['suppliers_id', '12'],['active_contract', '1']])->get();
        $contracts_en2_supp1=Contracts::where([['energy_type_id', '2'],['suppliers_id', '1'],['active_contract', '1']])->get();
        $contracts_en2_supp2=Contracts::where([['energy_type_id', '2'],['suppliers_id', '2'],['active_contract', '1']])->get();
        $contracts_en2_supp3=Contracts::where([['energy_type_id', '2'],['suppliers_id', '3'],['active_contract', '1']])->get();
        $contracts_en2_supp4=Contracts::where([['energy_type_id', '2'],['suppliers_id', '4'],['active_contract', '1']])->get();
        $contracts_en2_supp5=Contracts::where([['energy_type_id', '2'],['suppliers_id', '5'],['active_contract', '1']])->get();
        $contracts_en2_supp6=Contracts::where([['energy_type_id', '2'],['suppliers_id', '6'],['active_contract', '1']])->get();
        $contracts_en2_supp7=Contracts::where([['energy_type_id', '2'],['suppliers_id', '7'],['active_contract', '1']])->get();
        $contracts_en2_supp8=Contracts::where([['energy_type_id', '2'],['suppliers_id', '8'],['active_contract', '1']])->get();
        $contracts_en2_supp9=Contracts::where([['energy_type_id', '2'],['suppliers_id', '9'],['active_contract', '1']])->get();
        $contracts_en2_supp10=Contracts::where([['energy_type_id', '2'],['suppliers_id', '10'],['active_contract', '1']])->get();
        $contracts_en2_supp11=Contracts::where([['energy_type_id', '2'],['suppliers_id', '11'],['active_contract', '1']])->get();
        $contracts_en2_supp12=Contracts::where([['energy_type_id', '2'],['suppliers_id', '12'],['active_contract', '1']])->get();
        $contracts_2=Contracts::where('energy_type_id', '2')->get();
        $suppliers=Suppliers::where ('active_supplier', '1')->orderBy('supplier_name', 'ASC')->get();
        $suppliersgas=Suppliers::where ('active_supplier', '1')->orderBy('supplier_name', 'ASC')->get();
        
        return view('compare.compare',[
            'area' => $area,
            'locality' => $locality,
            'contracts_2'=>$contracts_2,
            'suppliers'=>$suppliers,
            'suppliersgas'=>$suppliersgas,
            'contracts'=>$contracts,
            'contracts2'=>$contracts2,
            'contracts_en1_supp1'=>$contracts_en1_supp1,
            'contracts_en1_supp2'=>$contracts_en1_supp2,
            'contracts_en1_supp3'=>$contracts_en1_supp3,
            'contracts_en1_supp4'=>$contracts_en1_supp4,
            'contracts_en1_supp5'=>$contracts_en1_supp5,
            'contracts_en1_supp6'=>$contracts_en1_supp6,
            'contracts_en1_supp7'=>$contracts_en1_supp7,
            'contracts_en1_supp8'=>$contracts_en1_supp8,
            'contracts_en1_supp9'=>$contracts_en1_supp9,
            'contracts_en1_supp10'=>$contracts_en1_supp10,
            'contracts_en1_supp11'=>$contracts_en1_supp11,
            'contracts_en1_supp12'=>$contracts_en1_supp12,
            'contracts_en2_supp1'=>$contracts_en2_supp1,
            'contracts_en2_supp2'=>$contracts_en2_supp2,
            'contracts_en2_supp3'=>$contracts_en2_supp3,
            'contracts_en2_supp4'=>$contracts_en2_supp4,
            'contracts_en2_supp5'=>$contracts_en2_supp5,
            'contracts_en2_supp6'=>$contracts_en2_supp6,
            'contracts_en2_supp7'=>$contracts_en2_supp7,
            'contracts_en2_supp8'=>$contracts_en2_supp8,
            'contracts_en2_supp9'=>$contracts_en2_supp9,
            'contracts_en2_supp10'=>$contracts_en2_supp10,
            'contracts_en2_supp11'=>$contracts_en2_supp11,
            'contracts_en2_supp12'=>$contracts_en2_supp12,
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
        $request->validate([
            'area' => ['required', 'int', 'max:20'],
            'monobiday' => ['required', 'int', 'max=99999', 'maxlength:5'],
            'binight' => ['int', 'max=99999', 'maxlength:5'],
            'exclnight' => ['int', 'max=99999', 'maxlength:5'],
            'gascons' => ['required', 'int', 'max=49999', 'maxlength:4'],
        ]);
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
