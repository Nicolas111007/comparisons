<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__("Résultat de la comparaison")}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%;background: url(/images/home.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}tr:nth-child(even){background-color: rgb(148 163 184);}tr:nth-child(odd){background-color: rgb(255 255 255);}tr:nth-child(25n+1){background-color: transparent;}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased my-36">
        @include('menu')
        <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 mt-36">
            <div class="w-full space-y-8">
                <h2 class="text-center underline font-bold"><span class="bg-white p-2 rounded-lg">{{__("Données fournies")}}</span></h2>
                
                <div>
                    <p class="text-center font-bold">
                        {{__("Région:")}} 
                            @foreach ($area2 as $area2)
                            @if ($area == $area2['id'])
                                {{$area2['area_name']}}
                            @endif
                        @endforeach
                    </p>
                </div>

                <table class="container mx-auto max-w-5xl">
                    <tr></tr>
                    <tr>
                        <th colspan=2>{{__("Électricité")}}</th>
                        <th colspan=2>{{__("Gaz")}}</th>
                    </tr>
                    <tr>
                        @if ($binight==0)
                            <td>{{__("Consommation mono-horaire")}}</td>
                        @else
                            <td>{{__("Consommation bi-horaire jour")}}</td>
                        @endif
                        <td>{{$monobiday}}</td>
                        <td>{{__("Consommation de gaz (kWh)")}}</td>
                        <td>{{$gascons}}</td>
                    </tr>
                    @if ($binight==0)
                            
                    @else
                        <tr>
                            <td>{{__("Consommation bi-horaire nuit")}}</td>
                            <td>{{$binight}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                    
                    @if ($exclnight==0)
                            
                    @else
                        <tr>
                            <td>{{__("Consommation exclusif nuit")}}</td>
                            <td>{{$exclnight}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                    <tr>
                        <td>{{__("Fournisseur")}}</td>
                        
                        @foreach ($contracts1 as $contracts1)
                            @foreach ($elec_suppliers as $elec_suppliers1)
                                @if ($suppliercont == $contracts1['id'])
                                    @if ($contracts1['suppliers_id'] == $elec_suppliers1['id'])
                                        <td>{{$elec_suppliers1['supplier_name']}}</td>
                                    @endif
                                @endif 
                            @endforeach
                        @endforeach

                        <td>{{__("Fournisseur")}}</td>

                        @foreach ($contracts2 as $contracts2)
                            @foreach ($gas_suppliers as $gas_suppliers1)
                                @if ($suppliercontgas == $contracts2['id'])
                                    @if ($contracts2['suppliers_id'] == $gas_suppliers1['id'])
                                        <td>{{$gas_suppliers1['supplier_name']}}</td>
                                    @endif
                                @endif 
                            @endforeach
                        @endforeach


                    </tr>
                    <tr>
                        <td>{{__("Nom du contrat")}}</td>
                        
                        @foreach ($elec_contracts as $elec_contracts)
                            @if ($suppliercont == $elec_contracts['id'])    
                                <td>{{$elec_contracts['contract_name']}}</td>
                            @endif
                        @endforeach

                        <td>{{__("Nom du contrat")}}</td>
                        
                        @foreach ($gas_contracts as $gas_contracts)
                            @if ($suppliercontgas == $gas_contracts['id'])    
                                <td>{{$gas_contracts['contract_name']}}</td>
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        <td>{{__("Début de contrat")}}</td>
                        <td>{{$contbeg}}</td>
                        <td>{{__("Début de contrat")}}</td>
                        <td>{{$contbeggas}}</td>
                    </tr>
                </table>
                
                <div class="flex items-center justify-center mt-4">
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-sky-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4 bg-gray-900" href="{{ route('compare')}}" class="btn btn-success">{{__("Nouvelle comparaison")}}</a>
                </div>
                
                <div class="container mx-auto max-w-5xl">
                    <p class="text-center underline font-bold"><span class="bg-white p-2 rounded-lg">{{__("Prix de vos contrats")}}</span></p>
                    <div class="mt-6">
                        <table class="border-collapse w-full">
                            <tr>
                                <td>
                                    @foreach ($prices as $prices2)
                                            
                                        @if ($prices2['var_fix']==0 && $prices2['contract_id']==$suppliercont && $prices2['date_price_val']=='2022-04-01' && $prices2['area_id']==$area)
                                            <table class="w-full">
                                                <tr></tr>
                                                <tr>
                                                    <th colspan=3>{{__("Électricité")}}</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th>{{__("€ / kWh")}}</th>
                                                    <th>{{__("Coût")}}</th>
                                                </tr>
                                                
                                                <tr>
                                                    <td>{{__("Abonnement")}}</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription']/($monobiday+$binight+$exclnight),4),4,',','.')}} €</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription'],2),2,',','.')}} €</td>
                                                </tr>
                                                <tr>
                                                    @if ($binight==0)
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($monobiday*$prices2['mono'],2),2,',','.')}} €</td>
                                                    @else
                                                        <td>{{__("Bi-horaire jour")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['bi_day'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($monobiday*$prices2['bi_day'],2),2,',','.')}} €</td>
                                                    @endif
                                                    
                                                    
                                                </tr>
                                                @if ($binight==0)
                                                        
                                                @else
                                                    <tr>
                                                        <td>{{__("Bi-horaire nuit")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['bi_night'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($binight*$prices2['bi_night'],2),2,',','.')}} €</td>
                                                    </tr>
                                                @endif
                                                
                                                @if ($exclnight==0)
                                                        
                                                @else
                                                    <tr>
                                                        <td>{{__("Exclusif nuit")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['excl_night'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($exclnight*$prices2['excl_night'],2),2,',','.')}} €</td>
                                                        
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td>{{__("Coût énergie verte")}}</td>
                                                    <td class="text-right">{{number_format(round($prices2['g_and_c_energy'],4),4,',','.')}} €</td>
                                                    <td class="text-right">{{number_format(round(($monobiday+$binight+$exclnight)*$prices2['g_and_c_energy'],2),2,',','.')}} €</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                    @if ($binight==0)
                                                        <td class="text-right font-bold">{{number_format(round($prices2['subscription']+($monobiday*$prices2['mono'])+($binight*$prices2['bi_night'])+($exclnight*$prices2['excl_night'])+(($monobiday+$binight+$exclnight)*$prices2['g_and_c_energy']),2),2,',','.')}} €</td>
                                                    @else
                                                        <td class="text-right font-bold">{{number_format(round($prices2['subscription']+($monobiday*$prices2['bi_day'])+($binight*$prices2['bi_night'])+($exclnight*$prices2['excl_night'])+(($monobiday+$binight+$exclnight)*$prices2['g_and_c_energy']),2),2,',','.')}} €</td>
                                                    @endif
                                                </tr>
                                            </table>

                                        
                                        @elseif ($prices2['var_fix']==1 && $prices2['contract_id']==$suppliercont && $prices2['date_price_val']==$contbegmod && $prices2['area_id']==$area)
                                            <table class="w-full">
                                                <tr class="h-6"></tr>
                                                <tr>
                                                    <th colspan=3>{{__("Électricité")}}</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th>{{__("€ / kWh")}}</th>
                                                    <th>{{__("Coût")}}</th>
                                                </tr>
                                                <tr>
                                                    <td>{{__("Abonnement")}}</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription']/($monobiday+$binight+$exclnight),4),4,',','.')}} €</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription'],2),2,',','.')}} €</td>
                                                </tr>
                                                <tr>
                                                    @if ($binight==0)
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($monobiday*$prices2['mono'],2),2,',','.')}} €</td>
                                                    @else
                                                        <td>{{__("Bi-horaire jour")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['bi_day'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($monobiday*$prices2['bi_day'],2),2,',','.')}} €</td>
                                                    @endif
                                                    
                                                    
                                                </tr>
                                                @if ($binight==0)
                                                        
                                                @else
                                                    <tr>
                                                        <td>{{__("Bi-horaire nuit")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['bi_night'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($binight*$prices2['bi_night'],2),2,',','.')}} €</td>
                                                        
                                                    </tr>
                                                @endif
                                                
                                                @if ($exclnight==0)
                                                        
                                                @else
                                                    <tr>
                                                        <td>{{__("Exclusif nuit")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['excl_night'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($exclnight*$prices2['excl_night'],2),2,',','.')}} €</td>
                                                        
                                                    </tr>
                                                @endif
                                                <tr>
                                                    <td>{{__("Coût énergie verte")}}</td>
                                                    <td class="text-right">{{number_format(round($prices2['g_and_c_energy'],4),4,',','.')}} €</td>
                                                    <td class="text-right">{{number_format(round(($monobiday+$binight+$exclnight)*$prices2['g_and_c_energy'],2),2,',','.')}} €</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                    @if ($binight==0)
                                                        <td class="text-right font-bold">{{number_format(round($prices2['subscription']+($monobiday*$prices2['mono'])+($binight*$prices2['bi_night'])+($exclnight*$prices2['excl_night'])+(($monobiday+$binight+$exclnight)*$prices2['g_and_c_energy']),2),2,',','.')}} €</td>
                                                    @else
                                                        <td class="text-right font-bold">{{number_format(round($prices2['subscription']+($monobiday*$prices2['bi_day'])+($binight*$prices2['bi_night'])+($exclnight*$prices2['excl_night'])+(($monobiday+$binight+$exclnight)*$prices2['g_and_c_energy']),2),2,',','.')}} €</td>
                                                    @endif
                                                </tr>
                                            </table>

                                        @else
                                            @php
                                                $i++;
                                            @endphp
                                        @endif
                                    @endforeach
                                    
                                    @if ($i==count($prices))
                                        <h3 class="underline font-bold text-sky-400 text-center">{{__("Électricité")}}</h3>
                                        <p class="font-bold text-red-600 text-center">{{__("Ce contrat n'existe pas dans votre région")}}</p>
                                    @endif
                                </td>
                                
                                <td>
                                    @foreach ($prices as $prices2)
                                            
                                        @if ($prices2['var_fix']==0 && $prices2['contract_id']==$suppliercontgas && $prices2['date_price_val']=='2022-04-01' && $prices2['area_id']==$area)
                                            <table class="w-full">
                                                <tr></tr>
                                                <tr>
                                                    <th colspan=3>{{__("Gaz")}}</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th>{{__("€ / kWh")}}</th>
                                                    <th>{{__("Coût")}}</th>
                                                </tr>
                                                
                                                <tr>
                                                    <td>{{__("Abonnement")}}</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription']/($gascons),4),4,',','.')}} €</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription'],2),2,',','.')}} €</td>
                                                </tr>
                                                
                                                @if ($binight==0 && $exclnight==0)
                                                    <tr>
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($gascons*$prices2['mono'],2),2,',','.')}} €</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                @elseif (($binight==0 && $exclnight>0) || ($binight>0 && $exclnight==0))
                                                    <tr>
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($gascons*$prices2['mono'],2),2,',','.')}} €</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                @elseif ($binight>0 && $exclnight>0)
                                                    <tr>
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($gascons*$prices2['mono'],2),2,',','.')}} €</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                @endif
                                                
                                                
                                                
                                                <tr>
                                                    <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                    <td class="text-right font-bold">{{number_format(round($prices2['subscription']+($gascons*$prices2['mono']),2),2,',','.')}} €</td>
                                                </tr>
                                            </table>

                                        
                                        @elseif ($prices2['var_fix']==1 && $prices2['contract_id']==$suppliercontgas && $prices2['date_price_val']==$contbeggasmod && $prices2['area_id']==$area)
                                            <table class="w-full">
                                                <tr class="h-6"></tr>
                                                <tr>
                                                    <th colspan=3>{{__("Gaz")}}</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th>{{__("€ / kWh")}}</th>
                                                    <th>{{__("Coût")}}</th>
                                                </tr>
                                                
                                                <tr>
                                                    <td>{{__("Abonnement")}}</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription']/($gascons),4),4,',','.')}} €</td>
                                                    <td class="text-right">{{number_format(round($prices2['subscription'],2),2,',','.')}} €</td>
                                                </tr>
                                                
                                                @if ($binight==0 && $exclnight==0)
                                                    <tr>
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($gascons*$prices2['mono'],2),2,',','.')}} €</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                @elseif (($binight==0 && $exclnight>0) || ($binight>0 && $exclnight==0))
                                                    <tr>
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($gascons*$prices2['mono'],2),2,',','.')}} €</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                @elseif ($binight>0 && $exclnight>0)
                                                    <tr>
                                                        <td>{{__("Mono-horaire")}}</td>
                                                        <td class="text-right">{{number_format(round($prices2['mono'],4),4,',','.')}} €</td>
                                                        <td class="text-right">{{number_format(round($gascons*$prices2['mono'],2),2,',','.')}} €</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                        <td class="text-right text-transparent">-</td>
                                                    </tr>
                                                @endif
                                                
                                                
                                                
                                                <tr>
                                                    <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                    <td class="text-right font-bold">{{number_format(round($prices2['subscription']+($gascons*$prices2['mono']),2),2,',','.')}} €</td>
                                                </tr>
                                            </table>

                                        @else
                                            @php
                                                $j++;
                                            @endphp
                                        @endif
                                    @endforeach
                                    
                                    @if ($j==count($prices))
                                        <h3 class="underline font-bold text-sky-400 text-center">{{__("Gaz")}}</h3>
                                        <p class="font-bold text-red-600 text-center">{{__("Ce contrat n'existe pas dans votre région")}}</p>
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="container mx-auto max-w-5xl">
                    <p class="text-center underline font-bold"><span class="bg-white p-2 rounded-lg">{{__("Comparaison")}}</span></p>
                    <table class="border-collapse w-full">
                        <tr>
                            <td class="align-top">
                                @foreach ($sorted_elec_prices_compare as $sorted_elec_prices_compare)
                                    
                                    
                                    <table class="w-full">
                                        <tr class="h-6"></tr>
                                        <tr>
                                            <th colspan=3>{{__("Électricité")}}</th>
                                        </tr>
                                        <tr>
                                            <td colspan=2>{{__("Fournisseur")}}</td>
                                            
                                            @foreach ($elec_suppliers as $elec_suppliers1a)
                                                    @if ($sorted_elec_prices_compare['suppliers_id'] == $elec_suppliers1a['id'])
                                                        <td>{{$elec_suppliers1a['supplier_name']}}</td>
                                                    @endif 
                                                @endforeach
                                        </tr>
                                        <tr>
                                            <td colspan=2>{{__("Nom du contrat")}}</td>
                                            @foreach ($elec_contracts2 as $elec_contracts2a)
                                                @if ($sorted_elec_prices_compare['contract_id'] == $elec_contracts2a['id'])
                                                    <td>{{$elec_contracts2a['contract_name']}}</td>
                                                @endif
                                            @endforeach
                                            
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <th>{{__("€ / kWh")}}</th>
                                            <th>{{__("Coût")}}</th>
                                        </tr>

                                        <tr>
                                            <td>{{__("Abonnement")}}</td>
                                            <td class="text-right">{{number_format(round($sorted_elec_prices_compare['subscription']/($monobiday+$binight+$exclnight),4),4,',','.')}} €</td>
                                            <td class="text-right">{{number_format(round($sorted_elec_prices_compare['subscription'],2),2,',','.')}} €</td>
                                        </tr>
                                        <tr>
                                            @if ($binight==0)
                                                <td>{{__("Mono-horaire")}}</td>
                                                <td class="text-right">{{number_format(round($sorted_elec_prices_compare['mono'],4),4,',','.')}} €</td>
                                                <td class="text-right">{{number_format(round($monobiday*$sorted_elec_prices_compare['mono'],2),2,',','.')}} €</td>
                                            @else
                                                <td>{{__("Bi-horaire jour")}}</td>
                                                <td class="text-right">{{number_format(round($sorted_elec_prices_compare['bi_day'],4),4,',','.')}} €</td>
                                                <td class="text-right">{{number_format(round($monobiday*$sorted_elec_prices_compare['bi_day'],2),2,',','.')}} €</td>
                                            @endif
                                            
                                            
                                        </tr>
                                        @if ($binight==0)
                                                
                                        @else
                                            <tr>
                                                <td>{{__("Bi-horaire nuit")}}</td>
                                                <td class="text-right">{{number_format(round($sorted_elec_prices_compare['bi_night'],4),4,',','.')}} €</td>
                                                <td class="text-right">{{number_format(round($binight*$sorted_elec_prices_compare['bi_night'],2),2,',','.')}} €</td>
                                            </tr>
                                        @endif
                                        
                                        @if ($exclnight==0)
                                                
                                        @else
                                            <tr>
                                                <td>{{__("Exclusif nuit")}}</td>
                                                <td class="text-right">{{number_format(round($sorted_elec_prices_compare['excl_night'],4),4,',','.')}} €</td>
                                                <td class="text-right">{{number_format(round($exclnight*$sorted_elec_prices_compare['excl_night'],2),2,',','.')}} €</td>
                                                
                                            </tr>
                                        @endif
                                        <tr>
                                            <td>{{__("Coût énergie verte")}}</td>
                                            <td class="text-right">{{number_format(round($sorted_elec_prices_compare['g_and_c_energy'],4),4,',','.')}} €</td>
                                            <td class="text-right">{{number_format(round(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy'],2),2,',','.')}} €</td>
                                            
                                        </tr>

                                        @if ($i==count($prices) && $j==count($prices))
                                            <tr>
                                                <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                @if ($binight==0)
                                                    <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                @else
                                                    <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                @endif
                                            </tr>
                                            @elseif ($i==count($prices)-1 && $j==count($prices))
                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                @if ($binight==0)
                                                    <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                @else
                                                    <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                @endif
                                                
                                        @elseif ($i==count($prices) && $j==count($prices)-1)
                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                @if ($binight==0)
                                                    <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                @else
                                                    <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                @endif
                                                
                                        @else
                                            @foreach ($prices as $prices7a)
                                                    
                                                @if ($prices7a['var_fix']==0 && $prices7a['contract_id']==$suppliercont && $prices7a['date_price_val']=='2022-04-01' && $prices7a['area_id']==$area)
                                                    @if ($binight==0 && ($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']))<($prices7a['subscription']+($monobiday*$prices7a['mono'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy'])))
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-emerald-900">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-red-800">{{number_format(round($prices7a['subscription']+($monobiday*$prices7a['mono'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Économie")}}</td>
                                                            <td class="text-right font-bold">{{number_format(round(($prices7a['subscription']+($monobiday*$prices7a['mono'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']))-($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy'])),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-emerald-900 font-bold" colspan=3>{{__("Ce contrat est plus avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @elseif ($binight!=0 && ($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']))<($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy'])))
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-emerald-900">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-red-800">{{number_format(round($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Économie")}}</td>
                                                            <td class="text-right font-bold">{{number_format(round(($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']))-($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy'])),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-emerald-900 font-bold" colspan=3>{{__("Ce contrat est plus avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-red-800 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold text-transparent" colspan=2>-</td>
                                                            <td class="text-right font-bold text-transparent">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-red-800 font-bold" colspan=3>{{__("Ce contrat est moins avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @endif
                                                @elseif ($prices7a['var_fix']==1 && $prices7a['contract_id']==$suppliercont && $prices7a['date_price_val']==$contbegmod && $prices7a['area_id']==$area)
                                                    @if ($binight==0 && ($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']))<($prices7a['subscription']+($monobiday*$prices7a['mono'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy'])))
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-emerald-900">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-red-800">{{number_format(round($prices7a['subscription']+($monobiday*$prices7a['mono'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Économie")}}</td>
                                                            <td class="text-right font-bold">{{number_format(round(($prices7a['subscription']+($monobiday*$prices7a['mono'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']))-($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['mono'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy'])),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-emerald-900 font-bold" colspan=3>{{__("Ce contrat est plus avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @elseif ($binight!=0 && ($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']))<($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy'])))
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-emerald-900">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-red-800">{{number_format(round($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Économie")}}</td>
                                                            <td class="text-right font-bold">{{number_format(round(($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']))-($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy'])),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-emerald-900 font-bold" colspan=3>{{__("Ce contrat est plus avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-red-800 font-bold">{{number_format(round($sorted_elec_prices_compare['subscription']+($monobiday*$sorted_elec_prices_compare['bi_day'])+($binight*$sorted_elec_prices_compare['bi_night'])+($exclnight*$sorted_elec_prices_compare['excl_night'])+(($monobiday+$binight+$exclnight)*$sorted_elec_prices_compare['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($prices7a['subscription']+($monobiday*$prices7a['bi_day'])+($binight*$prices7a['bi_night'])+($exclnight*$prices7a['excl_night'])+(($monobiday+$binight+$exclnight)*$prices7a['g_and_c_energy']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold text-transparent" colspan=2>-</td>
                                                            <td class="text-right font-bold text-transparent">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-red-800 font-bold" colspan=3>{{__("Ce contrat est moins avantageux que votre contrat actuel")}}</td>
                                                        </tr>

                                                        
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    </table>
                                @endforeach
                            </td>
                            <td class="align-top">
                                @foreach ($sorted_gas_prices_compare as $sorted_gas_prices_compare)
                                    
                                    
                                    <table class="w-full">
                                        <tr class="h-6"></tr>
                                        <tr>
                                            <th colspan=3>{{__("Gaz")}}</th>
                                        </tr>
                                        <tr>
                                            <td colspan=2>{{__("Fournisseur")}}</td>
                                            
                                            @foreach ($gas_suppliers as $gas_suppliers1a)
                                                    @if ($sorted_gas_prices_compare['suppliers_id'] == $gas_suppliers1a['id'])
                                                        <td>{{$gas_suppliers1a['supplier_name']}}</td>
                                                    @endif 
                                                @endforeach
                                        </tr>
                                        <tr>
                                            <td colspan=2>{{__("Nom du contrat")}}</td>
                                            @foreach ($gas_contracts2 as $gas_contracts2a)
                                                @if ($sorted_gas_prices_compare['contract_id'] == $gas_contracts2a['id'])
                                                    <td>{{$gas_contracts2a['contract_name']}}</td>
                                                @endif
                                            @endforeach
                                            
                                        </tr>

                                        <tr>
                                            <th></th>
                                            <th>{{__("€ / kWh")}}</th>
                                            <th>{{__("Coût")}}</th>
                                        </tr>

                                        <tr>
                                            <td>{{__("Abonnement")}}</td>
                                            <td class="text-right">{{number_format(round($sorted_gas_prices_compare['subscription']/($gascons),4),4,',','.')}} €</td>
                                            <td class="text-right">{{number_format(round($sorted_gas_prices_compare['subscription'],2),2,',','.')}} €</td>
                                        </tr>
                                        <tr>
                                            <td>{{__("Mono-horaire")}}</td>
                                            <td class="text-right">{{number_format(round($sorted_gas_prices_compare['mono'],4),4,',','.')}} €</td>
                                            <td class="text-right">{{number_format(round($gascons*$sorted_gas_prices_compare['mono'],2),2,',','.')}} €</td>
                                        </tr>
                                        @if ($binight==0)
                                                
                                        @else
                                            <tr>
                                                <td class="font-bold text-transparent" colspan=2>-</td>
                                                <td class="text-right font-bold text-transparent">-</td>
                                            </tr>
                                        @endif
                                        
                                        @if ($exclnight==0)
                                                
                                        @else
                                            <tr>
                                                <td class="font-bold text-transparent" colspan=2>-</td>
                                                <td class="text-right font-bold text-transparent">-</td>
                                            </tr>
                                        @endif
                                        <tr>
                                            <td class="font-bold text-transparent" colspan=2>-</td>
                                            <td class="text-right font-bold text-transparent">-</td>
                                        </tr>

                                        @if ($i==count($prices) && $j==count($prices))
                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                            <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']),2),2,',','.')}} €</td>
                                        @elseif ($i==count($prices)-1 && $j==count($prices))
                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                            <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']),2),2,',','.')}} €</td>
                                                
                                        @elseif ($i==count($prices) && $j==count($prices)-1)
                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                            <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']),2),2,',','.')}} €</td>
                                                
                                        @else

                                            @foreach ($prices as $prices7a)
                                                    
                                                @if ($prices7a['var_fix']==0 && $prices7a['contract_id']==$suppliercontgas && $prices7a['date_price_val']=='2022-04-01' && $prices7a['area_id']==$area)
                                                    @if (($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']))<($prices7a['subscription']+($gascons*$prices7a['mono'])))
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-emerald-900">{{number_format(round($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-red-800">{{number_format(round($prices7a['subscription']+($gascons*$prices7a['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Économie")}}</td>
                                                            <td class="text-right font-bold">{{number_format(round(($prices7a['subscription']+($gascons*$prices7a['mono'])-($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']))),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-emerald-900 font-bold" colspan=3>{{__("Ce contrat est plus avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-red-800 font-bold">{{number_format(round($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($prices7a['subscription']+($gascons*$prices7a['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold text-transparent" colspan=2>-</td>
                                                            <td class="text-right font-bold text-transparent">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-red-800 font-bold" colspan=3>{{__("Ce contrat est moins avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @endif
                                                @elseif ($prices7a['var_fix']==1 && $prices7a['contract_id']==$suppliercontgas && $prices7a['date_price_val']==$contbeggasmod && $prices7a['area_id']==$area)
                                                    @if (($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']))<($prices7a['subscription']+($gascons*$prices7a['mono'])))
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-emerald-900">{{number_format(round($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-red-800">{{number_format(round($prices7a['subscription']+($gascons*$prices7a['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Économie")}}</td>
                                                            <td class="text-right font-bold">{{number_format(round(($prices7a['subscription']+($gascons*$prices7a['mono'])-($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']))),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-emerald-900 font-bold" colspan=3>{{__("Ce contrat est plus avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @else
                                                        <tr>
                                                            <td class="font-bold" colspan=2>{{__("Total")}}</td>
                                                            <td class="text-right font-bold text-red-800 font-bold">{{number_format(round($sorted_gas_prices_compare['subscription']+($gascons*$sorted_gas_prices_compare['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=2>{{__("Prix de votre contrat actuel")}}</td>
                                                            <td class="text-right font-bold text-emerald-900 font-bold">{{number_format(round($prices7a['subscription']+($gascons*$prices7a['mono']),2),2,',','.')}} €</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="font-bold text-transparent" colspan=2>-</td>
                                                            <td class="text-right font-bold text-transparent">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-red-800 font-bold" colspan=3>{{__("Ce contrat est moins avantageux que votre contrat actuel")}}</td>
                                                        </tr>
                                                    @endif
                                                @endif

                                            
                                            @endforeach
                                        @endif
                                    </table>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>
