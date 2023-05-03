<x-app-layout>
    <div class="p-5 lg:p-10 overflow-hidden">
        <div class="flex justify-end mb-3 md:mb-5">
            <x-button class="popup_btn"> Create New</x-button>
        </div>
        <div class="overflow-x-auto"  >
            <table class="w-full table border-separate border-spacing-y-2 md:border-spacing-y-5 overflow-x-scroll" style="min-width: 500px" >
                <x-tr class="">
                    <x-th class="text-left">
                        <div class="w-20 sm:w-40 truncate">
                            Seminar Name
                        </div>
                    </x-th>
                    <x-th class="text-center">
                            participant
                    </x-th>
                    <x-th class="text-center">
                        Timeframe
                    </x-th>
                    <x-th>
                        <div class="w-40 text-center truncate">
                            Type
                        </div>
                    </x-th>
                    <x-th class="xl:w-1/2 w-10 text-right" style="min-width: 80px">Action</x-th>
                </x-tr>
                <x-tr>
                    <x-td class="md:2/12 w-10 text-left">
                        <div class="w-20 sm:w-40 truncate">
                            Seminar 1
                        </div>
                    </x-td>
                    <x-td class="md:2/12 w-10 text-center">
                        60
                    </x-td>
                    <x-td class="md:2/12 w-10 text-center">
                            0 Weeks
                    </x-td>

                    <x-td class="md:2/12  text-center">
                        <div class="w-20 sm:w-40 truncate">
                            Faderal state
                        </div>
                    </x-td>
                    <x-td class="xl:w-1/2 w-10 text-right">
                        <x-checkbox-btn></x-checkbox-btn>
                    </x-td>
                </x-tr>
                <x-tr>
                    <x-td class="md:2/12 w-10 text-left">
                        <div class="w-20 sm:w-40 truncate">
                            Seminar 1
                        </div>
                    </x-td>
                    <x-td class="md:2/12 w-10 text-center">
                        60
                    </x-td>
                    <x-td class="md:2/12 w-10 text-center">
                            0 Weeks
                    </x-td>

                    <x-td class="md:2/12 text-center">
                        <div class="w-20 sm:w-40 truncate">
                            Faderal state
                        </div>
                    </x-td>
                    <x-td class="xl:w-1/2 w-10 text-right" >
                        <x-checkbox-btn></x-checkbox-btn>
                    </x-td>
                </x-tr>
                <x-tr>
                    <x-td class="md:2/12 w-10 text-left">
                        <div class="w-20 sm:w-40 truncate">
                            Seminar 1
                        </div>
                    </x-td>
                    <x-td class="md:2/12 w-10 text-center">
                        60
                    </x-td>
                    <x-td class="md:2/12 w-10 text-center">
                            0 Weeks
                    </x-td>

                    <x-td class="md:2/12 text-center">
                        <div class="w-20 sm:w-40 truncate">
                            Faderal state
                        </div>
                    </x-td>
                    <x-td class="xl:w-1/2 w-10 text-right">
                        <x-checkbox-btn></x-checkbox-btn>
                    </x-td>
                </x-tr>
            </table>
        </div>
    </div>
</x-app-layout>
