@include('menu')
<title>Inscription</title>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{url('/images/logo_site.png')}}" alt="Logo du comparateur" class="block h-36 w-auto fill-current text-gray-600" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <!-- Civility -->
            <div>
                <x-label for="civility_id" :value="__('Civilité')" />
                <select id ="civility_id" name="civility_id">
                    <option value="" label="Sélectionnez" disabled="disabled" selected="selected">Sélectionnez</option>
                    @foreach ($civility as $civility)
                        <option value={{$civility->id}}>{{$civility->title}}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Locality -->

            <div>
                <x-label for="pc_locality_id" :value="__('Locality')" />
                <select class="w-full" id="pc_locality_id" name="pc_locality_id">
                    <option value="" label="Sélectionnez" disabled="disabled" selected="selected">Sélectionnez</option>
                    @foreach ($locality as $locality)
                        <option value={{$locality->id}}>{{$locality->pc}}  {{$locality->locality}}</option>
                    @endforeach
                </select>
            </div>

            <!--area_id-->

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- First_Name -->
            <div>
                <x-label for="first_name" :value="__('Prénom')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required />
            </div>

            <!-- Birth_Date -->
            <div>
                <x-label for="birth_date" :value="__('Date de naissance')" />

                <x-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('E-mail')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmation du mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <!-- Housephone -->
            <div>
                <x-label for="housephone" :value="__('Téléphone')" />

                <x-input id="housephone" class="block mt-1 w-full" type="text" name="housephone" :value="old('housephone')" />
            </div>

             <!-- Mobilephone -->
             <div>
                <x-label for="mobilephone" :value="__('GSM')" />

                <x-input id="mobilephone" class="block mt-1 w-full" type="text" name="mobilephone" :value="old('mobilephone')" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà inscrit ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('S\'inscrire') }}
                </x-button>
                
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
