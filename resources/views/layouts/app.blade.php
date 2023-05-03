<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased">
        <div class="flex min-h-screen overflow-hidden overflow-y-auto ">
{{--            @include('partials.sidebar')--}}
            @include('partials.seminar-sidebar')
            <div class="w-full overflow-auto">
                @livewire('navigation-menu')
                <main class="w-full bg-gray-100">
                    {{ $slot }}
                </main>
            </div>

{{--        SELECT POPUP SECTION   --}}
            <div class="popup h-screen fixed h-full xl:h-screen p-5 w-full overflow-y-auto z-50">
                <div class=" flex items-center justify-center w-full h-full">
                    <form class=" max-w-3xl w-full  shadow">
                        <div class="bg-primary text-white flex items-center  px-5 md:px-8 py-4  md:py-5 font-medium justify-between gap-5">
                            <h2 class="text-xl md:text-2xl">Create New Seminar</h2>
                            <svg viewBox="0 0 500 500" class="w-4 h-5 md:w-5 md:h-5 close rotate-45 fill-white">
                                <rect x="212" y="0" width="76" height="500" ></rect>
                                <rect y="212" x="0" height="76" width="500" ></rect>
                            </svg>
                        </div>
                        <div class="flex flex-col gap-8 justify-between p-5 md:p-8 bg-white">
                            <div class=" space-y-4 md:space-y-8">
                                <div class="flex flex-col md:flex-row  md:items-center justify-start gap-2 md:gap-10">
                                    <x-lables class="md:w-80 text-left">Seminar Name</x-lables>
                                    <x-input placeholder="Seminar Name" class="w-full"></x-input>
                                </div>
                                <div class="flex flex-col md:flex-row  md:items-center justify-start gap-2 md:gap-10">
                                    <x-lables class="md:w-80 text-left">Number of Participant</x-lables>
                                    <x-input placeholder="Number of Participant" class="w-full"></x-input>
                                </div>
                                <div class="flex flex-col md:flex-row  md:items-center justify-start gap-2 md:gap-10">
                                    <x-lables class="md:w-80 text-left">TimeFrame </x-lables>
                                    <div class=" w-full">
                                        <x-select>
                                            <option value="select">Select TimeFrame</option>
                                            <option value="1:00">1:00</option>
                                            <option value="2:00">2:00</option>
                                            <option value="3:00">3:00</option>
                                        </x-select>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row  md:items-center justify-start gap-2 md:gap-10">
                                    <x-lables class="md:w-80 text-left">Type </x-lables>
                                    <div class=" w-full">
                                        <x-select>
                                            <option value="select">Select Type</option>
                                            <option value="ABC">ABC</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SCST">SCST</option>
                                        </x-select>
                                    </div>
                                </div>
                            </div>
                            <div class="self-end ">
                                <x-button type="btn" class=" close mr-5 border-primary bg-white text-pink-600 border-2 ">
                                    Cancel
                                </x-button>
                                <x-button >
                                    Create
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

{{--        TEST POPUP SECTION--}}
            <div class="test-popup  h-screen fixed h-full xl:h-screen p-5 w-full overflow-y-auto z-50">
                <div class=" flex items-center justify-center w-full h-full">
                    <div class=" bg-white max-w-7xl w-full">
                        <div class="flex w-full items-center border-b border-black p-5 justify-between">
                            <p>lorem inshu user wender text</p>
                            <div class="flex gap-10 items-center">
                                <span class="font-bold text-black">30:00</span>
                                <svg viewBox="0 0 500 500" class="w-5 h-5 close rotate-45">
                                    <rect x="212" y="0" width="76" height="500"></rect>
                                    <rect y="212" x="0" height="76" width="500"></rect>
                                </svg>
                            </div>
                        </div>
                        <div class="p-5 space-y-2">
                            <h2 class="text-2xl text-bold mb-5">Question 1 </h2>
                            <div class="text-lg">
                                <div class="flex items-center gap-5">
                                    <h4 class="text-2xl font-bold text-slate-500">A</h4>
                                    <div class="border w-full p-3 flex items-center justify-between border-gray-200">
                                        <p>Lorem ipsum, dolor jkackbdc hkccbsbc text</p>
                                        <svg viewBox="0 0 512 512" class="w-5 h-5">
                                            <path d="M204.5,281.5l187-187.5a28,28 0 01 39,0l40,40a28,28 0 01 0,37l-246,246a28,28 0 01-40.5,0l-143-143.5a27,27 0 01 0-35.5l42.5-42.5a27,27 0 01 35.5,0.5z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-lg">
                                <div class="flex items-center gap-5">
                                    <h4 class="text-2xl font-bold text-slate-500">A</h4>
                                    <div class="border w-full p-3 flex items-center justify-between border-gray-200">
                                        <p>Lorem ipsum, dolor jkackbdc hkccbsbc text</p>
                                        <svg viewBox="0 0 512 512" class="w-5 h-5">
                                            <path d="M204.5,281.5l187-187.5a28,28 0 01 39,0l40,40a28,28 0 01 0,37l-246,246a28,28 0 01-40.5,0l-143-143.5a27,27 0 01 0-35.5l42.5-42.5a27,27 0 01 35.5,0.5z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-lg">
                                <div class="flex items-center gap-5">
                                    <h4 class="text-2xl font-bold text-slate-500">A</h4>
                                    <div class="border w-full p-3 flex items-center justify-between border-gray-200">
                                        <p>Lorem ipsum, dolor jkackbdc hkccbsbc text</p>
                                        <svg viewBox="0 0 512 512" class="w-5 h-5">
                                            <path d="M204.5,281.5l187-187.5a28,28 0 01 39,0l40,40a28,28 0 01 0,37l-246,246a28,28 0 01-40.5,0l-143-143.5a27,27 0 01 0-35.5l42.5-42.5a27,27 0 01 35.5,0.5z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="text-lg">
                                <div class="flex items-center gap-5">
                                    <h4 class="text-2xl font-bold text-slate-500">A</h4>
                                    <div class="border w-full p-3 flex items-center justify-between border-gray-200">
                                        <p>Lorem ipsum, dolor jkackbdc hkccbsbc text</p>
                                        <svg viewBox="0 0 512 512" class="w-5 h-5">
                                            <path d="M204.5,281.5l187-187.5a28,28 0 01 39,0l40,40a28,28 0 01 0,37l-246,246a28,28 0 01-40.5,0l-143-143.5a27,27 0 01 0-35.5l42.5-42.5a27,27 0 01 35.5,0.5z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @stack('modals')

        @livewireScripts

    </body>

</html>
