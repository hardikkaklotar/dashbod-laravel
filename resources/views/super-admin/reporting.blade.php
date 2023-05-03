<x-app-layout>
    <div class="p-5 md:p-10 h-full">
        <form class="p-5 md:p-10 bg-white h-full flex flex-col justify-between  shadow">
            <div class=" space-y-4 md:space-y-8">
                <div class="flex flex-col md:flex-row  items-center justify-start gap-2 md:gap-10">
                    <x-lables class="md:w-56 w-full text-left">Fedrel State</x-lables>
                    <x-input placeholder="Fedrel State" class="max-w-2xl"></x-input>
                </div>
                <div class="flex flex-col md:flex-row  items-center justify-start gap-2 md:gap-10">
                    <x-lables class="md:w-56 w-full text-left">Year</x-lables>
                    <div class="max-w-2xl w-full">
                        <x-select>
                            <option value="select">Select</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </x-select>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row  items-center justify-start gap-2 md:gap-10">
                    <x-lables class="md:w-56 w-full text-left">Services Company</x-lables>

                    <x-input placeholder="Name" class="max-w-2xl"></x-input>
                </div>

                <div class="flex flex-col md:flex-row  items-center justify-start gap-2 md:gap-10">
                    <x-lables class="md:w-56 w-full text-left">Category </x-lables>
                    <div class="max-w-2xl w-full">
                        <x-select>
                            <option value="select">Select</option>
                            <option value="2019">ABC</option>
                            <option value="2020">OBC</option>
                            <option value="2021">SCST</option>
                        </x-select>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center justify-start gap-2 md:gap-10">
                    <x-lables class="md:w-56 w-full text-left">Expire Date</x-lables>
                    <x-input placeholder="Select" type="date" class="max-w-2xl"></x-input>
                </div>
            </div>


          <x-button class="mt-5 w-40 flex justify-center self-end ">
              Report
          </x-button>

        </form>

    </div>
</x-app-layout>
