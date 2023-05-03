<x-app-layout>
    <div class="p-5 md:p-10 h-full">
        <form class="p-5 md:p-10 bg-white h-full flex flex-col justify-between shadow">
            <div class=" space-y-4 md:space-y-8">
                <div class="flex flex-row md:flex-col justify-between md:justify-start items-center md:items-start gap-2 md:gap-8">
                    <div class="flex flex-col md:flex-row w-full  items-center justify-start gap-2 md:gap-10">
                        <x-lables for="name" class="md:w-56 w-full text-left">First Name</x-lables>
                        <x-input id="name"  placeholder="First Name" class="max-w-2xl"></x-input>
                    </div>
                    <div class="flex flex-col md:flex-row w-full  items-center justify-start gap-2 md:gap-10">
                        <x-lables for="lastname" class="md:w-56 w-full text-left">Last Name</x-lables>
                        <x-input id="lastname" placeholder="Last Name" class="max-w-2xl"></x-input>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row  items-center justify-start gap-2 md:gap-10">
                    <x-lables for="email" class="md:w-56 w-full text-left">Email</x-lables>
                    <x-input id="email" placeholder="demo.devaid@gmail.com" type="email" class="max-w-2xl"></x-input>
                </div>
                <div class="flex flex-col md:flex-row items-center justify-start gap-2 md:gap-10">
                    <x-lables for="Brithday" class="md:w-56 w-full text-left">Brithday</x-lables>
                    <x-input id="Brithday" placeholder="Date" type="date" class="max-w-2xl text-gray-400"></x-input>
                </div>
                <div class="flex flex-col md:flex-row items-center justify-start gap-2 md:gap-10">
                    <x-lables for="Number" class="md:w-56 w-full text-left">Mobile Number</x-lables>
                    <x-input id="Number" placeholder="Mobile Number" type="number" class="max-w-2xl"></x-input>
                </div>
                <div class="flex flex-col md:flex-row items-start justify-start gap-2 md:gap-10">
                    <x-lables for="Address" class="md:w-56 w-full text-left">Address</x-lables>
                    <textarea id="Address" required placeholder="Address" type="text" rows="3" class="max-w-2xl bg-white px-4 p-3 focus-visible:outline-none border-2 border-gray-400 text-sm md:text-lg font-medium w-full focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                </div>

            </div>


            <x-button class="mt-5 w-44 flex justify-center bg-secondary self-end ">
                Save
            </x-button>

        </form>

    </div>
</x-app-layout>
