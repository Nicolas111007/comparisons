<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Prices;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices=Prices::select('contracts.contract_name as Contract name', 'area.area_name as Area', 'energy_type.energy_name as Type of energy', 'suppliers.supplier_name as Supplier\'s name', 'prices.var_fix as Variable / Fixed', 'prices.subscription as Subscription price', 'prices.mono as Monohorary price', 'prices.bi_day as Bi-hourly day price', 'prices.bi_night as Bi-hourly night price', 'prices.excl_night as Exclusive night price', 'prices.g_and_c_energy as Green energy & cogeneration prices', 'prices.date_price_val as Month of the price list')
        ->where('prices.deleted',0)
        ->join('contracts', 'prices.contract_id', 'contracts.id')
        ->join('area', 'prices.area_id', 'area.id')
        ->join('energy_type', 'prices.energy_type_id', 'energy_type.id')
        ->join('suppliers', 'prices.suppliers_id', 'suppliers.id')
        ->get();

        $i=0;
        foreach ($prices as $prices2) {
            if ($prices2['Variable / Fixed']==0) {
                $prices2['Variable / Fixed']='Variable';
            } else {
                $prices2['Variable / Fixed']='Fixed';
            }
            $prices[$i]=$prices2;
            $i++;
        }

        return response()->json([$prices]);
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
     * @param  \App\Models\Prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function show(Prices $prices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prices $prices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prices $prices)
    {
        //
    }
}
