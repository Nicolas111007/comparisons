<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\Suppliers;
use App\Models\Contracts;
use App\Models\Prices;
use App\Models\Area;
use App\Models\EnergyType;

class PriceModController extends Controller
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
                $area=Area::all();
                
                return view('pricemod.index', [
                    'suppliers'=>$suppliers,
                    'contracts'=>$contracts,
                    'prices'=>$prices,
                    'area'=>$area,
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
                $area=Area::all();

                return view('pricemod.create', [
                    'contracts'=>$contracts,
                    'suppliers'=>$suppliers,
                    'prices'=>$prices,
                    'area'=>$area,
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
                
                $request['date_price_val']=explode ('-', $request['date_price_val']);
                if ($request['date_price_val'][2]!='01') {
                    $request['date_price_val']=$request['date_price_val'][0] . '-' . $request['date_price_val'][1] . '-01';
                } else {
                    $request['date_price_val']=$request['date_price_val'][0] . '-' . $request['date_price_val'][1] . '-' . $request['date_price_val'][2];
                }
                
                if (null !== ($request['bi_day']) && !empty($request['bi_day']) && null !== ($request['bi_night']) && !empty($request['bi_night']) && null !== ($request['excl_night']) && !empty($request['excl_night']) && null !== ($request['g_and_c_energy']) && !empty($request['g_and_c_energy'])) {
                    $validatedData = $request->validate([
                        'contract_id' => 'required',
                        'area_id' => 'required',
                        'energy_type_id' => 'required',
                        'suppliers_id' => 'required',
                        'var_fix' => 'required',
                        'subscription' => 'required',
                        'mono' => 'required',
                        'bi_day' => 'required',
                        'bi_night' => 'required',
                        'excl_night' => 'required',
                        'g_and_c_energy' => 'required',
                        'date_price_val' => 'required',
                    ]);
                } else {
                    $validatedData = $request->validate([
                        'contract_id' => 'required',
                        'area_id' => 'required',
                        'energy_type_id' => 'required',
                        'suppliers_id' => 'required',
                        'var_fix' => 'required',
                        'subscription' => 'required',
                        'mono' => 'required',
                        'date_price_val' => 'required',
                    ]);
                }
                                
                $i=0;
                foreach ($validatedData as $validatedData2) {
                    $validateddata[$i]=$validatedData2;
                    $i++;
                }
                
                $today = date("Y-m-d"); 
                $today=explode ('-', $today);
                $today[0]=$today[0]-5;
                $fiveyearsago=$today[0] . '-' . $today[1] . '-' . $today[2];

                if ($i==8) {
                    if (null !== Contracts::find($validateddata[0]) && !empty(Contracts::find($validateddata[0])) && null !== Area::find($validateddata[1]) && !empty(Area::find($validateddata[1])) && null !== EnergyType::find($validateddata[2]) && !empty(EnergyType::find($validateddata[2])) && null !== Suppliers::find($validateddata[3]) && !empty(Suppliers::find($validateddata[3])) && ($validateddata[4]==0 || $validateddata[4]==1) && $validateddata[5]>0 && $validateddata[5]<=9999.9999999 && $validateddata[6]>0 && $validateddata[6]<=9999.9999999 && $validateddata[7]>=$fiveyearsago && $validateddata[7]<=date("Y-m-d")) {
                        Prices::create($validatedData);
                    } else {
                        return redirect('/pricemod');
                    }
                } else {
                    if (null !== Contracts::find($validateddata[0]) && !empty(Contracts::find($validateddata[0])) && null !== Area::find($validateddata[1]) && !empty(Area::find($validateddata[1])) && null !== EnergyType::find($validateddata[2]) && !empty(EnergyType::find($validateddata[2])) && null !== Suppliers::find($validateddata[3]) && !empty(Suppliers::find($validateddata[3])) && ($validateddata[4]==0 || $validateddata[4]==1) && $validateddata[5]>0 && $validateddata[5]<=9999.9999999 && $validateddata[6]>0 && $validateddata[6]<=9999.9999999 && $validateddata[7]>0 && $validateddata[7]<=9999.9999999 && $validateddata[8]>0 && $validateddata[8]<=9999.9999999 && $validateddata[9]>0 && $validateddata[9]<=9999.9999999 && $validateddata[10]>0 && $validateddata[10]<=9999.9999999 && $validateddata[11]>=$fiveyearsago && $validateddata[11]<=date("Y-m-d")) {
                        Prices::create($validatedData);
                    } else {
                        return redirect('/pricemod');
                    }
                }
                
                return redirect('/pricemod');
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
                
                $pricetomod=Prices::find($id);
                
                if ($pricetomod) {
                    $contracts=Contracts::all();
                    $suppliers=Suppliers::all();
                    $prices=Prices::all();
                    $area=Area::all();
                    
                    return view('pricemod.edit', compact('pricetomod'), [
                        'contracts'=>$contracts,
                        'suppliers'=>$suppliers,
                        'prices'=>$prices,
                        'area'=>$area,
                    ]);
                } else {
                    return redirect('/pricemod');
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
                
                $request['date_price_val']=explode ('-', $request['date_price_val']);
                if ($request['date_price_val'][2]!='01') {
                    $request['date_price_val']=$request['date_price_val'][0] . '-' . $request['date_price_val'][1] . '-01';
                } else {
                    $request['date_price_val']=$request['date_price_val'][0] . '-' . $request['date_price_val'][1] . '-' . $request['date_price_val'][2];
                }
                
                if (null !== ($request['bi_day']) && !empty($request['bi_day']) && null !== ($request['bi_night']) && !empty($request['bi_night']) && null !== ($request['excl_night']) && !empty($request['excl_night']) && null !== ($request['g_and_c_energy']) && !empty($request['g_and_c_energy'])) {
                    $validated = $request->validate([
                        'contract_id' => 'required',
                        'area_id' => 'required',
                        'energy_type_id' => 'required',
                        'suppliers_id' => 'required',
                        'var_fix' => 'required',
                        'subscription' => 'required',
                        'mono' => 'required',
                        'bi_day' => 'required',
                        'bi_night' => 'required',
                        'excl_night' => 'required',
                        'g_and_c_energy' => 'required',
                        'date_price_val' => 'required',
                    ]);
                } else {
                    $validated = $request->validate([
                        'contract_id' => 'required',
                        'area_id' => 'required',
                        'energy_type_id' => 'required',
                        'suppliers_id' => 'required',
                        'var_fix' => 'required',
                        'subscription' => 'required',
                        'mono' => 'required',
                        'date_price_val' => 'required',
                    ]);
                }
                
                $pricetomod=Prices::findOrFail($id);
                
                $i=0;
                foreach ($validated as $validated3) {
                    $validateddata[$i]=$validated3;
                    echo '<p>$validateddata[' . $i . ']: ' . $validateddata[$i] . '</p>';
                    $i++;
                }
                
                $today = date("Y-m-d"); 
                $today=explode ('-', $today);
                $today[0]=$today[0]-5;
                $fiveyearsago=$today[0] . '-' . $today[1] . '-' . $today[2];

                if ($i==8) {
                    if (null !== Contracts::find($validateddata[0]) && !empty(Contracts::find($validateddata[0])) && null !== Area::find($validateddata[1]) && !empty(Area::find($validateddata[1])) && null !== EnergyType::find($validateddata[2]) && !empty(EnergyType::find($validateddata[2])) && null !== Suppliers::find($validateddata[3]) && !empty(Suppliers::find($validateddata[3])) && ($validateddata[4]==0 || $validateddata[4]==1) && $validateddata[5]>0 && $validateddata[5]<=9999.9999999 && $validateddata[6]>0 && $validateddata[6]<=9999.9999999 && $validateddata[7]>=$fiveyearsago && $validateddata[7]<=date("Y-m-d")) {
                        $pricetomod->update($validated);
                    } else {
                        return redirect('/pricemod');
                    }
                } else {
                    if (null !== Contracts::find($validateddata[0]) && !empty(Contracts::find($validateddata[0])) && null !== Area::find($validateddata[1]) && !empty(Area::find($validateddata[1])) && null !== EnergyType::find($validateddata[2]) && !empty(EnergyType::find($validateddata[2])) && null !== Suppliers::find($validateddata[3]) && !empty(Suppliers::find($validateddata[3])) && ($validateddata[4]==0 || $validateddata[4]==1) && $validateddata[5]>0 && $validateddata[5]<=9999.9999999 && $validateddata[6]>0 && $validateddata[6]<=9999.9999999 && $validateddata[7]>0 && $validateddata[7]<=9999.9999999 && $validateddata[8]>0 && $validateddata[8]<=9999.9999999 && $validateddata[9]>0 && $validateddata[9]<=9999.9999999 && $validateddata[10]>0 && $validateddata[10]<=9999.9999999 && $validateddata[11]>=$fiveyearsago && $validateddata[11]<=date("Y-m-d")) {
                        $pricetomod->update($validated);
                    } else {
                        return redirect('/pricemod');
                    }
                }
                
                return redirect('/pricemod');
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
                
                $pricetodel = Prices::findOrFail($id);
                $pricetodel->update($validated);
            
                return redirect('/pricemod');
            } else {
                return redirect(RouteServiceProvider::HOME);
            }
        } else {
            return redirect(RouteServiceProvider::LOGIN);
        }
    }
}
