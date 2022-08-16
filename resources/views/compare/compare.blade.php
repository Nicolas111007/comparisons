<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comparaison</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%;background: url(/images/home.jpg) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    
    @include('menu')
    
    
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full space-y-8 bg-gray-200 p-7 rounded-lg">
            <form class="space-y-2" method="POST" action="{{ route('compareresult') }}">
                    @csrf
                    @method('PUT')
                    
                    <div><p><span class="text-red-700 font-bold">*</span> Les champs marqués d'un astérisque sont obligatoires</p></div>
                    <h2 class="text-center underline font-bold text-sky-400">Données personnelles</h2>
                    <!-- Area -->

                    <div class="text-center">
                        <div><label for="area">Région <span class="text-red-700 font-bold">*</span></label></div>
                        <select id="area" name="area" required autofocus>
                            <option value="" label="Sélectionnez" disabled="disabled" selected="selected">Sélectionnez</option>
                            @foreach ($area as $area)
                                <option value={{$area->id}}>{{$area->area_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <h2 class="text-center underline font-bold text-sky-400">Consommation d'électricité</h2>
                    <!-- Mono / bi-day consumption -->
                    <div>
                        <label for="monobiday">Consommation Mono-horaire / bi-horaire jour <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('monobiday')")
                            <x-input id="monobiday" class="block mt-1 w-full" type="text" name="monobiday" :value="1000" max=49999 maxlength="5" pattern="^([1-9][0-9]{0,3}|[1-4][0-9]{4,4})$" />
                        @else
                            <x-input id="monobiday" class="block mt-1 w-full" type="text" name="monobiday" :value="old('monobiday')" max=49999 maxlength="5" pattern="^([1-9][0-9]{0,3}|[1-4][0-9]{4,4})$" />
                        @endif
                        
                    </div>

                    <!-- Bi-night consumption -->
                    <div>
                        <label for="binight">Consommation Bi-horaire nuit</label>

                        @if (null !== "old('monobiday')")
                            <x-input id="binight" class="block mt-1 w-full" type="text" name="binight" :value="0" max=49999 maxlength="5" pattern="^(0*|[1-9][0-9]{0,3}|[1-4][0-9]{4,4})$" />
                        @else
                            <x-input id="binight" class="block mt-1 w-full" type="text" name="binight" :value="old('binight')" max=49999 maxlength="5" pattern="^(0*|[1-9][0-9]{0,3}|[1-4][0-9]{4,4})$" />
                        @endif

                    </div>

                    <!-- Excl-night consumption -->
                    <div>
                        <label for="exclnight">Consommation Exclusif nuit</label>

                        @if (null !== "old('monobiday')")
                            <x-input id="exclnight" class="block mt-1 w-full" type="text" name="exclnight" :value="0" max=49999 maxlength="5" pattern="^(0*|[1-9][0-9]{0,3}|[1-4][0-9]{4,4})$" />
                        @else
                            <x-input id="exclnight" class="block mt-1 w-full" type="text" name="exclnight" :value="old('exclnight')" max=49999 maxlength="5" pattern="^(0*|[1-9][0-9]{0,3}|[1-4][0-9]{4,4})$" />
                        @endif
                    </div>

                    <!-- Supplier -->
                    <div>
                        <label for="suppliercont">Fournisseur et contrat <span class="text-red-700 font-bold">*</span></label>
                        <div>
                            <select id="suppliercont" name="suppliercont" required>
                                <option value="" label="Sélectionnez" disabled="disabled" selected="selected">Sélectionnez</option>
                                    @foreach ($suppliers as $suppliers)
                                        <optgroup label={{$suppliers->supplier_name}}>
                                            @foreach ($contracts_en1_supp1 as $contracts_en1_supp1a)
                                                @if ($suppliers->id == $contracts_en1_supp1a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp1a['id']}}">{{$contracts_en1_supp1a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp2 as $contracts_en1_supp2a)
                                                @if ($suppliers->id == $contracts_en1_supp2a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp2a['id']}}">{{$contracts_en1_supp2a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp3 as $contracts_en1_supp3a)
                                                @if ($suppliers->id == $contracts_en1_supp3a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp3a['id']}}">{{$contracts_en1_supp3a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp4 as $contracts_en1_supp4a)
                                                @if ($suppliers->id == $contracts_en1_supp4a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp4a['id']}}">{{$contracts_en1_supp4a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp5 as $contracts_en1_supp5a)
                                                @if ($suppliers->id == $contracts_en1_supp5a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp5a['id']}}">{{$contracts_en1_supp5a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp6 as $contracts_en1_supp6a)
                                                @if ($suppliers->id == $contracts_en1_supp6a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp6a['id']}}">{{$contracts_en1_supp6a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp7 as $contracts_en1_supp7a)
                                                @if ($suppliers->id == $contracts_en1_supp7a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp7a['id']}}">{{$contracts_en1_supp7a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp8 as $contracts_en1_supp8a)
                                                @if ($suppliers->id == $contracts_en1_supp8a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp8a['id']}}">{{$contracts_en1_supp8a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp9 as $contracts_en1_supp9a)
                                                @if ($suppliers->id == $contracts_en1_supp9a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp9a['id']}}">{{$contracts_en1_supp9a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp10 as $contracts_en1_supp10a)
                                                @if ($suppliers->id == $contracts_en1_supp10a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp10a['id']}}">{{$contracts_en1_supp10a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp11 as $contracts_en1_supp11a)
                                                @if ($suppliers->id == $contracts_en1_supp11a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp11a['id']}}">{{$contracts_en1_supp11a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en1_supp12 as $contracts_en1_supp12a)
                                                @if ($suppliers->id == $contracts_en1_supp12a['suppliers_id'])
                                                    <option value="{{$contracts_en1_supp12a['id']}}">{{$contracts_en1_supp12a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            
                                        </optgroup>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <!-- Contract beginning -->
                    <div>
                        <label for="contbeg">Date de début de contrat <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('monobiday')")
                            <x-input id="contbeg" class="block mt-1 w-full" type="date" name="contbeg" :value="0" min="2022-02-01" max="2022-04-30" required />
                        @else
                            <x-input id="contbeg" class="block mt-1 w-full" type="date" name="contbeg" :value="old('contbeg')" min="2022-02-01" max="2022-04-30" required />
                        @endif
                    </div>

                    <h2 class="text-center underline font-bold text-sky-400">Consommation de gaz</h2>
                    <!-- Gas consumption -->
                    <div>
                        <label for="gascons">Consommation de gaz (kWh) <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('gascons')")
                            <x-input id="gascons" class="block mt-1 w-full" type="text" name="gascons" :value="1000" max=99999 maxlength="5" pattern="^[1-9][0-9]{0,4}$" />
                        @else
                            <x-input id="gascons" class="block mt-1 w-full" type="text" name="gascons" :value="old('gascons')" max=99999 maxlength="5" pattern="^[1-9][0-9]{0,4}$" />
                        @endif
                        
                    </div>

                    <!-- Supplier -->
                    <div>
                        <label for="suppliercontgas">Fournisseur et contrat <span class="text-red-700 font-bold">*</span></label>
                        <div>
                            <select id="suppliercontgas" name="suppliercontgas" required>
                                <option value="" label="Sélectionnez" disabled="disabled" selected="selected">Sélectionnez</option>
                                    @foreach ($suppliersgas as $suppliersgas)
                                        <optgroup label={{$suppliersgas->supplier_name}}>
                                            @foreach ($contracts_en2_supp1 as $contracts_en2_supp1a)
                                                @if ($suppliersgas->id == $contracts_en2_supp1a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp1a['id']}}">{{$contracts_en2_supp1a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp2 as $contracts_en2_supp2a)
                                                @if ($suppliersgas->id == $contracts_en2_supp2a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp2a['id']}}">{{$contracts_en2_supp2a['contract_name']}}</option>
                                                @endif
                                            @endforeach

                                            @foreach ($contracts_en2_supp3 as $contracts_en2_supp3a)
                                                @if ($suppliersgas->id == $contracts_en2_supp3a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp3a['id']}}">{{$contracts_en2_supp3a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp4 as $contracts_en2_supp4a)
                                                @if ($suppliersgas->id == $contracts_en2_supp4a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp4a['id']}}">{{$contracts_en2_supp4a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp5 as $contracts_en2_supp5a)
                                                @if ($suppliersgas->id == $contracts_en2_supp5a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp5a['id']}}">{{$contracts_en2_supp5a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp6 as $contracts_en2_supp6a)
                                                @if ($suppliersgas->id == $contracts_en2_supp6a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp6a['id']}}">{{$contracts_en2_supp6a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp7 as $contracts_en2_supp7a)
                                                @if ($suppliersgas->id == $contracts_en2_supp7a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp7a['id']}}">{{$contracts_en2_supp7a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp8 as $contracts_en2_supp8a)
                                                @if ($suppliersgas->id == $contracts_en2_supp8a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp8a['id']}}">{{$contracts_en2_supp8a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp9 as $contracts_en2_supp9a)
                                                @if ($suppliersgas->id == $contracts_en2_supp9a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp9a['id']}}">{{$contracts_en2_supp9a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp10 as $contracts_en2_supp10a)
                                                @if ($suppliersgas->id == $contracts_en2_supp10a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp10a['id']}}">{{$contracts_en2_supp10a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp11 as $contracts_en2_supp11a)
                                                @if ($suppliersgas->id == $contracts_en2_supp11a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp11a['id']}}">{{$contracts_en2_supp11a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            @foreach ($contracts_en2_supp12 as $contracts_en2_supp12a)
                                                @if ($suppliersgas->id == $contracts_en2_supp12a['suppliers_id'])
                                                    <option value="{{$contracts_en2_supp12a['id']}}">{{$contracts_en2_supp12a['contract_name']}}</option>
                                                @endif
                                            @endforeach
                                            
                                        </optgroup>
                                    @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>

                    <!-- Contract beginning -->
                    <div>
                        <label for="contbeggas">Date de début de contrat <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('monobiday')")
                            <x-input id="contbeggas" class="block mt-1 w-full" type="date" name="contbeggas" :value="0" min="2022-02-01" max="2022-04-30" required />
                        @else
                            <x-input id="contbeggas" class="block mt-1 w-full" type="date" name="contbeggas" :value="old('contbeggas')" min="2022-02-01" max="2022-04-30" required />
                        @endif
                    </div>

                    

                    <div class="flex items-center justify-end mt-4">
                        

                        <x-button class="ml-4 hover:bg-sky-400 ">
                            {{ __('Comparer') }}
                        </x-button>
                        
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
