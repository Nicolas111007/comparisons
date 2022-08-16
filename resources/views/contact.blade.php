<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

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
        <script>
            function minMaj(obj){
                obj.value=obj.value.replace(/_/g,'-');
                obj.value = obj.value.toLowerCase();
                obj.value=obj.value.replace(/([\w'âäàéèêëîïôöùÿç]+)/gi, function(a) {         
                        return a.slice(0,1).toUpperCase() + a.slice(1);
                    });
            }
            function minLow(obj){
                obj.value = obj.value.toLowerCase();
            }
        </script>
    </head>
    <body class="antialiased">
    
    @include('menu')
    
    
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full space-y-8 bg-gray-200 p-7 rounded-lg">
            <form class="space-y-2" method="POST" action="{{ route('contactresult') }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="identify" name="identify" value={{uniqid()}}>
                    <div>
                        <p class="text-center text-3xl font-bold mb-10">Formulaire de contact</p>
                    </div>
                    <div><p class="mb-5"><span class="text-red-700 font-bold">*</span> Les champs marqués d'un astérisque sont obligatoires</p></div>
                    <!-- Civility -->
                    <div class="text-center">
                        <div class="mb-2"><label for="civility_id">Civilité <span class="text-red-700 font-bold">*</span></label></div>
                        <select id ="civility_id" name="civility_id" required >
                            <option value="" label="Sélectionnez" disabled="disabled" selected="selected">Sélectionnez</option>
                            @foreach ($civility as $civility)
                                <option value={{$civility->id}}>{{$civility->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Name -->
                    <div>
                        <label for="name">Nom <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('name')")
                            <input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Votre nom" pattern="[\D]{2,100}" minlength="2" maxlength="100" onkeyup="minMaj(this);" required />
                        @else
                            <input id="name" class="block mt-1 w-full" type="text" name="name" value="old('name')" pattern="[\D]{2,100}" minlength="2" maxlength="100" onkeyup="minMaj(this);" required />
                        @endif
                    </div>
                    
                    <!-- First name -->
                    <div>
                        <label for="first_name">Prénom <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('first_name')")
                            <input id="first_name" class="block mt-1 w-full" type="text" name="first_name" placeholder="Votre prénom" pattern="[\D]{2,100}" minlength="2" maxlength="100" onkeyup="minMaj(this);" required />
                        @else
                            <input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="old('first_name')" pattern="[\D]{2,100}" minlength="2" maxlength="100" onkeyup="minMaj(this);" required />
                        @endif
                    </div>
                    
                    <!-- E-mail -->
                    <div>
                        <label for="email">E-mail <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('email')")
                            <input id="email" class="block mt-1 w-full" type="text" name="email" placeholder="Votre e-mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}" minlength="5" maxlength="254" onkeyup="minLow(this)" required />
                        @else
                            <input id="email" class="block mt-1 w-full" type="text" name="email" value="old('email')" pattern="^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}" minlength="5" maxlength="254" onkeyup="minLow(this)" required />
                        @endif
                    </div>

                    <!-- Phone number -->
                    <div>
                        <label for="phone">Numéro de téléphone</label>

                        @if (null !== "old('phone')")
                            <input id="phone" class="block mt-1 w-full" type="text" name="phone" placeholder="ex: 012345678" maxlength="9" pattern="^0((10|11|12|13|14|15|16|19|42|43|50|51|52|53|54|55|56|57|58|59|60|61|63|64|65|67|68|69|71|80|81|82|83|84|85|86|87|89|92|93)[0-9]{6,6}|(2|3)[0-9]{7,7})$" />
                        @else
                            <input id="phone" class="block mt-1 w-full" type="text" name="phone" value="old('phone')" maxlength="9" pattern="^0((10|11|12|13|14|15|16|19|42|43|50|51|52|53|54|55|56|57|58|59|60|61|63|64|65|67|68|69|71|80|81|82|83|84|85|86|87|89|92|93)[0-9]{6,6}|(2|3)[0-9]{7,7})$" />
                        @endif
                    </div>
                    
                    <!-- Mobile phone -->
                    <div>
                        <label for="mobilephone">Numéro de GSM</label>

                        @if (null !== "old('mobilephone')")
                            <input id="mobilephone" class="block mt-1 w-full" type="text" name="mobilephone" placeholder="ex: 0412345678" maxlength="10" pattern="^04((618|65[1-9]|66[0-7]|68[1-3])[0-9]{5,5}|(55|56|60|7[0-9]|8[3-9]|9[0-9])[0-9]{6,6})$" />
                        @else
                            <input id="mobilephone" class="block mt-1 w-full" type="text" name="mobilephone" value="old('mobilephone')" maxlength="10" pattern="^04((618|65[1-9]|66[0-7]|68[1-3])[0-9]{5,5}|(55|56|60|7[0-9]|8[3-9]|9[0-9])[0-9]{6,6})$" />
                        @endif
                    </div>

                    <!-- Message object -->
                    <div>
                        <label for="messobject">Objet du message <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('messobject')")
                            <input id="messobject" class="block mt-1 w-full" type="text" name="messobject" maxlength="100" required />
                        @else
                            <input id="messobject" class="block mt-1 w-full" type="text" name="messobject" value="old('messobject')" maxlength="100" required />
                        @endif
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message">Message <span class="text-red-700 font-bold">*</span></label>

                        @if (null !== "old('message')")
                            <textarea id="message" class="block mt-1 w-full" name="message" maxlength="5000" rows="13" cols="33" required /></textarea>
                        @else
                            <textarea id="message" class="block mt-1 w-full" name="message" value="old('message')" maxlength="5000" rows="13" cols="33" required /></textarea>
                        @endif
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4 hover:bg-sky-400 ">
                            {{ __('Envoyer') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
