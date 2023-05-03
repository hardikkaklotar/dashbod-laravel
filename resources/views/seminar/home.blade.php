<x-app-layout>
    <div class="w-full p-5 xl:p-10 ">
        <div class="w-full mb-5 xl:mb-10 grid grid-cols-6 gap-5 xl:gap-10">
            <x-card class="col-span-6 md:col-span-3 xl:col-span-2 ">
                <div class="flex">
                    <svg class="w-6 md:w-16 h-6 md:h-16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_580_3772)">
                            <path d="M8.16289 3.46748C8.11927 3.42575 8.06124 3.40247 8.00088 3.40247C7.94052 3.40247 7.88248 3.42575 7.83887 3.46748L2.44531 8.61992C2.42241 8.64183 2.40418 8.66816 2.39175 8.69731C2.37931 8.72647 2.37291 8.75785 2.37295 8.78955L2.37207 13.6253C2.37207 13.8739 2.47084 14.1124 2.64666 14.2882C2.82247 14.464 3.06093 14.5628 3.30957 14.5628H6.125C6.24932 14.5628 6.36855 14.5134 6.45645 14.4255C6.54436 14.3376 6.59375 14.2184 6.59375 14.094V10.1097C6.59375 10.0475 6.61844 9.98789 6.6624 9.94393C6.70635 9.89998 6.76596 9.87529 6.82812 9.87529H9.17187C9.23403 9.87529 9.29365 9.89998 9.3376 9.94393C9.38156 9.98789 9.40625 10.0475 9.40625 10.1097V14.094C9.40625 14.2184 9.45563 14.3376 9.54354 14.4255C9.63145 14.5134 9.75068 14.5628 9.875 14.5628H12.6893C12.9379 14.5628 13.1764 14.464 13.3522 14.2882C13.528 14.1124 13.6268 13.8739 13.6268 13.6253V8.78955C13.6268 8.75785 13.6204 8.72647 13.608 8.69731C13.5955 8.66816 13.5773 8.64183 13.5544 8.61992L8.16289 3.46748Z" fill="#db2777"/>
                            <path d="M14.8821 7.65369L12.6907 5.5572V2.37585C12.6907 2.25153 12.6413 2.13231 12.5534 2.0444C12.4655 1.95649 12.3463 1.9071 12.222 1.9071H10.8157C10.6914 1.9071 10.5722 1.95649 10.4843 2.0444C10.3964 2.13231 10.347 2.25153 10.347 2.37585V3.31335L8.65011 1.69089C8.49132 1.53035 8.25518 1.43835 8.00001 1.43835C7.74571 1.43835 7.51016 1.53035 7.35138 1.69119L1.11993 7.6531C0.937706 7.82888 0.914855 8.11804 1.08068 8.30847C1.12232 8.35654 1.1733 8.39563 1.23053 8.42337C1.28776 8.4511 1.35003 8.4669 1.41356 8.46981C1.47709 8.47271 1.54054 8.46266 1.60006 8.44026C1.65958 8.41787 1.71392 8.38359 1.75978 8.33952L7.83888 2.53054C7.88249 2.48882 7.94053 2.46553 8.00089 2.46553C8.06125 2.46553 8.11928 2.48882 8.1629 2.53054L14.2426 8.33952C14.3321 8.42541 14.4521 8.47228 14.5762 8.46986C14.7002 8.46745 14.8183 8.41594 14.9044 8.32663C15.0843 8.14031 15.0693 7.83269 14.8821 7.65369Z" fill="#db2777"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_580_3772">
                                <rect width="15" height="15" fill="white" transform="translate(0.5 0.5)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <x-slot name="smolltitle">
                       Remaining Days
                    </x-slot>
                    <x-slot name="title">
                        12 Days
                    </x-slot>
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 sm:w-10 h-8 sm:h-10 " viewBox="0 0 14 14" fill="none">
                            <path d="M7.05469 2.84622L10.7109 6.50247L7.05469 10.1587" stroke="#71717a" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.2031 6.50275H2.78906" stroke="#71717a" stroke-width="1.125" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </x-slot>
                </div>
            </x-card>
            <x-card class="col-span-6 md:col-span-3 xl:col-span-2 ">
                <svg class="w-6 md:w-16 h-6 md:h-16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_580_3772)">
                        <path d="M8.16289 3.46748C8.11927 3.42575 8.06124 3.40247 8.00088 3.40247C7.94052 3.40247 7.88248 3.42575 7.83887 3.46748L2.44531 8.61992C2.42241 8.64183 2.40418 8.66816 2.39175 8.69731C2.37931 8.72647 2.37291 8.75785 2.37295 8.78955L2.37207 13.6253C2.37207 13.8739 2.47084 14.1124 2.64666 14.2882C2.82247 14.464 3.06093 14.5628 3.30957 14.5628H6.125C6.24932 14.5628 6.36855 14.5134 6.45645 14.4255C6.54436 14.3376 6.59375 14.2184 6.59375 14.094V10.1097C6.59375 10.0475 6.61844 9.98789 6.6624 9.94393C6.70635 9.89998 6.76596 9.87529 6.82812 9.87529H9.17187C9.23403 9.87529 9.29365 9.89998 9.3376 9.94393C9.38156 9.98789 9.40625 10.0475 9.40625 10.1097V14.094C9.40625 14.2184 9.45563 14.3376 9.54354 14.4255C9.63145 14.5134 9.75068 14.5628 9.875 14.5628H12.6893C12.9379 14.5628 13.1764 14.464 13.3522 14.2882C13.528 14.1124 13.6268 13.8739 13.6268 13.6253V8.78955C13.6268 8.75785 13.6204 8.72647 13.608 8.69731C13.5955 8.66816 13.5773 8.64183 13.5544 8.61992L8.16289 3.46748Z" fill="#db2777"/>
                        <path d="M14.8821 7.65369L12.6907 5.5572V2.37585C12.6907 2.25153 12.6413 2.13231 12.5534 2.0444C12.4655 1.95649 12.3463 1.9071 12.222 1.9071H10.8157C10.6914 1.9071 10.5722 1.95649 10.4843 2.0444C10.3964 2.13231 10.347 2.25153 10.347 2.37585V3.31335L8.65011 1.69089C8.49132 1.53035 8.25518 1.43835 8.00001 1.43835C7.74571 1.43835 7.51016 1.53035 7.35138 1.69119L1.11993 7.6531C0.937706 7.82888 0.914855 8.11804 1.08068 8.30847C1.12232 8.35654 1.1733 8.39563 1.23053 8.42337C1.28776 8.4511 1.35003 8.4669 1.41356 8.46981C1.47709 8.47271 1.54054 8.46266 1.60006 8.44026C1.65958 8.41787 1.71392 8.38359 1.75978 8.33952L7.83888 2.53054C7.88249 2.48882 7.94053 2.46553 8.00089 2.46553C8.06125 2.46553 8.11928 2.48882 8.1629 2.53054L14.2426 8.33952C14.3321 8.42541 14.4521 8.47228 14.5762 8.46986C14.7002 8.46745 14.8183 8.41594 14.9044 8.32663C15.0843 8.14031 15.0693 7.83269 14.8821 7.65369Z" fill="#db2777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_580_3772">
                            <rect width="15" height="15" fill="white" transform="translate(0.5 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                <x-slot name="smolltitle">
                </x-slot>
                <x-slot name="title">
                    cartificates
                </x-slot>
                <x-slot name="icon">
                    <svg  viewBox='0 0 100 100' class="w-8 sm:w-10 h-8 sm:h-10 " >
                        <g >
                            <path d="M 63 65 70 65 A 30 30 0 1 0 37 30 20 20 0 1 0 27 65 L 37 65"></path>
                            <path d="M 50 40 50 98"></path>
                            <path d="M 35 85 50 98 65 85"></path>
                        </g>
                    </svg>
                </x-slot>
            </x-card>
            <x-card class="col-span-6 md:col-span-3 xl:col-span-2 ">
                <svg class="w-6 md:w-16 h-6 md:h-16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_580_3772)">
                        <path d="M8.16289 3.46748C8.11927 3.42575 8.06124 3.40247 8.00088 3.40247C7.94052 3.40247 7.88248 3.42575 7.83887 3.46748L2.44531 8.61992C2.42241 8.64183 2.40418 8.66816 2.39175 8.69731C2.37931 8.72647 2.37291 8.75785 2.37295 8.78955L2.37207 13.6253C2.37207 13.8739 2.47084 14.1124 2.64666 14.2882C2.82247 14.464 3.06093 14.5628 3.30957 14.5628H6.125C6.24932 14.5628 6.36855 14.5134 6.45645 14.4255C6.54436 14.3376 6.59375 14.2184 6.59375 14.094V10.1097C6.59375 10.0475 6.61844 9.98789 6.6624 9.94393C6.70635 9.89998 6.76596 9.87529 6.82812 9.87529H9.17187C9.23403 9.87529 9.29365 9.89998 9.3376 9.94393C9.38156 9.98789 9.40625 10.0475 9.40625 10.1097V14.094C9.40625 14.2184 9.45563 14.3376 9.54354 14.4255C9.63145 14.5134 9.75068 14.5628 9.875 14.5628H12.6893C12.9379 14.5628 13.1764 14.464 13.3522 14.2882C13.528 14.1124 13.6268 13.8739 13.6268 13.6253V8.78955C13.6268 8.75785 13.6204 8.72647 13.608 8.69731C13.5955 8.66816 13.5773 8.64183 13.5544 8.61992L8.16289 3.46748Z" fill="#db2777"/>
                        <path d="M14.8821 7.65369L12.6907 5.5572V2.37585C12.6907 2.25153 12.6413 2.13231 12.5534 2.0444C12.4655 1.95649 12.3463 1.9071 12.222 1.9071H10.8157C10.6914 1.9071 10.5722 1.95649 10.4843 2.0444C10.3964 2.13231 10.347 2.25153 10.347 2.37585V3.31335L8.65011 1.69089C8.49132 1.53035 8.25518 1.43835 8.00001 1.43835C7.74571 1.43835 7.51016 1.53035 7.35138 1.69119L1.11993 7.6531C0.937706 7.82888 0.914855 8.11804 1.08068 8.30847C1.12232 8.35654 1.1733 8.39563 1.23053 8.42337C1.28776 8.4511 1.35003 8.4669 1.41356 8.46981C1.47709 8.47271 1.54054 8.46266 1.60006 8.44026C1.65958 8.41787 1.71392 8.38359 1.75978 8.33952L7.83888 2.53054C7.88249 2.48882 7.94053 2.46553 8.00089 2.46553C8.06125 2.46553 8.11928 2.48882 8.1629 2.53054L14.2426 8.33952C14.3321 8.42541 14.4521 8.47228 14.5762 8.46986C14.7002 8.46745 14.8183 8.41594 14.9044 8.32663C15.0843 8.14031 15.0693 7.83269 14.8821 7.65369Z" fill="#db2777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_580_3772">
                            <rect width="15" height="15" fill="white" transform="translate(0.5 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                <x-slot name="smolltitle">
                </x-slot>
                <x-slot name="title">
                   Course material
                </x-slot>
                <x-slot name="icon">
                    <svg viewBox='0 0 100 100' class="w-8 sm:w-10 h-8 sm:h-10 " >
                        <g >
                            <path d="M 63 65 70 65 A 30 30 0 1 0 37 30 20 20 0 1 0 27 65 L 37 65   "></path>
                            <path d="M 50 40 50 98"></path>
                            <path d="M 35 85 50 98 65 85"></path>
                        </g>
                    </svg>
                </x-slot>
            </x-card>
        </div>
        <div class="grid grid-cols-6 grid-rows-1 gap-5 sm:gap-10">
            <div class="col-span-6 xl:col-span-3 flex flex-col justify-between h-full bg-white p-5 sm:p-10">
                <div class="flex justify-between items-center text-sm sm:text-lg mb-5 sm:mb-10 gap-3 sm:gap-5">
                    <div class="flex gap-2 sm:gap-10">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" class="rounded-full" />
                            <h6 class="ml-2  ">Expacted</h6>
                        </label>
                        <label for="remember_mee" class="flex items-center">
                            <x-checkbox id="remember_mee" name="remember" class="rounded-full" />
                            <h6 class="ml-2  ">resoult</h6>
                        </label>
                    </div>
                    <a href="#!" class="">Seminar</a>
                </div>
                <img src="https://us.v-cdn.net/6032257/uploads/jive_attachments/1/6/3/16313954egami.jpeg" alt="chart"  class="object-left object-cover h-full w-full " loading="lazy">
            </div>
            <div class="col-span-6 xl:col-span-3 bg-white font-semibold  overflow-hidden px-5  sm:px-10 py-5">
                    <div class="flex justify-between py-2 sm:py-4 items-center gap-10">
                        <h2 class="text-md sm:text-xl "> Occupied Webinars</h2>
                        <a href="#!" class=" text-xs sm:text-lg ">Today</a>
                    </div>
                    <div class="py-5 seminar-section text-sm overflow-auto sm:text-xl ">
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                        <div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div><div class="flex items-center justify-between border-b-2 border-gray-200 py-4 gap-3 sm:gap-10">
                            <div class="flex items-center gap-2 sm:gap-5">
                                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" alt="img" class="rounded-full w-5 h-5 sm:w-14 sm:h-14 object-cover object-center">
                                <h6 class=" w-36 truncate ">John Karashik</h6>
                            </div>
                            <h6 class="text-gray-400 truncate w-48 text-right ">Occupied till 3PM</h6>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
