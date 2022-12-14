<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__("Modification de fournisseur")}}</title>

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

        <div class="flex items-center justify-center mb-36 mt-36">
            <div class="bg-sky-400 p-5 rounded-lg w-1/2">
                <div class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline"><h2>{{__("Donn??es du fournisseur ?? modifier")}}</h2></div>
                @if ($suppliertomod->deleted==1)
                    <div class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 text-center underline font-bold text-red-600 px-3"><p><span class="bg-white w-fit">{{__("Il vous est interdit d'apporter une modification ?? ce fournisseur !")}}</span></p></div>
                @else
                    <form method="post" action="{{route('suppliermod.update', $suppliertomod->id)}}">
                        @csrf
                        @method('PUT')
                        <table class="m-auto mb-10">
                            <tr>
                                <th class="px-3 text-white" colspan=3>{{__("Fournisseur ?? modifier")}}</th>
                            </tr>
                            <tr>
                                <th class="px-3 text-white">{{__("ID")}}</th>
                                <th class="px-3 text-white"><label for="supplier_name">{{__("Nom du fournisseur")}}</label></th>
                                <th class="px-3 text-white"><label for="active_supplier">{{__("En activit??")}}</label></th>
                            </tr>
                            <tr>
                                <td class="font-bold px-3">{{$suppliertomod->id}}</td>
                                <td class="font-bold px-3">
                                    @if (null !== "old('supplier_name')")
                                        <x-input id="supplier_name" class="block mt-1 w-full" type="text" name="supplier_name" :value="$suppliertomod->supplier_name" autofocus />
                                    @else
                                        <x-input id="supplier_name" class="block mt-1 w-full" type="text" name="supplier_name" :value="old('supplier_name')" autofocus />
                                    @endif
                                </td>
                                <td class="font-bold text-center px-3">
                                    @if (null !== "old('active_supplier')")
                                        <x-input id="active_supplier" class="block mt-1 w-full text-center" type="text" name="active_supplier" :value="$suppliertomod->active_supplier" />
                                    @else
                                        <x-input id="active_supplier" class="block mt-1 w-full text-center" type="text" name="active_supplier" :value="old('active_supplier')" />
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <div class="flex justify-center mb-7">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mx-4 bg-green-800">{{__("Enregistrer")}}</button>
                            <button type="button" onclick="javascript:history.back(-1);" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mx-4 bg-red-800">{{__("Annuler")}}</button>
                        </div>
                    </form>
                @endif
                <div class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline"><h2>{{__("Liste des fournisseurs")}}</h2></div>
                <div class="mb-5"><p>{{__("Pour pouvoir supprimer un fournisseur, celui-ci ne doit plus avoir de contrats li??s et doit ??tre d'abord inactiv??.")}}</p></div>
                <table class="m-auto">
                    <tr>
                        <th class="px-3 text-white">{{__("ID")}}</th>
                        <th class="px-3 text-white">{{__("Nom du fournisseur")}}</th>
                        <th class="px-3 text-white">{{__("En activit??")}}</th>
                        <th class="px-3 text-white">{{__("Contrats li??s")}}</th>
                        <th class="px-3 text-white">{{__("Modification")}}</th>
                        <th class="px-3 text-white">{{__("Suppression")}}</th>
                    </tr>
                    @foreach ($suppliers as $suppliers)
                        @if ($suppliers['deleted']==0)
                            <tr>
                            @if ($suppliers['active_supplier']==1)
                                <td class="px-3">{{$suppliers['id']}}</td>
                                <td class="px-3">{{$suppliers['supplier_name']}}</td>
                                <td class="font-bold text-center px-3">{{__("OUI")}}</td>
                                @php
                                    $i=0
                                @endphp
                                @foreach ($contracts as $contracts2)
                                    @if ($contracts2['suppliers_id']==$suppliers['id'] && $contracts2['deleted']==0)
                                        @php
                                            $i++
                                        @endphp
                                    @endif
                                @endforeach
                                <td class="font-bold text-center px-3">{{$i}}</td>
                            @else
                                <td class="font-bold text-red-800 px-3">{{$suppliers['id']}}</td>
                                <td class="font-bold text-red-800 px-3">{{$suppliers['supplier_name']}}</td>
                                <td class="font-bold text-red-800 text-center px-3">{{__("NON")}}</td>
                                @php
                                    $i=0
                                @endphp
                                @foreach ($contracts as $contracts2)
                                    @if ($contracts2['suppliers_id']==$suppliers['id'] && $contracts2['deleted']==0)
                                        @php
                                            $i++
                                        @endphp
                                    @endif
                                @endforeach
                                <td class="font-bold text-red-800 text-center px-3">{{$i}}</td>
                            @endif
                                <td class="px-3"><a href="{{route('suppliermod.edit', $suppliers->id)}}" class="inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4 bg-green-800">{{__("Modifier")}}</a></td>
                                <td class="px-3">
                                    <form action="{{route('suppliermod.destroy', $suppliers->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    @if ($suppliers['active_supplier']==0 && $i==0)
                                        <x-input id="deleted" class="block mt-1 w-full" type="hidden" name="deleted" :value="1" />
                                        <button class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-4 bg-red-800" type="submit">{{__("Supprimer")}}</button>
                                    @endif
                                    
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                <div class="lg:flex justify-center mt-7">
                    <a href="{{route('suppliermod.create')}}" class="m-auto inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 bg-green-800">{{__("Ajouter un fournisseur")}}</a>
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>
