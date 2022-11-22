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
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prices  $prices
     * @return \Illuminate\Http\Response
     */
    public function asn(Prices $prices)
    {
        $url=explode("/", $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
        
        $area=-1;
        $supp_name=-1;
        $var_fix=-1;
        $month=-1;
        $energy_type=-1;
        
        if (count($url)==13) {
            // 5
            $area=$url[4];
            $supp_name=$url[6];
            $var_fix=$url[8];
            $month=$url[10];
            $energy_type=$url[12];
        } else {
            for ($i=3;$i<=count($url)-2;$i+=2) {
                $j=$i+1;
                switch ($url[$i]) {
                    case 'area':
                        $area=$url[$j];
                        break;
                    case 'supp_name':
                        $supp_name=$url[$j];
                        break;
                    case 'var_fix':
                        $var_fix=$url[$j];
                        break;
                    case 'month':
                        $month=$url[$j];
                        break;
                    case 'energy_type':
                        $energy_type=$url[$j];
                        break;
                }
            }
        }

        if ($supp_name=='Octa+') {
            $supp_name='Octa +';
        }
        if ($var_fix=='v' || $var_fix=='V') {
            $var_fix=0;
        } else if ($var_fix=='f' || $var_fix=='F') {
            $var_fix=1;
        }
        if (strlen($month)==2 AND $month!=-1) {
            $monthtemp='2022-' . $month . '-01';
            $month=$monthtemp;
        } else if (strlen($month)==10) {
            $month=explode("-",$month);
            $month=$month[0] . '-' . $month[1] . '-01';
        }
        if ($energy_type=='e' || $energy_type=='E') {
            $energy_type=1;
        } else if ($energy_type=='g' || $energy_type=='G') {
            $energy_type=2;
        }
        
        $prices=Prices::select('contracts.contract_name as Contract name', 'area.area_name as Area', 'energy_type.energy_name as Type of energy', 'suppliers.supplier_name as Supplier\'s name', 'prices.var_fix as Variable / Fixed', 'prices.subscription as Subscription price', 'prices.mono as Monohorary price', 'prices.bi_day as Bi-hourly day price', 'prices.bi_night as Bi-hourly night price', 'prices.excl_night as Exclusive night price', 'prices.g_and_c_energy as Green energy & cogeneration prices', 'prices.date_price_val as Month of the price list')
        ->where('prices.deleted',0)
        ->when($area!=-1, function ($query) use ($area) {
            return $query->where('area.area_name',$area);
        })
        ->when($supp_name!=-1, function ($query) use ($supp_name) {
            return $query->where('suppliers.supplier_name',$supp_name);
        })
        ->when($var_fix!=-1, function ($query) use ($var_fix) {
            return $query->where('prices.var_fix', $var_fix);
        })
        ->when($month!=-1, function ($query) use ($month) {
            return $query->where('prices.date_price_val', $month);
        })
        ->when($energy_type!=-1, function ($query) use ($energy_type) {
            return $query->where('prices.energy_type_id', $energy_type);
        })
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
}
