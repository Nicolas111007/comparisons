<div class="mx-auto px-4 sm:px-6 lg:px-8 bg-sky-400">
    <div class="flex justify-center h-16">
        <div class="flex">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                </a>
            </div>

            @if ($_SERVER['REQUEST_URI']=="/")
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <span class="underline font-bold text-black">
                        {{ __('Accueil') }}
                    </span>
                </div>
            @else
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <a class="hover:underline font-bold text-white hover:text-black" href="/" :active="request()->routeIs('/')">
                        {{ __('Accueil') }}
                    </a>
                </div>
            @endif
            
            @if ($_SERVER['REQUEST_URI']=="/compare")
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <span class="underline font-bold text-black">
                        {{ __('Comparateur') }}
                    </span>
                </div>
            @else
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <a class="hover:underline font-bold text-white hover:text-black" href="compare" :active="request()->routeIs('compare')">
                        {{ __('Comparateur') }}
                    </a>
                </div>
            @endif
            

            @if ($_SERVER['REQUEST_URI']=="/faq")
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <span class="underline font-bold text-black">
                        {{ __('FAQ') }}
                    </span>
                </div>
            @else
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <a class="hover:underline font-bold text-white hover:text-black" href="faq" :active="request()->routeIs('faq')">
                        {{ __('FAQ') }}
                    </a>
                </div>
            @endif
            
            @if ($_SERVER['REQUEST_URI']=="/contact")
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <span class="underline font-bold text-black">
                        {{ __('Contact') }}
                    </span>
                </div>
            @else
                <!-- Navigation Links -->
                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <a class="hover:underline font-bold text-white hover:text-black" href="contact" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </a>
                </div>
            @endif
            
            @if (Auth::check())
                @if ($_SERVER['REQUEST_URI']=="/dashboard")
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <span class="underline font-bold text-black">
                            {{ __('Mon compte') }}
                        </span>
                    </div>
                @else
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <a class="hover:underline font-bold text-white hover:text-black" href="dashboard" :active="request()->routeIs('dashboard')">
                            {{ __('Mon compte') }}
                        </a>
                    </div>
                @endif
            @elseif (Auth::guest())
                @if ($_SERVER['REQUEST_URI']=="/register")
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <span class="underline font-bold text-black">
                            {{ __('Inscription') }}
                        </span>
                    </div>
                @else
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <a class="hover:underline font-bold text-white hover:text-black" href="register" :active="request()->routeIs('register')">
                            {{ __('Inscription') }}
                        </a>
                    </div>
                @endif
            @endif

            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="hover:underline font-bold text-white hover:text-black" href="logout" :active="request()->routeIs('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white dark:text-white underline">Log in</a>
                    @endauth
                </div>
            @endif
            
        </div>
    </div>
</div>
