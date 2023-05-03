<nav x-data="{ open: false }" >
    <!-- Primary Navigation Menu -->
    <div class="bg-white flex items-center justify-between py-7  w-full  px-5 sm:px-10 h-full">
        <div class="flex items-center gap-5">
            <svg class="hamburger cursor-pointer w-6 h-6 2xl:hidden" viewBox="0 0 24 24" >
                <path d="M18 15l-.001 3H21v2h-3.001L18 23h-2l-.001-3H13v-2h2.999L16 15h2zm-7 3v2H3v-2h8zm10-7v2H3v-2h18zm0-7v2H3V4h18z"></path>
            </svg>
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                {{ __('Dashbord') }}
            </x-nav-link>

            <x-nav-link href="{{ route('exams') }}" :active="request()->routeIs('exams')">
                {{ __('exams') }}
            </x-nav-link>

            <x-nav-link href="{{ route('modules') }}" :active="request()->routeIs('modules')">
                {{ __('modules') }}
            </x-nav-link>

            <x-nav-link href="{{ route('seminars') }}" :active="request()->routeIs('seminars')">
                {{ __('seminars') }}
            </x-nav-link>

            <x-nav-link href="{{ route('profile') }}" :active="request()->routeIs('profile')">
                {{ __('profile') }}
            </x-nav-link>


        </div>
        <div class="flex items-center gap-2 sm:gap-5">
            <a href="#!" class="rounded-full p-2 transition-colors duration-300 hover:bg-gray-100">
                <svg version="1.1"  id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="w-5 h-5" viewBox="0 0 122.879 119.799" enable-background="new 0 0 122.879 119.799" xml:space="preserve"><g><path d="M49.988,0h0.016v0.007C63.803,0.011,76.298,5.608,85.34,14.652c9.027,9.031,14.619,21.515,14.628,35.303h0.007v0.033v0.04 h-0.007c-0.005,5.557-0.917,10.905-2.594,15.892c-0.281,0.837-0.575,1.641-0.877,2.409v0.007c-1.446,3.66-3.315,7.12-5.547,10.307 l29.082,26.139l0.018,0.016l0.157,0.146l0.011,0.011c1.642,1.563,2.536,3.656,2.649,5.78c0.11,2.1-0.543,4.248-1.979,5.971 l-0.011,0.016l-0.175,0.203l-0.035,0.035l-0.146,0.16l-0.016,0.021c-1.565,1.642-3.654,2.534-5.78,2.646 c-2.097,0.111-4.247-0.54-5.971-1.978l-0.015-0.011l-0.204-0.175l-0.029-0.024L78.761,90.865c-0.88,0.62-1.778,1.209-2.687,1.765 c-1.233,0.755-2.51,1.466-3.813,2.115c-6.699,3.342-14.269,5.222-22.272,5.222v0.007h-0.016v-0.007 c-13.799-0.004-26.296-5.601-35.338-14.645C5.605,76.291,0.016,63.805,0.007,50.021H0v-0.033v-0.016h0.007 c0.004-13.799,5.601-26.296,14.645-35.338C23.683,5.608,36.167,0.016,49.955,0.007V0H49.988L49.988,0z M50.004,11.21v0.007h-0.016 h-0.033V11.21c-10.686,0.007-20.372,4.35-27.384,11.359C15.56,29.578,11.213,39.274,11.21,49.973h0.007v0.016v0.033H11.21 c0.007,10.686,4.347,20.367,11.359,27.381c7.009,7.012,16.705,11.359,27.403,11.361v-0.007h0.016h0.033v0.007 c10.686-0.007,20.368-4.348,27.382-11.359c7.011-7.009,11.358-16.702,11.36-27.4h-0.006v-0.016v-0.033h0.006 c-0.006-10.686-4.35-20.372-11.358-27.384C70.396,15.56,60.703,11.213,50.004,11.21L50.004,11.21z"></path></g></svg>
            </a>
            <!-- Authentication -->

            <a href="#!" class="rounded-full p-2 transition-colors duration-300 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.5 56.44" class="w-5 h-5">
                    <g>
                        <g>
                            <path d="M23.75,56.44a7.81,7.81,0,0,0,7.82-7.77H15.91a7.83,7.83,0,0,0,7.84,7.77Z" class="svg-bell svg-bell_clapper"></path>
                            <path d="M41.9,38.72V23.52a17.83,17.83,0,0,0-14-17.43V4.15a4.19,4.19,0,0,0-8.38,0V6.09a17.84,17.84,0,0,0-14,17.43v15.2L0,44.26V47H47.5V44.26Z" class="svg-bell svg-bell_whole"></path>
                        </g>
                    </g>
                </svg>
            </a>
            <div class="relative profice">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button type="button" class="flex items-center text-xl font-semibold gap-2">
                            <a href="{{ route('profile') }}" class="rounded-full p-2 bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M10.2453 2.39175C9.67522 1.77622 8.87893 1.43726 8.00003 1.43726C7.11643 1.43726 6.31751 1.77417 5.75003 2.38589C5.1764 3.00435 4.8969 3.84487 4.96253 4.75249C5.09261 6.54311 6.4552 7.99975 8.00003 7.99975C9.54485 7.99975 10.9051 6.54341 11.0372 4.75307C11.1037 3.85366 10.8225 3.01489 10.2453 2.39175Z" fill="#000"/>
                                    <path d="M13.1563 14.5616H2.8438C2.70881 14.5634 2.57514 14.535 2.4525 14.4786C2.32985 14.4222 2.22133 14.3392 2.13481 14.2355C1.94438 14.0079 1.86762 13.6971 1.92446 13.3827C2.17173 12.011 2.9434 10.8588 4.15629 10.0499C5.23383 9.33183 6.59877 8.93661 8.00004 8.93661C9.40131 8.93661 10.7663 9.33212 11.8438 10.0499C13.0567 10.8585 13.8284 12.0107 14.0756 13.3824C14.1325 13.6968 14.0557 14.0076 13.8653 14.2352C13.7788 14.3389 13.6703 14.422 13.5476 14.4785C13.425 14.5349 13.2913 14.5633 13.1563 14.5616V14.5616Z" fill="#000"/>
                                </svg>
                            </a>
{{--                            {{ Auth::user()->name }}--}}
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Account Management -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}"
                                             @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>
