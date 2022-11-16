@include('menu')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="{{url('/images/logo_site.png')}}" alt="Logo du comparateur" class="block h-36 w-auto fill-current text-gray-600" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Cette partie de l\application est sécurisée. Confirmez votre mot de passe pour continuer.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <div class="flex justify-end mt-4">
                <x-button>
                    {{ __('Confirmer') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@include('footer')