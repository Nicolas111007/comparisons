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
        $elec_prices_compare=Prices::all();
        $gas_prices_compare=Prices::all();
        $contracts=Contracts::all();
        $contracts1=Contracts::all();
        $elec_contracts=Contracts::where('energy_type_id','1')->get();
        $gas_contracts=Contracts::where('energy_type_id','2')->get();
        $elec_suppliers=Suppliers::all();
        $gas_suppliers=Suppliers::all();
        $area2=Area::all();
        $i=0;
        foreach ($elec_prices_compare as $elec_prices_compare){
            if ($area==$elec_prices_compare['area_id'] && $elec_prices_compare['energy_type_id']==1 && $elec_prices_compare['date_price_val']=='2022-04-01' && $elec_prices_compare['var_fix']==0 && $elec_prices_compare['contract_id']!=$suppliercont) {
                $sorted_elec_prices_compare[$i]=$elec_prices_compare;
                $i++;
            } else if ($area==$elec_prices_compare['area_id'] && $elec_prices_compare['energy_type_id']==1 && $elec_prices_compare['date_price_val']==$contbeg && $elec_prices_compare['var_fix']==1 && $elec_prices_compare['contract_id']!=$suppliercont) {
                $sorted_elec_prices_compare[$i]=$elec_prices_compare;
                $i++;
            }
            
        }
        $supp_tab=$i;
        
        for ($i=0;$i<$supp_tab-1;$i++){
            for ($j=0;$j<$supp_tab-1;$j++){
                if ($binight==0){
                    if (($sorted_elec_prices_compare[$j]['subscription']+($monobiday*$sorted_elec_prices_compare[$j]['mono'])+($binight*$sorted_elec_prices_compare[$j]['bi_night'])+($exclnight*$sorted_elec_prices_compare[$j]['excl_night'])+($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare[$j]['g_and_c_energy'])<($sorted_elec_prices_compare[$j+1]['subscription']+($monobiday*$sorted_elec_prices_compare[$j+1]['mono'])+($binight*$sorted_elec_prices_compare[$j+1]['bi_night'])+($exclnight*$sorted_elec_prices_compare[$j+1]['excl_night'])+($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare[$j+1]['g_and_c_energy'])){
                        
                    } else {
                        $temp=$sorted_elec_prices_compare[$j];
                        $sorted_elec_prices_compare[$j]=$sorted_elec_prices_compare[$j+1];
                        $sorted_elec_prices_compare[$j+1]=$temp;
                    }
                } else {
                    if (($sorted_elec_prices_compare[$j]['subscription']+($monobiday*$sorted_elec_prices_compare[$j]['bi_day'])+($binight*$sorted_elec_prices_compare[$j]['bi_night'])+($exclnight*$sorted_elec_prices_compare[$j]['excl_night'])+($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare[$j]['g_and_c_energy'])<($sorted_elec_prices_compare[$j+1]['subscription']+($monobiday*$sorted_elec_prices_compare[$j+1]['bi_day'])+($binight*$sorted_elec_prices_compare[$j+1]['bi_night'])+($exclnight*$sorted_elec_prices_compare[$j+1]['excl_night'])+($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare[$j+1]['g_and_c_energy'])){
                        
                    } else {
                        $temp=$sorted_elec_prices_compare[$j];
                        $sorted_elec_prices_compare[$j]=$sorted_elec_prices_compare[$j+1];
                        $sorted_elec_prices_compare[$j+1]=$temp;
                    }
                }
            }
        }
        
        $i=0;
        foreach ($gas_prices_compare as $gas_prices_compare){
            if ($area==$gas_prices_compare['area_id'] && $gas_prices_compare['energy_type_id']==2 && $gas_prices_compare['date_price_val']=='2022-04-01' && $gas_prices_compare['var_fix']==0 && $gas_prices_compare['contract_id']!=$suppliercontgas) {
                $sorted_gas_prices_compare[$i]=$gas_prices_compare;
                $i++;
            } else if ($area==$gas_prices_compare['area_id'] && $gas_prices_compare['energy_type_id']==2 && $gas_prices_compare['date_price_val']==$contbeggas && $gas_prices_compare['var_fix']==1 && $gas_prices_compare['contract_id']!=$suppliercontgas) {
                $sorted_gas_prices_compare[$i]=$gas_prices_compare;
                $i++;
            }
            
        }
        $supp_tab=$i;
        
        for ($i=0;$i<$supp_tab-1;$i++){
            for ($j=0;$j<$supp_tab-1;$j++){
                if ($binight==0){
                    if (($sorted_gas_prices_compare[$j]['subscription']+($gascons*$sorted_gas_prices_compare[$j]['mono']))<($sorted_gas_prices_compare[$j+1]['subscription']+($gascons*$sorted_gas_prices_compare[$j+1]['mono']))){
                        
                    } else {
                        $temp=$sorted_gas_prices_compare[$j];
                        $sorted_gas_prices_compare[$j]=$sorted_gas_prices_compare[$j+1];
                        $sorted_gas_prices_compare[$j+1]=$temp;
                    }
                } else {
                    if (($sorted_gas_prices_compare[$j]['subscription']+($gascons*$sorted_gas_prices_compare[$j]['mono']))<($sorted_gas_prices_compare[$j+1]['subscription']+($gascons*$sorted_gas_prices_compare[$j+1]['mono']))){
                        
                    } else {
                        $temp=$sorted_gas_prices_compare[$j];
                        $sorted_gas_prices_compare[$j]=$sorted_gas_prices_compare[$j+1];
                        $sorted_gas_prices_compare[$j+1]=$temp;
                    }
                }
            }
        }
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
            'elec_contracts2'=>$elec_contracts,
            'gas_contracts'=>$gas_contracts,
            'gas_contracts2'=>$gas_contracts,
            'elec_suppliers'=>$elec_suppliers,
            'gas_suppliers'=>$gas_suppliers,
            'area2'=>$area2,
            'i'=>$i,
            'sorted_elec_prices_compare'=>$sorted_elec_prices_compare,
            'sorted_gas_prices_compare'=>$sorted_gas_prices_compare,
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
