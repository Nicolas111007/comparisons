<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prices;
use App\Models\Contracts;
use App\Models\Suppliers;
use App\Models\Area;

class CompareResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area=$_POST['area'];
        $monobiday=$_POST['monobiday'];
        $binight=$_POST['binight'];
        $exclnight=$_POST['exclnight'];
        $suppliercont=$_POST['suppliercont'];
        $contbeg=$_POST['contbeg'];
        $gascons=$_POST['gascons'];
        $suppliercontgas=$_POST['suppliercontgas'];
        $contbeggas=$_POST['contbeggas'];
        $prices=Prices::all();
        $contracts1=Contracts::all();
        $elec_contracts=Contracts::where('energy_type_id','1')->get();
        $gas_contracts=Contracts::where('energy_type_id','2')->get();
        $elec_suppliers=Suppliers::all();
        $gas_suppliers=Suppliers::all();
        $area2=Area::all();
        $i=0;
        return view('compareresult', [
            'area'=>$area,
            'monobiday'=>$monobiday,
            'binight'=>$binight,
            'exclnight'=>$exclnight,
            'suppliercont'=>$suppliercont,
            'contbeg'=>$contbeg,
            'gascons'=>$gascons,
            'suppliercontgas'=>$suppliercontgas,
            'contbeggas'=>$contbeggas,
            'prices'=>$prices,
            'contracts1'=>$contracts1,
            'contracts2'=>$contracts1,
            'contracts3'=>$contracts1,
            'elec_contracts'=>$elec_contracts,
            'gas_contracts'=>$gas_contracts,
            'elec_suppliers'=>$elec_suppliers,
            'gas_suppliers'=>$gas_suppliers,
            'area2'=>$area2,
            'i'=>$i,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area=$_POST['area'];
        $monobiday=$_POST['monobiday'];
        $binight=$_POST['binight'];
        $exclnight=$_POST['exclnight'];
        $suppliercont=$_POST['suppliercont'];
        $contbeg=$_POST['contbeg'];
        $gascons=$_POST['gascons'];
        $suppliercontgas=$_POST['suppliercontgas'];
        $contbeggas=$_POST['contbeggas'];
        $prices=Prices::all();
        $contracts=Contracts::all();
        $contracts1=Contracts::all();
        $elec_contracts=Contracts::where('energy_type_id','1')->get();
        $gas_contracts=Contracts::where('energy_type_id','2')->get();
        $elec_suppliers=Suppliers::all();
        $gas_suppliers=Suppliers::all();
        $area2=Area::all();
        $i=0;
        return view('compareresult', [
            'area'=>$area,
            'monobiday'=>$monobiday,
            'binight'=>$binight,
            'exclnight'=>$exclnight,
            'suppliercont'=>$suppliercont,
            'contbeg'=>$contbeg,
            'gascons'=>$gascons,
            'suppliercontgas'=>$suppliercontgas,
            'contbeggas'=>$contbeggas,
            'prices'=>$prices,
            'contracts1'=>$contracts1,
            'contracts'=>$contracts,
            'contracts2'=>$contracts1,
            'contracts3'=>$contracts1,
            'elec_contracts'=>$elec_contracts,
            'gas_contracts'=>$gas_contracts,
            'elec_suppliers'=>$elec_suppliers,
            'gas_suppliers'=>$gas_suppliers,
            'area2'=>$area2,
            'i'=>$i,
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
