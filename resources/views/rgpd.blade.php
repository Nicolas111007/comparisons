<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__("RGPD")}}</title>

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
            
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center underline">{{__("R??GLEMENT G??N??RAL SUR LA PROTECTION DES DONN??ES (RGPD)")}}</div>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 1 : INFORMATIONS CONCERNANT LA SOCI??T??")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Nom du site : www.comparisons.be (ci-apr??s d??nomm?? 'le Site')")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Fourni et ??dit?? par :")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("comparisons.be")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("BELGIQUE")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("(ci-apr??s d??nomm??e 'comparisons.be' ou 'la Soci??t??')")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 2 : COLLECTE")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("L???Utilisateur doit obligatoirement fournir certaines informations personnelles pour pouvoir proc??der ?? son inscription sur le Site.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("L???adresse ??lectronique (e-mail) de l???Utilisateur pourra notamment ??tre utilis??e par comparisons.be pour la communication d???informations diverses et la gestion du compte.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Le Site garantit le respect de la vie priv??e de l???Utilisateur, conform??ment ?? la loi du 8 d??cembre 1992 relative ?? la protection de la vie priv??e ?? l?????gard des traitements de donn??es ?? caract??re personnel, au R??glement europ??en du 27 avril 2016 relatif ?? la protection des personnes physiques ?? l?????gard du traitement des donn??es ?? caract??re personnel et ?? la libre circulation de ces donn??es, ainsi qu???au R??glement G??n??ral sur la Protection des Donn??es entr?? en vigueur le 25 mai 2018.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("L???Utilisateur dispose ??galement du droit d???acc??der ?? ses donn??es personnelles, de les rectifier, les supprimer et de s???opposer ?? leur utilisation.")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Ces droits peuvent ??tre exerc??s via tout moyen mis ?? la disposition de l???Utilisateur tel que le formulaire de contact.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 3 : TRAITEMENT")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Comparisons.be traite les donn??es ?? caract??re personnel que l???Utilisateur partage via le Site. Ces donn??es sont transmises par l???Utilisateur lui-m??me, ainsi que par le biais de son utilisation du Site.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Il peut ??galement s???agir de donn??es que l???Utilisateur communique ?? comparisons.be via d???autres canaux que le Site lui-m??me.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Le traitement des donn??es personnelles de l???Utilisateur englobe notamment la collecte, l???enregistrement, le stockage, la mise ?? jour, la modification, la consultation ou la mise ?? disposition desdites donn??es, sans que cette liste ne soit limitative.")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Les donn??es ?? caract??re personnel collect??es par comparisons.be sont notamment utilis??es aux fins suivantes :")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("- La gestion des Utilisateurs, de leurs questions, remarques, r??clamations, litiges, etc.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("- L?????tablissement de statistiques, notamment les visites sur le Site, un historique des consommations, une analyse de profil, sans que cette liste ne soit limitative")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("- La gestion des parties n??cessitant un identifiant (Utilisateurs inscrits / connect??s) et les permissions d???acc??s y aff??rentes")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("- Tout autre traitement n??cessaire ?? l???accomplissement des missions de comparisons.be ou de ses partenaires")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 4 : PARTAGE")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Comparisons.be ne vend en aucun cas les donn??es personnelles que vous renseignez sur le Site.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Comparisons.be peut transmettre vos donn??es ?? des partenaires pour leur permettre la bonne ex??cution de leur mission, ainsi qu????? d?????ventuels fournisseurs d?????nergie, dans la mesure o?? l???envoi desdites donn??es est indispensable ?? leur mission.")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("En cas de transmission de donn??es, comparisons.be veillera ?? ce que les m??mes niveaux de s??curit?? soient garantis par ses partenaires.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 5 : CONSERVATION")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("La dur??e de conservation des donn??es par comparisons.be d??pend de leur nature et des obligations l??gales qui s???y rapportent.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Comparisons.be s???efforcera de ne pas conserver vos donn??es plus longtemps que n??cessaire.")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Lorsque l???Utilisateur se d??sinscrit du Site, ses donn??es seront conserv??es pendant un maximum d???un an apr??s la r??siliation du contrat entre l???Utilisateur et la Soci??t??, et seront effac??es ou rendues anonymes ?? l???expiration de ce d??lai.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 6 : DROIT D???ACC??S")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("L???Utilisateur peut ?? tout moment demander l???acc??s ?? ses donn??es et disposer d???une copie gratuite de celles-ci.")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Dans le cas d???une telle demande, comparisons.be est en droit de demander ?? l???Utilisateur une participation raisonnable aux frais administratifs.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 7 : DROIT DE RECTIFICATION")}}</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("L???Utilisateur peut ?? tout moment demander la modification ou la rectification de donn??es incompl??tes ou inexactes.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 8 : DROIT ?? L???EFFACEMENT")}}</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("L???Utilisateur peut ?? tout moment demander l???effacement de ses donn??es ?? caract??re personnel, notamment si celles-ci ne sont plus utiles aux fins pour lesquelles elles ont ??t?? collect??es.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 9 : DROIT D???OPPOSITION")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("L???Utilisateur peut ?? tout moment notifier son opposition au traitement de ses donn??es personnelles.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Dans certains cas, cette opposition au traitement am??nera comparisons.be ?? ne plus ??tre en mesure de remplir sa mission pour l???Utilisateur en question. Celui-ci ne pourra se pr??valoir d???aucune indemnit?? en cas de cons??quences r??sultant de l???exercice de son droit d???opposition.")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Cette demande d???opposition pourra cependant ??tre refus??e si les donn??es personnelles de l???Utilisateur doivent ??tre utilis??es dans un cadre l??gal.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 10 : S??CURIT??")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Comparisons.be prend toutes les mesures n??cessaires ?? la s??curit?? des donn??es personnelles de l???Utilisateur.")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Cependant, comparisons.be tient ?? rappeler ?? ses Utilisateurs l???importance de ne jamais divulguer le mot de passe qui leur permet d???acc??der ?? leur espace personnel sur le Site.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 11 : ??VOLUTION DE LA POLITIQUE DE CONFIDENTIALIT??")}}</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Comparisons.be se r??serve le droit de modifier les clauses de la pr??sente politique de confidentialit?? ?? tout moment et sans justification.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 12 : PERSONNE DE CONTACT")}}</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("En cas de question relative ?? vos donn??es personnelles et leur traitement, vous pouvez prendre contact avec comparisons.be via le formulaire de contact du Site.")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 13 : LITIGES")}}</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("En cas de litige non r??solu ou de non-satisfaction par rapport ?? la solution propos??e, l???Utilisateur peut prendre contact avec l'Autorit?? de Protection des Donn??es.")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">{{__("Coordonn??es :")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("Autorit?? de Protection des Donn??es")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("Rue de la Presse 35")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("1000 Bruxelles")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("BELGIQUE")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("N?? d???entreprise (BCE/TVA): BE0694.679.950")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("T??l??phone : 02 274 48 00")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("Fax : 02 274 48 35")}}</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">{{__("E-mail : contact@apd-gba.be")}}</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8 text-center">{{__("Site web : https://www.autoriteprotectiondonnees.be/")}}</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">{{__("ARTICLE 14 : R??CLAMATIONS - LITIGES - DROIT APPLICABLE")}}</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">{{__("Pour toute information ?? ce sujet, l???Utilisateur est invit?? ?? consulter les articles y relatifs dans les Conditions G??n??rales d???Utilisation et de Vente.")}}</p>
            
            
                
            </div>
        </div>

    @include('footer')

    </body>
</html>
