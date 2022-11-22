
<div class="fixed bottom-0 left-0 w-full">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 bg-black">
        <div class="flex justify-center h-16">
            <div class="flex">
                

                @if ($_SERVER['REQUEST_URI']=="/rgpd")
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <span class="underline font-bold text-white">
                            {{ __('RGPD') }}
                        </span>
                    </div>
                @else
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <a class="hover:underline font-bold text-white" href="{{route('rgpd.index')}}" :active="request()->routeIs('/rgpd')">
                            {{ __('RGPD') }}
                        </a>
                    </div>
                @endif
                
                @if ($_SERVER['REQUEST_URI']=="/cgucgv")
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <span class="underline font-bold text-white">
                            {{ __('CGU / CGV') }}
                        </span>
                    </div>
                @else
                    <!-- Navigation Links -->
                    <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <a class="hover:underline font-bold text-white" href="{{route('cgucgv.index')}}" :active="request()->routeIs('cgucgv')">
                            {{ __('CGU / CGV') }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
