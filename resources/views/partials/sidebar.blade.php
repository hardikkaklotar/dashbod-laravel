<aside class=" bg-white shadow w-80 flex flex-col  justify-between  2xl:relative fixed sidebar z-40 overflow-y-auto h-screen -left-96 2xl:left-0 py-5 " style="background: #fff">
        <div class="space-y-3 2xl:space-y-10 ">
            <div class="flex items-center 2xl:justify-between 2xl:px-5 pb-3 2xl:pb-5 border-b 2xl:border-none gap-3 2xl:gap-5 ">
                <a href="#!" class=" after:w-0 after:bg-transparent responsive hidden">
                    <img src="https://zeitreicher.de/wp-content/uploads/2021/07/zeitreicher-anbieter-von-alltagshilfen-logo-retina.jpg " class="w-40 2xl:w-64 object-cover cursor-pointer  object-center ">
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" enable-background="new 0 0 40 40" class="w-14 h-14 close cursor-pointer 2xl:hidden">
                    <line x1="15" y1="15" x2="25" y2="25" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
                    <line x1="25" y1="15" x2="15" y2="25" stroke="#000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10"></line>
                </svg>
                <h2 class="text-xl md:text-2xl 2xl:hidden block  font-medium">Menu</h2>
            </div>

            <a href="{{ route('home') }}" :active=" request()->routeIs('home')" class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary duration-300 transition-all test " >
                <svg class="w-8 h-8 responsive hidden 2xl:block" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_580_3772)">
                        <path d="M8.16289 3.46748C8.11927 3.42575 8.06124 3.40247 8.00088 3.40247C7.94052 3.40247 7.88248 3.42575 7.83887 3.46748L2.44531 8.61992C2.42241 8.64183 2.40418 8.66816 2.39175 8.69731C2.37931 8.72647 2.37291 8.75785 2.37295 8.78955L2.37207 13.6253C2.37207 13.8739 2.47084 14.1124 2.64666 14.2882C2.82247 14.464 3.06093 14.5628 3.30957 14.5628H6.125C6.24932 14.5628 6.36855 14.5134 6.45645 14.4255C6.54436 14.3376 6.59375 14.2184 6.59375 14.094V10.1097C6.59375 10.0475 6.61844 9.98789 6.6624 9.94393C6.70635 9.89998 6.76596 9.87529 6.82812 9.87529H9.17187C9.23403 9.87529 9.29365 9.89998 9.3376 9.94393C9.38156 9.98789 9.40625 10.0475 9.40625 10.1097V14.094C9.40625 14.2184 9.45563 14.3376 9.54354 14.4255C9.63145 14.5134 9.75068 14.5628 9.875 14.5628H12.6893C12.9379 14.5628 13.1764 14.464 13.3522 14.2882C13.528 14.1124 13.6268 13.8739 13.6268 13.6253V8.78955C13.6268 8.75785 13.6204 8.72647 13.608 8.69731C13.5955 8.66816 13.5773 8.64183 13.5544 8.61992L8.16289 3.46748Z" fill="#718096"/>
                        <path d="M14.8821 7.65369L12.6907 5.5572V2.37585C12.6907 2.25153 12.6413 2.13231 12.5534 2.0444C12.4655 1.95649 12.3463 1.9071 12.222 1.9071H10.8157C10.6914 1.9071 10.5722 1.95649 10.4843 2.0444C10.3964 2.13231 10.347 2.25153 10.347 2.37585V3.31335L8.65011 1.69089C8.49132 1.53035 8.25518 1.43835 8.00001 1.43835C7.74571 1.43835 7.51016 1.53035 7.35138 1.69119L1.11993 7.6531C0.937706 7.82888 0.914855 8.11804 1.08068 8.30847C1.12232 8.35654 1.1733 8.39563 1.23053 8.42337C1.28776 8.4511 1.35003 8.4669 1.41356 8.46981C1.47709 8.47271 1.54054 8.46266 1.60006 8.44026C1.65958 8.41787 1.71392 8.38359 1.75978 8.33952L7.83888 2.53054C7.88249 2.48882 7.94053 2.46553 8.00089 2.46553C8.06125 2.46553 8.11928 2.48882 8.1629 2.53054L14.2426 8.33952C14.3321 8.42541 14.4521 8.47228 14.5762 8.46986C14.7002 8.46745 14.8183 8.41594 14.9044 8.32663C15.0843 8.14031 15.0693 7.83269 14.8821 7.65369Z" fill="#718096"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_580_3772">
                            <rect width="15" height="15" fill="white" transform="translate(0.5 0.5)"/>
                        </clipPath>
                    </defs>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Dashbord</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('super-admin.seminars') }}"class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg class="w-8 h-8 responsive hidden 2xl:block" viewBox="0 0 24 24">
                    <path d="M4 16h16V5H4v11zm9 2v2h4v2H7v-2h4v-2H2.992A.998.998 0 0 1 2 16.993V4.007C2 3.451 2.455 3 2.992 3h18.016c.548 0 .992.449.992 1.007v12.986c0 .556-.455 1.007-.992 1.007H13z" fill="#718096"></path>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Seminars</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('super-admin.classes') }}"class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" fill="none" class="w-8 h-8 responsive hidden 2xl:block">
                    <path d="M1.43756 11.5152C1.43756 11.9503 1.61041 12.3676 1.91809 12.6753C2.22577 12.983 2.64306 13.1558 3.07819 13.1558H12.9219C13.3571 13.1558 13.7744 12.983 14.082 12.6753C14.3897 12.3676 14.5626 11.9503 14.5626 11.5152V7.00348H1.43756V11.5152ZM3.37115 9.28863C3.37115 9.05553 3.46375 8.83198 3.62858 8.66715C3.79341 8.50233 4.01696 8.40973 4.25006 8.40973H5.65631C5.88941 8.40973 6.11296 8.50233 6.27779 8.66715C6.44262 8.83198 6.53522 9.05553 6.53522 9.28863V9.87457C6.53522 10.1077 6.44262 10.3312 6.27779 10.4961C6.11296 10.6609 5.88941 10.7535 5.65631 10.7535H4.25006C4.01696 10.7535 3.79341 10.6609 3.62858 10.4961C3.46375 10.3312 3.37115 10.1077 3.37115 9.87457V9.28863Z" fill="#718096"/>
                    <path d="M12.9219 2.84296H3.07819C2.64306 2.84296 2.22577 3.01581 1.91809 3.32348C1.61041 3.63116 1.43756 4.04846 1.43756 4.48358V5.2453H14.5626V4.48358C14.5626 4.04846 14.3897 3.63116 14.082 3.32348C13.7744 3.01581 13.3571 2.84296 12.9219 2.84296V2.84296Z" fill="#718096"/>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Classes</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('super-admin.service') }}"class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg class="w-8 h-8 responsive hidden 2xl:block" viewBox="0 0 24 24">
                    <path d="M5 11h14V5H5v6zm16-7v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1zm-2 9H5v6h14v-6zM7 15h3v2H7v-2zm0-8h3v2H7V7z" fill="#718096"></path>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium"> Service Compaines</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('super-admin.teachar') }}"class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg class="w-8 h-8 responsive hidden 2xl:block" viewBox="0 0 24 24" >
                    <path fill="#718096"  d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8zm0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm9 6h1v5h-8v-5h1v-1a3 3 0 0 1 6 0v1zm-2 0v-1a1 1 0 0 0-2 0v1h2z"></path>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Teachar</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('super-admin.reporting') }}"class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg class="w-8 h-8 responsive hidden 2xl:block"  viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.0391 7.06256H8.9375C8.56454 7.06256 8.20685 6.9144 7.94313 6.65068C7.67941 6.38696 7.53125 6.02927 7.53125 5.65631V1.55475C7.53125 1.52367 7.5189 1.49386 7.49693 1.47188C7.47495 1.44991 7.44514 1.43756 7.41406 1.43756H4.71875C4.22147 1.43756 3.74456 1.63511 3.39292 1.98674C3.04129 2.33837 2.84375 2.81528 2.84375 3.31256V12.6876C2.84375 13.1848 3.04129 13.6618 3.39292 14.0134C3.74456 14.365 4.22147 14.5626 4.71875 14.5626H11.2812C11.7785 14.5626 12.2554 14.365 12.6071 14.0134C12.9587 13.6618 13.1562 13.1848 13.1562 12.6876V7.17975C13.1562 7.14867 13.1439 7.11886 13.1219 7.09688C13.0999 7.07491 13.0701 7.06256 13.0391 7.06256Z" fill="#718096"/>
                    <path d="M12.7818 6.02591L8.56865 1.81272C8.56046 1.80458 8.55004 1.79904 8.53871 1.7968C8.52737 1.79456 8.51563 1.79572 8.50495 1.80013C8.49428 1.80455 8.48514 1.81202 8.4787 1.82161C8.47226 1.8312 8.4688 1.84248 8.46875 1.85403V5.65706C8.46875 5.78138 8.51814 5.90061 8.60604 5.98852C8.69395 6.07642 8.81318 6.12581 8.9375 6.12581H12.7405C12.7521 6.12576 12.7634 6.1223 12.773 6.11586C12.7825 6.10942 12.79 6.10028 12.7944 6.08961C12.7988 6.07893 12.8 6.06719 12.7978 6.05585C12.7955 6.04452 12.79 6.0341 12.7818 6.02591Z" fill="#718096"/>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Reporting</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('partials.profile') }}"class="flex px-5 justify-between md:hidden 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 16 16" fill="none" class="w-8 h-8 responsive hidden 2xl:block">
                    <path d="M1.43756 11.5152C1.43756 11.9503 1.61041 12.3676 1.91809 12.6753C2.22577 12.983 2.64306 13.1558 3.07819 13.1558H12.9219C13.3571 13.1558 13.7744 12.983 14.082 12.6753C14.3897 12.3676 14.5626 11.9503 14.5626 11.5152V7.00348H1.43756V11.5152ZM3.37115 9.28863C3.37115 9.05553 3.46375 8.83198 3.62858 8.66715C3.79341 8.50233 4.01696 8.40973 4.25006 8.40973H5.65631C5.88941 8.40973 6.11296 8.50233 6.27779 8.66715C6.44262 8.83198 6.53522 9.05553 6.53522 9.28863V9.87457C6.53522 10.1077 6.44262 10.3312 6.27779 10.4961C6.11296 10.6609 5.88941 10.7535 5.65631 10.7535H4.25006C4.01696 10.7535 3.79341 10.6609 3.62858 10.4961C3.46375 10.3312 3.37115 10.1077 3.37115 9.87457V9.28863Z" fill="#718096"/>
                    <path d="M12.9219 2.84296H3.07819C2.64306 2.84296 2.22577 3.01581 1.91809 3.32348C1.61041 3.63116 1.43756 4.04846 1.43756 4.48358V5.2453H14.5626V4.48358C14.5626 4.04846 14.3897 3.63116 14.082 3.32348C13.7744 3.01581 13.3571 2.84296 12.9219 2.84296V2.84296Z" fill="#718096"/>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Profile</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="#!"class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 block 2xl:hidden items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg class="w-8 h-8 responsive hidden 2xl:block" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_580_3707)">
                        <path d="M6.00003 4.12512C5.62919 4.12512 5.26668 4.23509 4.95834 4.44112C4.65 4.64714 4.40967 4.93998 4.26776 5.28259C4.12584 5.6252 4.08871 6.0022 4.16106 6.36591C4.23341 6.72963 4.41198 7.06372 4.67421 7.32595C4.93643 7.58817 5.27052 7.76675 5.63424 7.83909C5.99795 7.91144 6.37495 7.87431 6.71756 7.73239C7.06017 7.59048 7.35301 7.35016 7.55904 7.04181C7.76506 6.73347 7.87503 6.37096 7.87503 6.00012C7.87355 5.5033 7.67553 5.02724 7.32422 4.67593C6.97291 4.32463 6.49686 4.1266 6.00003 4.12512ZM10.0482 6.00012C10.0472 6.17532 10.0343 6.35025 10.0097 6.52371L11.1509 7.41715C11.2006 7.45819 11.2341 7.51557 11.2454 7.57903C11.2567 7.64248 11.245 7.70789 11.2125 7.76356L10.133 9.62731C10.1002 9.68248 10.049 9.72431 9.98834 9.74545C9.92773 9.76658 9.8616 9.76566 9.80159 9.74285L8.4598 9.20379C8.18039 9.41894 7.87463 9.5975 7.54995 9.73512L7.34933 11.1596C7.3381 11.2235 7.30506 11.2814 7.25586 11.3235C7.20665 11.3657 7.14434 11.3894 7.07956 11.3907H4.9205C4.8569 11.3895 4.7956 11.3667 4.74661 11.3262C4.69761 11.2856 4.66382 11.2296 4.65073 11.1674L4.45011 9.74285C4.12453 9.60683 3.81855 9.42799 3.54027 9.21106L2.19847 9.75012C2.13849 9.77295 2.07238 9.7739 2.01177 9.75281C1.95115 9.73172 1.89992 9.68994 1.86706 9.63481L0.787533 7.77129C0.755039 7.71563 0.743398 7.65022 0.75469 7.58676C0.765982 7.5233 0.799472 7.46593 0.849174 7.42489L1.99035 6.53145C1.966 6.35536 1.95317 6.17788 1.95191 6.00012C1.95288 5.82492 1.96572 5.64999 1.99035 5.47653L0.849174 4.58309C0.799472 4.54205 0.765982 4.48467 0.75469 4.42121C0.743398 4.35776 0.755039 4.29235 0.787533 4.23668L1.86706 2.37293C1.89988 2.31776 1.9511 2.27593 2.01172 2.25479C2.07234 2.23366 2.13846 2.23458 2.19847 2.25739L3.54027 2.79645C3.81967 2.5813 4.12543 2.40274 4.45011 2.26512L4.65073 0.840591C4.66196 0.776782 4.695 0.718853 4.74421 0.676703C4.79341 0.634553 4.85572 0.610798 4.9205 0.609497H7.07956C7.14316 0.610735 7.20446 0.633495 7.25345 0.674062C7.30245 0.714629 7.33625 0.770606 7.34933 0.832856L7.54995 2.25739C7.87594 2.39332 8.18232 2.57216 8.46097 2.78918L9.80159 2.25012C9.86157 2.22729 9.92768 2.22634 9.98829 2.24743C10.0489 2.26852 10.1001 2.3103 10.133 2.36543L11.2125 4.22918C11.245 4.28485 11.2567 4.35026 11.2454 4.41372C11.2341 4.47717 11.2006 4.53455 11.1509 4.57559L10.0097 5.46903C10.034 5.64504 10.0469 5.82244 10.0482 6.00012Z" fill="#718096"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_580_3707">
                            <rect width="12" height="12" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Settings</h6>
                <svg class="w-8 h-8 block 2xl:hidden" viewBox="0 0 36 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 21H28.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M18 10.5L28.5 21L18 31.5" stroke="#0A2640" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
        <div class="space-y-5 md:space-y-10 py-5 md:py-10 responsive hidden">
            <a href="#!"class="flex px-5 justify-between 2xl:justify-start 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                <svg class="w-8 h-8 responsive hidden 2xl:block" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_580_3707)">
                        <path d="M6.00003 4.12512C5.62919 4.12512 5.26668 4.23509 4.95834 4.44112C4.65 4.64714 4.40967 4.93998 4.26776 5.28259C4.12584 5.6252 4.08871 6.0022 4.16106 6.36591C4.23341 6.72963 4.41198 7.06372 4.67421 7.32595C4.93643 7.58817 5.27052 7.76675 5.63424 7.83909C5.99795 7.91144 6.37495 7.87431 6.71756 7.73239C7.06017 7.59048 7.35301 7.35016 7.55904 7.04181C7.76506 6.73347 7.87503 6.37096 7.87503 6.00012C7.87355 5.5033 7.67553 5.02724 7.32422 4.67593C6.97291 4.32463 6.49686 4.1266 6.00003 4.12512ZM10.0482 6.00012C10.0472 6.17532 10.0343 6.35025 10.0097 6.52371L11.1509 7.41715C11.2006 7.45819 11.2341 7.51557 11.2454 7.57903C11.2567 7.64248 11.245 7.70789 11.2125 7.76356L10.133 9.62731C10.1002 9.68248 10.049 9.72431 9.98834 9.74545C9.92773 9.76658 9.8616 9.76566 9.80159 9.74285L8.4598 9.20379C8.18039 9.41894 7.87463 9.5975 7.54995 9.73512L7.34933 11.1596C7.3381 11.2235 7.30506 11.2814 7.25586 11.3235C7.20665 11.3657 7.14434 11.3894 7.07956 11.3907H4.9205C4.8569 11.3895 4.7956 11.3667 4.74661 11.3262C4.69761 11.2856 4.66382 11.2296 4.65073 11.1674L4.45011 9.74285C4.12453 9.60683 3.81855 9.42799 3.54027 9.21106L2.19847 9.75012C2.13849 9.77295 2.07238 9.7739 2.01177 9.75281C1.95115 9.73172 1.89992 9.68994 1.86706 9.63481L0.787533 7.77129C0.755039 7.71563 0.743398 7.65022 0.75469 7.58676C0.765982 7.5233 0.799472 7.46593 0.849174 7.42489L1.99035 6.53145C1.966 6.35536 1.95317 6.17788 1.95191 6.00012C1.95288 5.82492 1.96572 5.64999 1.99035 5.47653L0.849174 4.58309C0.799472 4.54205 0.765982 4.48467 0.75469 4.42121C0.743398 4.35776 0.755039 4.29235 0.787533 4.23668L1.86706 2.37293C1.89988 2.31776 1.9511 2.27593 2.01172 2.25479C2.07234 2.23366 2.13846 2.23458 2.19847 2.25739L3.54027 2.79645C3.81967 2.5813 4.12543 2.40274 4.45011 2.26512L4.65073 0.840591C4.66196 0.776782 4.695 0.718853 4.74421 0.676703C4.79341 0.634553 4.85572 0.610798 4.9205 0.609497H7.07956C7.14316 0.610735 7.20446 0.633495 7.25345 0.674062C7.30245 0.714629 7.33625 0.770606 7.34933 0.832856L7.54995 2.25739C7.87594 2.39332 8.18232 2.57216 8.46097 2.78918L9.80159 2.25012C9.86157 2.22729 9.92768 2.22634 9.98829 2.24743C10.0489 2.26852 10.1001 2.3103 10.133 2.36543L11.2125 4.22918C11.245 4.28485 11.2567 4.35026 11.2454 4.41372C11.2341 4.47717 11.2006 4.53455 11.1509 4.57559L10.0097 5.46903C10.034 5.64504 10.0469 5.82244 10.0482 6.00012Z" fill="#718096"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_580_3707">
                            <rect width="12" height="12" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <h6 class=" text-lg md:text-xl font-medium">Settings</h6>
            </a>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="flex px-5 2xl:px-10 items-center border-b 2xl:border-transparent pb-4 2xl:pb-0 gap-8  hover:text-primary  duration-300 transition-all">
                    <svg class="w-8 h-8 responsive hidden 2xl:block" viewBox="0 0 24 24">
                        <path fill="#718096" d="M5 22a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3h-2V4H6v16h12v-2h2v3a1 1 0 0 1-1 1H5zm13-6v-3h-7v-2h7V8l5 4-5 4z"></path>
                    </svg>
                    <h6 class=" text-lg md:text-xl font-medium">Logout</h6>
                </a>
            </form>
        </div>
    <form method="POST" action="{{ route('logout') }}" x-data class="2xl:hidden">
        @csrf
        <a href="{{ route('logout') }}" @click.prevent="$root.submit();">
            <x-button class=" bg-secondary flex w-full font-semibold justify-center py-4">
                Logout
            </x-button>
        </a>
    </form>

</aside>
