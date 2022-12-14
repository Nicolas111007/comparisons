<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__("Documentation de l'API")}}</title>

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
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center underline">{{__("Documentation API")}}</div>

                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("Fonctionnement de l???API")}}</div>

                <p class="max-w-7xl mx-auto mb-5 sm:px-6 lg:px-8">{{__("Lors de l???arriv??e d???un utilisateur sur la page de s??lection, celui-ci peut choisir de voir :")}}</p>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("- Toutes les r??gions ou une en particulier")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("- Tous les fournisseurs ou un en particulier")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("- Toutes les variabilit??s de contrats ou une en particulier")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("- Toutes les mois ou un en particulier")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("- Tous les types d'??nergie ou un en particulier")}}</p>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Par d??faut l???affichage se fait sur toutes les r??gions, tous les fournisseurs et tous les contrats, l???utilisateur est alors invit?? ?? modifier cette s??lection par d??faut ou la laisser telle quelle et ensuite valider son choix pour arriver sur l???affichage des donn??es de l???API.")}}</p>

                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("Affichage des donn??es")}}</div>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Les donn??es sont affich??es de mani??re brute. Pour effectuer une mise en page succincte il est recommand?? ?? l???utilisateur de naviguer via Chrome et t??l??charger l???extension JSON Formatter qui s???installera alors automatiquement permettant une plus grande lisibilit?? des donn??es.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Cet add-on peut ??tre trouv?? sur la page")}} <a class="underline text-white" href="https://chrome.google.com/webstore/detail/json-formatter/bcjindcccaagfpapjjmafapmmgkkhgoa" target="_blank">Json Formatter</a></p>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Les 12 informations principales, affich??es pour chaque fiche de prix individuelle, ont ??t?? format??es dans un souci de compr??hension pour l???utilisateur, qu???il soit professionnel ou non.")}}</p>

                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("Crit??res de s??lection")}}</div>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Plusieurs crit??res peuvent ??tre utilis??s pour s??lectionner certaines donn??es et pas d???autres. Ces crit??res sont au nombre de 5 et peuvent ??tre combin??s dans l???ordre ou le d??sordre selon les informations reprises dans le tableau qui suit.")}}</p>


                <table class="container mx-auto max-w-3xl">
                    <tr>
                        <th class="px-2 border border-slate-600">{{__("Crit??re")}}</th>
                        <th class="px-2 border border-slate-600">{{__("Adresse")}}</th>
                        <th class="px-2 border border-slate-600">{{__("Valeurs possibles {}")}}</th>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600" rowspan=3>{{__("R??gion")}}</td>
                        <td class="px-2 border border-slate-600" rowspan=3>/area/{Area}</td>
                        <td class="px-2 border border-slate-600">/area/Wallonie</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/area/Bruxelles</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/area/Flandre</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600" rowspan=11>{{__("Nom du fournisseur")}}</td>
                        <td class="px-2 border border-slate-600" rowspan=11>/supp_name/{Supp_name}</td>
                        <td class="px-2 border border-slate-600">/supp_name/Antargaz</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Eneco</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Energie2030</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Engie</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Essent</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Lampiris</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Luminus</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Mega</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Octa+</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Watz</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/supp_name/Bolt</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600" rowspan=2>{{__("Contrat variable ou fixe")}}</td>
                        <td class="px-2 border border-slate-600" rowspan=2>/var_fix/{var_fix}</td>
                        <td class="px-2 border border-slate-600">/var_fix/v</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/var_fix/f</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600" rowspan=3>{{__("Mois de fiches de prix")}}</td>
                        <td class="px-2 border border-slate-600" rowspan=3>/month/{month}</td>
                        <td class="px-2 border border-slate-600">/month/02</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/month/03</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/month/04</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600" rowspan=4>{{__("Type d?????nergie (gaz ou ??lectricit??)")}}</td>
                        <td class="px-2 border border-slate-600" rowspan=4>/energy_type/{energy_type}</td>
                        <td class="px-2 border border-slate-600">/energy_type/e</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/energy_type/E</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/energy_type/g</td>
                    </tr>
                    <tr>
                        <td class="px-2 border border-slate-600">/energy_type/G</td>
                    </tr>
                </table>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("?? la suite, voici quelques exemples de combinaisons de crit??res.")}}</p>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Souhait de r??cup??ration de tous les contrats variables d???Antargaz pour la Flandre. ??critures possibles :")}}</p>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/supp_name/Antargaz/area/Flandre/var_fix/v</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/supp_name/Antargaz/var_fix/v/area/Flandre</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/area/Flandre/supp_name/Antargaz/var_fix/v</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/area/Flandre/var_fix/v/supp_name/Antargaz</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/var_fix/v/area/Flandre/supp_name/Antargaz</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/var_fix/v/supp_name/Antargaz/area/Flandre</p>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Souhait de r??cup??ration de tous les contrats du mois de f??vrier 2022 pour le gaz. ??critures possibles :")}}</p>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/month/02/energy_type/g</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/month/02/energy_type/G</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/energy_type/g/month/02</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center">/energy_type/G/month/02</p>



                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("Mise ?? jour")}}</div>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Les informations des contrats, fournisseurs et fiches de prix sont mises ?? jour d??s qu???un fournisseur appara??t sur le march?? ou met ?? jour ses fiches de prix et d??s qu???il est possible pour notre ??quipe de proc??der ?? ces mises ?? jour.")}}</p>

                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("But de l???API")}}</div>

                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Cette API permet ?? tout un chacun, et plus particuli??rement aux d??veloppeurs de comparateurs de prix, de r??cup??rer et r??utiliser les donn??es des fournisseurs, contrats et fiches de prix qui leurs sont utiles en fonction d'une r??gion, d???un fournisseur, d???une variabilit?? de contrat, d'un mois en particulier et / ou d???une r??gion.")}}</p>

            </div>
        </div>

    @include('footer')

    </body>
</html>
