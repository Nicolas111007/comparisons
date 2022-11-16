<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Documentation de l'APIiiiiiiiiiiiiiiii</title>

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
                
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center underline">CONDITIONS GÉNÉRALES D'UTILISATION ET DE VENTE (CGU et CGV)</div>

                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center underline">CHAPITRE I CONDITIONS GÉNÉRALES D'UTILISATION</div>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 1 : INFORMATIONS CONCERNANT LA SOCIÉTÉ</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Nom du site : www.comparisons.be (ci-après dénommé 'le Site')</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Fourni et édité par :</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">comparisons.be</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">BELGIQUE</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">(ci-après dénommée 'comparisons.be' ou 'la Société')</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 2 : APPLICATION</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les présentes conditions générales d'Utilisation et de Vente (ci-après dénommées 'les CG') ont pour objet l'encadrement des droits, obligations et limitations applicables dans le cadre de l'utilisation du Site et de ses services.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Ce contrat est conclu entre comparisons.be et toute personne physique ou morale (ci-après dénommée 'l'Utilisateur') visitant ou utilisant le Site, ainsi que ses services dédiés (ci-après dénommés 'les Services').</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'accès au présent Site ou son utilisation entraîne de facto l'acceptation sans restrictions des présentes CG, ainsi que toutes les éventuelles modifications qui s'y rapportent. comparisons.be ne peut être tenue pour responsable d'une mauvaise utilisation du Site par l'Utilisateur.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Le contenu du Site, en ce compris les documents tels que les CG, le règlement en matière de protection des données à caractère personnel ou autres documents, sans que cette énumération ne soit limitative, peut être modifié en tout ou en partie, sans préavis.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur est en tout temps tenu de respecter les présentes CG et de prendre régulièrement connaissance des éventuelles modifications apportées.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">En cas de désaccord avec les présentes CG, l'Utilisateur doit immédiatement renoncer à visiter le Site et à en utiliser les Services.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les CG, le règlement en matière de protection des données à caractère personnel et la politique de cookies ont pu faire l'objet d'une lecture préalable par l'Utilisateur avant son inscription et son acceptation de la relation contractuelle avec comparisons.be</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Toute question en rapport avec le Site ou la Société peut être formulée par le formulaire de contact du Site.
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 3 : DISPONIBILITÉ ET ACCÈS AU SITE</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur du Site a accès à toutes les pages du Site et à tous les Services proposés par le Site.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Toutes les mesures nécessaires sont mises en œuvre pour assurer l'accessibilité et la sécurité du Site. Ces mesures ne peuvent toutefois offrir une garantie absolue et seule une obligation de moyens quant à la continuité et la sécurité des Services peut être exigée de la part de comparisons.be</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be se réserve le droit de modifier, suspendre ou interrompre à tout moment, sans préavis ni justification, l'accès au Site pour des raisons de maintenance ou pour toute autre raison, et ne pourra être tenue pour responsable vis-à-vis de l'Utilisateur ou de tiers à cet égard.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Tout Utilisateur ayant accès à Internet peut accéder gratuitement et depuis n'importe où au Site. Les frais supportés par l'Utilisateur pour y accéder (connexion Internet, matériel informatique, etc.) sont à sa charge exclusive.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 4 : RESPONSABILITÉS DE L'UTILISATEUR</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur est responsable des risques liés à l'utilisation de son identifiant de connexion et de son mot de passe.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Le mot de passe de l'Utilisateur doit rester secret. comparisons.be décline toute responsabilité en cas de divulgation de mot de passe par l'Utilisateur.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be ou ses employés ne vous demanderont jamais de divulguer votre mot de passe pour quelque raison que ce soit.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur assume l'entière responsabilité de l'utilisation qu'il fait des informations et des contenus présents sur le Site et garantit l'exactitude des informations fournies.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Tout non-respect des CG, tout usage ou toute utilisation illicite du Site et des Services entraînant directement ou indirectement des dommages fera l'objet d'une indemnisation au profit de comparisons.be au prorata des frais, pertes et honoraires d'avocats engendrés, sans que cette liste soit exhaustive.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Dans ces cas, comparisons.be se réserve le droit de suspendre ou supprimer tout accès à l'Utilisateur, sans préavis et sans que cela puisse donner lieu à une quelconque indemnisation envers ce dernier.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Cette suspension ou suppression d'accès au Site et aux Services se fait sans préjudice d'éventuelles autres actions que pourrait intenter comparisons.be</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 5 : RESPONSABILITÉS DE COMPARISONS.BE</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les éventuels dysfonctionnements du serveur ou du réseau informatique ne peuvent en aucun cas engager la responsabilité de comparisons.be</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">De même, la responsabilité de comparisons.be ne peut être engagée en cas de force majeure ou de fait imprévisible et insurmontable d'un tiers.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be s'engage à mettre en œuvre tous les moyens nécessaires pour garantir la sécurité et la confidentialité des données de l'Utilisateur. Comparisons.be n'offre toutefois pas une garantie de sécurité totale.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les informations et contenus présents sur le Site font l'objet d'une attention particulière et de mises à jour régulières de la part de comparisons.be Il est toutefois possible que le Site contienne certaines inexactitudes, erreurs typographiques, omissions, lacunes ou autres, sans que cette énumération ne soit limitative.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be se réserve le droit de corriger ces différentes erreurs ou dysfonctionnements à tout moment, et ce, sans préavis.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be ne pourra dès lors être tenue pour responsable des erreurs et dysfonctionnements éventuels précédemment mentionnés. S'il constate d'éventuelles erreurs ou dysfonctionnements, l'Utilisateur peut le signaler à tout moment à comparisons.be en indiquant le plus précisément possible la / les page(s) concernée(s), le(s) type(s) d'erreur(s) / dysfonctionnement(s) constaté(s), le type d'ordinateur, le navigateur et le système d'exploitation utilisés, ainsi que toute autre information utile à la résolution du problème.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Ces informations peuvent être communiquées via la page de contact du Site.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 6 : PROPRIÉTÉ INTELLECTUELLE</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les contenus du Site (logos, textes, éléments graphiques, vidéos, structuration, etc.) sont la propriété intellectuelle de comparisons.be et sont dès lors protégés par les lois en vigueur au titre du droit d'auteur, de la propriété intellectuelle, du droit des marques, des droits voisins et / ou du droit sui generis, sans que cette énumération ne soit limitative.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur devra obtenir l'autorisation de comparisons.be, de ses partenaires ou d'autres tiers avant toute reproduction, copie ou publication de ces différents contenus, à l'exception de ceux qui sont désignés spécifiquement comme libres de droits sur le Site.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">En cas d'utilisation de ces contenus, l'Utilisateur s'engage à ne pas supprimer, modifier, altérer, détruire, occulter ou omettre toute marque, signe de droit d'auteur ou de droit de propriété intégré dans tout ou partie du Site.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Pour sa navigation, comparisons.be accorde à l'Utilisateur un droit d'accès, d'utilisation et d'affichage du Site et de son contenu. Ces différents droits, dont la liste est non exhaustive, sont limités à titre non exclusif, non transférable et utilisable dans le cadre d'un usage personnel non commercial.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 7 : PROTECTION DES DONNÉES À CARACTÈRE PERSONNEL</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be accorde une importance et un soin particulier à la protection et au traitement de vos données personnelles.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Pour de plus amples informations sur le règlement en matière de protection et de traitement des données, nous vous invitons à CLIQUER ICI.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 8 : LIENS HYPERTEXTES</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les domaines vers lesquels mènent les liens hypertextes présents sur le Site n'engagent pas la responsabilité de comparisons.be qui n'a aucun contrôle sur ces liens.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be ne peut garantir que tous les sites relatifs à ces liens appliquent une politique de respect de la vie privée conforme à la loi du 8 décembre 1992 sur la protection de la vie privée à l'égard des traitements de données à caractère personnel et invite les Utilisateurs à consulter les clauses de protection de la vie privée qui figurent normalement sur chaque site Internet.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Il est permis à un tiers de créer un lien vers une page du Site sans autorisation expresse de comparisons.be, pour autant que la mention du nom de la Société ou du Site soit indiquée à l'intérieur ou en regard du lien.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">La présente autorisation ne s'applique en aucun cas aux sites diffusant des informations illicites, xénophobes, racistes, pornographique ou toute autre information interdite par les législations en vigueur, sans que cette liste ne soit limitative.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">En cas d'utilisation abusive ou de transgression, les frais éventuellement engendrés par comparisons.be (honoraires d'avocats, frais de justice ou autres, sans que cette énumération ne soit limitative) seront à charge pleine et entière du / des contrevenants.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 9 : ÉVOLUTION DES CONDITIONS GÉNÉRALES</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Comparisons.be se réserve le droit de modifier les clauses des présentes CG à tout moment et sans justification.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 10 : DURÉE DU CONTRAT</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">La durée du présent contrat est indéterminée. Le contrat produit ses effets à l'égard de l'Utilisateur à compter du début de l'utilisation du Site.</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center underline">CHAPITRE II CONDITIONS GÉNÉRALES RELATIVES AUX SERVICES</div>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 11 : PUBLIC</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Le Site et ses Services s'adressent aux particuliers et aux personnes morales dont la consommation annuelle en énergie ne dépasse pas :</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">- 50 MWh (50.000 kWh) pour l'électricité</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">- 100 MWh (100.000 kWh) pour le gaz (± 9862 m³)</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Dans l'hypothèse où la consommation de l'Utilisateur excède la limite précitée pour l'une des deux énergies, il lui est toujours loisible de s'inscrire pour l'autre énergie, pour autant que sa consommation ne dépasse pas la limite autorisée.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 12 : SERVICES</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be permet aux Utilisateurs, via son Site, de pouvoir effectuer une ou plusieurs comparaisons concernant les énergies telles que le gaz ou l'électricité.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">En cas d'informations erronées, manquantes ou incomplètes du chef de l'Utilisateur entraînant des conséquences pour celui-ci, la responsabilité de comparisons.be ne pourra pas être engagée, l'Utilisateur étant responsable de l'exactitude des informations qu'il fournit.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 13 : INSCRIPTION</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Lors de son inscription, l'Utilisateur s'engage à fournir des informations exactes, à vérifier régulièrement les données le concernant et, si nécessaire, y apporter les modifications requises.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur est également tenu de fournir à comparisons.be une adresse e-mail valide qui servira à toute communication ultérieure émanant de comparisons.be</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur s'engage à consulter régulièrement les messages qu'il reçoit à cette adresse et à y répondre dans un délai raisonnable.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">En cas de modification de son adresse e-mail, l'Utilisateur s'engage à en informer immédiatement comparisons.be à l'aide du formulaire de contact.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Toute communication effectuée par comparisons.be et ses partenaires sur cette adresse e-mail est réputée réceptionnée et lue par l'Utilisateur.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Comparisons.be ne peut être tenue pour responsable d'éventuels dommages résultant de la non-consultation des e-mails envoyés à l'Utilisateur.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 14 : DÉSINSCRIPTION</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">L'Utilisateur peut se désinscrire à tout moment sans devoir observer de préavis ni verser d'indemnités à comparisons.be</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">La désinscription d'un Utilisateur entraînera d'office la suppression des données à caractère personnel le concernant de la base de données de comparisons.be, conformément aux termes et conditions spécifiés dans la Politique de Confidentialité.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 15 : DONNÉES FOURNIES</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Dans le cadre de sa mission, comparisons.be doit être en possession des informations les plus exactes possibles concernant l'Utilisateur.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Celui-ci est donc tenu de fournir à la Société toutes les informations demandées dans le formulaire d'inscription.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">En cas de modification de ses données, L'Utilisateur devra en informer comparisons.be par l'intermédiaire du formulaire de contact.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">L'Utilisateur sera seul responsable des conséquences éventuelles découlant d'informations erronées, incomplètes ou manquantes.</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center underline">CHAPITRE III CONDITIONS GÉNÉRALES DE VENTE</div>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 16 : ABONNEMENT</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">L'Utilisateur peut, à tout moment, décider de souscrire un abonnement aux services complémentaires fournis par comparisons.be aux conditions de prix affichées sur le Site.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 17 : CONTRAT</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Le contrat entre comparisons.be et l'Utilisateur entre en vigueur au moment de l'inscription de celui-ci, suite à quoi il dispose d'un délai légal de rétractation de 14 jours calendaires.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Le contrat entre comparisons.be et l'Utilisateur est conclu pour une durée indéterminée et peut être résilié à tout moment par l'une ou l'autre partie sans préavis ni indemnité ni justification.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">La résiliation par l'Utilisateur peut se faire par courrier recommandé, courrier simple, e-mail ou via le formulaire de contact disponible sur le Site.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">La désinscription (suppression du compte) de l'Utilisateur vaut également comme résiliation du contrat.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les mêmes moyens de résiliation sont à la disposition de comparisons.be envers l'Utilisateur. Toutefois, en cas de suppression par comparisons.be du compte de l'Utilisateur, la Société s'engage, dans la mesure du possible, à envoyer à ce dernier une notification par e-mail pour l'en avertir.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">La résiliation dans le chef de l'Utilisateur n'entraînera pas de remboursement de l'abonnement en tout ou partie.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 18 : EXACTITUDE DES DONNÉES</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Certaines données présentes sur le Site proviennent d'informations fournies par des tiers, comme notamment les fournisseurs d'énergie.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be ne peut en aucun cas être tenue pour responsable si certaines de ces données sont incomplètes, incorrectes ou inexactes.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">À cet égard, comparisons.be conseille toujours aux Utilisateurs de consulter les conditions générales des fournisseurs, ainsi que leurs sites.</p>
                <div class="pb-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-center underline">CHAPITRE IV CONDITIONS GÉNÉRALES COMMUNES</div>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 19 : RESPONSABILITÉS</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Sauf en cas de force majeure, faute grave, faute intentionnelle ou négligence grave, les responsabilités de l'Utilisateur et de comparisons.be se limitent à la non-exécution d'un ou plusieurs points des présentes CG.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les cas de force majeure suspendant les obligations liées au présent contrat incluent notamment, sans que cette liste ne soit limitative, les catastrophes naturelles, les incendies, les inondations, les guerres, les guerres civiles, la défaillance d'un serveur ou d'une connexion, les bugs informatiques, les failles de sécurité imputables à l'hébergeur ou aux développeurs du Site, etc.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Ces engagements ne peuvent en aucun cas être considérés comme une obligation de résultat ou une garantie, seule une obligation de moyens peut être demandée à comparisons.be</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be se réserve en outre la possibilité de modifier, étendre, limiter, interrompre ou supprimer à tout moment le Site et les Services y afférents, sans que sa responsabilité ne puisse être engagée et sans que l'Utilisateur ne puisse exiger une quelconque indemnisation.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be se réserve également le droit de prendre des mesures adaptées en cas de violation des présentes CG.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Ces mesures peuvent inclure le refus d'accès temporaire ou définitif d'un Utilisateur au Site ou aux Services, et ce, sans motif et sans préavis.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 20 : ANNULATION – INTERRUPTION - SUSPENSION</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be peut, à tout moment et sans préavis, annuler, interrompre, ou suspendre tout ou partie de ses Services sans avoir à en apporter de justification à l'Utilisateur.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Dans ce cas, l'Utilisateur ne pourra demander aucun dédommagement quel qu'il soit à comparisons.be et la responsabilité de la Société ne pourra pas non plus être engagée.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 21 : CESSION</div>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Comparisons.be est autorisée à céder le contrat à un tiers, pour autant que l'Utilisateur reçoive à minima les mêmes garanties. En cas de cession, comparisons.be en informera l'Utilisateur.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 22 : NULLITÉ</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">La nullité, caducité ou invalidité d'une quelconque clause des présentes CG au vu des lois et règlements en vigueur n'affectera pas la validité des autres dispositions des CG.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Dans ces cas, comparisons.be s'engage à remplacer la clause incriminée par une autre de même portée poursuivant le même objectif et ayant, autant que possible, un effet équivalent.</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 23 : NON-RENONCIATION</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Comparisons.be pourra à tout moment exiger de l'Utilisateur l'application de tout ou partie des termes des présentes CG.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Néanmoins, le fait de ne pas exiger, à tout moment, l'application stricte de tout ou partie des termes des présentes CG, ne constitue pas un abandon partiel ou total des droits de comparisons.be</p>
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 24 : RÉCLAMATIONS - LITIGES</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Toute réclamation peut être adressée à comparisons.be via le formulaire de contact du Site web.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">En cas de solution non satisfaisante pour l'Utilisateur, le litige pourra être porté, dans le cadre d'un règlement extrajudiciaire, auprès du Service de Médiation pour le Consommateur.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Coordonnées :</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">Service de Médiation pour le Consommateur</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">Boulevard du Roi Albert II 8 boîte 1</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">1000 Bruxelles</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">BELGIQUE</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">N° d'entreprise (BCE/TVA): BE0553.755.479</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">Téléphone : 02 702 52 20</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">Fax : 02 808 71 29</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 text-center">E-mail : contact@mediationconsommateur.be</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8 text-center">Site web : https://mediationconsommateur.be/fr
                <div class="py-5 max-w-7xl mx-auto my-4 sm:px-6 lg:px-8 font-bold text-white underline">ARTICLE 25 : DROIT APPLICABLE ET JURIDICTION COMPÉTENTE</div>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Les présentes CG sont régies par la loi belge.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">En cas de litige entre l'Utilisateur et comparisons.be non résolu à l'amiable dans les trente jours calendaires suivant l'envoi d'une notification écrite via le formulaire de contact ou par e-mail par l'une des parties, le Service de Médiation pour le Consommateur peut être contacté.</p>
                <p class="max-w-7xl mx-auto my-4 sm:px-6 lg:px-8">Si le litige n'est toujours pas résolu après ce stade, les Cours et Tribunaux de Bruxelles sont seuls compétents pour régler tout contentieux.</p>
                <p class="max-w-7xl mx-auto sm:px-6 mb-5 lg:px-8">Le délai de notification d'un litige auprès d'une des parties est d'un an à compter de la survenance de la situation litigieuse.</p>
            </div>
        </div>

    @include('footer')

    </body>
</html>
