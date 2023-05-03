<x-app-layout>
    <div class="p-5 lg:p-10 overflow-hidden" >
        <div class="flex justify-end mb-3 md:mb-5">
            <x-button>Create New</x-button>
        </div>
        <div class="overflow-x-auto"  >
            <table class="w-full table border-separate border-spacing-y-2 md:border-spacing-y-5 overflow-x-scroll" style="min-width: 400px" >
                <x-tr class="">

                    <x-th class=" w-1/6 text-left">
                        <div class="md:w-40 truncate">Company Name</div>
                    </x-th>
                    <x-th class=" w-1/6 text-left">
                        <div class="md:w-40 truncate">Contect Parson</div>
                    </x-th>
                    <x-th class="text-right" style="min-width: 80px">Action</x-th>
                </x-tr>
                <x-tr>
                    <x-td class=" w-1/6 text-left">
                        <div class="w-32 truncate"><a href="{{ route('super-admin.classes-pdf') }}">Lagal Basic</a></div>
                    </x-td>
                    <x-td class=" w-1/6 text-center">
                        <div class="w-32 truncate"><a href="{{ route('super-admin.classes-pdf') }}">3</a></div>
                    </x-td>
                    <x-td>
                        <a href="{{ route('super-admin.classes-pdf') }}" class="flex items-center justify-end">
                            <svg class="w-8" hei viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_580_3506)">
                                    <path d="M10.5002 6.66671C11.4168 6.66671 12.1668 5.91671 12.1668 5.00004C12.1668 4.08338 11.4168 3.33338 10.5002 3.33338C9.5835 3.33338 8.8335 4.08338 8.8335 5.00004C8.8335 5.91671 9.5835 6.66671 10.5002 6.66671ZM10.5002 8.33338C9.5835 8.33338 8.8335 9.08338 8.8335 10C8.8335 10.9167 9.5835 11.6667 10.5002 11.6667C11.4168 11.6667 12.1668 10.9167 12.1668 10C12.1668 9.08338 11.4168 8.33338 10.5002 8.33338ZM10.5002 13.3334C9.5835 13.3334 8.8335 14.0834 8.8335 15C8.8335 15.9167 9.5835 16.6667 10.5002 16.6667C11.4168 16.6667 12.1668 15.9167 12.1668 15C12.1668 14.0834 11.4168 13.3334 10.5002 13.3334Z" fill="#A0AEC0"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_580_3506">
                                        <rect width="20" height="20" fill="white" transform="translate(0.500244 4.19617e-05)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </x-td>
                </x-tr>
                <x-tr>
                    <x-td class=" w-1/6 text-left">
                        <div class="w-32 truncate"><a href="{{ route('super-admin.classes-pdf') }}">Lagal Basic</a></div>
                    </x-td>
                    <x-td class=" w-1/6 text-center">
                        <div class="w-32 truncate"><a href="{{ route('super-admin.classes-pdf') }}">3</a></div>
                    </x-td>
                    <x-td>
                        <a href="{{ route('super-admin.classes-pdf') }}" class="flex items-center justify-end">
                            <svg class="w-8" hei viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_580_3506)">
                                    <path d="M10.5002 6.66671C11.4168 6.66671 12.1668 5.91671 12.1668 5.00004C12.1668 4.08338 11.4168 3.33338 10.5002 3.33338C9.5835 3.33338 8.8335 4.08338 8.8335 5.00004C8.8335 5.91671 9.5835 6.66671 10.5002 6.66671ZM10.5002 8.33338C9.5835 8.33338 8.8335 9.08338 8.8335 10C8.8335 10.9167 9.5835 11.6667 10.5002 11.6667C11.4168 11.6667 12.1668 10.9167 12.1668 10C12.1668 9.08338 11.4168 8.33338 10.5002 8.33338ZM10.5002 13.3334C9.5835 13.3334 8.8335 14.0834 8.8335 15C8.8335 15.9167 9.5835 16.6667 10.5002 16.6667C11.4168 16.6667 12.1668 15.9167 12.1668 15C12.1668 14.0834 11.4168 13.3334 10.5002 13.3334Z" fill="#A0AEC0"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_580_3506">
                                        <rect width="20" height="20" fill="white" transform="translate(0.500244 4.19617e-05)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </x-td>
                </x-tr>
                <x-tr>
                    <x-td class=" w-1/6 text-left">
                        <div class="w-32 truncate"><a href="{{ route('super-admin.classes-pdf') }}">Lagal Basic</a></div>
                    </x-td>
                    <x-td class=" w-1/6 text-center">
                        <div class="w-32 truncate"><a href="{{ route('super-admin.classes-pdf') }}">3</a></div>
                    </x-td>
                    <x-td>
                        <a href="{{ route('super-admin.classes-pdf') }}" class="flex items-center justify-end">
                            <svg class="w-8" hei viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_580_3506)">
                                    <path d="M10.5002 6.66671C11.4168 6.66671 12.1668 5.91671 12.1668 5.00004C12.1668 4.08338 11.4168 3.33338 10.5002 3.33338C9.5835 3.33338 8.8335 4.08338 8.8335 5.00004C8.8335 5.91671 9.5835 6.66671 10.5002 6.66671ZM10.5002 8.33338C9.5835 8.33338 8.8335 9.08338 8.8335 10C8.8335 10.9167 9.5835 11.6667 10.5002 11.6667C11.4168 11.6667 12.1668 10.9167 12.1668 10C12.1668 9.08338 11.4168 8.33338 10.5002 8.33338ZM10.5002 13.3334C9.5835 13.3334 8.8335 14.0834 8.8335 15C8.8335 15.9167 9.5835 16.6667 10.5002 16.6667C11.4168 16.6667 12.1668 15.9167 12.1668 15C12.1668 14.0834 11.4168 13.3334 10.5002 13.3334Z" fill="#A0AEC0"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_580_3506">
                                        <rect width="20" height="20" fill="white" transform="translate(0.500244 4.19617e-05)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </x-td>
                </x-tr>
            </table>
        </div>
    </div>
</x-app-layout>
