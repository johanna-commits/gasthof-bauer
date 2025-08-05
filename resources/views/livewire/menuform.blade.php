<div>
    <h2 class="text-center text-3xl m-4 mt-8">Mittagsmenüs ändern</h2>
    <form wire:submit.prevent="saveMenus">
        <div class="flex flex-col lg:flex-row justify-center items-center p-8">
            <div class="p-8 space-x-2 mb-8 w-full flex-grow justify-self-center lg:border-r lg:border-black">
                {{-- Menü 1 --}}
                <h3 class="text-xl font-bold mt-8 text-center mb-4">Mittagsmenü 1</h3>

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu1_date">Menü 1 Datum</x-form-label>
                    <input type="date" id="menu1_date"
                        class="block border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:ring-2 focus:ring-primary-500 focus:ring-opacity-50 sm:text-sm sm:leading-6 transition-all duration-300"
                        name="menu1_date" wire:model="menu1_date" min="{{ now()->toDateString() }}">
                </div>
                <x-form-error name="menu1_date" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu1_soup">Menü 1 Suppe</x-form-label>
                    <x-form-input wire:model="menu1_soup" name="menu1_soup" id="menu1_soup" placeholder="Menü 1 Suppe"
                        :value="old('menu1_soup')" />
                </div>
                <x-form-error name="menu1_soup" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu1_main">Menü 1 Hauptspeise</x-form-label>
                    <x-form-input wire:model="menu1_main" name="menu1_main" id="menu1_main"
                        placeholder="Menü 1 Hauptspeise" :value="old('menu1_main')" />
                </div>
                <x-form-error name="menu1_main" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu1_dessert">Menü 1 Nachspeise</x-form-label>
                    <x-form-input wire:model="menu1_dessert" name="menu1_dessert" id="menu1_dessert"
                        placeholder="Menü 1 Nachspeise" :value="old('menu1_dessert')" />
                </div>
                <x-form-error name="menu1_dessert" />
            </div>

            {{-- Menü 2 --}}

            <div class="p-8 space-x-2 mb-8 w-full justify-self-center flex-grow  lg:border-r lg:border-black">
                <h3 class="text-xl font-bold mt-8 text-center mb-4">Mittagsmenü 2</h3>

                <div class="flex items-start flex-col justify-between mt-2 mb-6 w-full">
                    <x-form-label for="menu2_date">Menü 2 Datum</x-form-label>
                    <input type="date" id="menu2_date"
                        class="block border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:ring-2 focus:ring-primary-500 focus:ring-opacity-50 sm:text-sm sm:leading-6 transition-all duration-300"
                        name="menu2_date" wire:model="menu2_date" min="{{ now()->toDateString() }}">
                </div>
                <x-form-error name="menu2_date" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu2_soup">Menü 2 Suppe</x-form-label>
                    <x-form-input wire:model="menu2_soup" name="menu2_soup" id="menu2_soup" placeholder="Menü 2 Suppe"
                        :value="old('menu2_soup')" />
                </div>
                <x-form-error name="menu2_soup" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu2_main">Menü 2 Hauptspeise</x-form-label>
                    <x-form-input wire:model="menu2_main" name="menu2_main" id="menu2_main"
                        placeholder="Menü 2 Hauptspeise" :value="old('menu2_main')" />
                </div>
                <x-form-error name="menu2_main" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu2_dessert">Menü 2 Nachspeise</x-form-label>
                    <x-form-input wire:model="menu2_dessert" name="menu2_dessert" id="menu2_dessert"
                        placeholder="Menü 2 Nachspeise" :value="old('menu2_dessert')" />
                </div>
                <x-form-error name="menu2_dessert" />
            </div>

            <div class="p-8 w-full space-x-2 mb-8 flex-grow  justify-self-center">
                <h3 class="text-xl font-bold mt-8 text-center mb-4">Mittagsmenü 3</h3>

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu3_date">Menü 3 Datum</x-form-label>
                    <input type="date" id="menu3_date"
                        class="block border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:ring-2 focus:ring-primary-500 focus:ring-opacity-50 sm:text-sm sm:leading-6 transition-all duration-300"
                        name="menu3_date" wire:model="menu3_date" min="{{ now()->toDateString() }}">
                </div>
                <x-form-error name="menu3_date" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu3_soup">Menü 3 Suppe</x-form-label>
                    <x-form-input wire:model="menu3_soup" name="menu3_soup" id="menu3_soup" placeholder="Menü 3 Suppe"
                        :value="old('menu3_soup')" />
                </div>
                <x-form-error name="menu3_soup" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu3_main">Menü 3 Hauptspeise</x-form-label>
                    <x-form-input wire:model="menu3_main" name="menu3_main" id="menu3_main"
                        placeholder="Menü 3 Hauptspeise" :value="old('menu3_main')" />
                </div>
                <x-form-error name="menu3_main" />

                <div class="flex items-start flex-col justify-between mt-2 mb-6">
                    <x-form-label for="menu3_dessert">Menü 3 Nachspeise</x-form-label>
                    <x-form-input wire:model="menu3_dessert" name="menu3_dessert" id="menu3_dessert"
                        placeholder="Menü 3 Nachspeise" :value="old('menu3_dessert')" />
                </div>
                <x-form-error name="menu3_dessert" />
            </div>
        </div>
        <div class="flex items-start flex-col w-full lg:w-1/2 mx-auto justify-between mt-2 mb-6">
            <x-form-label for="menu_price">Menüpreis</x-form-label>
            <textarea id="menu_price" name="menu_price" rows="4" wire:model="menu_price" :value="old('menu_price')"
                class="block w-full border border-slate-300 bg-transparent py-2 px-2 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary hover:border-primary active:ring-primary transition-colors duration-200 sm:text-sm sm:leading-6"></textarea>
        </div>
        <x-form-error name="menu_price" />
        <div class="flex justify-center space-x-8">
            <div class="flex justify-center">
                <x-form-button class="bg-primary p-2 px-6" type="submit">Menüs Speichern</x-form-button>
            </div>
        </div>
    </form>
    @if(session() ->has('message'))
    <div class="bg-success-green p-2 mt-4">
        {{ session('message') }}
    </div>
    @endif
</div>
