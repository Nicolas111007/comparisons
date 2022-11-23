<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PricesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('prices', PricesController::class);

if (strpos($_SERVER['REQUEST_URI'],'area') || strpos($_SERVER['REQUEST_URI'],'supp_name') || strpos($_SERVER['REQUEST_URI'],'var_fix') || strpos($_SERVER['REQUEST_URI'],'month') || strpos($_SERVER['REQUEST_URI'],'energy_type')) {
    
    $areavalue=-1;
    $supp_namevalue=-1;
    $var_fixvalue=-1;
    $monthvalue=-1;
    $energy_typevalue=-1;
    $url=explode("/", $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    for ($i=3;$i<=count($url)-2;$i+=2) {
        $j=$i+1;
        switch ($url[$i]) {
            case 'area':
                $areavalue=$url[$j];
                break;
            case 'supp_name':
                $supp_namevalue=$url[$j];
                break;
            case 'var_fix':
                $var_fixvalue=$url[$j];
                break;
            case 'month':
                $monthvalue=$url[$j];
                break;
            case 'energy_type':
                $energy_typevalue=$url[$j];
                break;
        }
    }
    $area='area';
    $supp_name='supp_name';
    $var_fix='var_fix';
    $month='month';
    $energy_type='energy_type';
    $routetest='/prices';
    $routefin='/api/prices';

    if ($areavalue!=-1) {
        $routetest.= '/' . $area . '/' . $areavalue;
        $routefin.= '/' . $area.'/'.$areavalue;
    }
    if ($supp_namevalue!=-1) {
        $routetest.= '/' . $supp_name . '/' . $supp_namevalue;
        $routefin.= '/' . $supp_name.'/'.$supp_namevalue;
    }
    if ($var_fixvalue!=-1) {
        $routetest.= '/' . $var_fix . '/' . $var_fixvalue;
        $routefin.= '/' . $var_fix . '/' . $var_fixvalue;
    }
    if ($monthvalue!=-1) {
        $routetest.= '/' . $month . '/' . $monthvalue;
        $routefin.= '/' . $month . '/' . $monthvalue;
    }
    if ($energy_typevalue!=-1) {
        $routetest.= '/' . $energy_type . '/' . $energy_typevalue;
        $routefin.= '/' . $energy_type . '/' . $energy_typevalue;
    }
    if ($routefin!=$_SERVER['REQUEST_URI']) {
        header("refresh:0;url=$routefin");
    }
    Route::get($routetest, [PricesController::class, 'asn'])
        ->name('prices.asn');
}