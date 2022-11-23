
<div class="fixed top-0 left-0 w-full">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 bg-sky-400">
        <div class="flex justify-center h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="/images/logo_menu.png" alt="Logo du comparateur" class="block h-12 w-auto fill-current text-gray-600" />
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
                        <a class="hover:underline font-bold text-white hover:text-black" href="{{route('compare')}}" :active="request()->routeIs('compare')">
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
                        <a class="hover:underline font-bold text-white hover:text-black" href="{{route('faq')}}" :active="request()->routeIs('faq')">
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
                        <a class="hover:underline font-bold text-white hover:text-black" href="{{route('contact')}}" :active="request()->routeIs('contact')">
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
                            <a class="hover:underline font-bold text-white hover:text-black" href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">
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
                            <a class="hover:underline font-bold text-white hover:text-black" href="{{route('register')}}" :active="request()->routeIs('register')">
                                {{ __('Inscription') }}
                            </a>
                        </div>
                    @endif
                @endif

                @Auth
                    @if (Auth::user()->is_admin==1)
                        @if ($_SERVER['REQUEST_URI']=="/admin")
                            <!-- Navigation Links -->
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                                <span class="underline font-bold text-black">
                                    {{ __('Panneau d\'administration') }}
                                </span>
                            </div>
                        @else
                            <!-- Navigation Links -->
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                                <a class="hover:underline font-bold text-white hover:text-black" href="{{route('admin')}}" :active="request()->routeIs('admin')">
                                    {{ __('Panneau d\'administration') }}
                                </a>
                            </div>
                        @endif
                    @endif
                @endauth

                <div class="group inline-block relative pl-8 mt-auto mb-auto">
                    <button class="bg-gray-200 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                        <span class="mr-1"> {{ App::getLocale() }} </span>
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </button>
                    <ul class="absolute hidden text-gray-700 pt-1 group-hover:block">
                        <li class="">
                            <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{route('lang.change','fr')}}"><svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-fr" viewBox="0 0 640 480">
                                    <g fill-rule="evenodd" stroke-width="1pt">
                                        <path fill="#fff" d="M0 0h640v480H0z" />
                                        <path fill="#002654" d="M0 0h213.3v480H0z" />
                                        <path fill="#ce1126" d="M426.7 0H640v480H426.7z" />
                                    </g>
                                </svg>fr</a>
                        </li>
                        <li class="">
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{route('lang.change','en')}}"><svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-us" viewBox="0 0 640 480">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44" d="M0 0h912v37H0zm0 73.9h912v37H0zm0 73.8h912v37H0zm0 73.8h912v37H0zm0 74h912v36.8H0zm0 73.7h912v37H0zM0 443h912V480H0z" />
                                            <path fill="#fff" d="M0 37h912v36.9H0zm0 73.8h912v36.9H0zm0 73.8h912v37H0zm0 73.9h912v37H0zm0 73.8h912v37H0zm0 73.8h912v37H0z" />
                                        </g>
                                        <path fill="#192f5d" d="M0 0h364.8v258.5H0z" />
                                        <path fill="#fff" d="m30.4 11 3.4 10.3h10.6l-8.6 6.3 3.3 10.3-8.7-6.4-8.6 6.3L25 27.6l-8.7-6.3h10.9zm60.8 0 3.3 10.3h10.8l-8.7 6.3 3.2 10.3-8.6-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.6zm60.8 0 3.3 10.3H166l-8.6 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.7-6.3h10.8zm60.8 0 3.3 10.3h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.4-10.2-8.8-6.3h10.7zm60.8 0 3.3 10.3h10.7l-8.6 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0 3.3 10.3h10.8l-8.8 6.3 3.4 10.3-8.7-6.4-8.7 6.3 3.4-10.2-8.8-6.3h10.8zM60.8 37l3.3 10.2H75l-8.7 6.2 3.2 10.3-8.5-6.3-8.7 6.3 3.1-10.3-8.4-6.2h10.7zm60.8 0 3.4 10.2h10.7l-8.8 6.2 3.4 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.7-6.2h10.8zm60.8 0 3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2H179zm60.8 0 3.4 10.2h10.7l-8.8 6.2 3.4 10.3-8.7-6.3-8.6 6.3 3.2-10.3-8.7-6.2H240zm60.8 0 3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zM30.4 62.6l3.4 10.4h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3L25 79.3 16.3 73h10.9zm60.8 0L94.5 73h10.8l-8.7 6.3 3.2 10.2-8.6-6.3-8.7 6.3 3.3-10.3-8.6-6.3h10.6zm60.8 0 3.3 10.3H166l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.7-6.3h10.8zm60.8 0 3.3 10.3h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.3h10.7zm60.8 0 3.3 10.3h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.3h10.7zm60.8 0 3.3 10.3h10.8l-8.8 6.3 3.4 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.3h10.8zM60.8 88.6l3.3 10.2H75l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0 3.4 10.2h10.7l-8.8 6.3 3.4 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.7-6.3h10.8zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3H179zm60.8 0 3.4 10.2h10.7l-8.7 6.3 3.3 10.3-8.7-6.4-8.6 6.3 3.2-10.2-8.7-6.3H240zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM30.4 114.5l3.4 10.2h10.6l-8.6 6.3 3.3 10.3-8.7-6.4-8.6 6.3L25 131l-8.7-6.3h10.9zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.2 10.2-8.6-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.6zm60.8 0 3.3 10.2H166l-8.6 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.7-6.3h10.8zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.4-10.2-8.8-6.3h10.7zm60.8 0 3.3 10.2h10.7L279 131l3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0 3.3 10.2h10.8l-8.8 6.3 3.4 10.3-8.7-6.4-8.7 6.3L329 131l-8.8-6.3h10.8zM60.8 140.3l3.3 10.3H75l-8.7 6.2 3.3 10.3-8.7-6.4-8.7 6.4 3.3-10.3-8.6-6.3h10.7zm60.8 0 3.4 10.3h10.7l-8.8 6.2 3.4 10.3-8.7-6.4-8.7 6.4 3.3-10.3-8.7-6.3h10.8zm60.8 0 3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.4-8.7 6.4 3.3-10.3-8.6-6.3H179zm60.8 0 3.4 10.3h10.7l-8.7 6.2 3.3 10.3-8.7-6.4-8.6 6.4 3.2-10.3-8.7-6.3H240zm60.8 0 3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.4-8.7 6.4 3.3-10.3-8.6-6.3h10.7zM30.4 166.1l3.4 10.3h10.6l-8.6 6.3 3.3 10.1-8.7-6.2-8.6 6.2 3.2-10.2-8.7-6.3h10.9zm60.8 0 3.3 10.3h10.8l-8.7 6.3 3.3 10.1-8.7-6.2-8.7 6.2 3.4-10.2-8.7-6.3h10.6zm60.8 0 3.3 10.3H166l-8.6 6.3 3.3 10.1-8.7-6.2-8.7 6.2 3.3-10.2-8.7-6.3h10.8zm60.8 0 3.3 10.3h10.8l-8.7 6.3 3.3 10.1-8.7-6.2-8.7 6.2 3.4-10.2-8.8-6.3h10.7zm60.8 0 3.3 10.3h10.7l-8.6 6.3 3.3 10.1-8.7-6.2-8.7 6.2 3.3-10.2-8.6-6.3h10.7zm60.8 0 3.3 10.3h10.8l-8.8 6.3 3.4 10.1-8.7-6.2-8.7 6.2 3.4-10.2-8.8-6.3h10.8zM60.8 192l3.3 10.2H75l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0 3.4 10.2h10.7l-8.8 6.3 3.4 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.7-6.3h10.8zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3H179zm60.8 0 3.4 10.2h10.7l-8.7 6.3 3.3 10.3-8.7-6.4-8.6 6.3 3.2-10.2-8.7-6.3H240zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zM30.4 217.9l3.4 10.2h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3 3.2-10.3-8.7-6.3h10.9zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.7-6.3h10.6zm60.8 0 3.3 10.2H166l-8.4 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.7-6.3h10.8zm60.8 0 3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.3h10.7zm60.8 0 3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.3h10.7zm60.8 0 3.3 10.2h10.8l-8.8 6.3 3.4 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.3h10.8z" />
                                    </g>
                                </svg>
                                en</a>
                        </li>
                        <li class="">
                            <a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{route('lang.change','nl')}}"><svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-nl" viewBox="0 0 640 480">
                                    <path fill="#21468b" d="M0 0h640v480H0z" />
                                    <path fill="#fff" d="M0 0h640v320H0z" />
                                    <path fill="#ae1c28" d="M0 0h640v160H0z" />
                                </svg>
                                nl</a>
                        </li>
                    </ul>
                </div>

                @if (Route::has('login'))
                    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="hover:underline font-bold text-white hover:text-black" href="{{route('logout')}}" :active="request()->routeIs('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                </form>
                            </div>
                        @else
                            @if ($_SERVER['REQUEST_URI']=="/login")
                                <!-- Navigation Links -->
                                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                                    <span class="underline font-bold text-black">
                                        {{ __('Connexion') }}
                                    </span>
                                </div>
                            @else
                                <!-- Navigation Links -->
                                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                                    <a class="hover:underline font-bold text-white hover:text-black" href="login" :active="request()->routeIs('login')">
                                        {{ __('Connexion') }}
                                    </a>
                                </div>
                            @endif    
                        
                        @endauth
                    </div>
                @endif
                
            </div>
        </div>
    </div>
</div>
