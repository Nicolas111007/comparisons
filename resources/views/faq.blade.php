<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__("FAQ")}}</title>

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
    <body class="antialiased my-36">
        
        @include('menu')
        
		<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 items-center mt-36">
            <div class="flex justify-center">
                <div class="bg-sky-400 p-5 rounded-lg w-1/2 text-justify">
                    <p class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline">{{__("Pourquoi utiliser Comparateur Gaz et ??lectricit??")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Ce site vous permettra de savoir s'il est ou non utile de changer actuellement de contrat au vu du prix de votre contrat actuel.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Le service est gratuit et se base sur votre consommation r??elle.")}}</p>
                </div>
            </div>
        </div>
        <div class="pb-12 max-w-7xl mx-auto sm:px-6 lg:px-8 items-center">
            <div class="flex justify-center">
                <div class="bg-sky-400 p-5 rounded-lg w-1/2 text-justify">
                    <p class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline">{{__("D'o?? proviennent les donn??es utilis??es par le comparateur")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Toutes les donn??es proviennent des diff??rents fournisseurs et de leurs cartes tarifaires.")}}</p>
                </div>
            </div>
        </div>
        <div class="pb-12 max-w-7xl mx-auto sm:px-6 lg:px-8 items-center">
            <div class="flex justify-center">
                <div class="bg-sky-400 p-5 rounded-lg w-1/2 text-justify">
                    <p class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline">{{__("Est-ce que l'utilisation du comparateur est gratuite")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Oui, quoi qu'il arrive vous ne payez pas pour effectuer votre comparaison")}}</p>
                </div>
            </div>
        </div>
        <div class="pb-12 max-w-7xl mx-auto sm:px-6 lg:px-8 items-center">
            <div class="flex justify-center">
                <div class="bg-sky-400 p-5 rounded-lg w-1/2 text-justify">
                    <p class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline">{{__("J'ai effectu?? plusieurs comparaisons sur plusieurs sites et les montants varient, pourquoi?")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Tout d'abord, ce comparateur ne fait une comparaison que sur les prix des fournisseurs, ce qui implique que les tarifs de r??seaux et distribution, ainsi que les diverses taxes f??d??rales ne sont pas inclues dans ce calcul.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Ces tarifs ne sont pas calcul??s car ils sont exactement les m??mes, peu importe le fournisseur que vous choisissez.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Il se peut toutefois que certains montant diff??rent de quelques centimes, voire quelques euros en fonction du comparateur choisi, certain effectuant des arrondis lors de leurs calculs.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Ce site n'effectue pas d'arrondis, except?? sur le r??sultat final.")}}</p>
                </div>
            </div>
        </div>
        <div class="pb-12 max-w-7xl mx-auto sm:px-6 lg:px-8 items-center">
            <div class="flex justify-center">
                <div class="bg-sky-400 p-5 rounded-lg w-1/2 text-justify">
                    <p class="pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8 font-bold text-center underline">{{__("Les prix de mon contrat ne concordent pas avec ceux du site, pourquoi?")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Il faut tout d'abord distinguer deux cat??gories de contrat, ?? savoir les contrats variables et les contrats fixes.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white underline my-2 font-bold">{{__("Dans le cas des contrats fixes:")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Le comparateur prend en compte la date de d??but de votre contrat pour effectuer une comparaison sur 1 an.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Le prix de votre contrat ne varie pas sur la dur??e de celui-ci.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white underline my-2 font-bold">{{__("Dans le cas des contrats variables:")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Le comparateur prend en compte le mois en cours pour effectuer une comparaison sur 1 an.")}}</p>
                    <p class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">{{__("Le prix de votre contrat variant chaque mois il est inutile de comparer un prix d'un mois pass?? qui n'est plus le prix actuel.")}}</p>
                </div>
            </div>
        </div>
        @include('footer')
    </body>
</html>

